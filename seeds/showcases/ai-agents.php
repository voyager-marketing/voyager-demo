<?php
/**
 * Seed: AI agents showcase.
 *
 * Authored copy (TK-2127).
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'slug'       => 'ai-agents',
    'title'      => 'AI Agents',
    'excerpt'    => 'The agent fleet that operates this site — what each agent does, what depends on what, and where the humans stay in the loop.',
    'menu_order' => 30,
    'content'    => <<<'HTML'
<!-- wp:paragraph -->
<p>Eight agents run the operational side of this site — content, SEO, reporting, monitoring — and the dependency graph below shows what feeds what. None of them are chatbots bolted onto a dashboard; they're working sessions that claim a task, do it, and write their state back.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Mechanically, an agent is a Claude session driving Orbit abilities over MCP. Every ability is a typed, permissioned registration in the WordPress Abilities API — so the agent surface and the API surface are the same thing, and anything an agent can do, you can audit, rate-limit, or call yourself over REST.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Where the honesty comes in: agents don't get free rein. One task per session, pull requests reviewed by humans, publishing behind approval gates. This very page is the receipt — it was authored and seeded by a Claude Code session working a Notion task, then merged by a person.</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"voyager-demo/agent-system"} /-->
HTML,
];
