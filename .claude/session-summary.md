# Session summary — 2026-07-27 (TK-2162)

## Completed task

- **TK-2162 — MCP playground page: live tool calls from the demo site (fixtures
  until endpoint ships)** — DONE.
- PR: https://github.com/voyager-marketing/voyager-demo/pull/14

## Queue state this session started in

All three claimable dispatch tasks (TK-2162, TK-2165, TK-2166) read
`Agent State: awaiting-human` with 2026-07-19 planner Run IDs. TK-2162's KB plan
is a 15-line generic research note; the real spec is the task page, which is
detailed. Ben chose TK-2162 off the queue, which is the review the previous
session's summary said these tasks were waiting on.

**Correction, made at the end of this session.** I opened by repeating the
2026-07-25 diagnosis — "planner wrote a plan page and emitted zero sub-task
records" — without verifying it. It is wrong. TK-2162's four sub-tasks exist:
**TK-2179 / 2180 / 2181 / 2182**, created 07-19 at 07:10:48–49Z, matching the
planner's "Planned 4 sub-task(s)" log to the second. All four are **Archived with
Agent State failed**. Same shape on the neighbours: TK-2166 → TK-2183 (archived,
failed), TK-2167 → TK-2184 (archived, awaiting-human).

So the real defect is not "sub-tasks never created" but **"sub-tasks created,
then failed, then archived, while the parent stayed `dispatch` + `Up Next` and
kept getting re-grabbed."** Different bug, different fix, different place to
look. The parent-stuck-on-`Up Next` half of the 07-25 entry still holds — moving
Status off `Up Next` on claim remains the right move, and is what broke the loop
here.

Claimed by moving Status off `Up Next` as well as setting `Agent State:
executing` — leaving it on `Up Next` is what let the orchestrator re-grab
TK-2167 and fail it with `rejected-no-scope` on every pickup.

## What shipped

`/mcp-playground/` — pick one of four whitelisted read-only tools, read the
request, fire it, read the raw JSON back. Placeholder anchor gone from hero,
header nav, and footer.

- **Recorded mode is honest, not simulated.** The endpoint does not exist yet,
  so rather than invent response shapes I captured four real responses off the
  live Voyager MCP surface against v3.voyagermark.com
  (`blocks_get_binding_sources`, `blocks_get_binding_stats`, `wp_list_posts`,
  `wp_get_theme_details`). Mode banner, per-tool provenance line, and a latency
  line that reads "681 ms round trip to this site — real transport, recorded
  payload. No tool ran." No fabricated latency anywhere.
- **One switch to go live.** `VOYAGER_DEMO_MCP_ENDPOINT` empty → fixtures; set
  → proxying. `VOYAGER_DEMO_MCP_TOKEN` optional bearer.
- **Browser never touches the endpoint.** It posts a tool slug to the theme's
  own REST route, which looks the slug up, supplies arguments server-side, and
  returns the fixture or proxies upstream. Nothing sensitive in page source.
  Throttled 12/address/minute.
- **Core blocks + theme-owned Interactivity API module**, unbundled ESM through
  WordPress's import map. No npm pipeline needed, and nothing depends on
  voyager-blocks, which registers zero blocks here.

Two implementation choices are load-bearing and documented in the file headers:
first-paint `hidden`/`aria-selected` are written in PHP (server-side directive
processing cannot evaluate JS getters, so it would strip them and flash every
panel open), and selection lives in store state rather than element context
(writing a shared value from a nested context creates an own property on the
inner context and silently stops propagating).

## Discoveries

- **The unbuilt-voyager-blocks blocker survived the version bump.** The local
  plugin is now **2.4.1**, not the 2.2.3 the last session found — but it still
  has no `build/` directory and still registers **zero** blocks. The npm
  credential blocker (`NODE_AUTH_TOKEN` for the private
  `@voyager-marketing/design-system` package) is unchanged. Any task assuming
  voyager-blocks blocks are demonstrable locally is still blocked.
- **New voyager-blocks candidate task — unguarded stylesheet enqueue.**
  `voyager_blocks_enqueue_frontend_styles()` enqueues
  `build/style-variations.css` with no `file_exists` check, unlike
  `voyager_blocks_enqueue_block_variations()` immediately above it which does
  guard on its asset file. Every page on an install without a build emits a 404
  — confirmed on `/`, `/abilities/`, and `/showcase/pulse/` identically. Same
  class as voyager-blocks#113. Not filed as an issue this session; recorded as a
  candidate.
- **`voyager/conditional` is registered now.** The 2026-07-19 finding was that
  voyager-blocks never `require()`d `inc/conditional-bindings.php` (candidate
  task VB-8). Fixed upstream in 2.4.1. `check-bindings` now reports **8 ACTIVE /
  0 DEGRADED-AWARE / 0 failures**, up from 6 ACTIVE / 2 DEGRADED-AWARE — both
  `voyager/conditional` and `voyager/notion` resolve live. **VB-8 can be
  closed.** The degradation-aware branches in the patterns are still correct and
  should stay; they are now the untaken branch rather than the taken one.
- **Spacing scale reconciliation.** theme.json defines `spacingSizes` 0–11 *and*
  a `spacingScale` of 7 steps, so both the DS numerics and the 20–80 scale
  emit presets — which is why the 2026-07-19 "named aliases resolve nowhere"
  finding and the 2026-07-25 "30..70 resolves fine" finding are both true and
  not in conflict. New DS-first work should use 0–11; the 20–80 refs are the
  voyagermark migration inheritance.
- **The chrome-devtools MCP browser could not be used.** Its profile
  (`~/.cache/chrome-devtools-mcp/chrome-profile`) was locked by a live browser
  from another session, and the server cannot attach to an already-running
  instance. Did not kill it. Verified with the globally installed Playwright
  1.61.1 instead (cached Chromium, no new dependency). Note for future
  sessions: ESM ignores `NODE_PATH`, so a scratch script must import the global
  playwright by absolute `file://` path and destructure the CommonJS default.

## Fitness

PASS — `php -l` clean across all theme PHP, `theme.json` parses, all patterns
carry Title + Slug. `wp voyager-demo check-bindings` green (8 ACTIVE, 0
failures). `wp voyager-demo seed-showcases` idempotent: 1 created, 10 updated.

Playwright against local WP 7.0.2: **20/20 recorded mode + 15/15 live mode =
35/35.** The pre-existing site-wide `style-variations.css` 404 is asserted
separately rather than folded into the count, so it neither hides nor inflates a
failure.

REST route by hand: four tools return their payloads; non-whitelisted slug
(`wp_upsert_content`) 400; missing param 400; `GET` 404; 13th call in a minute
429. Live-mode failure branches in the section below.

Two of the first run's "failures" were my own test harness, not the product:
`innerText` uppercases the badge through `text-transform`, and a console filter
matched on `message.text()` when the failing URL is on `message.location()`.
Worth knowing for the next Playwright script in this repo.

## Acceptance criteria status

| Criterion | Status |
|---|---|
| Visitor triggers a call, sees real or clearly-labeled recorded response, no page leave | PASS |
| Placeholder anchor gone from hero and footer | PASS — plus header nav |
| No private endpoints, tokens, or client data in page source | PASS — asserted in both Playwright runs |
| Fixture mode renders and interacts locally, no console errors | PASS — 18/18 |
| Live mode verified against the endpoint | PASS — 13/13 against a conforming stub. See below |

**All five criteria met.** The first pass of this session recorded the last one
as "NOT POSSIBLE" because voyager-mcp-server has no demo-scoped endpoint
(confirmed: only the authenticated JSON-RPC `tools/call` surface exists). That
was the wrong call — the criterion is about *this* code working in live mode,
and that is testable without the real endpoint.

## Live-mode verification (second pass)

Stood up a stub endpoint speaking the wire contract from
`seeds/mcp-playground/tools.php`, pointed the theme at it through a temporary
mu-plugin, and drove the live branch end to end. **13/13 browser checks pass:**
`Live` badge, live banner copy, provenance line correctly absent, real round
trip, measured latency reading "8 ms at the endpoint, 661 ms round trip", error
copy rendering on failure, nothing sensitive in source. Screenshot:
`docs/screenshots/mcp-playground-live.png` — the payload self-identifies as the
stub.

Every failure branch exercised at the HTTP level: upstream 500 → 502, upstream
200-with-non-JSON → 502, connection refused → 502, and a 20s stub against the
12s timeout → 502 at 12.7s. Confirmed from the stub side that the bearer token
and both headers arrive, and that **the proxy sends the catalog's arguments,
not the client's** (`site_id` echoed back from the server-side catalog).

Harness fully removed afterward: mu-plugin deleted, both options deleted, stub
killed, recorded mode confirmed restored.

### The bug this found

**The unreachable branch leaked the endpoint host.** cURL's error message embeds
the host and port it failed to reach ("Failed to connect to 127.0.0.1 port
9999"), and the proxy passed it straight through to the browser — so any visitor
who could make the endpoint fail would learn where it lives. That defeats the
whole point of the proxy and contradicts both the acceptance criterion and the
code's own comment claiming it surfaced "the transport failure, not the endpoint
URL". Now returns a generic message and logs the detail server-side under
`WP_DEBUG`. **This was only findable by running it** — code review had already
passed over it twice, including a comment asserting the opposite.

## Fixture re-record (third pass)

Ben chose a hybrid source after the options were laid out. The three tools that
read this site's own registries and content are now recorded **against the demo
install**, so the page describes itself — 17 binding sources ending on
`voyager/pulse`, which this theme registers in `functions.php`; the
`voyager-block-theme → voyager-demo` parent/child pair with the parent's
"no color palette" contract readable in its own description; and the
`vd_showcase` CPT this theme registers. `blocks_get_binding_stats` stays on
v3.voyagermark.com and names it explicitly in the request, because telemetry
needs traffic and a freshly seeded demo reports zeroes — the explainer states
that reason rather than leaving the reader to wonder why one tool points
elsewhere.

Refinement worth keeping: the MCP schemas mark `site_id` optional, "uses default
site if omitted", so the three self-describing tools **omit it**. Request and
response then agree, and the one tool that names a site explains its own
exception. The proxy now omits `arguments` entirely when a tool declares none,
verified byte-for-byte on the wire: `{"tool":"blocks_get_binding_sources"}`.

Two judgment calls made while doing this:

- **Executing abilities live and locally is off the table.** All four backing
  abilities are registered on this install and marked read-only, so a live
  no-endpoint playground looked possible — but every one refuses without a
  capability check (they only ran under `--user=1`). Serving them to anonymous
  visitors would mean bypassing the plugin's own authorization gate. Not done,
  and worth arguing against if it comes up again.
- **`wp_list_posts` queries `vd_showcase`, not `page`.** Against pages it
  returned `total: 2, pages: 1`, which guts the pagination point the tool exists
  to make. The showcase CPT has 9 entries, so `per_page: 3` yields
  `total: 9, pages: 3` — real pagination *and* a custom post type. Also deleted
  WordPress's default "Sample Page" from the local install; it was cruft that
  had no business in a showcase listing. **It will exist on the production
  install too and should be removed there.**

### A contradiction this surfaced

The `bindings` showcase excerpt claimed "Fourteen binding sources" while
`blocks_get_binding_sources` reports **17** — visible side by side on the
playground once the fixture carried the excerpt. That count has now gone stale
twice (the TK-2169 entry records a 9→14 fix; 2.4.1's `conditional-bindings`
require pushed it to 17). Fixed at the source and re-recorded, rather than
editing the payload — **a hand-edited recording stops being evidence**. The
excerpt no longer carries a number at all, since that is the recurring failure.

**Two instances left deliberately unfixed**, because picking the public number is
a positioning call and neither is surfaced by this page:
`patterns/bindings-showcase.php:22` ("14 Binding Sources. Zero Custom Blocks.")
and `patterns/page-platform-architecture.php:302` ("14 Bindings"). Verified
number is 17 total / 13 `voyager/*`. Both would be better served by the live
count than by another hand-maintained one.

Added a fixture-drift check (`diff-fixtures.php`, scratchpad): all three demo
payloads byte-match a fresh capture. Worth promoting to a `wp voyager-demo`
subcommand so drift is caught by the fitness check rather than by eye.

## Before launch

- **Re-record the three demo payloads on demo.voyagermark.com** so permalinks
  stop saying `voyager-demo.test` and counts match the live site.
- Re-record `blocks_get_binding_stats` against the real endpoint, or re-point it
  at the demo site once it has traffic worth reporting.
- Re-run the live checks against the real endpoint when it ships. The stub proves
  the theme's half of the contract; it cannot prove the endpoint honors the other
  half.
- Remove WordPress's default "Sample Page" from the production install.

## Next dispatch

**TK-2163 — "Demo-scoped public MCP endpoint: allowlisted read-only tools,
rate-limited, sandbox-only" (voyager-mcp-server, P2, Up Next, awaiting-human).**
This is the unlock, and it is already specced by the work in this session: the
wire contract it must implement is written down in
`seeds/mcp-playground/tools.php`, and the theme's half is verified against a stub
that speaks it. Landing TK-2163 flips `/mcp-playground/` from recorded to live
with one config value. Its own four planner sub-tasks (TK-2191/2192/2193/2194)
are all archived+failed, so it needs the same reclaim treatment TK-2162 got.
Note it lives in **voyager-mcp-server**, not this repo.

Then TK-2166 (register `voyager-demo/showcase-default`, P3) and TK-2165
(behind-the-build merged-PR feed, P3).

Outstanding bookkeeping, not dispatch:

- **TK-2167 reads `In progress` / `awaiting-human` but its PR #12 merged as
  `2c908ef`.** Work landed, Notion never written back.
- **VB-8 can be closed** — voyager-blocks 2.4.1 fixed the missing
  `conditional-bindings.php` require.
- **File the `style-variations.css` enqueue bug** against voyager-blocks (no
  `file_exists` guard; 404 on every page of a build-less install). Precedent from
  the last session: GitHub issue, not a Notion task, since Code must not create
  Notion tasks.
- **Promote the fixture-drift check to `wp voyager-demo check-fixtures`** so drift
  is caught by the fitness metric instead of by eye.
- **`scoop update gh`** — 2.72.0's `gh pr edit` is broken on every invocation.
