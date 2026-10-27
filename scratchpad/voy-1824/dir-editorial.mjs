// Direction B, "The field guide": light-first, paper and ink from the DS v2 palette.
// Angle: an editorial walkthrough. The page teaches the loop in three short chapters with figures,
// then shows the patterns as captioned plates, one of them on a dark theme to prove they follow it.
import { pattern, icon, esc, PATTERNS, PROMPT, CMD, PLAYGROUND, REPO, pgFor, skillFor, SPACING } from './shared.mjs';

const css = `
:root{--f-display:'Space Grotesk','Helvetica Neue',Arial,sans-serif;--f-body:'Inter','Helvetica Neue',Arial,sans-serif;--f-mono:'JetBrains Mono',ui-monospace,Menlo,Consolas,monospace;
--paper:#F4F2FA;--paper2:#E6E3F2;--card:#FFFFFF;--ink:#08071A;--ink2:#15122F;--ink3:#342D5A;--mute:#625E7C;--rule:color-mix(in srgb,var(--ink) 16%,var(--paper));--rule2:color-mix(in srgb,var(--ink) 8%,var(--paper));
--accent:#9B1750;--accent-strong:#7C0F3F;--violet:#7238DD;--ok:#2BC678}
*{box-sizing:border-box}html{-webkit-text-size-adjust:100%;scroll-behavior:smooth}
body{margin:0;background:var(--paper);color:var(--ink2);font:400 19px/1.7 var(--f-body)}
a{color:inherit}
.wrap{max-width:1240px;margin:0 auto;padding:0 40px}
.ic{width:18px;height:18px;flex:none;vertical-align:-3px}
.mono{font-family:var(--f-mono)}
.kick{font:500 13px/1.4 var(--f-mono);letter-spacing:.04em;color:var(--accent)}
h1,h2,h3{font-family:var(--f-display);color:var(--ink);margin:0;font-weight:600}
.mast{border-bottom:1px solid var(--ink)}
.mast .wrap{display:flex;align-items:center;gap:24px;height:64px;font-size:15px}
.mast b{font:600 17px/1 var(--f-display);letter-spacing:-.01em}
.mast span{color:var(--mute);font:400 13px/1 var(--f-mono)}
.mast nav{margin-left:auto;display:flex;gap:24px}
.mast nav a{text-decoration:none;color:var(--ink3)}
.title{padding:88px 0 56px}
.title h1{font-size:96px;line-height:.98;letter-spacing:-.045em;max-width:13ch;margin:22px 0 32px}
.title h1 i{font-style:normal;color:var(--accent)}
.stand{display:grid;grid-template-columns:7fr 5fr;gap:64px;align-items:end}
.stand p{margin:0;font-size:24px;line-height:1.55;color:var(--ink3);max-width:34ch}
.stand p b{color:var(--ink);font-weight:600}
.by{border-left:1px solid var(--rule);padding-left:28px}
.by dl{display:grid;grid-template-columns:auto 1fr;gap:6px 18px;margin:0 0 26px;font:400 14px/1.5 var(--f-mono);color:var(--mute)}
.by dt{color:var(--ink)}
.by dd{margin:0}
.btn{display:inline-flex;align-items:center;gap:10px;font:600 16px/1 var(--f-body);padding:16px 22px;border-radius:4px;text-decoration:none;background:var(--ink);color:var(--paper)}
.btn:hover{background:var(--accent)}
.tl{margin-left:20px;font-weight:600;font-size:16px;text-decoration-thickness:1px;text-underline-offset:4px}
.plate{margin:0 0 0;border-top:1px solid var(--ink);border-bottom:1px solid var(--ink);background:var(--card)}
.plate figcaption{display:flex;flex-wrap:wrap;gap:6px 24px;align-items:baseline;padding:14px 0;font:400 14px/1.5 var(--f-mono);color:var(--mute);border-top:1px solid var(--rule)}
.plate figcaption b{color:var(--ink);font-weight:500}
.plate figcaption a{color:var(--accent);text-decoration:none}
.plate figcaption .r{margin-left:auto;display:flex;gap:18px}
.fig1 .wp-pattern{position:relative}
.fig1 .wp-pattern :is(h2,.has-small-font-size,.is-style-outline .wp-block-button__link){position:relative}
.fig1 .wp-pattern :is(h2,.has-small-font-size,.is-style-outline .wp-block-button__link)::after{position:absolute;width:26px;height:26px;border-radius:50%;background:var(--accent);color:#fff;font:600 13px/26px var(--f-mono);text-align:center;letter-spacing:0;text-transform:none}
.fig1 .wp-pattern .has-small-font-size::after{content:"1";left:-40px;top:-4px}
.fig1 .wp-pattern h2::after{content:"2";left:-40px;top:6px}
.fig1 .wp-pattern .is-style-outline .wp-block-button__link::after{content:"3";right:-13px;top:-13px}
.legend{display:grid;grid-template-columns:repeat(4,1fr);gap:28px;padding:22px 0 26px;font-size:15px;line-height:1.55;color:var(--ink3)}
.legend div{display:grid;grid-template-columns:26px 1fr;gap:12px}
.legend i{width:26px;height:26px;border-radius:50%;background:var(--accent);color:#fff;font:600 13px/26px var(--f-mono);text-align:center;font-style:normal}
.legend i.o{background:var(--ink)}
.legend code{font:500 13px/1.4 var(--f-mono);color:var(--ink)}
.contents{display:grid;grid-template-columns:300px 1fr;gap:72px;align-items:center;padding:96px 0 40px}
.ring{width:300px;height:300px}
.ring text{font-family:var(--f-display);font-weight:600;font-size:17px;fill:var(--ink)}
.ring .s{font:500 11px var(--f-mono);fill:var(--mute)}
.contents h2{font-size:44px;letter-spacing:-.03em;line-height:1.1;margin-bottom:28px;max-width:20ch}
.toc{list-style:none;margin:0;padding:0;border-top:1px solid var(--ink)}
.toc li{border-bottom:1px solid var(--rule)}
.toc a{display:grid;grid-template-columns:56px 1fr auto;align-items:baseline;gap:16px;padding:16px 0;text-decoration:none}
.toc .n{font:500 14px/1 var(--f-mono);color:var(--accent)}
.toc .t{font:600 22px/1.2 var(--f-display);color:var(--ink);letter-spacing:-.01em}
.toc .d{font-size:15px;color:var(--mute)}
.ch{display:grid;grid-template-columns:300px 1fr;gap:72px;padding:88px 0;border-top:1px solid var(--rule)}
.rail{position:sticky;top:28px;align-self:start}
.rail .num{font:600 140px/.8 var(--f-display);letter-spacing:-.06em;color:var(--ink)}
.rail .num em{font-style:normal;color:var(--accent)}
.rail h2{font-size:30px;letter-spacing:-.02em;margin:24px 0 8px}
.rail p{margin:0;font:400 14px/1.5 var(--f-mono);color:var(--mute)}
.body .lead{font:500 30px/1.3 var(--f-display);color:var(--ink);letter-spacing:-.02em;margin:0 0 22px;max-width:28ch}
.body>p{margin:0 0 22px;max-width:60ch;color:var(--ink3)}
.body>p code,.body li code{font:500 .85em/1 var(--f-mono);background:var(--paper2);padding:2px 6px;border-radius:4px;color:var(--ink)}
figure{margin:0}
.fig{margin-top:38px}
.fig .cap{margin-top:12px;font:400 14px/1.5 var(--f-mono);color:var(--mute);max-width:70ch}
.fig .cap b{color:var(--ink);font-weight:500}
.ctx{background:var(--ink);color:#C7C3DA;border-radius:6px;padding:26px 28px;font:400 14.5px/1.7 var(--f-mono)}
.ctx .row{display:grid;grid-template-columns:120px 1fr;gap:18px;padding:10px 0;border-top:1px solid #272248}
.ctx .row:first-of-type{border-top:0}
.ctx .k{color:#F4F2FA}
.ctx .v span{display:inline-block;margin:0 6px 6px 0;padding:2px 8px;border-radius:4px;background:#15122F;border:1px solid #342D5A;color:#E6E3F2}
.ctx .v span.h{border-color:#E6317A;color:#fff}
.ctx .cmd{color:#938EAE;padding-bottom:16px;margin-bottom:4px;border-bottom:1px solid #342D5A}
.ctx .cmd b{color:#E6317A;font-weight:400}
.flow{display:grid;grid-template-columns:1fr 40px 1fr 40px 1fr;align-items:center;background:var(--card);border:1px solid var(--rule);border-radius:6px;padding:30px 26px}
.flow .box{border:1.5px solid var(--ink);border-radius:4px;padding:16px;background:var(--paper)}
.flow .box b{display:block;font:600 18px/1.2 var(--f-display);color:var(--ink);margin-bottom:6px}
.flow .box span{display:block;font:400 13px/1.45 var(--f-mono);color:var(--mute)}
.flow .arr{height:1.5px;background:var(--ink);position:relative;margin:0 4px}
.flow .arr::after{content:"";position:absolute;right:-1px;top:-4px;border:5px solid transparent;border-left:7px solid var(--ink);border-right:0}
.flow .gate{grid-column:5;display:grid;gap:10px}
.flow .gate div{display:flex;gap:10px;align-items:center;padding:12px 14px;border-radius:4px;font:500 13.5px/1.35 var(--f-mono)}
.flow .pass{background:color-mix(in srgb,var(--ok) 16%,var(--card));color:var(--ink);border:1.5px solid var(--ok)}
.flow .fail{background:color-mix(in srgb,var(--accent) 8%,var(--card));color:var(--accent-strong);border:1.5px dashed var(--accent)}
.flow .gate i{font-style:normal;font-weight:700}
.bind{display:grid;grid-template-columns:1fr 120px 1fr;align-items:center;background:var(--card);border:1px solid var(--rule);border-radius:6px;padding:30px 26px}
.blk{border:1.5px solid var(--ink);border-radius:4px;background:var(--paper)}
.blk>b{display:block;padding:10px 14px;border-bottom:1.5px solid var(--ink);font:500 13px/1 var(--f-mono);color:var(--ink)}
.blk dl{margin:0;padding:12px 14px;display:grid;grid-template-columns:auto 1fr;gap:8px 14px;font:400 13.5px/1.4 var(--f-mono);color:var(--mute)}
.blk dt{color:var(--ink)}
.blk dd{margin:0}
.blk dd.v{color:var(--violet);font-weight:500}
.wire{position:relative;height:100%;min-height:90px}
.wire::before,.wire::after{content:"";position:absolute;left:0;right:0;height:1.5px;background:var(--violet)}
.wire::before{top:42%}.wire::after{top:62%}
.wire span{position:absolute;left:50%;top:50%;transform:translate(-50%,-50%);background:var(--card);border:1.5px solid var(--violet);color:var(--violet);border-radius:999px;padding:4px 10px;font:500 12px/1 var(--f-mono);white-space:nowrap}
.res{grid-column:1/-1;margin-top:22px;display:flex;flex-wrap:wrap;gap:10px 16px;align-items:center;padding-top:18px;border-top:1px solid var(--rule);font:400 14px/1.4 var(--f-mono);color:var(--mute)}
.res b{color:var(--ink);font-weight:500}
.res .ok{display:inline-flex;align-items:center;gap:6px;padding:4px 10px;border-radius:999px;background:color-mix(in srgb,var(--ok) 18%,var(--card));color:var(--ink);border:1px solid var(--ok)}
.res .ok::before{content:"";width:7px;height:7px;border-radius:50%;background:var(--ok)}
.pats{padding:96px 0 40px;border-top:1px solid var(--ink)}
.pats-head{display:grid;grid-template-columns:300px 1fr;gap:72px;margin-bottom:48px}
.pats-head .num{font:600 140px/.8 var(--f-display);letter-spacing:-.06em;color:var(--ink)}
.pats-head .num em{font-style:normal;color:var(--accent)}
.pats-head h2{font-size:56px;line-height:1.02;letter-spacing:-.035em;margin:0 0 18px;max-width:16ch}
.pats-head p{margin:0;max-width:56ch;color:var(--ink3)}
.plates{display:grid;grid-template-columns:repeat(12,1fr);gap:56px 40px}
.p12{grid-column:span 12}.p6{grid-column:span 6}.p7{grid-column:span 7}.p5{grid-column:span 5}
.plate2 .frame{background:var(--card);border:1px solid var(--rule);border-radius:6px;overflow:hidden;display:flex;flex-direction:column;justify-content:center}
.plate2 .frame.th-ink{background:var(--ink);border-color:var(--ink)}
.plate2{display:flex;flex-direction:column}
.plate2 .frame{flex:1}
.plate2 figcaption{display:flex;flex-wrap:wrap;gap:4px 18px;padding:12px 2px 0;font:400 14px/1.5 var(--f-mono);color:var(--mute)}
.plate2 figcaption b{color:var(--ink);font-weight:500}
.plate2 figcaption a{color:var(--accent);text-decoration:none}
.plate2 figcaption .r{margin-left:auto;display:flex;gap:16px}
.plate2 figcaption p{flex-basis:100%;margin:2px 0 0;font:400 16px/1.55 var(--f-body);color:var(--ink3)}
.th{${SPACING}--wp--style--global--content-size:620px;--wp--style--global--wide-size:1100px;--d-gap:1.15rem;--wp--preset--font-size--small:13px}
.th-paper{background:var(--card);color:var(--ink3)}
.th-paper :is(h2,h3){font-family:var(--f-display);font-weight:600;color:var(--ink);letter-spacing:-.025em;line-height:1.1}
.th-paper h2{font-size:40px}.th-paper h3{font-size:24px}
.th-paper .has-small-font-size{font-family:var(--f-mono);color:var(--accent);letter-spacing:.04em!important}
.th-paper .wp-block-button__link{background:var(--ink);color:var(--paper);border-radius:4px;font:600 16px/1 var(--f-body);padding:15px 22px;border:1.5px solid var(--ink)}
.th-paper .is-style-outline .wp-block-button__link{background:transparent;color:var(--ink)}
.th-paper section[style*=border],.th-paper .wp-block-group[style*=border]{border-color:var(--rule)!important}
.th-ink{background:var(--ink);color:#C7C3DA}
.th-ink :is(h2,h3){font-family:var(--f-display);font-weight:600;color:#F4F2FA;letter-spacing:-.025em;line-height:1.1}
.th-ink h2{font-size:40px}
.th-ink .has-small-font-size{font-family:var(--f-mono);color:#E6317A}
.th-ink .wp-block-button__link{background:var(--accent);color:#fff;border-radius:999px;font:600 16px/1 var(--f-body);padding:15px 24px;border:1.5px solid var(--accent)}
.th-ink .is-style-outline .wp-block-button__link{background:transparent;color:#F4F2FA;border-color:#463E75}
.agent{display:grid;grid-template-columns:300px 1fr;gap:72px;padding:96px 0;border-top:1px solid var(--ink);margin-top:56px}
.agent .num{font:600 140px/.8 var(--f-display);letter-spacing:-.06em;color:var(--ink)}
.agent .num em{font-style:normal;color:var(--accent)}
.pull{margin:0 0 40px;padding:0 0 0 34px;border-left:4px solid var(--accent);font:500 28px/1.4 var(--f-display);letter-spacing:-.015em;color:var(--ink)}
.pull cite{display:block;margin-top:16px;font:400 14px/1.4 var(--f-mono);color:var(--mute);font-style:normal}
.inst{width:100%;border-collapse:collapse;border-top:1px solid var(--ink)}
.inst td{padding:16px 0;border-bottom:1px solid var(--rule);vertical-align:top}
.inst td:first-child{width:150px;font:600 17px/1.4 var(--f-display);color:var(--ink)}
.inst code{font:400 15px/1.5 var(--f-mono);color:var(--ink2);overflow-wrap:anywhere}
.inst code::before{content:"$ ";color:var(--accent)}
.agent .note{margin:22px 0 0;font-size:16px;color:var(--mute)}
.agent .note a{color:var(--accent)}
.end{border-top:1px solid var(--ink)}
.end .wp-pattern>section{padding-top:104px!important;padding-bottom:104px!important}
.end h2{font-size:60px!important;letter-spacing:-.04em!important}
.end p{font-size:21px}
.colo{border-top:1px solid var(--ink);padding:28px 0 40px;font:400 13px/1.6 var(--f-mono);color:var(--mute)}
.colo .wrap{display:flex;flex-wrap:wrap;gap:12px 28px}
.colo a{color:var(--ink);text-decoration:none}
.colo .r{margin-left:auto;display:flex;gap:22px}
@media (max-width:900px){
 body{font-size:17px}
 .wrap{padding:0 20px}
 .mast span,.mast nav a+a{display:none}
 .mast .wrap{height:56px}
 .title{padding:44px 0 36px}
 .title h1{font-size:50px;margin:16px 0 22px}
 .stand{grid-template-columns:minmax(0,1fr);gap:28px}
 .stand p{font-size:19px}
 .by{border-left:0;border-top:1px solid var(--rule);padding:22px 0 0}
 .btn{width:100%;justify-content:center}
 .tl{display:inline-block;margin:16px 0 0}
 .fig1 .wp-pattern .has-small-font-size::after{left:auto;right:0;top:-4px}
 .fig1 .wp-pattern h2::after{left:auto;right:0;top:2px}
 .legend{grid-template-columns:1fr;gap:14px;padding:18px 0 22px}
 .plate figcaption .r{margin-left:0}
 .contents{grid-template-columns:1fr;gap:28px;padding:56px 0 24px}
 .ring{width:220px;height:220px;margin:0 auto}
 .contents h2{font-size:32px}
 .toc a{grid-template-columns:40px 1fr}
 .toc .d{grid-column:2}
 .ch,.pats-head,.agent{grid-template-columns:minmax(0,1fr);gap:20px}
 .ch{padding:56px 0}
 .rail{position:static;display:flex;align-items:flex-end;gap:16px}
 .rail .num,.pats-head .num,.agent .num{font-size:84px}
 .rail h2{margin:0 0 4px;font-size:26px}
 .rail p{display:none}
 .body .lead{font-size:24px}
 .ctx{padding:18px;font-size:12.5px}
 .ctx .row{grid-template-columns:1fr;gap:4px}
 .flow{grid-template-columns:1fr;gap:0;padding:20px}
 .flow .arr{width:1.5px;height:28px;margin:4px auto}
 .flow .arr::after{right:-4px;top:auto;bottom:-1px;border:5px solid transparent;border-top:7px solid var(--ink);border-bottom:0}
 .flow .gate{grid-column:auto}
 .bind{grid-template-columns:1fr;padding:20px}
 .wire{min-height:72px}
 .wire::before,.wire::after{top:0;bottom:0;height:auto;width:1.5px;left:42%;right:auto}
 .wire::after{left:58%}
 .pats{padding:56px 0 24px}
 .pats-head h2{font-size:36px}
 .plates{grid-template-columns:1fr;gap:40px}
 .p12,.p6,.p7,.p5{grid-column:auto}
 .plate2 figcaption .r{margin-left:0}
 .th h2{font-size:30px}
 .agent{padding:56px 0;margin-top:40px}
 .pull{font-size:22px;padding-left:20px}
 .inst td{display:block;padding:10px 0 0;border:0}
 .inst tr{display:block;border-bottom:1px solid var(--rule);padding-bottom:12px}
 .end .wp-pattern>section{padding-top:64px!important;padding-bottom:64px!important}
 .end h2{font-size:38px!important}
 .colo .r{margin-left:0}
}
`;

const ring = `<svg class="ring" viewBox="0 0 300 300" role="img" aria-label="The loop: read, check, bind, then the next task starts with read again">
<circle cx="150" cy="150" r="112" fill="none" stroke="#E6E3F2" stroke-width="22"/>
<path d="M150 38 A112 112 0 0 1 247 206" fill="none" stroke="#9B1750" stroke-width="22"/>
<path d="M240 218 A112 112 0 0 1 60 218" fill="none" stroke="#7238DD" stroke-width="22"/>
<path d="M53 206 A112 112 0 0 1 142 38" fill="none" stroke="#2BC678" stroke-width="22"/>
<text x="200" y="104" text-anchor="middle">Read</text><text x="150" y="236" text-anchor="middle">Check</text><text x="100" y="104" text-anchor="middle">Bind</text>
<text x="150" y="146" text-anchor="middle" style="font-size:30px">one task</text><text class="s" x="150" y="170" text-anchor="middle">every time</text></svg>`;

const plate = (p, cls, theme = 'th-paper', note = '') => `<figure class="plate2 ${cls}"><div class="frame th ${theme}">${pattern(p.slug)}</div>
<figcaption><b>voyager-open/${p.slug}</b><span>${p.binds.length ? `binds ${p.binds.join(', ')}` : p.style ? `style: ${p.style}` : ''}</span><span class="r"><a href="${pgFor(p.slug)}">Playground ↗</a><a href="${skillFor(p.slug)}">SKILL.md ↗</a></span><p>${esc(note || p.line)}</p></figcaption></figure>`;

const [cta, proof, logos, contact] = PATTERNS;

const body = `
<header class="mast"><div class="wrap"><b>Voyager Open Blocks</b><span>A field guide to agent-built pages</span>
<nav><a href="${REPO}">GitHub</a><a href="${PLAYGROUND}">Playground</a></nav></div></header>

<section class="title"><div class="wrap">
 <span class="kick">Field guide · version 0.4 · free and open source</span>
 <h1>How an agent should build a WordPress <i>page.</i></h1>
 <div class="stand"><p><b>Read the site. Check the markup. Bind the data.</b> Voyager Open Blocks teaches an agent that loop, one SKILL.md at a time, and ships five patterns to practise it on.</p>
 <div class="by"><dl><dt>For</dt><dd>teams that let an agent edit WordPress</dd><dt>Needs</dt><dd>WordPress 6.9+, PHP 8.1+</dd><dt>License</dt><dd>GPL-2.0-or-later, free</dd></dl>
 <a class="btn" href="${PLAYGROUND}">${icon('play-circle')}Open in Playground</a><a class="tl" href="${REPO}">Read the source</a></div></div>
</div></section>

<figure class="plate fig1"><div class="th th-paper">${pattern('cta-band')}</div>
 <div class="wrap"><div class="legend">
  <div><i>1</i><span>An eyebrow, a heading and a line, each named, so <code>insert</code> can rewrite them by label.</span></div>
  <div><i>2</i><span>A real <code>core/heading</code>, level 2. No custom blocks anywhere in the pattern.</span></div>
  <div><i>3</i><span>Click to call, bound to <code>voyager/site-data</code> <code>phone</code> and <code>phone_link</code>.</span></div>
  <div><i class="o">·</i><span>No colours or fonts of its own. This page's theme supplies all of them.</span></div>
 </div>
 <figcaption><span><b>Fig. 1</b> voyager-open/cta-band, as WordPress rendered it, on this page's theme</span><span class="r"><a href="${pgFor('cta-band')}">Playground ↗</a><a href="${skillFor('cta-band')}">SKILL.md ↗</a></span></figcaption></div></figure>

<div class="wrap">
<section class="contents">${ring}
 <div><h2>Every task runs the same three steps, in the same order.</h2>
 <ol class="toc">
  <li><a href="#read"><span class="n">01</span><span class="t">Read the site</span><span class="d">Wesper</span></a></li>
  <li><a href="#check"><span class="n">02</span><span class="t">Check the markup</span><span class="d">Block Runner</span></a></li>
  <li><a href="#bind"><span class="n">03</span><span class="t">Bind real data</span><span class="d">voyager/site-data</span></a></li>
  <li><a href="#patterns"><span class="n">04</span><span class="t">Five patterns to practise on</span><span class="d">core blocks only</span></a></li>
  <li><a href="#agent"><span class="n">05</span><span class="t">Give it to your agent</span><span class="d">install and prompt</span></a></li>
 </ol></div>
</section>

<section class="ch" id="read"><div class="rail"><div class="num">0<em>1</em></div><h2>Read the site</h2><p>skills/voyager-open-blocks</p></div>
 <div class="body"><p class="lead">The agent learns what this site accepts before it writes a line.</p>
 <p>Wesper collects the registered blocks, the theme's tokens and every field that can be bound. A pattern that asks for a block the site lacks, or a colour the theme never defined, is caught here instead of on the live page.</p>
 <figure class="fig"><div class="ctx"><div class="cmd"><b>$</b> ${CMD.wesper}</div>
  <div class="row"><span class="k">blocks</span><span class="v"><span>core/heading</span><span>core/buttons</span><span>core/columns</span><span class="h">voyager-open/icon</span><span>…</span></span></div>
  <div class="row"><span class="k">tokens</span><span class="v"><span>color.accent</span><span>spacing.50</span><span>font-size.small</span><span>…</span></span></div>
  <div class="row"><span class="k">bindable</span><span class="v"><span class="h">site-data: phone</span><span>phone_link</span><span>email</span><span>hours</span><span>post meta</span></span></div></div>
 <figcaption class="cap"><b>Fig. 2</b> An illustration of what the agent holds after <code>wesper collect</code>: the site's blocks, tokens and bindable fields, written to site.context.json.</figcaption></figure></div>
</section>

<section class="ch" id="check"><div class="rail"><div class="num">0<em>2</em></div><h2>Check the markup</h2><p>block-runner 1.0.0</p></div>
 <div class="body"><p class="lead">Nothing is saved until the editor's own parser accepts it.</p>
 <p>Block Runner assembles the agent's intent into block markup, then validates it strictly against the site context. Exit 0 is a pass. Exit 1 means fix and validate again, and the skill says never to save markup that still fails.</p>
 <figure class="fig"><div class="flow">
  <div class="box"><b>Intent</b><span>intent.json, the page as a tree of named blocks</span></div><div class="arr"></div>
  <div class="box"><b>Assemble</b><span>block-runner assemble intent.json --json</span></div><div class="arr"></div>
  <div class="gate"><div class="pass"><i>0</i> valid: save the page</div><div class="fail"><i>1</i> invalid: run fix, validate again</div></div>
 </div><figcaption class="cap"><b>Fig. 3</b> The gate. <code>block-runner validate page.html --strict --json --context site.context.json</code> runs between assembling and saving.</figcaption></figure></div>
</section>

<section class="ch" id="bind"><div class="rail"><div class="num">0<em>3</em></div><h2>Bind real data</h2><p>voyager/site-data</p></div>
 <div class="body"><p class="lead">The phone number comes from the site, not from the agent's memory.</p>
 <p>The pack binds block attributes to Settings › Site Data and to allowlisted post meta. The <code>bind</code> ability only accepts arguments its catalog lists, and <code>get-post-blocks</code> reports each binding as resolved or fell back, with the reason.</p>
 <figure class="fig"><div class="bind">
  <div class="blk"><b>core/button · Click to call</b><dl><dt>text</dt><dd>bound</dd><dt>url</dt><dd>bound</dd></dl></div>
  <div class="wire"><span>site-data</span></div>
  <div class="blk"><b>Settings › Site Data</b><dl><dt>phone</dt><dd class="v">(555) 010-0199</dd><dt>phone_link</dt><dd class="v">tel:5550100199</dd></dl></div>
  <div class="res"><b>get-post-blocks</b><span class="ok">resolved</span><span>value_preview “(555) 010-0199”</span></div>
 </div><figcaption class="cap"><b>Fig. 4</b> The binding in Fig. 1, traced. Change the number in Site Data and every bound button changes with it.</figcaption></figure></div>
</section>
</div>

<section class="pats" id="patterns"><div class="wrap">
 <div class="pats-head"><div class="num">0<em>4</em></div><div><h2>Five patterns to practise on.</h2><p>Each one is core blocks and the active theme's presets, nothing else, so it looks like whatever theme it lands on. Below, four plates on this page's theme and one on a dark theme. The fifth pattern closes the page.</p></div></div>
 <div class="plates">
  ${plate(contact, 'p12', 'th-paper', 'Phone, email, address and hours from Site Data, beside a slot for the form your site already uses.')}
  ${plate(proof, 'p5')}
  ${plate(logos, 'p7')}
  ${plate(cta, 'p12', 'th-ink', 'The same markup as Fig. 1, on a dark theme. Nothing in the pattern changed.')}
 </div>
</div></section>

<div class="wrap"><section class="agent" id="agent"><div class="num">0<em>5</em></div>
 <div><blockquote class="pull">${esc(PROMPT)}<cite>One prompt the skills are written for. Start the agent at skills/voyager-open-blocks/SKILL.md.</cite></blockquote>
 <table class="inst"><tr><td>Skills</td><td><code>${CMD.skills}</code></td></tr><tr><td>Plugin zip</td><td><code>${CMD.wp}</code></td></tr><tr><td>Composer</td><td><code>${CMD.composer}</code></td></tr></table>
 <p class="note">Five abilities (get-catalog, get-post-blocks, insert, configure, bind) reach the same pack over REST and MCP. Or skip installing and <a href="${PLAYGROUND}">open it in Playground</a>.</p></div>
</section></div>

<section class="end th th-paper">${pattern('closing-cta', { copy: { 'Ready when you are.': 'Follow along in Playground.', 'Book a call or send a message, and we will take it from there.': 'Every block and pattern loads with demo content, so each chapter here can be tried in the browser.', 'Get in touch': 'Open in Playground', 'Email us': 'Read the source', '/contact/': PLAYGROUND, 'mailto:hello@example.com': REPO } })}</section>
<footer class="colo"><div class="wrap"><span>Set in Space Grotesk, Inter and JetBrains Mono. The closing section is voyager-open/closing-cta.</span><span class="r"><a href="${REPO}">GitHub</a><a href="${REPO}/blob/main/LICENSE">GPL-2.0-or-later</a><a href="https://voyagermark.com/">Built by Voyager</a></span></div></footer>`;

export default {
  key: 'editorial',
  letter: 'B',
  name: 'The field guide',
  angle: 'An editorial walkthrough. A big title, an annotated pattern as the hero figure, the loop as three short chapters with diagrams, then the patterns as captioned plates, one of them on a dark theme.',
  surface: 'Light-first',
  sections: ['Title and annotated figure', 'Loop ring and contents', 'Chapter 1: Read', 'Chapter 2: Check', 'Chapter 3: Bind', 'Pattern plates', 'Prompt and install', 'Closing CTA (the pattern itself)'],
  title: 'Open Blocks: the field guide',
  cls: 'd-editorial',
  css,
  body,
};
