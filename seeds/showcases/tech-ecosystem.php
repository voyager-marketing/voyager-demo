<?php
/**
 * Seed: Tech ecosystem showcase.
 *
 * Authored copy (TK-2127).
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'slug'       => 'tech-ecosystem',
    'title'      => 'Tech Ecosystem',
    'excerpt'    => 'The six pieces of the Voyager platform and how they actually connect — this is the literal deployment running the site you are on.',
    'menu_order' => 20,
    'content'    => <<<'HTML'
<!-- wp:paragraph -->
<p>This is the platform map: six pieces — Block Theme, Blocks, Core, Orbit, the WordPress AI Client with the Anthropic provider, and the MCP server — and the lines between them. It's not an aspirational architecture slide; it's the literal stack serving the page you're reading.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The division of labor is strict. The theme owns presentation — patterns and theme.json tokens, nothing else. Blocks ships the reusable pattern library and custom blocks. Core is shared plumbing. Orbit is the control plane: registered abilities, REST surface, and the MCP endpoint that lets AI agents operate the site with the same permissions model as a logged-in user. The AI Client handles model calls so no plugin talks to a provider directly.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Honest footnote: those boundaries are enforced by contract and code review, not by tooling that makes violations impossible — and a few seams are still moving. This diagram tracks what's on <code>main</code>, not a frozen spec.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"voyager-demo/tech-ecosystem"} /-->
HTML,
];
