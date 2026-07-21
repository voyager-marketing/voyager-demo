# Session summary — 2026-07-19 (TK-2170)

## Completed task

- **TK-2170 — Pre-launch bindings gate: activate or honestly degrade
  voyager/conditional + voyager/notion (VD-1)** — DONE
- PR: https://github.com/voyager-marketing/voyager-demo/pull/11

## Per-source decisions (acceptance requirement)

- **voyager/notion** → honest degradation, self-adapting. Gate is the
  `notion_bindings` feature flag + encrypted API token + database map —
  all absent locally; production enablement needs operator credentials.
  The bindings-showcase card + Live Notion Demo section now branch on
  `voyager_demo_binding_live()`: live markup when registered, visible
  "switched off on this install" notice when not. Flips to live
  automatically when credentials land — no code change needed.
- **voyager/conditional** → honest degradation + upstream fix filed.
  NOT config: voyager-blocks never `require`s `inc/conditional-bindings.php`
  (one-line bug — every other bindings file is in the include block,
  voyager-blocks.php:535-552). Candidate task for voyager-blocks;
  demo-side inactive-notice banner meanwhile.

## Launch gate

`wp voyager-demo check-bindings` — scans theme markup for consumed
voyager/* sources vs the live registry; exit 1 on silent fallback.
Current: 6 ACTIVE, 2 DEGRADED-AWARE, 0 failures.

## Discoveries

- The audit's "config/feature-gated" description of voyager/conditional
  was half-right — it's a missing require, not a gate. Corrected.
- Library-only patterns (demo-automation, demo-personalization) carry
  inactive-source banners so editor insertion can't fake liveness.

## Fitness

PASS — php -l clean, theme.json parses. Render check: all "Loading from
Notion…" strings gone, honest notices render, no leaked block markup.

## Next dispatch

Queue: TK-2167 design polish (P2), TK-2162 MCP playground (P2),
TK-2165/2166 (P3) — all planner-claimed awaiting-human.
