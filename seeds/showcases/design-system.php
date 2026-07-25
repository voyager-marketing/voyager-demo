<?php
/**
 * Seed: Design system showcase.
 *
 * Authored copy (TK-2126).
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'slug'       => 'design-system',
    'title'      => 'Design System',
    'excerpt'    => 'Voyager design-system v2 at full density — shader heroes, motion, stat reels — every section a registered pattern, every value a theme.json token.',
    'menu_order' => 60,
    'content'    => <<<'HTML'
<!-- wp:paragraph -->
<p>This is design-system v2 pushed to its maximal setting: indigo hull canvas, magenta and violet accents, Space Grotesk display type, and a fluid type scale — all of it defined once as theme.json tokens and consumed everywhere by slug. No section below carries a hex value it invented.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Structurally, the whole reel is registered block patterns — from this theme and the voyager-blocks plugin — composed in sequence. Nothing was page-built in the editor. The motion layer is two-tier and honest about it: the parent theme does baseline scroll reveals with a native IntersectionObserver and CSS scroll-driven animation (no GSAP, no library), while GSAP lives in voyager-blocks where genuine timeline work — particle shaders, counters, pinned scenes — earns it. Both tiers respect reduced-motion and degrade to static content without JavaScript.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Fair warning: this page is intentionally denser than anything we'd ship a client. Client themes take the same tokens and patterns at a calmer dial. This is the stress test — if a component survives here, it survives anywhere.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"voyager-demo/design-showcase"} /-->
HTML,
];
