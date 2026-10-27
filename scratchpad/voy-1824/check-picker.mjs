// Check a picker page (local file or live URL): three named directions, a 1440 and a 390 frame each,
// every frame rendering its document with no script errors, and the five patterns in each direction.
// Usage: node check-picker.mjs [url]   (default: dist/picker.html)
import pw from 'file:///C:/Users/B/scoop/apps/nodejs/current/bin/node_modules/playwright/index.js';
const url = process.argv[2] || new URL('dist/picker.html', import.meta.url).href;
const SLUGS = ['cta-band', 'proof-strip', 'logo-marquee', 'closing-cta', 'contact-section'];
const b = await pw.chromium.launch();
let fail = 0;
for (const width of [1440, 390]) {
  const p = await b.newPage({ viewport: { width, height: 900 } });
  const errors = [];
  p.on('pageerror', (e) => errors.push(e.message));
  const res = await p.goto(url, { waitUntil: 'networkidle' });
  for (let y = 0; y < 30000; y += 800) { await p.evaluate((v) => window.scrollTo(0, v), y); await p.waitForTimeout(60); }
  await p.waitForTimeout(1500);
  const out = await p.evaluate((SLUGS) => [...document.querySelectorAll('section.dir')].map((s) => ({
    name: s.querySelector('h2')?.textContent,
    frames: [...s.querySelectorAll('.vp')].map((vp) => {
      const f = vp.querySelector('iframe'); const d = f.contentDocument;
      return { w: +vp.dataset.w, label: vp.parentElement.querySelector('.bar').firstChild.textContent.trim(), docW: d?.documentElement.scrollWidth, docH: d?.documentElement.scrollHeight, inner: f.contentWindow?.innerWidth, pats: SLUGS.filter((x) => d?.querySelector(`[data-pattern="${x}"]`)).length, boxH: vp.clientHeight, boxW: vp.clientWidth };
    }),
  })), SLUGS);
  console.log(`@${width} status=${res.status()} errors=${errors.length ? errors.join(' | ') : 'none'} pageOverflow=${await p.evaluate(() => document.documentElement.scrollWidth > innerWidth)}`);
  for (const d of out) {
    console.log(' ', d.name, JSON.stringify(d.frames));
    if (d.frames.length !== 2 || !d.frames.some((f) => f.w === 1440) || !d.frames.some((f) => f.w === 390)) fail++;
    for (const f of d.frames) { if (!(f.docH > 1000) || f.pats !== 5 || f.inner !== f.w || f.docW > f.w) fail++; }
  }
  if (out.length !== 3 || errors.length) fail++;
  await p.evaluate(() => window.scrollTo(0, 0));
  await p.screenshot({ path: new URL(`dist/shots/picker-${width}.png`, import.meta.url).pathname.slice(1) });
  await p.close();
}
await b.close();
console.log(fail ? `FAIL (${fail})` : 'PASS');
process.exit(fail ? 1 : 0);
