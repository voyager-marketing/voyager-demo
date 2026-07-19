<?php
/**
 * Seed: Bindings showcase.
 *
 * Authored copy (TK-2126).
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'slug'       => 'bindings',
    'title'      => 'Block Bindings',
    'excerpt'    => 'Nine binding sources feeding standard core blocks — no shortcodes, no custom render callbacks, no hard-coded values.',
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
