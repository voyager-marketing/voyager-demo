#!/usr/bin/env bash
# SpinupWP push-to-deploy hook for voyager-demo theme.
#
# SpinupWP clones the repo directly into the WP root (/sites/<domain>/files/),
# overlaying repo files onto WP core. Theme files therefore land at the WP
# root, not in wp-content/themes/voyager-demo/ where WordPress expects them.
# This script syncs them to the canonical theme directory, then installs the
# Voyager plugin stack and parent theme on first run, and activates everything.
#
# Idempotent — runs on every git pull.

set -euo pipefail

WP_PATH="$(pwd)"
THEME_DEST="$WP_PATH/wp-content/themes/voyager-demo"
PARENT_THEME="$WP_PATH/wp-content/themes/voyager-block-theme"
PLUGINS_DIR="$WP_PATH/wp-content/plugins"
MARKER_FILE="$THEME_DEST/.voyager-stack-installed"
TMP="$(mktemp -d)"
trap 'rm -rf "$TMP"' EXIT

log() { printf '[deploy.sh] %s\n' "$*"; }

# ---------------------------------------------------------------------------
# 1. Sync theme files from WP root (where SpinupWP put them) to canonical path
# ---------------------------------------------------------------------------
log "Syncing theme files -> $THEME_DEST"
mkdir -p "$THEME_DEST"
for item in style.css theme.json functions.php patterns templates parts assets CLAUDE.md ROADMAP.md; do
    if [ -e "$WP_PATH/$item" ]; then
        rm -rf "$THEME_DEST/$item"
        cp -r "$WP_PATH/$item" "$THEME_DEST/"
    fi
done

# ---------------------------------------------------------------------------
# 2. First-run plugin stack install (skip if already installed)
# ---------------------------------------------------------------------------
fetch_release_zip() {
    local repo="$1" pattern="$2" out="$3"
    log "  fetching $repo"
    local url
    url=$(curl -sSL "https://api.github.com/repos/$repo/releases/latest" \
          | python3 -c "
import json, sys, re
d = json.load(sys.stdin)
p = re.compile(sys.argv[1])
for a in d.get('assets', []):
    if p.search(a['name']): print(a['browser_download_url']); sys.exit(0)
sys.exit(1)
" "$pattern") || return 1
    [ -z "$url" ] && return 1
    curl -sSL -o "$TMP/$out" "$url"
}

if [ ! -f "$MARKER_FILE" ]; then
    log "First-run plugin install starting"

    fetch_release_zip "voyager-marketing/voyager-orbit"  '\.zip$' voyager-orbit.zip  || true
    fetch_release_zip "voyager-marketing/voyager-core"   '\.zip$' voyager-core.zip   || true
    fetch_release_zip "WordPress/abilities-api"          '\.zip$' abilities-api.zip  || true
    fetch_release_zip "WordPress/mcp-adapter"            '\.zip$' mcp-adapter.zip    || true
    fetch_release_zip "Automattic/wordpress-mcp"         '\.zip$' wordpress-mcp.zip  || true

    log "  fetching voyager-blocks (source tarball)"
    curl -sSL -o "$TMP/voyager-blocks.tar.gz" \
        "https://api.github.com/repos/voyager-marketing/voyager-blocks/tarball/main" || true

    log "Installing plugins via wp-cli"
    for z in voyager-core abilities-api mcp-adapter wordpress-mcp; do
        [ -f "$TMP/$z.zip" ] && wp --path="$WP_PATH" plugin install "$TMP/$z.zip" --activate --force 2>&1 | sed 's/^/  /' || true
    done

    if [ -f "$TMP/voyager-blocks.tar.gz" ]; then
        log "  installing voyager-blocks from tarball"
        mkdir -p "$TMP/vb"
        tar -xzf "$TMP/voyager-blocks.tar.gz" -C "$TMP/vb"
        EX=$(ls -d "$TMP"/vb/*/ | head -1)
        rm -rf "$PLUGINS_DIR/voyager-blocks"
        mv "$EX" "$PLUGINS_DIR/voyager-blocks"
        wp --path="$WP_PATH" plugin activate voyager-blocks 2>&1 | sed 's/^/  /' || true
    fi

    wp --path="$WP_PATH" plugin install seo-by-rank-math --activate 2>&1 | sed 's/^/  /' || true

    # Orbit LAST — its activation triggers Portal registration
    [ -f "$TMP/voyager-orbit.zip" ] && wp --path="$WP_PATH" plugin install "$TMP/voyager-orbit.zip" --activate --force 2>&1 | sed 's/^/  /' || true

    touch "$MARKER_FILE"
    log "First-run plugin install complete"
fi

# ---------------------------------------------------------------------------
# 3. Parent theme install (first run only)
# ---------------------------------------------------------------------------
if [ ! -d "$PARENT_THEME" ]; then
    log "Installing parent theme voyager-block-theme"
    curl -sSL -o "$TMP/parent.tar.gz" \
        "https://api.github.com/repos/voyager-marketing/voyager-block-theme/tarball/main"
    mkdir -p "$TMP/vt"
    tar -xzf "$TMP/parent.tar.gz" -C "$TMP/vt"
    EX=$(ls -d "$TMP"/vt/*/ | head -1)
    mv "$EX" "$PARENT_THEME"
fi

# ---------------------------------------------------------------------------
# 4. Activate plugins + theme (idempotent every run)
# ---------------------------------------------------------------------------
log "Activating stack (idempotent)"
for plugin in voyager-core voyager-blocks voyager-orbit abilities-api mcp-adapter wordpress-mcp seo-by-rank-math; do
    if wp --path="$WP_PATH" plugin is-installed "$plugin" 2>/dev/null; then
        wp --path="$WP_PATH" plugin activate "$plugin" 2>/dev/null || true
    fi
done

wp --path="$WP_PATH" theme activate voyager-demo 2>&1 | sed 's/^/  /'

log "Active theme: $(wp --path="$WP_PATH" theme list --status=active --field=name --format=csv | tail -1)"
log "Active plugins: $(wp --path="$WP_PATH" plugin list --status=active --format=count)"
log "Deploy complete."
