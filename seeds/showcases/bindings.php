<?php
/**
 * Seed: Bindings showcase.
 *
 * Authored copy (TK-2126).
 *
 * The excerpt deliberately carries no source count. It has gone stale twice —
 * "9" then "14", and the registry now reports 17 (13 voyager/* plus 4 core/*)
 * once voyager-blocks 2.4.1 fixed the missing conditional-bindings require.
 * The MCP playground surfaces this excerpt next to a live-shaped
 * blocks_get_binding_sources response, so a wrong number here reads as the site
 * contradicting itself. A hand-maintained count in marketing copy is the
 * problem; removing it is the fix. See TK-2162 discoveries.
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'slug'       => 'bindings',
    'title'      => 'Block Bindings',
    'excerpt'    => 'Every binding source on this install feeding standard core blocks — no shortcodes, no custom render callbacks, no hard-coded values.',
    'menu_order' => 10,
    'content'    => <<<'HTML'
<!-- wp:paragraph -->
<p>The Block Bindings API is the most underused thing WordPress shipped in years: core block attributes wired to dynamic data, so a plain paragraph can render a live value without becoming a custom block. Most sites never touch it. This page runs every source we ship, side by side.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>View source on anything below — every number and string is a <code>core/paragraph</code> or <code>core/heading</code> carrying a <code>metadata.bindings</code> entry, nothing more. The <code>voyager/pulse</code> source computes composite ecosystem metrics server-side and caches them in a two-hour transient; <code>voyager/meta</code> and <code>voyager/orbit</code> come from the Orbit plugin and resolve per-request. Swap the theme and the data pipeline survives, because none of it lives in the markup.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Honest footnote: the editor UI for authoring bindings is still rough, so we write them directly in pattern markup. That trade-off is visible here on purpose — this is what the API looks like used at full width, today.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"voyager-demo/bindings-showcase"} /-->
HTML,
];
