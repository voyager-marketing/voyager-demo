// Shared pieces for the VOY-1824 picker: the pack's rendered pattern markup, core's layout
// rules (the subset these five patterns need), icons, and the facts every direction uses.
import { readFileSync } from 'node:fs';

const here = new URL('.', import.meta.url);
const rendered = JSON.parse(readFileSync(new URL('patterns.rendered.json', here), 'utf8'));
const assets = JSON.parse(readFileSync(new URL('assets.json', here), 'utf8'));

export const REPO = 'https://github.com/voyager-marketing/voyager-open-blocks';
export const RAW = 'https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main';
export const PLAYGROUND = `https://playground.wordpress.net/?blueprint-url=${RAW}/blueprint.json`;
export const pgFor = (slug) => `https://playground.wordpress.net/?blueprint-url=${RAW}/blueprints/${slug}.json`;
export const skillFor = (slug) => `${REPO}/blob/main/skills/voyager-open-${slug}/SKILL.md`;

export const esc = (s) => String(s).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');

export function icon(name, cls = 'ic') {
  const d = assets.icons[name];
  const paths = (Array.isArray(d) ? d : [d]).map((p) => `<path d="${p}"/>`).join('');
  return `<svg class="${cls}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">${paths}</svg>`;
}

const logoUri = (n) => 'data:image/svg+xml,' + encodeURIComponent(assets.logos[`logo-${n}`]);

// The five patterns as WordPress rendered them (WP 7.1.3, pack main, playground.wordpress.net seed data).
// Logo URLs are swapped for inline copies of the pack's own placeholder SVGs. That capture also carried
// target="_blank" on the bound tel:/mailto: buttons, which the local WP 7.1.3 and demo renders do not,
// so it is dropped. Nothing else changes.
// Each distinct render is stored once in REG and the page gets a token, so the picker carries every
// pattern once and expands the tokens in the browser. expand() does the same for standalone files.
export const REG = [];
export const expand = (s) => s.replace(/<!--PAT:(\d+)-->/g, (_, i) => REG[+i]);
export function pattern(slug, { copy = {} } = {}) {
  let html = rendered[slug];
  if (!html) throw new Error(`no markup for ${slug}`);
  html = html.replace(/src="[^"]*\/placeholders\/logo-(\d)\.svg"/g, (_, n) => `src="${logoUri(n)}"`);
  html = html.replace(/ target="_blank"/g, '');
  for (const [from, to] of Object.entries(copy)) {
    if (!html.includes(from)) throw new Error(`${slug}: "${from}" not in markup`);
    html = html.replace(from, to);
  }
  html = `<div class="wp-pattern" data-pattern="${slug}">${html.replace(/\n\s*/g, '')}</div>`;
  let i = REG.indexOf(html);
  if (i < 0) i = REG.push(html) - 1;
  return `<!--PAT:${i}-->`;
}

export const PATTERNS = [
  { slug: 'cta-band', name: 'CTA band', line: 'Heading and one line beside a primary button and a click-to-call button.', binds: ['phone', 'phone_link'] },
  { slug: 'proof-strip', name: 'Proof strip', line: 'Four credentials in a ticked row between two rules.', binds: [], style: 'Ticks' },
  { slug: 'logo-marquee', name: 'Logo marquee', line: 'A row of logos that drifts when it is wider than the screen, and holds still under reduced motion.', binds: [], style: 'Marquee' },
  { slug: 'contact-section', name: 'Contact section', line: 'Phone, email, address and hours from Site Data, beside a slot for your form.', binds: ['phone', 'email', 'address', 'address_locality', 'hours', 'phone_link', 'email_link'] },
  { slug: 'closing-cta', name: 'Closing CTA', line: 'A centered last word with a primary button and an email button.', binds: ['email_link'] },
];

export const PROMPT = 'Add the voyager-open/cta-band pattern to the end of the Services page. Rewrite the heading and the line of copy for that page, keep the click-to-call button bound to voyager/site-data phone_link, and validate the page with Block Runner before saving.';

export const CMD = {
  skills: 'npx skills add voyager-marketing/voyager-open-blocks',
  wesper: 'npx wesper collect --wp-path ./public --out site.context.json',
  assemble: 'npx block-runner assemble intent.json --json',
  validate: 'npx block-runner validate page.html --strict --json --context site.context.json',
  wp: 'wp plugin install voyager-open-blocks.zip --activate',
  composer: 'composer require voyager-marketing/voyager-open-blocks',
};

export const BIND_JSON = '{"source":"voyager/site-data","args":{"key":"phone_link"}}';

// Core's layout rules for these blocks, as WordPress 7.1 prints them, reduced to what the five
// patterns use. Values come from each direction's own presets (the --wp--preset-- variables).
export const WP_CORE_CSS = `
.wp-pattern{--wp--style--block-gap:var(--d-gap,1.2rem)}
.wp-pattern *,.wp-pattern *::before,.wp-pattern *::after{box-sizing:border-box}
.wp-pattern :where(h1,h2,h3,p,ul,figure){margin:0}
.wp-pattern :where(.is-layout-flow,.is-layout-constrained)>*{margin-block-start:var(--wp--style--block-gap);margin-block-end:0}
.wp-pattern :where(.is-layout-flow,.is-layout-constrained)>:first-child{margin-block-start:0}
.wp-pattern .is-layout-constrained>:where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width:var(--wp--style--global--content-size);margin-left:auto!important;margin-right:auto!important}
.wp-pattern .is-layout-constrained>.alignwide{max-width:var(--wp--style--global--wide-size)}
.wp-pattern .is-layout-flex{display:flex;flex-wrap:wrap;align-items:center;gap:var(--wp--style--block-gap)}
.wp-pattern .is-layout-flex>*{margin:0}
.wp-pattern .wp-block-columns{display:flex;flex-wrap:wrap!important;align-items:normal!important}
.wp-pattern .wp-block-columns.are-vertically-aligned-center{align-items:center!important}
.wp-pattern .wp-block-column{flex-grow:1;min-width:0;overflow-wrap:break-word}
.wp-pattern .wp-block-column.is-vertically-aligned-center{align-self:center;width:100%}
@media (min-width:782px){.wp-pattern .wp-block-columns{flex-wrap:nowrap!important}.wp-pattern .wp-block-column[style*=flex-basis]{flex-grow:0}}
@media (max-width:781px){.wp-pattern .wp-block-column{flex-basis:100%!important}}
.wp-pattern .wp-block-buttons{gap:var(--wp--style--block-gap)}
.wp-pattern .wp-block-buttons.is-content-justification-right{justify-content:flex-end}
.wp-pattern .wp-block-buttons.is-content-justification-center{justify-content:center}
.wp-pattern .wp-block-button__link{display:inline-block;text-align:center;text-decoration:none;cursor:pointer;word-break:break-word}
.wp-pattern .has-text-align-center{text-align:center}
.wp-pattern .has-small-font-size{font-size:var(--wp--preset--font-size--small)}
.wp-pattern .wp-block-image img{height:auto;max-width:100%;vertical-align:bottom}
.wp-pattern .wp-block-image.is-resized img{width:auto}
/* blockGap and contentSize the patterns set on their own blocks */
.wp-pattern[data-pattern=cta-band] .wp-block-columns{gap:var(--wp--preset--spacing--40) var(--wp--preset--spacing--60)}
.wp-pattern[data-pattern=contact-section] .wp-block-columns{gap:var(--wp--preset--spacing--50) var(--wp--preset--spacing--60)}
.wp-pattern[data-pattern=contact-section] .wp-block-column>.wp-block-group:not([style*=border]){--wp--style--block-gap:var(--wp--preset--spacing--20)}
.wp-pattern[data-pattern=closing-cta]>section{--wp--style--global--content-size:720px;--wp--style--block-gap:var(--wp--preset--spacing--40)}
.wp-pattern[data-pattern=proof-strip]>section{--wp--style--global--content-size:var(--wp--style--global--wide-size)}
.wp-pattern[data-pattern=logo-marquee]>section{--wp--style--block-gap:var(--wp--preset--spacing--40)}
.wp-pattern[data-pattern=logo-marquee] .is-style-voyager-open-marquee>.wp-block-group{display:flex;align-items:center;justify-content:center;gap:var(--wp--preset--spacing--60)}
/* the pack's two block styles, verbatim from inc/block-styles.php */
.wp-block-list.is-style-voyager-open-ticks{list-style:none;padding-inline-start:0;display:flex;flex-wrap:wrap;gap:.75em 2em}
.wp-block-list.is-style-voyager-open-ticks>li{position:relative;margin:0;padding-inline-start:1.6em}
.wp-block-list.is-style-voyager-open-ticks>li::before{content:"";position:absolute;inset-inline-start:0;top:.2em;width:1.1em;height:1.1em;background:currentColor;-webkit-mask:url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%23000%22%20stroke-width%3D%222.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22m4.5%2012.75%206%206%209-13.5%22%2F%3E%3C%2Fsvg%3E") center/contain no-repeat;mask:url("data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22none%22%20stroke%3D%22%23000%22%20stroke-width%3D%222.5%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%3E%3Cpath%20d%3D%22m4.5%2012.75%206%206%209-13.5%22%2F%3E%3C%2Fsvg%3E") center/contain no-repeat}
.wp-block-group.is-style-voyager-open-marquee{overflow:hidden;container-type:inline-size}
.wp-block-group.is-style-voyager-open-marquee>.wp-block-group{flex-wrap:nowrap;width:max-content;animation:voyager-open-marquee var(--voyager-open-marquee-duration,24s) ease-in-out infinite alternate}
.wp-block-group.is-style-voyager-open-marquee:hover>.wp-block-group,.wp-block-group.is-style-voyager-open-marquee:focus-within>.wp-block-group{animation-play-state:paused}
@keyframes voyager-open-marquee{from{transform:translateX(0)}to{transform:translateX(min(0px,calc(100cqw - 100%)))}}
@media (prefers-reduced-motion:reduce){.wp-block-group.is-style-voyager-open-marquee>.wp-block-group{animation:none;flex-wrap:wrap;width:auto}}
`;

// DS v2 type families. Every direction uses them; they differ in scale, weight and where mono shows.
export const FONTS = '<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@400;500&family=Space+Grotesk:wght@400;500;600;700&display=swap" rel="stylesheet">';

// Demo's spacing presets (theme.json spacingScale: medium 1.5rem, x1.5 per step), so the
// patterns get the spacing demo would give them.
export const SPACING = `--wp--preset--spacing--20:.444rem;--wp--preset--spacing--30:.667rem;--wp--preset--spacing--40:1rem;--wp--preset--spacing--50:1.5rem;--wp--preset--spacing--60:2.25rem;--wp--preset--spacing--70:3.375rem;--wp--preset--spacing--80:5.063rem;`;

// Collapse whitespace in CSS so the picker stays small. No value here depends on a run of spaces.
export const min = (css) => css.replace(/\/\*[\s\S]*?\*\//g, '').replace(/\s+/g, ' ').replace(/\s*([{};,>])\s*/g, '$1').replace(/;}/g, '}').trim();
export const CORE = min(WP_CORE_CSS);
export const head = (title) => `<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>${esc(title)}</title>${FONTS}`;
export function doc({ title, css, body, cls }) {
  return `${head(title)}<style>${CORE}${min(css)}</style></head><body class="${cls}">${expand(body)}</body></html>`;
}
