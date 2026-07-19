<?php
/**
 * Title: Abilities Registry (live)
 * Slug: voyager-demo/abilities-registry
 * Categories: voyager-demo
 * Keywords: abilities, registry, api, schema, mcp, agents, live
 * Block Types: core/group
 *
 * Dynamic listing — content comes from voyager_demo_abilities_markup(),
 * which enumerates the core Abilities API registry per request (cached,
 * hash-invalidated). No hand-maintained content in this file.
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"bg-canvas","textColor":"fg-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-canvas-background-color has-fg-1-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">
<?php echo voyager_demo_abilities_markup(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- serialized block markup, escaped at build. ?>
</div>
<!-- /wp:group -->
