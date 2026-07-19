<?php
/**
 * Seed: Behind the build showcase.
 *
 * Authored copy (TK-2128).
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'slug'       => 'behind-the-build',
    'title'      => 'Behind the Build',
    'excerpt'    => 'How this site is actually made: a child theme, a pattern library, a seed pipeline, and agent sessions working Notion tasks into pull requests.',
    'menu_order' => 70,
    'content'    => <<<'HTML'
<!-- wp:paragraph -->
<p>The most useful demo artifact is the site itself, so here's the build, plainly. A child theme owns every pixel of brand via theme.json tokens. Pages are composed from registered patterns. Live numbers come from block bindings. And the content you're reading ships with the theme: seed files plus an idempotent <code>wp voyager-demo seed-showcases</code> command, so a fresh deploy carries its own copy.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The process is the other half of the story. This site is built by agent sessions working a Notion task queue — one task per session, one pull request per task, fitness checks before every merge, discoveries written back so the next session starts smarter. The commit log reads like a flight recorder, because it is one.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Still true and worth saying: humans review every PR, some migrated patterns carry artifacts we haven't polished out, and the deploy pipeline is younger than the theme. The repo goes public with the first deploy — at which point you can check every claim on this page against the history.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"voyager-demo/behind-the-build"} /-->
HTML,
];
