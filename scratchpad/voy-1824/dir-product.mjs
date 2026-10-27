// Direction A, "The product page": dark-first, DS v2 indigo with the type scale raised.
// Angle: the pack sold like a product. A hero that shows a bound pattern on a client site, a loop
// diagram, then the patterns on a stage with a theme switch that proves they follow the theme.
import { pattern, icon, esc, PATTERNS, PROMPT, CMD, PLAYGROUND, REPO, pgFor, skillFor, SPACING } from './shared.mjs';

const css = `
:root{--f-display:'Space Grotesk','Helvetica Neue',Arial,sans-serif;--f-body:'Inter','Helvetica Neue',Arial,sans-serif;--f-mono:'JetBrains Mono',ui-monospace,Menlo,Consolas,monospace;
--canvas:#08071A;--panel:#0E0C24;--raised:#15122F;--inset:#1C183B;--fg1:#F4F2FA;--fg2:#E6E3F2;--fg3:#C7C3DA;--fg4:#938EAE;--fg5:#625E7C;--hair:#272248;--b1:#342D5A;--b2:#463E75;
--accent:#9B1750;--accent-bright:#E6317A;--accent-2:#8B5CF6;--link:#22B8F0;--ok:#2EE6A4}
*{box-sizing:border-box}html{-webkit-text-size-adjust:100%;scroll-behavior:smooth}
body{margin:0;background:var(--canvas);color:var(--fg2);font:400 17px/1.65 var(--f-body)}
a{color:inherit}
.wrap{max-width:1280px;margin:0 auto;padding:0 40px}
.eyebrow{font:500 13px/1.4 var(--f-mono);letter-spacing:.06em;text-transform:uppercase;color:var(--fg3)}
.eyebrow b{color:var(--accent-bright);font-weight:500}
h1,h2,h3{font-family:var(--f-display);color:var(--fg1);margin:0;letter-spacing:-.025em}
.ic{width:20px;height:20px;flex:none}
.btn{display:inline-flex;align-items:center;gap:10px;font:600 16px/1 var(--f-body);padding:15px 22px;border-radius:10px;text-decoration:none;border:1px solid transparent;white-space:nowrap}
.btn .ic{width:18px;height:18px}
.btn-primary{background:var(--accent);color:#fff}.btn-primary:hover{background:var(--accent-bright)}
.btn-ghost{border-color:var(--b2);color:var(--fg1)}.btn-ghost:hover{border-color:var(--fg4)}
.top{border-bottom:1px solid var(--hair);position:relative;z-index:3}
.top .wrap{display:flex;align-items:center;gap:36px;height:72px}
.brand{display:flex;align-items:center;gap:10px;font:600 17px/1 var(--f-display);color:var(--fg1);text-decoration:none;letter-spacing:-.01em}
.brand i{width:22px;height:22px;border-radius:6px;background:conic-gradient(from 210deg,var(--accent),var(--accent-2),var(--accent));display:block}
.top nav{display:flex;gap:28px;font-size:15px;color:var(--fg3)}
.top nav a{text-decoration:none}
.top .gh{margin-left:auto;font-size:15px;color:var(--fg1);text-decoration:none;display:flex;gap:8px;align-items:center}
.top .gh .ic{width:16px;height:16px}
.hero{position:relative;overflow:hidden;padding:84px 0 104px}
.hero::before{content:"";position:absolute;inset:0;background:radial-gradient(55% 70% at 80% 35%,color-mix(in srgb,var(--accent-2) 24%,transparent),transparent 70%),radial-gradient(40% 50% at 98% 90%,color-mix(in srgb,var(--accent) 34%,transparent),transparent 70%);pointer-events:none}
.hero::after{content:"";position:absolute;inset:0;background-image:radial-gradient(color-mix(in srgb,var(--fg4) 38%,transparent) 1px,transparent 1.2px);background-size:22px 22px;-webkit-mask-image:linear-gradient(90deg,transparent 40%,#000 80%);mask-image:linear-gradient(90deg,transparent 40%,#000 80%);pointer-events:none}
.hero .wrap{position:relative;z-index:1;display:grid;grid-template-columns:5fr 6fr;gap:64px;align-items:center}
.pill{display:inline-flex;gap:10px;align-items:center;padding:7px 14px;border:1px solid var(--b1);border-radius:999px;background:color-mix(in srgb,var(--raised) 70%,transparent)}
.pill .dot{width:7px;height:7px;border-radius:50%;background:var(--ok);box-shadow:0 0 0 4px color-mix(in srgb,var(--ok) 20%,transparent)}
.hero h1{font-size:74px;line-height:1.02;font-weight:600;letter-spacing:-.04em;margin:26px 0 24px}
.hero h1 em{font-style:normal;background:linear-gradient(90deg,var(--accent-bright),var(--accent-2));-webkit-background-clip:text;background-clip:text;color:transparent}
.lede{font-size:20px;line-height:1.6;color:var(--fg3);max-width:36ch;margin:0 0 34px}
.ctas{display:flex;gap:14px;flex-wrap:wrap}
.cmd{margin-top:26px;display:flex;align-items:center;gap:12px;font:400 14px/1.4 var(--f-mono);color:var(--fg2);background:var(--panel);border:1px solid var(--hair);border-radius:10px;padding:12px 14px;max-width:100%}
.cmd span{color:var(--accent-bright)}
.cmd code{white-space:nowrap;overflow:hidden;text-overflow:ellipsis}
.who{margin-top:22px;font-size:15px;color:var(--fg4)}
.comp{position:relative;padding:0 0 150px}
.browser{position:relative;background:#FAF9FD;border:1px solid var(--b1);border-radius:14px;overflow:hidden;box-shadow:0 40px 90px -30px rgba(0,0,0,.75)}
.bar{display:flex;align-items:center;gap:7px;height:38px;padding:0 14px;border-bottom:1px solid #DCD9E8;background:#F0EEF6}
.bar i{width:10px;height:10px;border-radius:50%;background:#CFCBDD}
.bar .url{margin-left:14px;font:400 12px/1 var(--f-mono);color:#625E7C;background:#fff;padding:6px 12px;border-radius:6px;flex:1;max-width:300px}
.screen{width:1180px;zoom:.53}
.bound{position:absolute;right:-22px;top:134px;display:flex;align-items:center;gap:8px;background:var(--raised);border:1px solid color-mix(in srgb,var(--ok) 60%,var(--b1));color:var(--fg1);font:500 12.5px/1 var(--f-mono);padding:9px 12px;border-radius:999px;box-shadow:0 16px 30px -12px rgba(0,0,0,.7)}
.bound .ic{width:15px;height:15px;color:var(--ok)}
.bound s{position:absolute;right:58px;bottom:100%;width:1px;height:16px;background:var(--ok);text-decoration:none}
.skill{position:absolute;left:-56px;bottom:0;width:372px;background:#0B0A1F;border:1px solid var(--b2);border-radius:12px;padding:14px 16px 16px;font:400 11.5px/1.6 var(--f-mono);color:var(--fg3);box-shadow:0 30px 60px -20px rgba(0,0,0,.85)}
.skill .h{display:flex;justify-content:space-between;color:var(--fg4);font-size:11px;margin-bottom:8px;border-bottom:1px solid var(--hair);padding-bottom:8px}
.skill .k{color:var(--accent-bright)}.skill .g{color:var(--ok)}
.skill pre{margin:0;white-space:pre;overflow:hidden;font:inherit}
.facts{border-top:1px solid var(--hair);border-bottom:1px solid var(--hair);background:var(--panel)}
.facts .wrap{display:grid;grid-template-columns:repeat(5,1fr)}
.fact{padding:28px 24px;border-left:1px solid var(--hair)}
.fact:first-child{border-left:0;padding-left:0}
.fact b{display:block;font:600 44px/1 var(--f-display);color:var(--fg1);letter-spacing:-.03em}
.fact span{display:block;margin-top:8px;font-size:15px;color:var(--fg3)}
.sec{padding:116px 0}
.sec-head{display:grid;grid-template-columns:1fr 1fr;gap:56px;align-items:end;margin-bottom:56px}
.sec-head h2{font-size:52px;line-height:1.05;font-weight:600;margin-top:16px}
.sec-head p{margin:0;color:var(--fg3);font-size:18px;max-width:46ch}
.loop{position:relative;display:grid;grid-template-columns:repeat(3,1fr);gap:28px}
.loop::before{content:"";position:absolute;left:16%;right:16%;top:44px;height:2px;background:linear-gradient(90deg,var(--accent-bright),var(--accent-2),var(--ok))}
.step{position:relative;background:var(--panel);border:1px solid var(--hair);border-radius:16px;padding:0 26px 26px;display:flex;flex-direction:column}
.node{width:88px;height:88px;border-radius:50%;display:grid;place-items:center;background:var(--canvas);border:2px solid var(--b2);margin:0 auto 22px;position:relative;z-index:1}
.step:nth-child(1) .node{border-color:var(--accent-bright);color:var(--accent-bright)}
.step:nth-child(2) .node{border-color:var(--accent-2);color:var(--accent-2)}
.step:nth-child(3) .node{border-color:var(--ok);color:var(--ok)}
.node .ic{width:34px;height:34px}
.step .n{font:500 12px/1 var(--f-mono);color:var(--fg4);letter-spacing:.06em;text-transform:uppercase}
.step h3{font-size:30px;margin:8px 0 10px}
.step p{margin:0 0 18px;color:var(--fg3);font-size:16px}
.step code{display:block;margin-top:auto;font:400 12.5px/1.6 var(--f-mono);background:var(--canvas);border:1px solid var(--hair);border-radius:8px;padding:12px 14px;color:var(--fg2);white-space:pre-wrap;overflow-wrap:anywhere}
.step .out{align-self:flex-start;display:inline-flex;align-items:center;gap:8px;margin-top:14px;font:500 12px/1 var(--f-mono);color:var(--fg1);border:1px dashed var(--b2);padding:8px 10px;border-radius:8px}
.again{display:flex;align-items:center;gap:14px;margin-top:28px;padding:18px 22px;border:1px solid var(--hair);border-radius:14px;background:linear-gradient(90deg,color-mix(in srgb,var(--ok) 8%,var(--panel)),var(--panel));color:var(--fg3);font-size:16px}
.again .ic{width:22px;height:22px;color:var(--ok)}
.again code{font:400 13.5px/1.5 var(--f-mono);color:var(--fg1)}
.pats{background:linear-gradient(180deg,var(--canvas),var(--panel) 28%,var(--panel));border-top:1px solid var(--hair)}
.switch{display:inline-flex;padding:4px;border:1px solid var(--b1);border-radius:999px;background:var(--canvas);margin-top:22px}
.switch button{font:500 14px/1 var(--f-body);color:var(--fg3);background:none;border:0;padding:10px 16px;border-radius:999px;cursor:pointer}
.switch button[aria-pressed=true]{background:var(--fg1);color:var(--canvas)}
.grid{display:grid;grid-template-columns:repeat(12,1fr);gap:24px}
.card{border:1px solid var(--b1);border-radius:16px;overflow:hidden;background:var(--raised);display:flex;flex-direction:column}
.meta{display:flex;flex-wrap:wrap;gap:8px 16px;align-items:center;padding:14px 18px;border-bottom:1px solid var(--b1);background:var(--panel)}
.meta code{font:500 13px/1 var(--f-mono);color:var(--fg1)}
.links{display:flex;gap:14px;font-size:14px;margin-left:auto;white-space:nowrap}
.links a{color:var(--link);text-decoration:none}
.chips{display:flex;flex-wrap:wrap;gap:6px}
.chip{font:500 11.5px/1 var(--f-mono);padding:6px 8px;border-radius:6px;background:color-mix(in srgb,var(--ok) 12%,transparent);color:var(--ok);border:1px solid color-mix(in srgb,var(--ok) 30%,transparent)}
.chip.s{background:color-mix(in srgb,var(--accent-2) 14%,transparent);color:#C4A6FF;border-color:color-mix(in srgb,var(--accent-2) 35%,transparent)}
.stage{flex:1;display:flex;flex-direction:column;justify-content:center}
.desc{display:flex;flex-wrap:wrap;gap:8px 20px;align-items:baseline;padding:14px 18px;border-top:1px solid var(--b1);background:var(--panel)}
.desc p{margin:0;flex:1 1 260px;color:var(--fg3);font-size:15px}
.c-12{grid-column:span 12}.c-7{grid-column:span 7}.c-5{grid-column:span 5}
.th{${SPACING}--wp--style--global--content-size:640px;--wp--style--global--wide-size:1100px;--d-gap:1.1rem}
.th-dark{background:var(--canvas);color:var(--fg2);--wp--preset--font-size--small:13px}
.th-dark :is(h2,h3){font-family:var(--f-display);color:var(--fg1);font-weight:600;letter-spacing:-.025em;line-height:1.1}
.th-dark h2{font-size:40px}.th-dark h3{font-size:26px}
.th-dark .has-small-font-size{font-family:var(--f-mono);color:var(--accent-bright)}
.th-dark .wp-block-button__link{background:var(--accent);color:#fff;border-radius:10px;font:600 16px/1 var(--f-body);padding:15px 22px;border:1px solid transparent}
.th-dark .is-style-outline .wp-block-button__link{background:transparent;color:var(--fg1);border-color:var(--b2)}
.th-dark section[style*=border],.th-dark .wp-block-group[style*=border]{border-color:var(--b1)!important}
.th-dark img{filter:invert(.75)}
.th-light{background:#FAF9FD;color:#2A2645;--wp--preset--font-size--small:13px}
.th-light :is(h2,h3){font-family:var(--f-body);font-weight:600;color:#08071A;letter-spacing:-.02em;line-height:1.15}
.th-light h2{font-size:36px}.th-light h3{font-size:22px}
.th-light .has-small-font-size{color:#7C0F3F;font-weight:600}
.th-light .wp-block-button__link{background:#08071A;color:#fff;border-radius:999px;font:500 15px/1 var(--f-body);padding:14px 24px;border:1.5px solid #08071A}
.th-light .is-style-outline .wp-block-button__link{background:transparent;color:#08071A}
.th-light section[style*=border],.th-light .wp-block-group[style*=border]{border-color:#CFCBDD!important}
.extras{display:grid;grid-template-columns:5fr 7fr;gap:24px;margin-top:24px}
.icons{display:grid;grid-template-columns:repeat(5,1fr);gap:10px;padding:24px}
.icons span{aspect-ratio:1;display:grid;place-items:center;border:1px solid var(--hair);border-radius:12px;color:var(--fg2);background:var(--canvas)}
.icons span:first-child{color:var(--accent-bright);border-color:color-mix(in srgb,var(--accent-bright) 40%,var(--hair))}
.icons .ic{width:30px;height:30px}
table{width:100%;border-collapse:collapse;font-size:15px}
td,th{text-align:left;padding:12px 18px;border-top:1px solid var(--hair);vertical-align:top}
th{font:500 12px/1 var(--f-mono);letter-spacing:.06em;text-transform:uppercase;color:var(--fg4);border-top:0;padding-top:18px}
td:first-child{font-family:var(--f-mono);font-size:13.5px;color:var(--fg1);white-space:nowrap}
td:last-child{color:var(--fg3)}
.agent{display:grid;grid-template-columns:1fr 1fr;gap:24px}
.box{border:1px solid var(--hair);border-radius:16px;background:var(--panel);padding:30px}
.box h3{font-size:26px;margin-bottom:6px}
.box>p{margin:0 0 20px;color:var(--fg3);font-size:16px}
.tabs{display:flex;gap:4px;border-bottom:1px solid var(--hair);margin-bottom:16px}
.tabs button{font:500 14px/1 var(--f-body);background:none;border:0;color:var(--fg4);padding:12px 14px;border-bottom:2px solid transparent;cursor:pointer}
.tabs button[aria-selected=true]{color:var(--fg1);border-color:var(--accent-bright)}
.pane{font:400 14px/1.6 var(--f-mono);background:var(--canvas);border:1px solid var(--hair);border-radius:10px;padding:16px 18px;color:var(--fg2);overflow-wrap:anywhere}
.pane[hidden]{display:none}
.pane span{color:var(--fg4)}
.quote{font:400 16px/1.7 var(--f-mono);color:var(--fg1);background:var(--canvas);border:1px solid var(--hair);border-left:3px solid var(--accent-bright);border-radius:10px;padding:20px 22px;margin:0}
.box .small{margin:16px 0 0;font-size:14px;color:var(--fg4)}
.box .small a{color:var(--link);text-decoration:none}
.close{border-top:1px solid var(--hair);background:radial-gradient(60% 120% at 50% 0%,color-mix(in srgb,var(--accent) 34%,transparent),transparent 70%),var(--canvas)}
.close .th-dark{background:transparent}
.close .th-dark h2{font-size:60px;letter-spacing:-.035em}
.close .th-dark p{font-size:20px;color:var(--fg3)}
.close .wp-pattern>section{padding-top:112px!important;padding-bottom:40px!important}
.close .tag{text-align:center;padding-bottom:104px;font:500 12px/1 var(--f-mono);color:var(--fg4)}
.foot{border-top:1px solid var(--hair);padding:30px 0;font-size:14px;color:var(--fg4)}
.foot .wrap{display:flex;gap:24px;flex-wrap:wrap}
.foot a{text-decoration:none;color:var(--fg3)}
.foot .r{margin-left:auto;display:flex;gap:24px}
@media (max-width:900px){
 body{font-size:16px}
 .wrap{padding:0 20px}
 .top nav{display:none}
 .top .wrap{height:60px}
 .hero{padding:40px 0 60px}
 .hero .wrap{grid-template-columns:minmax(0,1fr);gap:40px}
 .pill{flex-wrap:wrap;row-gap:4px;font-size:11.5px}
 .skill .h span+span{display:none}
 .pill .dot{display:none}
 .hero h1{font-size:46px;margin:20px 0 18px}
 .lede{font-size:18px}
 .ctas .btn{flex:1 1 auto;justify-content:center}
 .cmd{font-size:12px}
 .comp{padding:0}
 .screen{zoom:.296}
 .bound{right:8px;top:84px;font-size:11px;padding:7px 10px}
 .bound s{display:none}
 .skill{position:relative;left:auto;width:auto;margin:-18px 12px 0;font-size:10.5px}
 .facts .wrap{grid-template-columns:repeat(2,1fr)}
 .fact{padding:20px 0;border-left:0;border-top:1px solid var(--hair)}
 .fact:nth-child(-n+2){border-top:0}
 .fact b{font-size:34px}
 .fact:last-child{grid-column:span 2}
 .sec{padding:72px 0}
 .sec-head{grid-template-columns:1fr;gap:16px;margin-bottom:32px}
 .sec-head h2{font-size:36px}
 .loop{grid-template-columns:1fr;gap:16px}
 .loop::before{left:51px;right:auto;top:60px;bottom:60px;width:2px;height:auto;background:linear-gradient(180deg,var(--accent-bright),var(--accent-2),var(--ok))}
 .step{display:grid;grid-template-columns:64px 1fr;gap:0 16px;padding:20px}
 .step>*:not(.node){grid-column:2}
 .node{width:64px;height:64px;margin:0;grid-row:1/span 5}
 .node .ic{width:26px;height:26px}
 .step h3{font-size:24px}
 .step code{font-size:11.5px}
 .grid{grid-template-columns:1fr;gap:18px}
 .c-12,.c-7,.c-5{grid-column:auto}
 .links{margin-left:0}
 .th h2{font-size:30px}
 .extras,.agent{grid-template-columns:1fr}
 .icons{padding:16px;gap:8px}
 .icons .ic{width:22px;height:22px}
 td,th{padding:10px 14px}
 td:first-child{white-space:normal}
 .box{padding:22px}
 .close .th-dark h2{font-size:38px}
 .close .wp-pattern>section{padding-top:72px!important}
 .close .tag{padding-bottom:64px}
 .foot .r{margin-left:0}
}
`;

const skillCard = `<div class="skill" aria-hidden="true"><div class="h"><span>skills/voyager-open-cta-band/SKILL.md</span><span>read by the agent</span></div><pre><span class="k">name:</span> voyager-open-cta-band
<span class="k">pattern:</span> voyager-open/cta-band

core/columns  60% | 40%
  core/heading h2        "Heading"
  core/button  outline   "Click to call"
    text <span class="g">&lt;- site-data { key: phone }</span>
    url  <span class="g">&lt;- site-data { key: phone_link }</span>

<span class="k">validate:</span> block-runner validate --strict</pre></div>`;

const card = (p, cls) => `<article class="card ${cls}"><div class="meta"><code>voyager-open/${p.slug}</code>
<div class="chips">${p.binds.map((b) => `<span class="chip">${b}</span>`).join('')}${p.style ? `<span class="chip s">style: ${p.style}</span>` : ''}</div>
</div>
<div class="stage th th-dark">${pattern(p.slug)}</div><div class="desc"><p>${esc(p.line)}</p><div class="links"><a href="${pgFor(p.slug)}">Try in Playground</a><a href="${skillFor(p.slug)}">SKILL.md</a></div></div></article>`;

const [cta, proof, logos, contact] = PATTERNS;
const heroCopy = { 'Ready to get started?': 'Need a plumber today?', 'Tell us what you need and we will get back to you with a plan and a price.': 'Licensed plumbers on call across the county, with a written quote before any work starts.', 'Next step': 'Emergency repairs' };

const body = `
<header class="top"><div class="wrap"><a class="brand" href="#"><i></i>Voyager Open Blocks</a>
<nav><a href="#how">How it works</a><a href="#patterns">Patterns</a><a href="#install">Install</a></nav>
<a class="gh" href="${REPO}">GitHub ${icon('arrow-right')}</a></div></header>

<section class="hero"><div class="wrap">
 <div>
  <span class="pill eyebrow"><i class="dot"></i>Free · GPL-2.0-or-later · WordPress 6.9+</span>
  <h1>Blocks your <em>AI agent</em> can use correctly.</h1>
  <p class="lede">A free WordPress block pack for teams that let an agent edit their sites. Every block, binding source and pattern ships with a SKILL.md, so the agent reads the site, writes markup the editor accepts and binds it to real data.</p>
  <div class="ctas"><a class="btn btn-primary" href="${PLAYGROUND}">${icon('play-circle')}Open in Playground</a><a class="btn btn-ghost" href="${REPO}">Read the source</a></div>
  <div class="cmd"><span>$</span><code>${CMD.skills}</code></div>
  <p class="who">For agencies and developers whose agent reads skills, in Claude Code or any harness that loads the Agent Skills layout.</p>
 </div>
 <div class="comp">
  <div class="browser"><div class="bar"><i></i><i></i><i></i><span class="url">your-site.test/services/</span></div>
   <div class="screen th th-light">${pattern('cta-band', { copy: heroCopy })}${pattern('proof-strip')}${pattern('logo-marquee')}</div></div>
  <div class="bound"><s></s>${icon('link')}phone_link ← voyager/site-data</div>
  ${skillCard}
 </div>
</div></section>

<section class="facts"><div class="wrap">
 <div class="fact"><b>5</b><span>patterns</span></div>
 <div class="fact"><b>35</b><span>icons in one block</span></div>
 <div class="fact"><b>2</b><span>binding sources</span></div>
 <div class="fact"><b>5</b><span>abilities over MCP</span></div>
 <div class="fact"><b>9</b><span>SKILL.md files</span></div>
</div></section>

<section class="sec" id="how"><div class="wrap">
 <div class="sec-head"><div><span class="eyebrow"><b>01</b> · How it works</span><h2>Every task runs one loop: read, check, bind.</h2></div>
 <p>The skills teach an agent to look before it writes, prove the markup is valid before it saves, and pull real values instead of pasting them.</p></div>
 <div class="loop">
  <div class="step"><div class="node">${icon('document')}</div><span class="n">Read · Wesper</span><h3>Read the site</h3><p>Wesper collects what the site accepts: registered blocks, theme tokens and bindable fields. The agent writes nothing until it has this.</p><code>${CMD.wesper}</code><span class="out">→ site.context.json</span></div>
  <div class="step"><div class="node">${icon('check-circle')}</div><span class="n">Check · Block Runner</span><h3>Check the markup</h3><p>Block Runner assembles the agent's intent into block markup and validates it with the editor's own parser, before anything is saved.</p><code>${CMD.validate}</code><span class="out">→ exit 0, valid markup</span></div>
  <div class="step"><div class="node">${icon('link')}</div><span class="n">Bind · voyager/site-data</span><h3>Bind real data</h3><p>The pack binds attributes to Site Data and post meta. The bind ability accepts only the arguments its catalog lists.</p><code>${esc('{"source":"voyager/site-data","args":{"key":"phone_link"}}')}</code><span class="out">→ the page shows the real number</span></div>
 </div>
 <div class="again">${icon('check-circle')}<div>Then it proves it. <code>get-post-blocks</code> reports every binding as <code>resolved</code> or <code>fell_back</code>, with the reason, so the agent checks the value instead of assuming it.</div></div>
</div></section>

<section class="sec pats" id="patterns"><div class="wrap">
 <div class="sec-head"><div><span class="eyebrow"><b>02</b> · Patterns</span><h2>Five patterns that follow your theme.</h2></div>
 <div><p>Core blocks and your theme's presets, nothing else. Each render below is the pattern's real markup. Switch the theme and watch it follow.</p>
 <div class="switch" role="group" aria-label="Theme"><button aria-pressed="true" data-t="th-dark">Voyager dark</button><button aria-pressed="false" data-t="th-light">A light theme</button></div></div></div>
 <div class="grid">
  ${card(cta, 'c-12')}
  ${card(proof, 'c-5')}
  ${card(logos, 'c-7')}
  ${card(contact, 'c-12')}
 </div>
 <div class="extras">
  <article class="card"><div class="meta"><code>voyager-open/icon</code><span class="chip s">block</span></div><div class="icons">${['rocket-launch', 'shield-check', 'phone', 'map-pin', 'clock', 'sparkles', 'envelope', 'bolt', 'globe', 'light-bulb'].map((n) => `<span>${icon(n)}</span>`).join('')}</div>
   <div class="desc"><p>35 outline icons, an optional link and CSS-only motion. The label and link can bind to Site Data.</p><div class="links"><a href="${skillFor('icon')}">SKILL.md</a></div></div></article>
  <article class="card"><table><tr><th>Binding source</th><th>Reads</th></tr>
   <tr><td>voyager/site-data</td><td>Company, phone, email, address, hours and social links, from Settings › Site Data.</td></tr>
   <tr><td>voyager/post-meta-text</td><td>Allowlisted post meta, with JSON dot paths for nested values.</td></tr>
   <tr><td>5 abilities</td><td>get-catalog, get-post-blocks, insert, configure and bind, as REST routes and MCP tools.</td></tr></table></article>
 </div>
</div></section>

<section class="sec" id="install"><div class="wrap">
 <div class="sec-head"><div><span class="eyebrow"><b>03</b> · Install</span><h2>Give it to your agent.</h2></div><p>Install the plugin on the site and the skills in the agent's harness. Then ask for a page.</p></div>
 <div class="agent">
  <div class="box"><h3>Install</h3><p>Pick the route that matches how you ship plugins.</p>
   <div class="tabs" role="tablist"><button role="tab" aria-selected="true" data-p="sk">Skills</button><button role="tab" aria-selected="false" data-p="zip">Plugin zip</button><button role="tab" aria-selected="false" data-p="co">Composer</button></div>
   <div class="pane" data-pane="sk"><span>$</span> ${CMD.skills}</div>
   <div class="pane" data-pane="zip" hidden><span>$</span> ${CMD.wp}</div>
   <div class="pane" data-pane="co" hidden><span>$</span> ${CMD.composer}</div>
   <p class="small">Or skip installing: <a href="${PLAYGROUND}">open the pack in Playground</a> with demo content.</p></div>
  <div class="box"><h3>Then ask for a page</h3><p>One prompt the skills are written for.</p><blockquote class="quote">${esc(PROMPT)}</blockquote>
   <p class="small">Start the agent at <a href="${REPO}/blob/main/skills/voyager-open-blocks/SKILL.md">skills/voyager-open-blocks/SKILL.md</a>.</p></div>
 </div>
</div></section>

<section class="close"><div class="th th-dark">${pattern('closing-cta', { copy: { 'Ready when you are.': 'Try the pack before you install it.', 'Book a call or send a message, and we will take it from there.': 'Playground loads every block and pattern with demo content, in your browser.', 'Get in touch': 'Open in Playground', 'Email us': 'Read the source', '/contact/': PLAYGROUND, 'mailto:hello@example.com': REPO } })}</div><p class="tag">This section is voyager-open/closing-cta, with its copy rewritten.</p></section>
<footer class="foot"><div class="wrap"><span>Voyager Open Blocks is built and maintained by Voyager.</span><span class="r"><a href="${REPO}">GitHub</a><a href="${REPO}/blob/main/LICENSE">GPL-2.0-or-later</a><a href="https://voyagermark.com/">voyagermark.com</a></span></div></footer>
<script>
document.querySelectorAll('.switch button').forEach(b=>b.addEventListener('click',()=>{const s=b.closest('.pats');s.querySelectorAll('.stage').forEach(x=>{x.classList.remove('th-dark','th-light');x.classList.add(b.dataset.t)});b.parentNode.querySelectorAll('button').forEach(x=>x.setAttribute('aria-pressed',x===b))}));
document.querySelectorAll('.tabs button').forEach(b=>b.addEventListener('click',()=>{const box=b.closest('.box');box.querySelectorAll('.tabs button').forEach(x=>x.setAttribute('aria-selected',x===b));box.querySelectorAll('.pane').forEach(p=>p.hidden=p.dataset.pane!==b.dataset.p)}));
</script>`;

export default {
  key: 'product',
  letter: 'A',
  name: 'The product page',
  angle: 'Sold like a product. A hero that shows a bound pattern on a client site, the loop as a diagram, then the five patterns on a stage with a theme switch that proves they follow the theme.',
  surface: 'Dark-first',
  sections: ['Hero with a live bound pattern', 'Facts', 'Loop diagram', 'Pattern stage with theme switch', 'Install and prompt', 'Closing CTA (the pattern itself)'],
  title: 'Open Blocks: the product page',
  cls: 'd-product',
  css,
  body,
};
