// Screenshot dist/<key>.html in segments for review: node segs.mjs <key> <width> [segHeight]
import pw from 'file:///C:/Users/B/scoop/apps/nodejs/current/bin/node_modules/playwright/index.js';
const [key, w, sh] = process.argv.slice(2);
const width = +w;
const seg = +(sh || (width > 600 ? 1000 : 1400));
const b = await pw.chromium.launch();
const p = await b.newPage({ viewport: { width, height: 900 } });
await p.goto(new URL(`dist/${key}.html`, import.meta.url).href, { waitUntil: 'networkidle' });
await p.addStyleTag({ content: '*{animation-play-state:paused!important}' });
await p.evaluate(() => document.fonts.ready);
const h = await p.evaluate(() => document.documentElement.scrollHeight);
let i = 0;
for (let y = 0; y < h; y += seg) {
  const path = new URL(`dist/shots/${key}-${width}-s${i}.png`, import.meta.url).pathname.slice(1);
  await p.screenshot({ path, fullPage: true, clip: { x: 0, y, width, height: Math.min(seg, h - y) } });
  i++;
}
console.log(key, width, h, i, 'segments');
await b.close();
