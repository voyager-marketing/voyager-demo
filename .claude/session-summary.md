# Session summary — 2026-07-25 (TK-2167)

## Completed task

- **TK-2167 — Demo design polish + motion pass (gate lifted — audit folded in)**
  — PARTIAL. Resumed an in-flight task whose work was already sitting in an
  unreviewed PR.
- PR: https://github.com/voyager-marketing/voyager-demo/pull/12

## What this session found before writing any code

TK-2167 read as `Agent State: failed` in Notion, but nothing had ever failed in
code. The sequence was:

1. **2026-07-19** — Autonomy Planner triaged it, wrote a prose KB "plan" page,
   logged "Planned 4 sub-task(s)", set awaiting-review. **No sub-task records
   were ever emitted** — the KB page only describes a 4-way split in prose.
2. **2026-07-19 → 21** — a Claude Code session claimed it, did real work,
   committed `e54e185`, and opened PR #12 — then stopped without running the
   Stop Protocol. No Notion write-back, no GitHub URL, no Discoveries entry,
   no PR labels, and the `.claude/session-summary.md` it committed was
   **TK-2170's**, swept in from the previous session's untracked file.
3. **2026-07-22** — because the task still read `dispatch` + `Up Next`, the
   managed orchestrator re-grabbed it, triaged "clear-spec" off the planner's
   note, and dispatched an executor that rejected in 2 seconds:
   `rejected-no-scope` — no `declaredScope` on the task. Agent State → failed.

That third step recurs on every pickup until the task leaves the queue.

## Work completed this session

- **Reduced-motion defect fixed** (`assets/css/custom.css`). The parent theme
  applies `voyager-reveal-up` via `animation-timeline: view()` to every direct
  child of `.has-scroll-reveal`, and its own reduced-motion block never covers
  the reveal keyframes — so the entrance ran regardless of user preference.
  PR #12's body claimed "both tiers respect reduced-motion"; that was false for
  the parent tier. The child theme now opts its own pages out for both tiers.
- **Deliberate GSAP layer.** `is-style-animate-fade-up` on 9 nested card grids
  across tech-capabilities / agent-system / bindings-showcase / tech-ecosystem.
  Applied to nested grids only — the parent's CSS reveal already owns every
  direct child of `<main>`, so putting GSAP there would have had two systems
  driving the same opacity/transform.
- **Token pass on the reel.** 46 `#ffffff15` one-offs → `border-hair` preset;
  all `12px` radii → `--wp--custom--voyager--radius--3` (the DS scale caps at
  6px). Verified 0 residual in rendered output.
- **VD-5 residual caught.** `patterns/tech-ecosystem.php` still credited the
  parent theme with "GSAP animations" in both body copy and a chip — the exact
  claim VD-5 exists to kill, missed by the earlier commit and visible on the
  front page. Now "native scroll-reveal motion" / "Native scroll reveal".

## Discoveries

- **`voyager/animated-section` is a broken hybrid.** Its `save()` emits
  `data-animation` / `data-duration` / `data-ease`, but `frontend.js` reads
  `dataset.animationType` / `animationDuration` / `animationEase` — names that
  are never written. Every instance silently falls back to defaults, and since
  `style.scss` hides the block via `.animation-<type>` while nothing ever adds
  the `animation-complete` class the CSS expects, `gsap.from()` tweens from
  opacity 0 to a computed opacity of 0. Content stays invisible. Same family as
  the audit's VB-1 findings, on a block the audit did not flag. Avoided; used
  the `is-style-animate-*` block styles instead.
- **Entrance-animation CSS without the GSAP runtime hides content.**
  `inc/entrance-animations.php` enqueues its stylesheet whenever the built CSS
  exists but gates the script on `voyager_blocks_gsap_is_vendored()`. The
  stylesheet sets `opacity: 0` for FOUC prevention and the runtime is what
  restores it. The file's own comment claims this degrades to
  "visible-but-unanimated rather than broken" — it is the opposite. Fix belongs
  upstream: gate the stylesheet on the same vendored check.
- **Local voyager-blocks cannot demonstrate motion.** The install is an unbuilt
  v2.2.3 source checkout with no `build/` directory, so
  `voyager_blocks_register_all()` returns early and registers **zero** blocks;
  GSAP is not vendored and no entrance assets exist. Repairing it is blocked on
  credentials: `npm install` fails against `npm.pkg.github.com` for the private
  `@voyager-marketing/design-system` package — `.npmrc` wants `NODE_AUTH_TOKEN`
  and no user `.npmrc` exists.
- `page-platform-architecture.php` credits **Voyager Core** with "GSAP entrance
  animations". Stale — `entrance-animations.php` documents its own April 2026
  migration to voyager-blocks. Left unedited (outside the reel, different error
  from VD-5); logged as a candidate task.
- Earlier concern about `var:preset|spacing|30..70` not resolving was checked
  and is **unfounded** — all nine spacing presets have definitions in rendered
  CSS.

## Fitness

PASS — `php -l` clean across all theme PHP, `theme.json` parses, all patterns
carry Title + Slug. Render check on local: HTTP 200, 9 animate classes present,
0 residual `#ffffff15`, 29 border-hair refs, 35 radius-token refs, 0 leaked
block markup, `custom.css` enqueued.

## Acceptance criteria status

| Criterion | Status |
|---|---|
| Reel animates with Voyager Blocks | markup landed, **live motion unverified** (plugin unbuilt) |
| Reduced-motion honored | PASS — fixed + screenshot evidence |
| Zero one-off color/size values | **PARTIAL** — color/radius done; inline rem font sizes remain |
| No parent-theme GSAP claims | PASS — residual caught and fixed |
| Before/after screenshots | PASS — front, showcase, mobile, reduced-motion |
| Lighthouse before/after | **NOT RUN** — not installed; no baseline was ever captured |

## Next dispatch

TK-2162 MCP playground (P2), TK-2165/2166 (P3) — all still `awaiting-human`
with planner-written plans from 2026-07-19 that need Ben's review before an
agent should act on them.
