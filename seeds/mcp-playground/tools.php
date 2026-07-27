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
 * Only slugs present in this file are ever forwarded. The endpoint must
 * enforce its own read-only whitelist too — this list is a client-side
 * convenience, not a security boundary.
 *
 * PROVENANCE OF THE RECORDED PAYLOADS.
 * Each 'recorded' payload below is a real response captured from the Voyager
 * MCP surface against v3.voyagermark.com on 2026-07-27, byte-for-byte as
 * returned. They are NOT hand-written examples of what a response might look
 * like, and they are NOT live — the demo-scoped public endpoint does not exist
 * yet. Every request preview names v3.voyagermark.com so the preview and the
 * recorded response agree; nothing in the UI implies the data is current.
 *
 * Re-record against the public demo endpoint before launch. If its envelope
 * differs from the ability envelope above, these payloads go stale silently —
 * the UI cannot detect that, only a re-record can.
 *
 * @package VoyagerDemo
 * @since   0.2.0
 */

declare(strict_types=1);

return [

    [
        'slug'          => 'blocks_get_binding_sources',
        'family'        => 'blocks_*',
        'recorded_from' => 'v3.voyagermark.com',
        'recorded_at'   => '2026-07-27',
        'summary' => __('Enumerate every block binding source registered on the site — core, Voyager, and third-party — with the context each one needs to resolve.', 'voyager-demo'),
        'why'     => __('This is the call behind the bindings showcase. A binding source is how a block pulls its text from somewhere other than the post: site options, post meta, Notion, an A/B bucket, a geo lookup. Ask the site what it has registered and you get the honest list, including sources shipped by plugins nobody on our team wrote.', 'voyager-demo'),
        'reads'   => __('Registry only. No post content, no options, no visitor data.', 'voyager-demo'),
        'request' => [
            'tool'      => 'blocks_get_binding_sources',
            'arguments' => ['site_id' => 'v3.voyagermark.com'],
        ],
        'recorded' => <<<'JSON'
{
  "abilityVersion": "2.1.0",
  "data": {
    "sources": [
      { "name": "voyager/orbit", "label": "Voyager Orbit", "plugin": "voyager-blocks", "uses_context": [], "description": "Voyager binding source: Voyager Orbit" },
      { "name": "core/pattern-overrides", "label": "Pattern Overrides", "plugin": "wordpress-core", "uses_context": ["pattern/overrides"], "description": "" },
      { "name": "core/post-data", "label": "Post Data", "plugin": "wordpress-core", "uses_context": ["postId", "postType"], "description": "" },
      { "name": "core/post-meta", "label": "Post Meta", "plugin": "wordpress-core", "uses_context": ["postId", "postType"], "description": "" },
      { "name": "core/term-data", "label": "Term Data", "plugin": "wordpress-core", "uses_context": ["termId", "taxonomy"], "description": "" },
      { "name": "voyager/post-meta-text", "label": "Voyager Post Meta", "plugin": "voyager-blocks", "uses_context": ["postId"], "description": "Voyager binding source: Voyager Post Meta" },
      { "name": "voyager/site-data", "label": "Voyager Site Data", "plugin": "voyager-blocks", "uses_context": [], "description": "Voyager binding source: Voyager Site Data" },
      { "name": "voyager/contextual-cta", "label": "Voyager Contextual CTA", "plugin": "voyager-blocks", "uses_context": ["postId", "postType"], "description": "Voyager binding source: Voyager Contextual CTA" },
      { "name": "voyager/geo", "label": "Voyager Geo", "plugin": "voyager-blocks", "uses_context": [], "description": "Voyager binding source: Voyager Geo" },
      { "name": "voyager/ai-content", "label": "Voyager AI Content", "plugin": "voyager-blocks", "uses_context": ["postId", "postType"], "description": "Voyager binding source: Voyager AI Content" },
      { "name": "voyager/notion", "label": "Voyager Notion", "plugin": "voyager-blocks", "uses_context": ["postId"], "description": "Voyager binding source: Voyager Notion" },
      { "name": "voyager/ab-test", "label": "Voyager A/B Test", "plugin": "voyager-blocks", "uses_context": [], "description": "Voyager binding source: Voyager A/B Test" },
      { "name": "voyager/analytics", "label": "Voyager Analytics", "plugin": "voyager-blocks", "uses_context": [], "description": "Voyager binding source: Voyager Analytics" },
      { "name": "voyager/meta", "label": "Voyager Meta", "plugin": "voyager-blocks", "uses_context": ["postId", "postType"], "description": "Voyager binding source: Voyager Meta" },
      { "name": "voyager/airtable", "label": "Voyager Airtable", "plugin": "voyager-blocks", "uses_context": ["postId"], "description": "Voyager binding source: Voyager Airtable" },
      { "name": "remote-data/binding", "label": "Remote Data Blocks", "plugin": "unknown", "uses_context": ["remote-data-blocks/remoteData"], "description": "" }
    ],
    "total": 16
  }
}
JSON,
    ],

    [
        'slug'          => 'blocks_get_binding_stats',
        'family'        => 'blocks_*',
        'recorded_from' => 'v3.voyagermark.com',
        'recorded_at'   => '2026-07-27',
        'summary' => __('Aggregate binding resolution telemetry for the last 7 days: how many bindings resolved, how many fell back, and which sources did the work.', 'voyager-demo'),
        'why'     => __('The number that matters here is fallback_count. A binding that cannot resolve renders its static fallback instead, and the page still looks fine — which is exactly why silent fallbacks go unnoticed for months. Counting them is how you find out. On this recording, 132 of 309 resolutions fell back.', 'voyager-demo'),
        'reads'   => __('Aggregate counters only. No per-visitor rows, no PII.', 'voyager-demo'),
        'request' => [
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
        'recorded_from' => 'v3.voyagermark.com',
        'recorded_at'   => '2026-07-27',
        'summary' => __('Query posts of any type by status, taxonomy, meta, or date. Works over the REST surface — no WP-CLI, no SSH, no host-specific access.', 'voyager-demo'),
        'why'     => __('The unglamorous one, and the one that makes the rest possible. An agent that can enumerate content can audit it, refresh it, cross-link it, or report on it. Note the pagination fields: an agent reads total and pages rather than assuming it received everything.', 'voyager-demo'),
        'reads'   => __('Published pages only, as configured in the request below. Titles, slugs, dates, excerpts, permalinks.', 'voyager-demo'),
        'request' => [
            'tool'      => 'wp_list_posts',
            'arguments' => [
                'site_id'   => 'v3.voyagermark.com',
                'post_type' => 'page',
                'per_page'  => 3,
                'orderby'   => 'modified',
            ],
        ],
        'recorded' => <<<'JSON'
{
  "abilityVersion": "2.1.0",
  "data": {
    "posts": [
      {
        "ID": 540,
        "title": "Operating Audit",
        "slug": "audit",
        "status": "publish",
        "type": "page",
        "date": "2026-07-23 21:56:08",
        "modified": "2026-07-23 21:56:08",
        "author": 0,
        "excerpt": "",
        "permalink": "https://v3.voyagermark.com/audit/"
      },
      {
        "ID": 434,
        "title": "Case Studies",
        "slug": "work",
        "status": "publish",
        "type": "page",
        "date": "2026-04-17 04:54:33",
        "modified": "2026-06-11 17:03:18",
        "author": 0,
        "excerpt": "Case studies What the engine has shipped. Real engagements, real numbers. Pulled live from the portfolio.",
        "permalink": "https://v3.voyagermark.com/work/"
      },
      {
        "ID": 435,
        "title": "Pricing",
        "slug": "pricing",
        "status": "publish",
        "type": "page",
        "date": "2026-04-17 04:54:34",
        "modified": "2026-04-24 01:35:08",
        "author": 0,
        "excerpt": "",
        "permalink": "https://v3.voyagermark.com/pricing/"
      }
    ],
    "total": 17,
    "pages": 6,
    "page": 1
  }
}
JSON,
    ],

    [
        'slug'          => 'wp_get_theme_details',
        'family'        => 'wp_*',
        'recorded_from' => 'v3.voyagermark.com',
        'recorded_at'   => '2026-07-27',
        'summary' => __('List installed themes with versions, parent relationships, and pending updates.', 'voyager-demo'),
        'why'     => __('Proof that the architecture contract is real and not a diagram. The response shows voyager-block-theme carrying its own description — "ships structural font-size and spacing scales but no color palette" — with the brand child theme layered on top of it. The parent genuinely has no palette; that is the contract, readable from the outside.', 'voyager-demo'),
        'reads'   => __('Theme headers and update status. No file contents, no credentials.', 'voyager-demo'),
        'request' => [
            'tool'      => 'wp_get_theme_details',
            'arguments' => ['site_id' => 'v3.voyagermark.com'],
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
        "description": "Structural canvas parent theme. Ships structural font-size and spacing scales but no color palette and no font families — child…",
        "template": "voyager-block-theme",
        "status": "inactive"
      },
      {
        "slug": "voyagermark",
        "name": "Voyager Marketing",
        "version": "1.1.0",
        "active": true,
        "parent_theme": "voyager-block-theme",
        "update_available": false,
        "update_version": null,
        "author": "Voyager Marketing",
        "description": "Voyager's flagship website theme — a child of Voyager Block Theme that consumes the Voyager Design System directly (brand tokens,…",
        "template": "voyager-block-theme",
        "status": "active"
      }
    ],
    "active_theme": "voyagermark",
    "total": 2
  }
}
JSON,
    ],

];
