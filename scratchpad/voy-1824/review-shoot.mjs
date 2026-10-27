// Pattern-default review: shoot each of the five patterns on Twenty Twenty-Five (the pack's local
// site) and on demo's theme (live /open-blocks/), at 1440 and 390, and measure what the fix list cites.
// Usage: node review-shoot.mjs            (one browser, sequential)
import { writeFileSync, mkdirSync } from 'node:fs';
import pw from 'file:///C:/Users/B/scoop/apps/nodejs/current/bin/node_modules/playwright/index.js';

const out = new URL('dist/review/', import.meta.url);
mkdirSync(out, { recursive: true });
const P = (f) => new URL(f, out).pathname.slice(1);

const MARK = {
  'cta-band': 'Ready to get started?',
  'proof-strip': 'Licensed and insured',
  'logo-marquee': 'Some of the teams we work with',
  'closing-cta': 'Ready when you are.',
  'contact-section': 'Send us a note',
};
const SITES = {
  tt5: (slug) => `http://127.0.0.1:9400/voyager-open/${slug}/`,
  demo: () => 'https://demo.voyagermark.com/open-blocks/',
};

const measure = (mark) => {
  const secs = [...document.querySelectorAll('section')].filter((s) => s.textContent.includes(mark));
  if (!secs.length) return null;
  const el = secs.sort((a, b) => a.textContent.length - b.textContent.length)[0];
  el.setAttribute('data-review', '1');
  const r = (n) => { const b = n.getBoundingClientRect(); return { x: Math.round(b.x), y: Math.round(b.y), w: Math.round(b.width), h: Math.round(b.height) }; };
  const cs = (n) => getComputedStyle(n);
  const box = r(el);
  const heads = [...el.querySelectorAll('h1,h2,h3,h4,h5,h6')].map((h) => ({ tag: h.tagName, text: h.textContent.trim().slice(0, 40), fs: cs(h).fontSize, ff: cs(h).fontFamily.split(',')[0], ...r(h) }));
  const paras = [...el.querySelectorAll('p')].map((p) => ({ text: p.textContent.trim().slice(0, 40), fs: cs(p).fontSize, color: cs(p).color, align: cs(p).textAlign, ...r(p) }));
  const btns = [...el.querySelectorAll('.wp-block-button__link')].map((a) => ({ text: a.textContent.trim(), href: a.getAttribute('href'), target: a.getAttribute('target'), fs: cs(a).fontSize, ...r(a) }));
  const groups = [...el.querySelectorAll('.wp-block-buttons')].map((g) => ({ justify: cs(g).justifyContent, ...r(g) }));
  const imgs = [...el.querySelectorAll('img')].map((i) => ({ src: i.getAttribute('src'), alt: i.alt, ok: i.complete && i.naturalWidth > 0, ...r(i) }));
  const lis = [...el.querySelectorAll('li')].map((l) => ({ text: l.textContent.trim(), ...r(l) }));
  const cols = [...el.querySelectorAll('.wp-block-column')].map((c) => r(c));
  return {
    box, padding: cs(el).padding, borderTop: cs(el).borderTopWidth + ' ' + cs(el).borderTopStyle + ' ' + cs(el).borderTopColor,
    color: cs(el).color, bg: cs(el).backgroundColor, scrollW: el.scrollWidth, clientW: el.clientWidth,
    docOverflow: document.documentElement.scrollWidth > innerWidth, heads, paras, btns, groups, imgs, lis, cols,
  };
};

const browser = await pw.chromium.launch();
const results = {};
for (const site of Object.keys(SITES)) {
  for (const width of [1440, 390]) {
    const page = await browser.newPage({ viewport: { width, height: 900 }, deviceScaleFactor: 1 });
    let loaded = '';
    for (const slug of Object.keys(MARK)) {
      const url = SITES[site](slug);
      if (url !== loaded) {
        await page.goto(url, { waitUntil: 'networkidle' });
        await page.addStyleTag({ content: '*,*::before,*::after{animation:none!important;transition:none!important}' });
        await page.evaluate(() => document.fonts.ready);
        loaded = url;
      }
      await page.evaluate(() => document.querySelectorAll('[data-review]').forEach((n) => n.removeAttribute('data-review')));
      const m = await page.evaluate(measure, MARK[slug]);
      const key = `${site}-${width}-${slug}`;
      if (!m) { results[key] = { missing: true, url }; console.log(key, 'NOT FOUND'); continue; }
      m.fonts = await page.evaluate(() => [...document.fonts].filter((f) => f.status === 'loaded').map((f) => f.family).filter((v, i, a) => a.indexOf(v) === i));
      results[key] = { url, ...m };
      await page.locator('[data-review]').screenshot({ path: P(`${key}.png`) });
      console.log(key, JSON.stringify({ box: m.box, heads: m.heads.map((h) => `${h.tag} ${h.fs} ${h.ff}`), btns: m.btns.map((b) => `${b.text}@${b.x},${b.y} ${b.w}w`), imgsBroken: m.imgs.filter((i) => !i.ok).length, overflow: m.docOverflow }));
    }
    await page.close();
  }
}
await browser.close();
writeFileSync(new URL('metrics.json', out), JSON.stringify(results, null, 1));
