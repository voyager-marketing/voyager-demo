// Viewport shots of dist/<key>.html at given scroll positions, so scroll-driven layouts can be seen.
// Usage: node views.mjs <key> <width> <y,y,...>   (a y ending in "s" scrolls step N to the middle)
import pw from 'file:///C:/Users/B/scoop/apps/nodejs/current/bin/node_modules/playwright/index.js';
const [key, w, ys] = process.argv.slice(2);
const b = await pw.chromium.launch();
const p = await b.newPage({ viewport: { width: +w, height: +w > 600 ? 900 : 844 } });
await p.goto(new URL(`dist/${key}.html`, import.meta.url).href, { waitUntil: 'networkidle' });
await p.evaluate(() => document.fonts.ready);
for (const y of ys.split(',')) {
  if (y.endsWith('s')) await p.evaluate((n) => document.querySelector(`.step[data-s="${n}"]`).scrollIntoView({ block: 'center' }), y.slice(0, -1));
  else await p.evaluate((v) => window.scrollTo(0, v), +y);
  await p.waitForTimeout(500);
  const path = new URL(`dist/shots/${key}-${w}-v${y}.png`, import.meta.url).pathname.slice(1);
  await p.screenshot({ path });
  console.log(path, await p.evaluate(() => document.querySelector('.pv')?.dataset.step));
}
await b.close();
