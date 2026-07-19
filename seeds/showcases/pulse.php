<?php
/**
 * Seed: Pulse (live stats) showcase.
 *
 * Authored copy (TK-2126).
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'slug'       => 'pulse',
    'title'      => 'Pulse',
    'excerpt'    => 'Live ecosystem metrics — publishing velocity, freshness, coverage — computed from real WordPress data by one binding source.',
    'menu_order' => 50,
    'content'    => <<<'HTML'
<!-- wp:paragraph -->
<p>Every stat on this page is the <code>voyager/pulse</code> binding source at work: fifteen composite metrics computed from what this WordPress install actually contains — CPT counts, post dates, the pattern and block registries — not a stats file someone updates when they remember to.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The mechanics are deliberately boring: one <code>get_value_callback</code>, one compute function (<code>voyager_demo_compute_pulse_data()</code>, in this theme's functions.php), one two-hour transient. Publishing velocity is a 90-day rolling window; freshness is the share of content touched in the same window. The blocks rendering these values are stock core blocks bound by key — the dashboard below has no custom block code at all.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Current limitation, stated plainly: Pulse self-queries this site, so the numbers are only as big as the demo. The roadmap moves the compute to a Portal-level fleet aggregate — same binding contract, bigger denominator. When that lands, this page won't change a line of markup.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"voyager-demo/ecosystem-pulse"} /-->
HTML,
];
