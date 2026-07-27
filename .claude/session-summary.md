# Session summary — 2026-07-27 (TK-2162)

## Completed task

- **TK-2162 — MCP playground page: live tool calls from the demo site (fixtures
  until endpoint ships)** — DONE.
- PR: https://github.com/voyager-marketing/voyager-demo/pull/14

## Queue state this session started in

All three claimable dispatch tasks (TK-2162, TK-2165, TK-2166) read
`Agent State: awaiting-human` with 2026-07-19 planner Run IDs — the defect the
last session documented: the Autonomy Planner wrote prose KB "plan" pages,
logged "Planned N sub-task(s)", and emitted no sub-task records. TK-2162's KB
plan is a 15-line generic research note; the real spec is the task page, which
is detailed. Ben chose TK-2162 off the queue, which is the review the previous
session's summary said these tasks were waiting on.

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

Playwright against local WP 7.0.2: **18/18 recorded mode + 13/13 live mode =
31/31.** The pre-existing site-wide `style-variations.css` 404 is asserted
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

## Before launch

- **Re-record the payloads against the real public endpoint.** If its envelope
  differs from `{abilityVersion, data}` they go stale silently — the UI cannot
  detect that, only a re-record can.
- Re-run the live checks against the real endpoint when it ships. The stub
  proves the theme's half of the contract; it cannot prove the endpoint honors
  the other half.

## Next dispatch

TK-2166 (register `voyager-demo/showcase-default`, P3) and TK-2165
(behind-the-build merged-PR feed, P3) — both still `awaiting-human` from the
same 2026-07-19 planner defect, both needing the same one-line judgment Ben made
for TK-2162 this session.

Also outstanding bookkeeping, not dispatch: **TK-2167 reads `In progress` /
`awaiting-human` but its PR #12 merged as `2c908ef`.** Work landed, Notion never
written back.
