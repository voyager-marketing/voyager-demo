# Voyager Demo — Roadmap

> Last updated: 2026-05-01

## Mission

Public showcase site for the Voyager plugin suite at demo.voyagermark.com.
Sales tool for prospects evaluating the platform; partner-agency
recruitment; developer-evaluator landing pad.

## Phase 0 — Bootstrap (this week)

- [x] Theme scaffolded from voyager-blank-child
- [x] Voyager design-system v2 palette in theme.json
- [x] 9 showcase patterns migrated from voyagermark (with voyager-demo/ slugs)
- [x] page-stack + page-technology templates migrated
- [x] voyager/pulse binding source + compute_pulse_data
- [x] vd_showcase CPT registered
- [x] front-page.html orchestrates the full showcase reel
- [x] page-showcase + single-vd_showcase templates
- [ ] Repo created: voyager-marketing/voyager-demo
- [ ] DNS + SpinupWP for demo.voyagermark.com
- [ ] First deploy

## Phase 1 — Showcase content (sprint 1)

- [ ] Author 9 vd_showcase entries (one per pattern reel above)
- [ ] Demo navigation: top-nav + footer link to /showcases/
- [ ] Hero section: brand-on-brand intro that frames "what is Voyager"
- [ ] Live MCP playground link (voyager-mcp-server)
- [ ] Live AI ability inspector (Orbit AbilityBridge)
- [ ] /platform overview page (already exists at /platform/, port over)

## Phase 2 — Sales motion (sprint 2)

- [ ] Lead capture: contact form for partner-agency inquiries
- [ ] Pricing teaser for the (eventually licensable) suite
- [ ] Case study cards: real Voyager-built client sites
- [ ] "Try it yourself" — Playground-launched demo WordPress instance
- [ ] Newsletter: dev-flavored, ecosystem-focused

## Phase 3 — Developer enablement (sprint 3)

- [ ] /docs/ pulled from voyager-blocks plugin DESIGN-SYSTEM.md
- [ ] /abilities/ — auto-generated from Orbit ability registry
- [ ] /blocks/ — auto-generated from voyager-blocks block.json files
- [ ] /patterns/ — visual gallery of all voyager/* + voyager-demo/* patterns
- [ ] GitHub repo links + open-source contribution guide

## Phase 4 — Recurring engagement

- [ ] Voyager Pulse hits live data instead of self-querying (Portal aggregate)
- [ ] Changelog feed (auto-generated from plugin releases)
- [ ] Blog: "Built with Voyager" weekly
- [ ] Embeddable demo widgets (badge → "We run on Voyager")

## Open questions

- Branding subtlety: how Voyager-Marketing-co-branded vs how product-only?
  (Sibling voyagermark exists, but visitors to the demo might not know the
  agency context.)
- Pulse data source: self-query (current, fine) vs Portal aggregate (more
  impressive numbers, more wiring). Defer until Phase 4.
