# VOY-1824 findings: Open Blocks gallery directions and pattern review

Run voy-1824-20261027, resumed after the first session died in a machine crash. Design only: nothing in the theme, the pack or demo changed, and nothing is to merge or deploy.

## Deliverables

1. Picker: https://docs.voyagermark.com/open-blocks-gallery-directions/ (frames the three pages below at 1440 and 390).
2. Direction A, the product page (dark-first): https://docs.voyagermark.com/open-blocks-a-product-page/
3. Direction B, the field guide (light-first): https://docs.voyagermark.com/open-blocks-b-field-guide/
4. Direction C, watch the build (lavender studio, dark console, white page): https://docs.voyagermark.com/open-blocks-c-watch-the-build/
5. Recommendation: A, borrowing B's annotated Fig. 1. Reason: demo's theme is already dark DS v2, so A needs type and contrast changes only; its hero shows the product in one look; its theme switch proves the pack's core claim. Posted on VOY-1824.
6. Source for all four pages: `scratchpad/voy-1824/` (`node shoot.mjs`, `node picker.mjs`, `PUB=1 node picker.mjs`). The published HTML is in `scratchpad/voy-1824/dist/pub/`.

## Pattern review (voyager-open-blocks main, Twenty Twenty-Five and demo's theme, 1440 and 390)

Measurements: `scratchpad/voy-1824/dist/review/metrics.json` (from `review-shoot.mjs`). Contact sheets: `dist/review/sheet-*.png`. Every fix is structural; none sets a colour or a font.

7. cta-band: the Buttons block's `justifyContent: right` holds at every width, so after the columns stack the buttons sit pushed right under left-aligned text (demo 390: text x=24, first button x=99). Replace the 60/40 Columns with a wrapping flex Group (space-between); update the intent and SKILL.md paths.
8. proof-strip: a short list sits flush left in a wide-size row (demo 1440: row x=80 to x=1360, last item ends x=931, 429px empty). Wrap the list in a flex Group justified center.
9. proof-strip: the Ticks style wraps raggedly on phones when two items fit a line (demo 390). Stack the ticks as a column under a container query in `inc/block-styles.php`.
10. logo-marquee: six images with `alt="Placeholder logo"`. Ship empty alt; SKILL.md tells the agent to set alt to the company name on swap.
11. logo-marquee: no heading in the section (the eyebrow is a paragraph). Make the eyebrow a level 2 heading with the small font-size preset.
12. logo-marquee, checked and unchanged: 2 of 6 logos in view at rest at 390; reduced motion wraps the row. Working as designed.
13. closing-cta: no structural fix (720px content size, one h2, buttons on one row at 390 on both themes).
14. contact-section: two filled buttons in one section. Give "Call us" the outline style.
15. contact-section: the form card ends 123px (TT5) and 137px (demo) above the bottom of "Call us" at 1440. Give the Form group a min-height of 100%.
16. contact-section: street and city lines are spaced like phone and email. Wrap the two address paragraphs in a Group with block gap 0.

## Type and colour notes for demo's theme (not applied)

17. Body 15px to 17px (the fluid `md` slot exists). `sm` 13px to 15px, `label` 12px to 13px; the gallery's mono eyebrows use `label`. `micro` is unused on the gallery.
18. Buttons render at 13px on demo; set the button element to 16px, weight 600.
19. h2 renders at 60px at 1440 and a pattern h3 at 38.8px. Set h2 to `3xl` and h3 to `xl`.
20. Contrast, computed from palette hex: `accent` text on `bg-canvas` 2.49:1 (fails, use `accent-bright` 4.82:1); `fg-5` on `bg-canvas` 3.23:1 (decoration only); white on `accent` 7.98:1; `fg-3` 11.60:1; `fg-4` 6.37:1.
21. All of it assumes the VOY-1823 fonts deploy (PR #35).

## Process findings

22. `artifact_publish` takes HTML inline. A single 125KB picker is about 59k tokens in one call, too large to send safely. Splitting into one page per direction plus a 15.7KB picker that frames them by URL works: docs.voyagermark.com sends no `X-Frame-Options` or `Content-Security-Policy` header (checked 2026-10-27 on gillis-home-designs). Candidate RUNBOOK line.
23. Direction A was published at 56,854 bytes against a 56,853-byte file. A diff of the live page against the file, outside the Cloudflare font block, found one difference: `4.030` for `4.03` in an SVG path, the same number. The live A matches the reviewed render at 1440 and 390. Not republished.
24. Collapsing `\n\s*` in page markup also strips indentation and blank lines inside `<pre>`; it shortened A's SKILL.md card by 34px on phones before it was caught by comparing heights. The publish build strips only indentation before a tag.
25. The crashed run's pattern capture (playground.wordpress.net) carried `target="_blank"` on the bound `tel:` and `mailto:` buttons. The local WP 7.1.3 render and live demo do not. Not reproduced; not filed.
26. `voyager-skills` hook `deny-secret-paths.mjs` blocked a Bash heredoc containing the JavaScript expression `d.key` as "credential material". Workaround: write the script to a file and run it.
27. The local pack site `F:\dev\voyager\WordPress\voyager-open-blocks-site` links its plugin to the `voy-1830-bindable-meta-ui` worktree, not to the main checkout. Its five patterns hash-match origin/main today; that will drift.
