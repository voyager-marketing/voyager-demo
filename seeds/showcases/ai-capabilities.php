<?php
/**
 * Seed: AI capabilities showcase.
 *
 * Authored copy (TK-2127).
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'slug'       => 'ai-capabilities',
    'title'      => 'AI Capabilities',
    'excerpt'    => 'What the AI layer does for a business day to day — content, SEO, lead intelligence, reporting — all backed by the same 32+ registered abilities.',
    'menu_order' => 40,
    'content'    => <<<'HTML'
<!-- wp:paragraph -->
<p>Strip away the architecture and this is what the AI layer does for a business: drafts and refreshes content, automates the repetitive parts of SEO, qualifies leads while you sleep, answers visitors in chat, and writes the monthly report nobody enjoys writing. The sections below are those jobs, not features on a pricing page.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Under every card is the same primitive: a registered ability. There are 32+ of them, each with a typed schema and a permission check, exposed to agents over MCP and to developers over REST. Content generation and lead scoring aren't separate products — they're different abilities on one control plane, which is why new capabilities ship weekly instead of quarterly.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>The deliberate limit: not everything is autonomous. Several abilities are draft-only by policy, and anything that publishes or spends money sits behind an approval gate. We'd rather demo a system you could hand a client than one that's impressive until it isn't.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"voyager-demo/tech-capabilities"} /-->
HTML,
];
