// Write each direction to dist/<key>.html and screenshot it full page at 1440 and 390.
// Usage: node shoot.mjs [key ...]   (no keys = every direction)
import { writeFileSync, mkdirSync } from 'node:fs';
import pw from 'file:///C:/Users/B/scoop/apps/nodejs/current/bin/node_modules/playwright/index.js';
import { DIRECTIONS } from './directions.mjs';
import { doc } from './shared.mjs';

const want = process.argv.slice(2);
const dist = new URL('dist/', import.meta.url);
mkdirSync(new URL('shots/', dist), { recursive: true });
const browser = await pw.chromium.launch();
for (const d of DIRECTIONS.filter((x) => !want.length || want.includes(x.key))) {
  const file = new URL(`${d.key}.html`, dist);
  writeFileSync(file, doc(d));
  for (const width of [1440, 390]) {
    const page = await browser.newPage({ viewport: { width, height: 900 } });
    const errors = [];
    page.on('pageerror', (e) => errors.push(e.message));
    await page.goto(file.href, { waitUntil: 'networkidle' });
    await page.addStyleTag({ content: '*{animation-play-state:paused!important}' });
    await page.evaluate(() => document.fonts.ready);
    const m = await page.evaluate(() => ({ h: document.documentElement.scrollHeight, w: document.documentElement.scrollWidth, fonts: [...document.fonts].filter((f) => f.status === 'loaded').map((f) => f.family).filter((v, i, a) => a.indexOf(v) === i) }));
    await page.screenshot({ path: new URL(`shots/${d.key}-${width}.png`, dist).pathname.slice(1), fullPage: true });
    console.log(d.key, width, JSON.stringify(m), errors.length ? 'ERRORS ' + errors.join(' | ') : 'no script errors');
    await page.close();
  }
}
await browser.close();
