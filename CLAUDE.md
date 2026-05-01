# CLAUDE.md — voyager-demo

> Mission file for Claude Code and Managed Agents.
> Read this at the start of every session before taking any action.

## Project identity

- **Repo:** voyager-marketing/voyager-demo
- **Type:** wp-theme (WordPress block child theme)
- **Parent theme:** voyager-block-theme
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
- Parent: `voyager-block-theme` (block theme with patterns, GSAP, design tokens)
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
