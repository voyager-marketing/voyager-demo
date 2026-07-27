<?php
/**
 * MCP playground — whitelisted tool catalog + recorded responses (TK-2162).
 *
 * Lives under seeds/ because it ships with the theme as authored content
 * (labels, explainers, recorded payloads) rather than as logic. It is not a
 * page seed: voyager_demo_get_showcase_seeds() only globs seeds/showcases/
 * and seeds/pages/, so this file is never upserted as a post.
 *
 * WIRE CONTRACT — the companion voyager-mcp-server task implements this.
 * The theme's REST proxy (voyager-demo/v1/mcp-playground) posts:
 *
 *     POST <endpoint>
 *     Content-Type: application/json
 *     { "tool": "<slug>", "arguments": { … } }
 *
 * and expects the Voyager ability envelope back, unchanged:
 *
 *     { "abilityVersion": "2.1.0", "data": { … } }
 *
 * `arguments` is omitted entirely when a tool needs none, so the request the
 * proxy sends matches the preview the page shows, byte for byte. Only slugs
 * present in this file are ever forwarded. The endpoint must enforce its own
 * read-only whitelist too — this list is a client-side convenience, not a
 * security boundary.
 *
 * PROVENANCE OF THE RECORDED PAYLOADS.
 * Every payload below is real captured output, not a hand-written example of
 * what a response might look like. They come from two sources, deliberately:
 *
 *   - Three tools read this site's own registries and content, so they are
 *     recorded against the demo install itself and their requests carry no
 *     `site_id` — the endpoint defaults to the calling site. The page ends up
 *     describing itself, which is the entire premise of the demo. These are the
 *     abilities' own return values, wrapped in the envelope the endpoint adds.
 *
 *   - `blocks_get_binding_stats` is recorded against v3.voyagermark.com and its
 *     request names that site explicitly. Binding telemetry needs traffic, and
 *     a freshly seeded demo install reports zeroes — a true but useless answer.
 *     The explainer says so rather than leaving the reader to wonder why one
 *     tool points somewhere else.
 *
 * None of this is live: the demo-scoped public endpoint does not exist yet.
 * `recorded_from` is rendered per tool so no visitor has to guess.
 *
 * RE-RECORD BEFORE LAUNCH. The three demo payloads currently name
 * voyager-demo.test because that is where the build runs today; on
 * demo.voyagermark.com they must be captured again so permalinks and counts
 * match the live site. If the endpoint's envelope ever differs from
 * `{abilityVersion, data}` these go stale silently — the UI cannot detect that,
 * only a re-record can.
 *
 * @package VoyagerDemo
 * @since   0.2.0
 */

declare(strict_types=1);

return [

    [
        'slug'          => 'blocks_get_binding_sources',
        'family'        => 'blocks_*',
        'recorded_from' => 'voyager-demo.test (local build)',
        'recorded_at'   => '2026-07-27',
        'summary'       => __('Enumerate every block binding source registered on this site — core, Voyager, and anything a plugin added — with the context each one needs to resolve.', 'voyager-demo'),
        'why'           => __('This is the call behind the bindings showcase. A binding source is how a block pulls its text from somewhere other than the post: site options, post meta, Notion, an A/B bucket, a geo lookup. Read the list to the end and the last entry is voyager/pulse — a source this theme registers itself, in functions.php, for the live-stats pattern. The site is reporting a capability it created, which is the only kind of answer worth trusting.', 'voyager-demo'),
        'reads'         => __('The binding registry. No post content, no options, no visitor data.', 'voyager-demo'),
        'request'       => [
            'tool' => 'blocks_get_binding_sources',
        ],
        'recorded' => <<<'JSON'
{
  "abilityVersion": "2.1.0",
  "data": {
    "sources": [
      { "name": "voyager/post-meta-text", "label": "Voyager Post Meta", "plugin": "voyager-blocks", "uses_context": ["postId"], "description": "Voyager binding source: Voyager Post Meta" },
      { "name": "voyager/orbit", "label": "Voyager Orbit", "plugin": "voyager-blocks", "uses_context": [], "description": "Voyager binding source: Voyager Orbit" },
      { "name": "voyager/site-data", "label": "Voyager Site Data", "plugin": "voyager-blocks", "uses_context": [], "description": "Voyager binding source: Voyager Site Data" },
      { "name": "voyager/contextual-cta", "label": "Voyager Contextual CTA", "plugin": "voyager-blocks", "uses_context": ["postId", "postType"], "description": "Voyager binding source: Voyager Contextual CTA" },
      { "name": "voyager/geo", "label": "Voyager Geo", "plugin": "voyager-blocks", "uses_context": [], "description": "Voyager binding source: Voyager Geo" },
      { "name": "voyager/ai-content", "label": "Voyager AI Content", "plugin": "voyager-blocks", "uses_context": ["postId", "postType"], "description": "Voyager binding source: Voyager AI Content" },
      { "name": "voyager/notion", "label": "Voyager Notion", "plugin": "voyager-blocks", "uses_context": ["postId"], "description": "Voyager binding source: Voyager Notion" },
      { "name": "voyager/ab-test", "label": "Voyager A/B Test", "plugin": "voyager-blocks", "uses_context": [], "description": "Voyager binding source: Voyager A/B Test" },
      { "name": "voyager/analytics", "label": "Voyager Analytics", "plugin": "voyager-blocks", "uses_context": [], "description": "Voyager binding source: Voyager Analytics" },
      { "name": "voyager/meta", "label": "Voyager Meta", "plugin": "voyager-blocks", "uses_context": ["postId", "postType"], "description": "Voyager binding source: Voyager Meta" },
      { "name": "voyager/airtable", "label": "Voyager Airtable", "plugin": "voyager-blocks", "uses_context": ["postId"], "description": "Voyager binding source: Voyager Airtable" },
      { "name": "voyager/conditional", "label": "Voyager Conditional", "plugin": "voyager-blocks", "uses_context": ["postId", "postType"], "description": "Voyager binding source: Voyager Conditional" },
      { "name": "core/pattern-overrides", "label": "Pattern Overrides", "plugin": "wordpress-core", "uses_context": ["pattern/overrides"], "description": "" },
      { "name": "core/post-data", "label": "Post Data", "plugin": "wordpress-core", "uses_context": ["postId", "postType"], "description": "" },
      { "name": "core/post-meta", "label": "Post Meta", "plugin": "wordpress-core", "uses_context": ["postId", "postType"], "description": "" },
      { "name": "core/term-data", "label": "Term Data", "plugin": "wordpress-core", "uses_context": ["termId", "taxonomy"], "description": "" },
      { "name": "voyager/pulse", "label": "Voyager Pulse", "plugin": "voyager-blocks", "uses_context": [], "description": "Voyager binding source: Voyager Pulse" }
    ],
    "total": 17
  }
}
JSON,
    ],

    [
        'slug'          => 'blocks_get_binding_stats',
        'family'        => 'blocks_*',
        'recorded_from' => 'v3.voyagermark.com',
        'recorded_at'   => '2026-07-27',
        'summary'       => __('Aggregate binding resolution telemetry for the last 7 days: how many bindings resolved, how many fell back, and which sources did the work.', 'voyager-demo'),
        'why'           => __('The number that matters is fallback_count. A binding that cannot resolve renders its static fallback instead and the page still looks fine — which is exactly why silent fallbacks go unnoticed for months. Counting them is how you find out. On this recording, 132 of 309 resolutions fell back. Note that this request names a different site: telemetry needs traffic, and a freshly seeded demo install honestly reports zeroes, so it asks a site that has some.', 'voyager-demo'),
        'reads'         => __('Aggregate counters only. No per-visitor rows, no PII.', 'voyager-demo'),
        'request'       => [
            'tool'      => 'blocks_get_binding_stats',
            'arguments' => ['site_id' => 'v3.voyagermark.com', 'days' => 7],
        ],
        'recorded' => <<<'JSON'
{
  "abilityVersion": "2.1.0",
  "data": {
    "total_resolutions": 309,
    "fallback_count": 132,
    "by_source": {
      "voyager/notion": 228,
      "voyager/contextual-cta": 54,
      "voyager/site-data": 24,
      "voyager/geo": 3
    },
    "pages_rendered": 4,
    "days_with_data": 1,
    "period_days": 7
  }
}
JSON,
    ],

    [
        'slug'          => 'wp_list_posts',
        'family'        => 'wp_*',
        'recorded_from' => 'voyager-demo.test (local build)',
        'recorded_at'   => '2026-07-27',
        'summary'       => __('Query posts of any type — including custom post types — by status, taxonomy, meta, or date. Works over the REST surface: no WP-CLI, no SSH, no host-specific access.', 'voyager-demo'),
        'why'           => __('The unglamorous one, and the one that makes the rest possible: an agent that can enumerate content can audit it, refresh it, cross-link it, or report on it. This request asks for vd_showcase, a post type this theme registers, and gets back the showcase entries you can navigate to from the nav — so the site is listing its own pages. Watch the tail of the response too: total 9 and pages 3 against per_page 3. A careful agent reads those and asks for page 2; a careless one assumes it received everything and silently works from a third of the data.', 'voyager-demo'),
        'reads'         => __('Published vd_showcase entries, as configured in the request below. Titles, slugs, dates, excerpts, permalinks.', 'voyager-demo'),
        'request'       => [
            'tool'      => 'wp_list_posts',
            'arguments' => [
                'post_type' => 'vd_showcase',
                'per_page'  => 3,
                'orderby'   => 'menu_order',
                'order'     => 'ASC',
            ],
        ],
        'recorded' => <<<'JSON'
{
  "abilityVersion": "2.1.0",
  "data": {
    "posts": [
      {
        "ID": 9,
        "title": "Block Bindings",
        "slug": "bindings",
        "status": "publish",
        "type": "vd_showcase",
        "date": "2026-07-27 11:52:58",
        "modified": "2026-07-27 16:59:32",
        "author": 0,
        "excerpt": "Every binding source on this install feeding standard core blocks — no shortcodes, no custom render callbacks, no hard-coded values.",
        "permalink": "http://voyager-demo.test/showcase/bindings/"
      },
      {
        "ID": 13,
        "title": "Tech Ecosystem",
        "slug": "tech-ecosystem",
        "status": "publish",
        "type": "vd_showcase",
        "date": "2026-07-27 11:52:58",
        "modified": "2026-07-27 16:59:32",
        "author": 0,
        "excerpt": "The six pieces of the Voyager platform and how they actually connect — this is the literal deployment running the site you are on.",
        "permalink": "http://voyager-demo.test/showcase/tech-ecosystem/"
      },
      {
        "ID": 5,
        "title": "AI Agents",
        "slug": "ai-agents",
        "status": "publish",
        "type": "vd_showcase",
        "date": "2026-07-27 11:52:58",
        "modified": "2026-07-27 16:59:32",
        "author": 0,
        "excerpt": "The agent fleet that operates this site — what each agent does, what depends on what, and where the humans stay in the loop.",
        "permalink": "http://voyager-demo.test/showcase/ai-agents/"
      }
    ],
    "total": 9,
    "pages": 3,
    "page": 1
  }
}
JSON,
    ],

    [
        'slug'          => 'wp_get_theme_details',
        'family'        => 'wp_*',
        'recorded_from' => 'voyager-demo.test (local build)',
        'recorded_at'   => '2026-07-27',
        'summary'       => __('List installed themes with versions, parent relationships, and pending updates.', 'voyager-demo'),
        'why'           => __('Proof that the architecture contract is real and not a diagram. The response is this site describing its own stack: voyager-block-theme sitting inactive as the parent, carrying a description that says it "ships structural font-size and spacing scales but no color palette and no font families", and voyager-demo active on top of it as the child that supplies the brand. The parent genuinely has no palette — that is the contract, and you can read it from the outside without taking our word for it.', 'voyager-demo'),
        'reads'         => __('Theme headers and update status. No file contents, no credentials.', 'voyager-demo'),
        'request'       => [
            'tool' => 'wp_get_theme_details',
        ],
        'recorded' => <<<'JSON'
{
  "abilityVersion": "2.1.0",
  "data": {
    "themes": [
      {
        "slug": "voyager-block-theme",
        "name": "Voyager Block Theme",
        "version": "2.0.1",
        "active": false,
        "parent_theme": null,
        "update_available": false,
        "update_version": null,
        "author": "Voyager Marketing",
        "description": "Structural canvas parent theme. Ships structural font-size and spacing scales but no color palette and no font families — child&hellip;",
        "template": "voyager-block-theme",
        "status": "inactive"
      },
      {
        "slug": "voyager-demo",
        "name": "Voyager Demo",
        "version": "0.1.0",
        "active": true,
        "parent_theme": "voyager-block-theme",
        "update_available": false,
        "update_version": null,
        "author": "Voyager Marketing",
        "description": "Public showcase site for the Voyager plugin suite (Orbit, Blocks, Core). Sibling to voyagermark — this theme dogfoods every binding&hellip;",
        "template": "voyager-block-theme",
        "status": "active"
      }
    ],
    "active_theme": "voyager-demo",
    "total": 2
  }
}
JSON,
    ],

];
