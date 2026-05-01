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

# Auth header for private voyager-marketing repos. Reads token from
# ~/.github-token if present (mode 600, gitignored). For public repos no
# token is needed.
GH_TOKEN_FILE="$HOME/.github-token"
GH_HEADER=()
if [ -f "$GH_TOKEN_FILE" ]; then
    GH_HEADER=(-H "Authorization: Bearer $(cat "$GH_TOKEN_FILE")")
    log "Using GitHub token from $GH_TOKEN_FILE for private downloads"
fi

fetch_private_release() {
    # Direct release-asset URL pattern (works auth + redirects properly)
    local repo="$1" asset="$2" out="$3"
    log "  fetching $repo/$asset"
    if curl -fsSL "${GH_HEADER[@]}" -o "$TMP/$out" \
        "https://github.com/$repo/releases/latest/download/$asset" 2>/dev/null; then
        return 0
    fi
    log "  warn: $repo/$asset fetch failed (private repo? token missing?)"
    return 1
}

if [ ! -f "$MARKER_FILE" ]; then
    log "First-run plugin install starting"

    # Public repos — no auth needed
    fetch_release_zip "WordPress/abilities-api"  '\.zip$' abilities-api.zip || true
    fetch_release_zip "WordPress/mcp-adapter"    '\.zip$' mcp-adapter.zip   || true
    fetch_release_zip "Automattic/wordpress-mcp" '\.zip$' wordpress-mcp.zip || true

    # Private voyager-marketing repos — need token (or repo made public)
    fetch_private_release "voyager-marketing/voyager-orbit"  voyager-orbit.zip  voyager-orbit.zip  || true
    fetch_private_release "voyager-marketing/voyager-core"   voyager-core.zip   voyager-core.zip   || true
    fetch_private_release "voyager-marketing/voyager-blocks" voyager-blocks.zip voyager-blocks.zip || true

    log "Installing plugins via wp-cli"
    for z in voyager-core voyager-blocks abilities-api mcp-adapter wordpress-mcp; do
        if [ -f "$TMP/$z.zip" ]; then
            wp --path="$WP_PATH" plugin install "$TMP/$z.zip" --activate --force 2>&1 | sed 's/^/  /' || true
        fi
    done

    wp --path="$WP_PATH" plugin install seo-by-rank-math --activate 2>&1 | sed 's/^/  /' || true

    # Orbit LAST — its activation triggers Portal registration
    [ -f "$TMP/voyager-orbit.zip" ] && wp --path="$WP_PATH" plugin install "$TMP/voyager-orbit.zip" --activate --force 2>&1 | sed 's/^/  /' || true

    # Mark first run complete only if at least the basics installed
    if wp --path="$WP_PATH" plugin is-installed voyager-blocks 2>/dev/null; then
        touch "$MARKER_FILE"
        log "First-run plugin install complete"
    else
        log "voyager-blocks not installed — leaving marker off so next deploy retries"
    fi
fi

# ---------------------------------------------------------------------------
# 3. Parent theme install (first run only) — also private
# ---------------------------------------------------------------------------
if [ ! -d "$PARENT_THEME" ]; then
    log "Installing parent theme voyager-block-theme"
    if curl -fsSL "${GH_HEADER[@]}" -o "$TMP/parent.zip" \
        "https://github.com/voyager-marketing/voyager-block-theme/releases/latest/download/voyager-block-theme.zip" 2>/dev/null; then
        mkdir -p "$TMP/vt"
        unzip -q "$TMP/parent.zip" -d "$TMP/vt" || tar -xzf "$TMP/parent.zip" -C "$TMP/vt" 2>/dev/null
        EX=$(ls -d "$TMP"/vt/*/ 2>/dev/null | head -1)
        if [ -n "$EX" ]; then
            mv "$EX" "$PARENT_THEME"
            log "  parent theme installed"
        else
            log "  warn: extracted parent theme directory not found"
        fi
    else
        log "  warn: parent theme download failed (need token or public repo)"
    fi
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
