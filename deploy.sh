#!/usr/bin/env bash
# SpinupWP push-to-deploy hook for voyager-demo theme.
#
# Runs on every git pull triggered by SpinupWP. Idempotent.
# - First run: downloads + installs the Voyager plugin stack from GitHub releases
# - Every run: activates all required plugins and the voyager-demo theme
#
# SpinupWP runs this script as the site user, in the deploy_path directory,
# with $HOME set to the site user's home. wp-cli is on PATH.

set -euo pipefail

WP_PATH="$HOME/files"
THEME_DIR="$(cd "$(dirname "$0")" && pwd)"
PLUGINS_DIR="$WP_PATH/wp-content/plugins"
MARKER_FILE="$THEME_DIR/.voyager-stack-installed"

log() { printf '[deploy.sh] %s\n' "$*"; }

# ---------------------------------------------------------------------------
# Phase 1: install plugin stack (first run only)
# ---------------------------------------------------------------------------
if [ ! -f "$MARKER_FILE" ]; then
    log "First-run plugin install starting..."

    TMPDIR="$(mktemp -d)"
    trap 'rm -rf "$TMPDIR"' EXIT
    cd "$TMPDIR"

    # Helper: download a GitHub release zip by latest-release pattern matching.
    fetch_release_zip() {
        local repo="$1" pattern="$2" out="$3"
        log "  fetching $repo ($pattern) -> $out"
        local url
        url=$(curl -sSL "https://api.github.com/repos/$repo/releases/latest" \
              | python3 -c "
import json, sys, re
data = json.load(sys.stdin)
pat = re.compile(sys.argv[1])
for asset in data.get('assets', []):
    if pat.search(asset['name']):
        print(asset['browser_download_url'])
        sys.exit(0)
sys.exit(1)
" "$pattern")
        if [ -z "$url" ]; then
            log "  ERROR: no asset matching '$pattern' in latest release of $repo"
            return 1
        fi
        curl -sSL -o "$out" "$url"
    }

    fetch_release_zip "voyager-marketing/voyager-orbit" '\.zip$' voyager-orbit.zip
    fetch_release_zip "voyager-marketing/voyager-core" '\.zip$' voyager-core.zip
    fetch_release_zip "WordPress/abilities-api" '\.zip$' abilities-api.zip
    fetch_release_zip "WordPress/mcp-adapter" '\.zip$' mcp-adapter.zip
    fetch_release_zip "Automattic/wordpress-mcp" '\.zip$' wordpress-mcp.zip

    # voyager-blocks: release zip is broken (missing src/), use source tarball.
    log "  fetching voyager-blocks source tarball"
    curl -sSL -o voyager-blocks.tar.gz \
        "https://api.github.com/repos/voyager-marketing/voyager-blocks/tarball/main"

    log "Installing plugins via wp-cli..."

    # Order: framework plugins first, blocks/core, then orbit (orbit triggers Portal registration).
    wp --path="$WP_PATH" plugin install voyager-core.zip --activate --force
    wp --path="$WP_PATH" plugin install abilities-api.zip --activate --force
    wp --path="$WP_PATH" plugin install mcp-adapter.zip --activate --force
    wp --path="$WP_PATH" plugin install wordpress-mcp.zip --activate --force

    # voyager-blocks via tarball — extract, move into plugins dir, activate
    mkdir -p vblocks-extract && tar -xzf voyager-blocks.tar.gz -C vblocks-extract
    EXTRACTED_DIR=$(ls -d vblocks-extract/*/ | head -1)
    rm -rf "$PLUGINS_DIR/voyager-blocks"
    mv "$EXTRACTED_DIR" "$PLUGINS_DIR/voyager-blocks"
    wp --path="$WP_PATH" plugin activate voyager-blocks

    wp --path="$WP_PATH" plugin install seo-by-rank-math --activate

    # Orbit LAST — its activation triggers Portal registration.
    wp --path="$WP_PATH" plugin install voyager-orbit.zip --activate --force

    touch "$MARKER_FILE"
    log "First-run plugin install complete."
fi

# ---------------------------------------------------------------------------
# Phase 2: activate plugins + theme (every run, idempotent)
# ---------------------------------------------------------------------------
log "Activating plugin stack + theme (idempotent)..."

# Plugin activation: tolerate 'already active' as success.
for plugin in voyager-core voyager-blocks voyager-orbit abilities-api mcp-adapter wordpress-mcp seo-by-rank-math; do
    if wp --path="$WP_PATH" plugin is-installed "$plugin" >/dev/null 2>&1; then
        wp --path="$WP_PATH" plugin activate "$plugin" 2>/dev/null || true
    else
        log "  warn: $plugin not installed — first-run install may have failed; check above"
    fi
done

# Theme: voyager-block-theme (parent) ships in the parent-theme repo, not here.
# If parent isn't present yet, install it from the source tarball before activating child.
if ! wp --path="$WP_PATH" theme is-installed voyager-block-theme >/dev/null 2>&1; then
    log "  parent theme voyager-block-theme not present — installing from tarball"
    PARENT_TMP="$(mktemp -d)"
    curl -sSL -o "$PARENT_TMP/parent.tar.gz" \
        "https://api.github.com/repos/voyager-marketing/voyager-block-theme/tarball/main"
    tar -xzf "$PARENT_TMP/parent.tar.gz" -C "$PARENT_TMP"
    PARENT_DIR=$(ls -d "$PARENT_TMP"/voyager-marketing-voyager-block-theme-*/ | head -1)
    THEMES_DIR="$WP_PATH/wp-content/themes"
    rm -rf "$THEMES_DIR/voyager-block-theme"
    mv "$PARENT_DIR" "$THEMES_DIR/voyager-block-theme"
    rm -rf "$PARENT_TMP"
fi

wp --path="$WP_PATH" theme activate voyager-demo

log "Deploy complete:"
wp --path="$WP_PATH" theme list --status=active --format=csv | tail -n +2
wp --path="$WP_PATH" plugin list --status=active --format=csv | tail -n +2 | wc -l | xargs -I{} log "  active plugins: {}"
