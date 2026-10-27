// Stack the review shots into contact sheets: one per theme at 1440, one with both themes at 390.
import { readFileSync, writeFileSync } from 'node:fs';
import pw from 'file:///C:/Users/B/scoop/apps/nodejs/current/bin/node_modules/playwright/index.js';

const dir = new URL('dist/review/', import.meta.url);
const SLUGS = ['cta-band', 'proof-strip', 'logo-marquee', 'closing-cta', 'contact-section'];
const THEME = { tt5: 'Twenty Twenty-Five (WP 7.1.3, local)', demo: 'voyager-demo theme (live demo.voyagermark.com, webfonts not yet deployed)' };
const img = (k) => `data:image/png;base64,${readFileSync(new URL(`${k}.png`, dir)).toString('base64')}`;
const css = `body{margin:0;background:#E9E7F0;font:500 15px/1.3 ui-monospace,Consolas,monospace;color:#201C3A}
.sheet{padding:24px}.h{font:600 20px/1.2 system-ui,sans-serif;margin:0 0 18px}
.row{margin-bottom:22px}.lab{margin:0 0 6px;font-weight:600}.lab span{font-weight:400;color:#5B5675}
.row img{display:block;outline:1px solid #B9B4CC;background:#fff}
.cols{display:flex;gap:28px;align-items:flex-start}.cols>div{width:390px}`;

const sheets = [];
for (const t of ['tt5', 'demo']) {
  sheets.push({ name: `sheet-${t}-1440`, width: 1488, html: `<div class="sheet"><p class="h">${THEME[t]} at 1440</p>${SLUGS.map((s) => `<div class="row"><p class="lab">voyager-open/${s}</p><img src="${img(`${t}-1440-${s}`)}"></div>`).join('')}</div>` });
}
sheets.push({ name: 'sheet-both-390', width: 856, html: `<div class="sheet"><p class="h">Both themes at 390</p><div class="cols">${['tt5', 'demo'].map((t) => `<div><p class="lab">${t === 'tt5' ? 'Twenty Twenty-Five' : 'voyager-demo'}</p>${SLUGS.map((s) => `<div class="row"><p class="lab"><span>${s}</span></p><img src="${img(`${t}-390-${s}`)}"></div>`).join('')}</div>`).join('')}</div></div>` });

const browser = await pw.chromium.launch();
for (const s of sheets) {
  const page = await browser.newPage({ viewport: { width: s.width, height: 800 } });
  await page.setContent(`<!doctype html><style>${css}</style>${s.html}`, { waitUntil: 'load' });
  await page.screenshot({ path: new URL(`${s.name}.png`, dir).pathname.slice(1), fullPage: true });
  console.log(s.name, await page.evaluate(() => document.documentElement.scrollHeight));
  await page.close();
}
await browser.close();
writeFileSync(new URL('sheets.txt', dir), sheets.map((s) => s.name).join('\n'));
