// Build dist/picker.html: one page, three directions, each as a live 1440 frame and a live 390 frame.
// Every pattern render and the shared core CSS are stored once; the page assembles each direction's
// document in the browser and hands it to its frames through srcdoc.
import { writeFileSync, mkdirSync } from 'node:fs';
import { DIRECTIONS } from './directions.mjs';
import { REG, CORE, FONTS, min, esc, expand, head } from './shared.mjs';

const ISSUE = 'https://linear.app/voyager-marketing/issue/VOY-1824/open-blocks-gallery-redesign-three-design-directions-for-open-blocks';
const NOTES = {
  product: 'Keeps demo’s dark palette. Needs the raised type scale (body 17px, small 15px, buttons 16px) and accent-bright for small accent text, because accent on the canvas is 2.49:1.',
  editorial: 'Needs a light section style demo does not have yet: fg-1 paper with bg-canvas ink. Muted text in fg-5 reads 5.55:1 on that paper. The biggest theme change of the three.',
  build: 'Needs a fg-2 studio ground and a dark console group style. Body ink reads 9.97:1, muted fg-5 4.88:1. The scroll sequence needs a small Interactivity API store.',
};

// PUB=1 writes the publish set instead: each direction as its own line-safe page for docs.voyagermark.com,
// and a small picker that frames those pages by URL. artifact_publish takes HTML inline, so four
// mid-sized pages are safer to send than one large one.
const PUB = !!process.env.PUB;
const DOCS = 'https://docs.voyagermark.com/';
const SLUG = { product: 'open-blocks-a-product-page', editorial: 'open-blocks-b-field-guide', build: 'open-blocks-c-watch-the-build' };
const page = (k) => `${DOCS}${SLUG[k]}/`;

// The big pieces travel as raw text in <script type="text/plain"> blocks, not JSON, so the file has
// short lines and no escaping noise: it is published by pasting it whole into artifact_publish.
// Two rules keep a text/plain block safe: no "<!--" (pattern tokens become {{PAT:n}}) and no "</script"
// (written as "<\/script" and restored in the browser).
const wrapLong = (s) => s.split('\n').map((l) => (l.length > 900 ? l.replace(/ (src|class|style|href)="/g, '\n$1="') : l)).join('\n');
const raw = (s) => wrapLong(s.replace(/<!--PAT:(\d+)-->/g, '{{PAT:$1}}').replace(/<\/script/g, '<\\/script'));
const cssLines = (s) => s.replace(/}/g, '}\n');
if (REG.some((r) => r.includes('<!--'))) throw new Error('a pattern render carries an HTML comment');
const meta = JSON.stringify(DIRECTIONS.map((d) => ({ key: d.key, letter: d.letter, name: d.name, title: d.title, cls: d.cls })));
const blocks = [
  `<script type="text/plain" id="x-core">\n${cssLines(CORE)}</script>`,
  ...REG.map((r, i) => `<script type="text/plain" id="x-p${i}">\n${raw(r)}\n</script>`),
  ...DIRECTIONS.map((d) => `<script type="text/plain" id="x-css-${d.key}">\n${cssLines(min(d.css))}</script>\n<script type="text/plain" id="x-body-${d.key}">${raw(d.body.replace(/\n[ \t]+</g, '\n<'))}\n</script>`),
].join('\n');

const css = min(`
:root{--paper:#F4F2FA;--paper2:#E6E3F2;--card:#fff;--ink:#08071A;--ink3:#342D5A;--mute:#625E7C;--rule:#C7C3DA;--accent:#9B1750;--violet:#7238DD;--ok:#2BC678;
--f-display:'Space Grotesk','Helvetica Neue',Arial,sans-serif;--f-body:'Inter','Helvetica Neue',Arial,sans-serif;--f-mono:'JetBrains Mono',ui-monospace,Menlo,Consolas,monospace}
*{box-sizing:border-box}
body{margin:0;background:var(--paper);color:var(--ink3);font:400 16px/1.6 var(--f-body)}
a{color:var(--accent)}
.wrap{max-width:1400px;margin:0 auto;padding:0 32px}
h1,h2,h3{font-family:var(--f-display);color:var(--ink);margin:0;font-weight:600;letter-spacing:-.025em}
.hd{padding:40px 0 28px;border-bottom:1px solid var(--rule)}
.hd .k{font:500 13px/1 var(--f-mono);color:var(--accent)}
.hd h1{font-size:44px;line-height:1.05;margin:14px 0 12px}
.hd p{margin:0;max-width:78ch;font-size:17px}
.hd .meta{margin-top:16px;display:flex;flex-wrap:wrap;gap:8px 20px;font:400 13px/1.5 var(--f-mono);color:var(--mute)}
.nav{position:sticky;top:0;z-index:10;background:color-mix(in srgb,var(--paper) 94%,transparent);-webkit-backdrop-filter:blur(8px);backdrop-filter:blur(8px);border-bottom:1px solid var(--rule)}
.nav .wrap{display:flex;gap:8px;align-items:center;height:58px;overflow-x:auto}
.nav a{display:inline-flex;align-items:center;gap:8px;white-space:nowrap;text-decoration:none;color:var(--ink);font-weight:600;font-size:15px;padding:8px 14px;border-radius:999px;border:1px solid var(--rule);background:var(--card)}
.nav a b{display:grid;place-items:center;width:22px;height:22px;border-radius:50%;background:var(--ink);color:#fff;font:600 12px/1 var(--f-mono)}
.nav a.pk{margin-left:auto;background:var(--ink);color:#fff;border-color:var(--ink)}
.rec{margin:28px 0 0;display:grid;grid-template-columns:auto 1fr;gap:16px;align-items:start;background:var(--card);border:1px solid var(--rule);border-left:4px solid var(--ok);border-radius:10px;padding:18px 22px}
.rec b{font:600 13px/1.6 var(--f-mono);color:var(--ink)}
.rec p{margin:0;font-size:16px;max-width:110ch}
.dir{padding:56px 0 24px;border-bottom:1px solid var(--rule);scroll-margin-top:58px}
.dh{display:grid;grid-template-columns:minmax(0,1fr) minmax(0,1fr);gap:40px;margin-bottom:24px}
.dh .lt{display:flex;gap:18px;align-items:flex-start}
.dh .L{flex:none;width:56px;height:56px;border-radius:14px;display:grid;place-items:center;background:var(--ink);color:#fff;font:600 28px/1 var(--f-display)}
.dh h2{font-size:38px;line-height:1.05}
.dh .sf{display:inline-block;margin-top:10px;font:500 12px/1 var(--f-mono);padding:6px 10px;border-radius:999px;background:var(--paper2);color:var(--ink)}
.dh p{margin:0 0 12px;font-size:16px}
.dh .th{font-size:14.5px;color:var(--mute)}
.dh .th b{color:var(--ink);font-weight:600}
.secs{display:flex;flex-wrap:wrap;gap:6px;margin:0;padding:0;list-style:none;counter-reset:s}
.secs li{counter-increment:s;font:400 12.5px/1 var(--f-mono);padding:6px 9px;border-radius:6px;background:var(--card);border:1px solid var(--rule);color:var(--ink3)}
.secs li::before{content:counter(s) ". ";color:var(--mute)}
.frames{display:grid;grid-template-columns:minmax(0,1fr) 406px;gap:28px;align-items:start}
.fr .bar{display:flex;align-items:center;gap:12px;margin-bottom:8px;font:500 13px/1 var(--f-mono);color:var(--ink)}
.fr .bar span{color:var(--mute);font-weight:400}
.fr .bar button{margin-left:auto;font:600 13px/1 var(--f-body);background:none;border:1px solid var(--rule);border-radius:999px;padding:7px 12px;cursor:pointer;color:var(--ink)}
.fr .bar button:hover{border-color:var(--ink)}
.fr .bar a{margin-left:auto;font:600 13px/1 var(--f-body);border:1px solid var(--rule);border-radius:999px;padding:7px 12px;color:var(--ink);text-decoration:none}
.vp{position:relative;overflow:hidden;border-radius:12px;border:1px solid var(--rule);background:var(--card);box-shadow:0 30px 60px -40px rgba(8,7,26,.5)}
.vp iframe{position:absolute;top:0;left:0;border:0;transform-origin:0 0;background:#fff}
.ph .vp{border-radius:26px;border:8px solid var(--ink)}
.pick{padding:56px 0 72px}
.pick h2{font-size:34px;margin-bottom:8px}
.pick>.wrap>p{margin:0 0 22px;max-width:70ch}
.pform{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:12px;max-width:980px}
.opt{display:flex;gap:12px;align-items:flex-start;background:var(--card);border:1.5px solid var(--rule);border-radius:12px;padding:14px 16px;cursor:pointer}
.opt:has(input:checked){border-color:var(--ink);box-shadow:0 0 0 3px color-mix(in srgb,var(--violet) 22%,transparent)}
.opt input{margin-top:4px;accent-color:var(--ink)}
.opt b{display:block;color:var(--ink);font-family:var(--f-display);font-size:18px}
.opt span{font-size:13.5px;color:var(--mute)}
.fld{grid-column:1/-1;display:grid;gap:6px;font-weight:600;color:var(--ink);font-size:14px}
.fld textarea,.fld input{font:400 15px/1.5 var(--f-body);padding:10px 12px;border:1.5px solid var(--rule);border-radius:10px;background:var(--card);color:var(--ink);width:100%}
.fld textarea{min-height:84px;resize:vertical}
.acts{grid-column:1/-1;display:flex;flex-wrap:wrap;gap:14px;align-items:center}
.acts button{font:600 15px/1 var(--f-body);background:var(--ink);color:#fff;border:0;border-radius:10px;padding:14px 20px;cursor:pointer}
.acts .ok{font:500 13px/1.4 var(--f-mono);color:var(--violet)}
.ft{border-top:1px solid var(--rule);padding:22px 0 36px;font:400 13px/1.6 var(--f-mono);color:var(--mute)}
@media (max-width:1100px){.frames{grid-template-columns:minmax(0,1fr)}.ph{max-width:406px}}
@media (max-width:700px){.wrap{padding:0 16px}.hd h1{font-size:32px}.dh{grid-template-columns:minmax(0,1fr);gap:14px}.dh h2{font-size:28px}.pform{grid-template-columns:minmax(0,1fr)}.rec{grid-template-columns:1fr}.nav a.pk{margin-left:0}}
`);

const dirHtml = DIRECTIONS.map((d) => `
<section class="dir" id="${d.key}"><div class="wrap">
 <div class="dh"><div class="lt"><span class="L">${d.letter}</span><div><h2>${esc(d.name)}</h2><span class="sf">${esc(d.surface)}</span></div></div>
 <div><p>${esc(d.angle)}</p><p class="th"><b>What it asks of demo’s theme.</b> ${esc(NOTES[d.key])}</p><ol class="secs">${d.sections.map((s) => `<li>${esc(s)}</li>`).join('')}</ol></div></div>
 <div class="frames">
  <div class="fr dk"><div class="bar">1440 <span>desktop, scroll inside</span>${PUB ? `<a href="${page(d.key)}" target="_blank" rel="noopener">Open full page</a>` : `<button type="button" data-open="${d.key}">Open full page</button>`}</div><div class="vp" data-w="1440" data-k="${d.key}" data-h="820"><iframe title="${esc(d.name)} at 1440" loading="lazy"${PUB ? ` src="${page(d.key)}"` : ''}></iframe></div></div>
  <div class="fr ph"><div class="bar">390 <span>phone</span></div><div class="vp" data-w="390" data-k="${d.key}" data-h="780"><iframe title="${esc(d.name)} at 390" loading="lazy"${PUB ? ` src="${page(d.key)}"` : ''}></iframe></div></div>
 </div>
</div></section>`).join('');

const html = `<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><meta name="robots" content="noindex"><title>Open Blocks gallery: three directions</title>${FONTS}
<style>
${cssLines(css)}</style></head><body>
<header class="hd"><div class="wrap"><span class="k">VOY-1824 · design only, nothing built or deployed</span>
<h1>Open Blocks gallery: three directions</h1>
<p>Three finished directions for demo.voyagermark.com/open-blocks/, each at 1440 and 390. The five pack patterns inside them are their real markup, as WordPress 7.1.3 rendered it from voyager-open-blocks main, and they take each direction’s theme presets the way they would take demo’s. Scroll inside a frame to read the page. Pick one below, and say what to borrow from the others.</p>
<div class="meta"><span>For Ben and Alex</span><span>Copy follows KB-369</span><span>Pattern review and theme notes: <a href="${ISSUE}">on VOY-1824</a></span></div>
<div class="rec"><b>Recommendation</b><p>A, the product page. Demo’s theme is already dark DS v2, so A ships with type and contrast changes and no new section styles. Its hero puts a bound pattern on a client site, which says what the pack is in one look, and the theme switch proves the claim the pack is sold on. Borrow Fig. 1 from B: the annotated pattern is the clearest explanation on any of the three pages.</p></div>
</div></header>
<nav class="nav"><div class="wrap">${DIRECTIONS.map((d) => `<a href="#${d.key}"><b>${d.letter}</b>${esc(d.name)}</a>`).join('')}<a class="pk" href="#pick">Send my pick</a></div></nav>
${dirHtml}
<section class="pick" id="pick"><div class="wrap"><h2>Send my pick</h2><p>Choose one direction. If a section from another one should come along, say which. The pick goes on VOY-1824 as a comment, and the build becomes its own issue.</p>
<form class="pform" onsubmit="return false">
 ${DIRECTIONS.map((d, i) => `<label class="opt"><input type="radio" name="d" value="${d.letter}"${i === 0 ? ' checked' : ''}><div><b>${d.letter}. ${esc(d.name)}</b><span>${esc(d.surface)}</span></div></label>`).join('')}
 <label class="fld">Anything to borrow from another direction<textarea id="note" placeholder="For example: B’s annotated Fig. 1 in place of A’s loop cards"></textarea></label>
 <label class="fld">Your name<input id="who" autocomplete="name"></label>
 <div class="acts"><button type="button" id="copy">Copy my pick</button><a href="${ISSUE}">Open VOY-1824 to paste it</a><span class="ok" id="ok" aria-live="polite"></span></div>
</form></div></section>
<footer class="ft"><div class="wrap">Built for VOY-1824 from voyager-open-blocks main (v0.4.0) and the demo theme’s DS v2 tokens. Space Grotesk, Inter and JetBrains Mono load from Google Fonts here; demo loads them once VOY-1823 deploys.</div></footer>
${PUB ? '' : blocks}
<script>
(()=>{const D={dirs:${meta}};const docs={};
${PUB ? '' : `const T=id=>document.getElementById(id).textContent.replace(/<\\\\\\/script/g,'</'+'script');
const ex=s=>s.replace(/\\{\\{PAT:(\\d+)\\}\\}/g,(_,i)=>T('x-p'+i));
const core=T('x-core');
D.dirs.forEach(d=>{docs[d.key]='<!doctype html><html lang="en"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><title>'+d.title+'</title>'+${JSON.stringify(FONTS)}+'<style>'+core+T('x-css-'+d.key)+'</style></head><body class="'+d.cls+'">'+ex(T('x-body-'+d.key))+'</body></html>'});`}
const fit=vp=>{const w=+vp.dataset.w,h=+vp.dataset.h,s=Math.min(1,vp.clientWidth/w),f=vp.querySelector('iframe'),ih=Math.min(Math.round(h/s),w>600?1300:h);f.style.width=w+'px';f.style.height=ih+'px';f.style.transform='scale('+s+')';vp.style.height=Math.round(ih*s)+'px'};
const vps=[...document.querySelectorAll('.vp')];
vps.forEach(vp=>{${PUB ? '' : "vp.querySelector('iframe').srcdoc=docs[vp.dataset.k];"}fit(vp)});
if('ResizeObserver' in window){const ro=new ResizeObserver(es=>es.forEach(e=>fit(e.target)));vps.forEach(v=>ro.observe(v))}else addEventListener('resize',()=>vps.forEach(fit));
document.querySelectorAll('[data-open]').forEach(b=>b.addEventListener('click',()=>{const u=URL.createObjectURL(new Blob([docs[b.dataset.open]],{type:'text/html'}));window.open(u,'_blank','noopener')}));
const ok=document.getElementById('ok');
document.getElementById('copy').addEventListener('click',async()=>{const v=document.querySelector('input[name=d]:checked').value,d=D.dirs.find(x=>x.letter===v),n=document.getElementById('note').value.trim(),w=document.getElementById('who').value.trim();
const t='VOY-1824 pick: '+v+', '+d.name+'.'+(n?' Borrow: '+n:'')+(w?' ('+w+')':'');
try{await navigator.clipboard.writeText(t);ok.textContent='Copied. Paste it as a comment on VOY-1824.'}catch(e){ok.textContent=t}});
})();
</script></body></html>`;

if (PUB) {
  mkdirSync(new URL('dist/pub/', import.meta.url), { recursive: true });
  writeFileSync(new URL('dist/pub/picker.html', import.meta.url), html);
  for (const d of DIRECTIONS) {
    const doc = `${head(d.title)}<meta name="robots" content="noindex">\n<style>\n${cssLines(CORE)}${cssLines(min(d.css))}</style></head><body class="${d.cls}">${wrapLong(expand(d.body.replace(/\n[ \t]+</g, '\n<')))}</body></html>`;
    writeFileSync(new URL(`dist/pub/${d.key}.html`, import.meta.url), doc);
    console.log(SLUG[d.key], Buffer.byteLength(doc), 'bytes');
  }
} else writeFileSync(new URL('dist/picker.html', import.meta.url), html);
console.log('picker.html', Buffer.byteLength(html), 'bytes;', 'REG', REG.length, 'renders;');
