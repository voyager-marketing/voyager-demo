<?php
/**
 * Seed: Open source / community showcase.
 *
 * Authored copy (TK-2128).
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'slug'       => 'open-source',
    'title'      => 'Open Source',
    'excerpt'    => 'What is public, where to fork it, and where the commercial line sits — stated plainly.',
    'menu_order' => 90,
    'content'    => <<<'HTML'
<!-- wp:paragraph -->
<p>The parts of the stack you can read tonight: the Voyager Block Theme, the Blocks pattern library, and the engineering playbook we run projects by. Public repos, real history, no cleaned-for-show branches. This demo site's own theme joins them at first deploy.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>We publish these because they're better for being public — patterns get forked into other agencies' themes, playbook pages get argued with, and WordPress core work flows back upstream. If you're evaluating the platform as a developer, start with the theme repo: it's the smallest honest sample of how everything here is built.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The boundary, so nobody has to guess: Orbit (the control plane) and the Portal stay commercial. Open where openness compounds, paid where the operational value lives. If that line moves, it'll move in the changelog, not in a quiet license swap.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"voyager-demo/open-source"} /-->
HTML,
];
