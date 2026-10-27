// Compare dist/pub/<key>.html (the line-wrapped publish copy) with dist/<key>.html (the reviewed page):
// same height and width at 1440 and 390, all five patterns present, no script errors.
// Usage: node check-pub.mjs [baseUrl]   (baseUrl: check live pages, e.g. https://docs.voyagermark.com/)
import pw from 'file:///C:/Users/B/scoop/apps/nodejs/current/bin/node_modules/playwright/index.js';
const SLUG = { product: 'open-blocks-a-product-page', editorial: 'open-blocks-b-field-guide', build: 'open-blocks-c-watch-the-build' };
const live = process.argv[2];
const SLUGS = ['cta-band', 'proof-strip', 'logo-marquee', 'closing-cta', 'contact-section'];
const b = await pw.chromium.launch();
let fail = 0;
const measure = async (url, width) => {
  const p = await b.newPage({ viewport: { width, height: 900 } });
  const errors = [];
  p.on('pageerror', (e) => errors.push(e.message));
  const res = await p.goto(url, { waitUntil: 'networkidle' });
  await p.evaluate(() => document.fonts.ready);
  const m = await p.evaluate((S) => ({ h: document.documentElement.scrollHeight, w: document.documentElement.scrollWidth, pats: S.filter((x) => document.querySelector(`[data-pattern="${x}"]`)).length, fonts: [...document.fonts].filter((f) => f.status === 'loaded').length }), SLUGS);
  await p.close();
  return { status: res?.status(), errors: errors.length, ...m };
};
for (const key of Object.keys(SLUG)) {
  for (const width of [1440, 390]) {
    const ref = await measure(new URL(`dist/${key}.html`, import.meta.url).href, width);
    const got = await measure(live ? `${live}${SLUG[key]}/` : new URL(`dist/pub/${key}.html`, import.meta.url).href, width);
    const ok = got.errors === 0 && got.pats === 5 && got.w === width && Math.abs(got.h - ref.h) <= 4 && (!live || got.status === 200);
    if (!ok) fail++;
    console.log(ok ? 'ok  ' : 'FAIL', key, width, 'ref', JSON.stringify(ref), 'got', JSON.stringify(got));
  }
}
await b.close();
console.log(fail ? `FAIL (${fail})` : 'PASS');
process.exit(fail ? 1 : 0);
