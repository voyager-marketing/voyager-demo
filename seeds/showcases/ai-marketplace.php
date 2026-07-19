<?php
/**
 * Seed: AI marketplace (coming soon) showcase.
 *
 * Authored copy (TK-2128).
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'slug'       => 'ai-marketplace',
    'title'      => 'AI Marketplace',
    'excerpt'    => 'Packaged AI abilities — Content Writer, Lead Scorer, SEO Autopilot — installable per site. Honest status: not shipped yet.',
    'menu_order' => 80,
    'content'    => <<<'HTML'
<!-- wp:paragraph -->
<p>The idea: abilities as products. Content Writer, Lead Scorer, SEO Autopilot, Report Generator — packaged, installable on any Voyager site, priced by use rather than by seat. A plugin directory, except every listing is a typed capability an agent can drive.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The reason it's plausible rather than vapor: the packaging unit already exists. Everything on this site runs on registered abilities with schemas, permission checks, and MCP exposure. A marketplace is distribution and metering layered on that same registry — new surface, not new architecture.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Status, stated straight: this is the one page on this site describing something that doesn't exist yet. No install buttons pretending otherwise. What exists today is the ability registry underneath — the marketplace is the roadmap item we're building toward, and this teaser will turn into the real catalog when it ships.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"voyager-demo/ai-marketplace"} /-->
HTML,
];
