# CLAUDE.md — voyager-demo

> Mission file for Claude Code and Managed Agents.
> Read this at the start of every session before taking any action.

## Project identity

- **Repo:** voyager-marketing/voyager-demo
- **Notion project:** [PRJ-56 — Voyager Demo Site (demo.voyagermark.com)](https://www.notion.so/35347c03778b81e5980fe9a682328ed6)
- **Notion task:** [TK-2162 — MCP playground page (fixtures until endpoint ships)](https://www.notion.so/3a247c03778b810ebff7d6fc3a1a40ba)
- **Type:** wp-theme (WordPress block child theme)
- **Parent theme:** voyager-block-theme (native IntersectionObserver + CSS scroll-reveal — no GSAP; GSAP lives in voyager-blocks)
- **Sibling theme:** voyagermark (the agency marketing site at voyagermark.com)
- **Status:** Bootstrapping
- **Production:** https://demo.voyagermark.com (planned)
- **Dev/staging:** https://v3.voyagermark.com (this server)

## Mission

This theme is a **public showcase site** for the Voyager plugin suite (Orbit,
Blocks, Core). Its job is to dogfood every binding source, every AI ability,
every block pattern, every interactive feature we ship — so that prospects,
partner agencies, and developers evaluating the platform can see it working
live, in production, on a real WordPress site they can poke at.

Where voyagermark sells agency services, voyager-demo sells the platform.

It is allowed (encouraged) to be aggressive, experimental, and dense with
feature density that would feel obnoxious on a client site.

## Tech stack

- PHP 8.1+ / WordPress 7.0+ / Full Site Editing
- Parent: `voyager-block-theme` (structural canvas: templates, native IO + CSS scroll-reveal motion, block styles — no palette, no GSAP)
- Plugins: Voyager Orbit, Voyager Blocks, Voyager Core, RankMath SEO
- AI: WordPress AI Client + AI Provider for Anthropic + Abilities API + MCP Adapter
- Brand: **Voyager design-system v2** (accent #9B1750 magenta, accent-2 #8B5CF6
  violet, bg-canvas #08071A indigo hull, Voyager Display = Space Grotesk)

## Scope — what you may touch

```
- style.css          ← theme metadata
- theme.json         ← design tokens (Voyager v2 palette + fluid type scale)
- functions.php      ← theme setup, voyager/pulse binding, vd_showcase CPT
- templates/         ← block templates (HTML)
- parts/             ← header / footer
- patterns/          ← voyager-demo/* showcase patterns (PHP)
- seeds/             ← vd_showcase seed content (wp voyager-demo seed-showcases)
- design-system/     ← DS submodule (pinned tag; sync via wp voyager-demo sync-tokens — never edit contents)
- assets/css/        ← custom stylesheets
- assets/js/         ← custom scripts
```

**Never touch:** Parent theme files, the voyagermark sibling theme,
`vendor/`, `node_modules/`, `.github/workflows/`

## Showcase pages (vd_showcase CPT)

Each showcase is a navigable demo page exercising one slice of the suite.
Renders via `single-vd_showcase.html` by default.

| Showcase | Pattern(s) consumed |
|---|---|
| Bindings | voyager-demo/bindings-showcase |
| Tech ecosystem | voyager-demo/tech-ecosystem |
| AI agents | voyager-demo/agent-system |
| AI capabilities | voyager-demo/tech-capabilities |
| Pulse (live stats) | voyager-demo/ecosystem-pulse |
| Design system | voyager-demo/design-showcase |
| Behind the build | voyager-demo/behind-the-build |
| AI marketplace (CS) | voyager-demo/ai-marketplace |
| Open source | voyager-demo/open-source |

Add new showcases by creating a vd_showcase post — the template renders title,
excerpt, body, then bottom CTA.

## Standalone pages (seeds/pages/, post_type=page)

Not every demo fits the vd_showcase shape. Two pages are seeded as regular
Pages by the same `wp voyager-demo seed-showcases` command:

| Page | Seed | Renders |
|---|---|---|
| /abilities/ | seeds/pages/abilities.php | voyager-demo/abilities-registry — live `wp_get_abilities()` |
| /mcp-playground/ | seeds/pages/mcp-playground.php | voyager-demo/mcp-playground — interactive tool console |

### MCP playground — fixture vs live

The playground has one switch. `VOYAGER_DEMO_MCP_ENDPOINT` (wp-config.php, or
the `voyager_demo_mcp_endpoint` filter) is empty by default, which serves
recorded responses; set it to the demo-scoped **public** endpoint and the same
page starts proxying real calls. `VOYAGER_DEMO_MCP_TOKEN` is optional and
becomes a bearer header. Never point either at the private MCP surface.

The browser never talks to the endpoint. It posts a tool name to this theme's
own route (`POST /wp-json/voyager-demo/v1/mcp-playground`), which looks the
slug up in the whitelist, supplies the arguments server-side, and either
returns the fixture or proxies upstream — so no endpoint URL or token is ever
in the page source. Public and unauthenticated by design, throttled to 12
calls per address per minute.

The whitelist and the recorded payloads live in
`seeds/mcp-playground/tools.php`. Every payload is real captured output, never
an invented example, and comes from one of two places by design:

- **Three tools read this site's own registries and content**, so they are
  recorded against the demo install and their requests carry no `site_id` — the
  endpoint defaults to the calling site. The page describes itself, which is the
  premise of the demo.
- **`blocks_get_binding_stats` is recorded against v3.voyagermark.com** and
  names it explicitly, because telemetry needs traffic and a freshly seeded demo
  install honestly reports zeroes. The explainer says so on the page.

`arguments` is omitted entirely for tools that take none, so what the proxy puts
on the wire is byte-identical to the request preview the page renders.

**Re-record before launch.** The three demo payloads name `voyager-demo.test`
because that is where the build runs today; capture them again on
demo.voyagermark.com so permalinks and counts match. If the endpoint's envelope
differs from `{abilityVersion, data}` they go stale silently and only a re-record
catches it.

Do not hand-edit a recorded payload to make it read better — it stops being
evidence. Change the source and re-record.

Frontend is the Interactivity API via a theme-owned script module
(`assets/js/mcp-playground.js`), unbundled ESM through WordPress's import map —
this theme has no npm pipeline. Read the header comments in that file and in
`patterns/mcp-playground.php` before editing either: first-paint attributes are
rendered in PHP on purpose, and selection is kept in store state rather than
element context. Both choices are load-bearing.

## Pattern library

All showcase patterns use the `voyager-demo/<slug>` prefix. Reusable patterns
(hero, cta, logos, testimonials, contact, faq) come from the `voyager-blocks`
plugin via `voyager/<slug>`.

| Pattern | Slug | Notes |
|---|---|---|
| Block bindings showcase | voyager-demo/bindings-showcase | Every binding source |
| Design system showcase | voyager-demo/design-showcase | Premium component reel |
| Voyager platform diagram | voyager-demo/tech-ecosystem | Architecture view |
| Live ecosystem stats | voyager-demo/ecosystem-pulse | Consumes voyager/pulse |
| AI agent system | voyager-demo/agent-system | Orbit ability orchestration |
| AI capabilities | voyager-demo/tech-capabilities | What AI does for businesses |
| AI marketplace (teaser) | voyager-demo/ai-marketplace | Coming soon |
| Open source / community | voyager-demo/open-source | GitHub linkout |
| Behind the build | voyager-demo/behind-the-build | Technical deep dive |
| MCP playground | voyager-demo/mcp-playground | Interactivity API tool console |

## Block bindings

This theme registers `voyager/pulse` — composite ecosystem metrics (cities
covered, content volume, publishing velocity, freshness score, uptime, etc.).
Cached for 2 hours via transients. See `voyager_demo_compute_pulse_data()`.

`voyager/meta` and `voyager/orbit` come from elsewhere in the suite (Orbit
plugin or sibling themes). voyager-demo only owns pulse because it's the only
theme that ships the pattern consuming it.

## Fitness metric

**Primary signal:** Theme activates without errors + zero PHP warnings.

After every change:
1. `find . -name '*.php' -not -path './vendor/*' | xargs -P4 php -l`
2. `php -r "json_decode(file_get_contents('theme.json')) || exit(1);"`
3. Pattern files have Title + Slug headers

## Commit convention

Conventional Commits. Scopes: `theme`, `pattern`, `template`, `style`, `function`, `cpt`

## Brand system

Voyager brand rules: https://www.notion.so/8ec0c2b2f55b43bcbdfdbd877dd7a659
Use `voyager-blocks/assets/design-system/` (token source) for all colors,
type, and spacing — do not invent new values.

## Key contacts

- Ben: ben@voyagermark.com — final approval on design + showcase scope
- Alex: alex@voyagermark.com — content and showcase authoring
