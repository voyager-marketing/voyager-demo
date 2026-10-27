// Direction C, "Watch the build": studio ground (DS v2 lavender), dark console cards, white page.
// Angle: the page is one agent run. Six steps, in the order the entry skill gives them, play beside
// a page that builds itself as you scroll. Then the finished page, with the patterns at full size.
import { pattern, icon, esc, PATTERNS, PROMPT, CMD, PLAYGROUND, REPO, pgFor, skillFor, SPACING } from './shared.mjs';

const css = `
:root{--f-display:'Space Grotesk','Helvetica Neue',Arial,sans-serif;--f-body:'Inter','Helvetica Neue',Arial,sans-serif;--f-mono:'JetBrains Mono',ui-monospace,Menlo,Consolas,monospace;
--studio:#E6E3F2;--studio2:#C7C3DA;--page:#FFFFFF;--ink:#08071A;--panel:#0E0C24;--raised:#15122F;--inset:#1C183B;--fg1:#F4F2FA;--fg3:#C7C3DA;--fg4:#938EAE;--ink3:#342D5A;--mute:#625E7C;--hair:#272248;--b1:#342D5A;
--read:#E6317A;--check:#8B5CF6;--bind:#2EE6A4;--accent:#9B1750;--violet:#7238DD}
*{box-sizing:border-box}html{-webkit-text-size-adjust:100%;scroll-behavior:smooth}
body{margin:0;background:var(--studio);color:var(--ink3);font:400 18px/1.65 var(--f-body)}
a{color:inherit}
.wrap{max-width:1320px;margin:0 auto;padding:0 40px}
.ic{width:18px;height:18px;flex:none}
h1,h2,h3{font-family:var(--f-display);color:var(--ink);margin:0;font-weight:600;letter-spacing:-.025em}
.top .wrap{display:flex;align-items:center;gap:22px;height:68px}
.brand{display:flex;align-items:center;gap:10px;font:600 17px/1 var(--f-display);color:var(--ink);text-decoration:none}
.brand i{width:22px;height:22px;border-radius:6px;background:conic-gradient(from 210deg,var(--accent),var(--check),var(--accent));display:block}
.top .tag{font:500 12px/1 var(--f-mono);color:var(--mute);padding:6px 10px;border:1px solid var(--studio2);border-radius:999px}
.top nav{margin-left:auto;display:flex;gap:22px;font-size:15px}
.top nav a{text-decoration:none;color:var(--ink3)}
.btn{display:inline-flex;align-items:center;gap:10px;font:600 16px/1 var(--f-body);padding:15px 22px;border-radius:12px;text-decoration:none;background:var(--ink);color:#fff;white-space:nowrap}
.btn:hover{background:var(--violet)}
.lnk{font-weight:600;font-size:16px;color:var(--ink);text-underline-offset:4px}
.hero{padding:72px 0 40px;text-align:center}
.hero .k{font:500 13px/1 var(--f-mono);color:var(--violet);letter-spacing:.04em}
.hero h1{font-size:84px;line-height:1;letter-spacing:-.045em;max-width:15ch;margin:20px auto 24px}
.hero h1 span{background:linear-gradient(90deg,var(--accent),var(--violet));-webkit-background-clip:text;background-clip:text;color:transparent}
.hero p{font-size:21px;max-width:44ch;margin:0 auto 34px;color:var(--ink3)}
.ask{max-width:880px;margin:0 auto;text-align:left;background:var(--ink);border-radius:18px;padding:20px 22px 16px;box-shadow:0 30px 70px -30px rgba(8,7,26,.55)}
.ask .who{display:flex;align-items:center;gap:10px;font:500 12px/1 var(--f-mono);color:var(--fg4);margin-bottom:10px}
.ask .who i{width:8px;height:8px;border-radius:50%;background:var(--bind)}
.ask q{display:block;quotes:none;font:400 17px/1.6 var(--f-mono);color:var(--fg1)}
.ask .row{display:flex;align-items:center;gap:12px;margin-top:16px;padding-top:14px;border-top:1px solid var(--hair);font:500 12px/1 var(--f-mono);color:var(--fg4)}
.ask .row b{margin-left:auto;color:var(--ink);background:var(--bind);padding:8px 12px;border-radius:8px;font-weight:600}
.hero .ctas{display:flex;justify-content:center;align-items:center;gap:24px;margin-top:30px}
.loopbar{display:flex;justify-content:center;gap:10px;margin:44px 0 0;font:500 12.5px/1 var(--f-mono)}
.loopbar span{display:inline-flex;align-items:center;gap:8px;padding:8px 12px;border-radius:999px;background:var(--page);color:var(--ink)}
.loopbar span i{width:9px;height:9px;border-radius:50%}
.r{background:var(--read)}.c{background:var(--check)}.b{background:var(--bind)}.w{background:var(--ink3)}
.build{display:grid;grid-template-columns:minmax(0,5fr) minmax(0,7fr);gap:48px;padding:64px 0 24px}
.steps{display:flex;flex-direction:column;gap:22px;padding-bottom:22vh}
.step{min-height:64vh;display:flex;flex-direction:column;justify-content:center}
.card{background:var(--page);border-radius:18px;padding:26px 28px;border:1px solid var(--studio2);transition:box-shadow .3s,border-color .3s}
.step.on .card{border-color:var(--ink);box-shadow:0 24px 50px -28px rgba(8,7,26,.45)}
.sh{display:flex;align-items:center;gap:12px;margin-bottom:14px;font:500 12.5px/1 var(--f-mono);color:var(--mute)}
.sh .n{width:30px;height:30px;border-radius:50%;display:grid;place-items:center;background:var(--studio);color:var(--ink);font-weight:600}
.step.on .sh .n{background:var(--ink);color:#fff}
.sh .ph{display:inline-flex;align-items:center;gap:7px;margin-left:auto;padding:6px 10px;border-radius:999px;background:var(--studio);color:var(--ink)}
.sh .ph i{width:8px;height:8px;border-radius:50%}
.card h3{font-size:30px;line-height:1.12;margin:0 0 10px}
.card p{margin:0 0 18px;font-size:17px;color:var(--ink3)}
.card p code{font:500 .85em/1 var(--f-mono);background:var(--studio);padding:2px 6px;border-radius:4px;color:var(--ink)}
.con{background:var(--ink);border-radius:12px;padding:16px 18px;font:400 13px/1.65 var(--f-mono);color:var(--fg3);overflow-wrap:anywhere;white-space:pre-wrap}
.con b{color:var(--read);font-weight:400}
.con .g{color:var(--bind)}.con .v{color:#C4A6FF}.con .d{color:var(--fg4)}
.con .sel{display:block;margin:0 -8px;padding:0 8px;border-radius:6px;background:color-mix(in srgb,var(--check) 26%,transparent);color:#fff}
.pvw{position:relative}
.stick{position:sticky;top:20px}
.browser{background:var(--page);border-radius:16px;overflow:hidden;border:1px solid var(--studio2);box-shadow:0 40px 90px -40px rgba(8,7,26,.5)}
.bar{display:flex;align-items:center;gap:8px;height:42px;padding:0 14px;background:#F4F2FA;border-bottom:1px solid var(--studio)}
.bar i{width:10px;height:10px;border-radius:50%;background:var(--studio2)}
.bar .url{margin-left:12px;font:400 12px/1 var(--f-mono);color:var(--mute);background:var(--page);padding:7px 12px;border-radius:7px;flex:1;max-width:320px}
.bar .ph{display:flex;gap:6px;margin-left:auto}
.bar .ph span{width:34px;height:6px;border-radius:3px;background:var(--studio);transition:background .3s}
.pv[data-step="1"] .bar .ph .r,.pv[data-step="2"] .bar .ph .r{background:var(--read)}
.pv[data-step="3"] .bar .ph .r,.pv[data-step="4"] .bar .ph .r,.pv[data-step="5"] .bar .ph .r,.pv[data-step="6"] .bar .ph .r{background:var(--read)}
.pv[data-step="4"] .bar .ph .c,.pv[data-step="5"] .bar .ph .c,.pv[data-step="6"] .bar .ph .c{background:var(--check)}
.pv[data-step="5"] .bar .ph .b,.pv[data-step="6"] .bar .ph .b{background:var(--bind)}
.bar .ph span:not(.r):not(.c):not(.b){display:none}
.screen{width:1240px;zoom:.56;position:relative}
.pf{background:var(--ink);padding:44px 72px;display:flex;gap:48px}
.pf span{height:12px;border-radius:6px;background:#342D5A;flex:0 0 160px}
.pf span:first-child{flex-basis:220px;background:#463E75}
.ph1{padding:56px 72px 40px}
.ph1 .crumb{font:500 14px/1 var(--f-mono);color:var(--mute)}
.ph1 h2{font-size:64px;margin:18px 0 18px;letter-spacing:-.035em}
.ph1 .ln{height:14px;border-radius:7px;background:var(--studio);margin:12px 0;max-width:780px}
.ph1 .ln.s{max-width:520px}
.slot{margin:0 72px 56px;border:3px dashed var(--studio2);border-radius:14px;height:250px;display:grid;place-items:center;font:500 22px/1 var(--f-mono);color:var(--mute);transition:all .3s}
.pv[data-step="2"] .slot{border-color:var(--check);color:var(--violet);background:color-mix(in srgb,var(--check) 7%,transparent)}
.ins{position:relative;margin:0 0 56px;outline:3px solid transparent;outline-offset:0;transition:outline-color .3s}
.pv[data-step="3"] .ins{outline-color:var(--read)}
.pv[data-step="4"] .ins{outline-color:var(--check)}
.pv .slot,.pv .ins,.pv .v-a,.pv .v-b{display:none}
.pv[data-step="1"] .slot,.pv[data-step="2"] .slot{display:grid}
.pv[data-step="3"] .ins,.pv[data-step="4"] .ins,.pv[data-step="5"] .ins,.pv[data-step="6"] .ins{display:block}
.pv[data-step="3"] .v-a,.pv[data-step="4"] .v-a,.pv[data-step="5"] .v-b,.pv[data-step="6"] .v-b{display:block}
.flag{position:absolute;z-index:2;display:none;align-items:center;gap:10px;font:500 20px/1 var(--f-mono);padding:12px 16px;border-radius:999px;background:var(--ink);color:#fff;box-shadow:0 14px 30px -10px rgba(8,7,26,.5)}
.flag i{width:12px;height:12px;border-radius:50%}
.f-ins{left:40px;top:-26px}.f-ok{left:40px;top:-26px}.f-co{left:40px;top:-26px}.f-ph{right:40px;bottom:-26px}
.pv[data-step="3"] .f-ins,.pv[data-step="4"] .f-ok,.pv[data-step="5"] .f-co,.pv[data-step="5"] .f-ph,.pv[data-step="6"] .f-co,.pv[data-step="6"] .f-ph{display:inline-flex}
.overlay{position:absolute;left:-28px;bottom:-44px;width:330px;background:var(--ink);color:var(--fg3);border-radius:14px;padding:14px 16px;font:400 12px/1.6 var(--f-mono);box-shadow:0 30px 60px -20px rgba(8,7,26,.7);display:none}
.overlay .h{color:var(--fg4);border-bottom:1px solid var(--hair);padding-bottom:8px;margin-bottom:8px;display:flex;justify-content:space-between}
.overlay .row{display:flex;justify-content:space-between;gap:12px}
.overlay .row b{color:var(--bind);font-weight:500}
.pv[data-step="1"] .o1,.pv[data-step="2"] .o2,.pv[data-step="4"] .o4,.pv[data-step="6"] .o6{display:block}
.cap{margin-top:76px;font:400 13px/1.5 var(--f-mono);color:var(--mute);text-align:center}
.th{${SPACING}--wp--style--global--content-size:640px;--wp--style--global--wide-size:1100px;--d-gap:1.15rem;--wp--preset--font-size--small:13px;background:var(--page);color:var(--ink3)}
.th :is(h2,h3){font-family:var(--f-display);font-weight:600;color:var(--ink);letter-spacing:-.025em;line-height:1.1}
.th h2{font-size:42px}.th h3{font-size:24px}
.th .has-small-font-size{font-family:var(--f-mono);color:var(--violet);font-weight:500}
.th .wp-block-button__link{background:var(--ink);color:#fff;border-radius:12px;font:600 16px/1 var(--f-body);padding:15px 22px;border:1.5px solid var(--ink)}
.th .is-style-outline .wp-block-button__link{background:transparent;color:var(--ink)}
.th section[style*=border],.th .wp-block-group[style*=border]{border-color:var(--studio2)!important}
.done{padding:88px 0 40px}
.done-head{display:grid;grid-template-columns:1fr 1fr;gap:48px;align-items:end;margin-bottom:36px}
.done-head .k{font:500 13px/1 var(--f-mono);color:var(--violet)}
.done-head h2{font-size:56px;line-height:1.02;letter-spacing:-.035em;margin-top:14px}
.done-head p{margin:0;font-size:18px;max-width:46ch}
.full{background:var(--page);border-radius:20px;overflow:hidden;border:1px solid var(--studio2);box-shadow:0 50px 100px -50px rgba(8,7,26,.45)}
.full .ph1{padding:64px 80px 24px}
.marks{display:flex;flex-wrap:wrap;gap:10px 14px;justify-content:center;margin-top:22px;font:500 13px/1 var(--f-mono)}
.marks a{display:inline-flex;gap:8px;align-items:center;padding:9px 12px;border-radius:999px;background:var(--page);color:var(--ink);text-decoration:none;border:1px solid var(--studio2)}
.marks a:hover{border-color:var(--ink)}
.marks em{font-style:normal;color:var(--mute)}
.run{margin:72px 0 0;background:var(--ink);color:var(--fg3);border-radius:24px;padding:48px;display:grid;grid-template-columns:minmax(0,4fr) minmax(0,7fr);gap:48px}
.run h2{color:var(--fg1);font-size:40px;line-height:1.08}
.run p{margin:14px 0 0;font-size:17px}
.run ol{list-style:none;margin:0;padding:0;display:grid;gap:12px;counter-reset:s}
.run li{counter-increment:s;display:grid;grid-template-columns:34px 1fr;gap:14px;align-items:start;background:var(--raised);border:1px solid var(--b1);border-radius:12px;padding:14px 16px}
.run li::before{content:counter(s);width:28px;height:28px;border-radius:50%;display:grid;place-items:center;background:var(--inset);color:var(--fg1);font:600 13px/1 var(--f-mono)}
.run li b{display:block;color:var(--fg1);font-weight:600;font-size:16px;margin-bottom:4px}
.run li code{font:400 13.5px/1.55 var(--f-mono);color:var(--fg3);overflow-wrap:anywhere}
.run li code::before{content:"$ ";color:var(--read)}
.run li code.q::before{content:"";}
.close{margin-top:72px}
.close .th{background:transparent}
.close .wp-pattern>section{padding-top:80px!important;padding-bottom:96px!important}
.close h2{font-size:56px!important;letter-spacing:-.04em!important}
.foot{border-top:1px solid var(--studio2);padding:28px 0 36px;font-size:14px;color:var(--mute)}
.foot .wrap{display:flex;flex-wrap:wrap;gap:12px 24px}
.foot a{text-decoration:none;color:var(--ink)}
.foot .rr{margin-left:auto;display:flex;gap:22px}
@media (max-width:900px){
 body{font-size:16px}
 .wrap{padding:0 16px}
 .top .tag,.top nav a+a{display:none}
 .top .wrap{height:58px}
 .hero{padding:36px 0 24px}
 .hero h1{font-size:46px;margin:16px auto 18px}
 .hero p{font-size:18px;margin-bottom:24px}
 .ask{padding:16px;border-radius:14px}
 .ask q{font-size:13.5px}
 .ask .row span+span{display:none}
 .hero .ctas{flex-direction:column;gap:14px}
 .btn{width:100%;justify-content:center}
 .loopbar{margin-top:28px;flex-wrap:wrap}
 .build{grid-template-columns:minmax(0,1fr);gap:0;padding:28px 0 0}
 .pvw{order:-1;position:sticky;top:0;z-index:5;margin:0 -16px;padding:10px 16px 12px;background:color-mix(in srgb,var(--studio) 92%,transparent);-webkit-backdrop-filter:blur(6px);backdrop-filter:blur(6px)}
 .stick{position:static}
 .browser{border-radius:12px}
 .bar{height:32px}
 .bar .url{font-size:10.5px;padding:5px 8px}
 .bar .ph span{width:22px}
 .screen{zoom:.287}
 .overlay{display:none!important}
 .cap{display:none}
 .steps{padding-bottom:12px;gap:14px}
 .step{min-height:0;padding:10px 0}
 .card{padding:20px}
 .card h3{font-size:24px}
 .con{font-size:11.5px;padding:12px 14px}
 .done{padding:56px 0 24px}
 .done-head{grid-template-columns:minmax(0,1fr);gap:14px}
 .done-head h2{font-size:36px}
 .full{border-radius:14px}
 .full .ph1{padding:32px 20px 8px}
 .full .ph1 h2{font-size:40px}
 .th h2{font-size:30px}
 .marks{justify-content:flex-start}
 .run{grid-template-columns:minmax(0,1fr);padding:26px 20px;gap:24px;border-radius:18px;margin-top:48px}
 .run h2{font-size:30px}
 .close{margin-top:40px}
 .close .wp-pattern>section{padding-top:56px!important;padding-bottom:64px!important}
 .close h2{font-size:36px!important}
 .foot .rr{margin-left:0}
}
`;

const plumber = { 'Next step': 'Emergency repairs', 'Ready to get started?': 'Need a plumber today?', 'Tell us what you need and we will get back to you with a plan and a price.': 'Licensed plumbers on call across the county, with a written quote before any work starts.' };
const bound = { ...plumber, 'Next step': 'Example Co.' };

const steps = [
  ['r', 'Read', 'It reads the site before it writes anything.', 'Wesper collects the blocks this site registers, its theme tokens and the fields it can bind. The agent works from that file, not from what it remembers about WordPress.',
    `<b>$</b> ${CMD.wesper}\n<b>$</b> npx wesper summarize site.context.json\n<span class="d">blocks · tokens · bindable fields</span>`],
  ['r', 'Read', 'It picks a pattern from the catalog.', 'The <code>get-catalog</code> ability lists the pack\'s patterns, the named blocks inside each one and every bindable field with its exact args. The brief asks for a call to action, so it takes the CTA band.',
    `<span class="d">GET voyager-open-blocks/get-catalog</span>\n<span class="sel">voyager-open/cta-band       copy: Eyebrow, Heading, Body</span>voyager-open/proof-strip\nvoyager-open/logo-marquee\nvoyager-open/contact-section\nvoyager-open/closing-cta`],
  ['w', 'Write', 'It places the pattern with this page\'s copy.', '<code>insert</code> adds a copy of the pattern at the end of the page and rewrites its named blocks by label. The heading and the line now belong to the Services page.',
    `<span class="d">POST voyager-open-blocks/insert</span>\n${esc('{"post_id":42,"item":"voyager-open/cta-band","position":2,"mode":"copy",\n "copy":{"Eyebrow":"Emergency repairs","Heading":"Need a plumber today?","Body":"Licensed plumbers on call…"}}')}`],
  ['c', 'Check', 'It proves the markup is valid before it saves.', 'Every piece of markup <code>insert</code> returns goes through Block Runner in strict mode, against the site context from step 1. Exit 0 saves. Exit 1 means fix it and validate again.',
    `<b>$</b> ${CMD.validate}\n<span class="g">exit 0</span>  <span class="d">valid, saved</span>`],
  ['b', 'Bind', 'It binds the one value the pattern left open.', 'The click-to-call button already reads <code>phone</code> and <code>phone_link</code> from Site Data. The brief wants the company name above the heading, so the agent binds the eyebrow. <code>bind</code> refuses any args the catalog does not list.',
    `<span class="d">POST voyager-open-blocks/bind</span>\n${esc('{"post_id":42,"path":"2/0/0/0","attribute":"content",\n "source":"voyager/site-data","args":{"key":"company"}}')}`],
  ['b', 'Bind', 'Then it checks that every value arrived.', '<code>get-post-blocks</code> reads the page back. Each binding reports resolved or fell back, with the reason and a preview of the value, so the agent proves the page instead of assuming it.',
    `<span class="d">GET voyager-open-blocks/get-post-blocks</span>\ncompany     <span class="g">resolved</span>  <span class="v">“Example Co.”</span>\nphone       <span class="g">resolved</span>  <span class="v">“(555) 010-0199”</span>\nphone_link  <span class="g">resolved</span>  <span class="v">“tel:5550100199”</span>`],
];
const phaseName = { r: 'Read', w: 'Write', c: 'Check', b: 'Bind' };

const stepHtml = steps.map(([ph, label, h, p, con], i) => `<div class="step" data-s="${i + 1}"><div class="card"><div class="sh"><span class="n">${i + 1}</span>Step ${i + 1}<span class="ph"><i class="${ph}"></i>${phaseName[ph]}</span></div>
<h3>${h}</h3><p>${p}</p><div class="con">${con}</div></div></div>`).join('');

const pageTop = `<div class="ph1"><span class="crumb">Home / Services</span><h2>Services</h2><div class="ln"></div><div class="ln"></div><div class="ln s"></div></div>`;
const [cta, proof, logos, contact] = PATTERNS;

const body = `
<header class="top"><div class="wrap"><a class="brand" href="#"><i></i>Voyager Open Blocks</a><span class="tag">watch the build</span>
<nav><a href="${REPO}">GitHub</a><a href="${PLAYGROUND}">Playground</a></nav></div></header>

<section class="hero"><div class="wrap">
 <span class="k">One agent run, six steps</span>
 <h1>Watch an agent build a page <span>with the pack.</span></h1>
 <p>Voyager Open Blocks is a free WordPress block pack that teaches an agent to read the site, check its markup and bind real data. Here is one run, in the order the pack's skill gives it.</p>
 <div class="ask"><div class="who"><i></i>The brief, given to the agent</div><q>${esc(PROMPT)}</q>
 <div class="row"><span>skills/voyager-open-blocks/SKILL.md</span><span>WordPress 6.9+</span><b>Scroll to play ↓</b></div></div>
 <div class="ctas"><a class="btn" href="${PLAYGROUND}">${icon('play-circle')}Open in Playground</a><a class="lnk" href="${REPO}">Read the source</a></div>
 <div class="loopbar"><span><i class="r"></i>Read</span><span><i class="c"></i>Check</span><span><i class="b"></i>Bind</span></div>
</div></section>

<div class="wrap"><section class="build">
 <div class="steps">${stepHtml}</div>
 <div class="pvw"><div class="stick"><div class="pv" data-step="6">
  <div class="browser"><div class="bar"><i></i><i></i><i></i><span class="url">your-site.test/services/</span><span class="ph"><span class="r"></span><span class="c"></span><span class="b"></span></span></div>
  <div class="screen">${pageTop}
   <div class="slot">voyager-open/cta-band · position 2</div>
   <div class="ins th"><span class="flag f-ins"><i class="r"></i>inserted with copy</span><span class="flag f-ok"><i class="c"></i>block-runner: valid</span><span class="flag f-co"><i class="b"></i>content ← site-data company</span><span class="flag f-ph"><i class="b"></i>phone_link ← site-data</span>
    <div class="v-a">${pattern('cta-band', { copy: plumber })}</div><div class="v-b">${pattern('cta-band', { copy: bound })}</div></div>
   <div class="pf"><span></span><span></span><span></span></div>
  </div></div>
  <div class="overlay o1"><div class="h"><span>site.context.json</span><span>Wesper</span></div><div class="row"><span>blocks</span><span>core/*, voyager-open/icon</span></div><div class="row"><span>tokens</span><span>color, spacing, font-size</span></div><div class="row"><span>bindable</span><span>site-data, post meta</span></div></div>
  <div class="overlay o2"><div class="h"><span>get-catalog</span><span>5 patterns</span></div><div class="row"><span>voyager-open/cta-band</span><b>picked</b></div><div class="row"><span>binds</span><span>phone, phone_link</span></div></div>
  <div class="overlay o4"><div class="h"><span>block-runner validate --strict</span></div><div class="row"><span>exit code</span><b>0</b></div><div class="row"><span>result</span><span>valid, saved</span></div></div>
  <div class="overlay o6"><div class="h"><span>get-post-blocks</span><span>3 bindings</span></div><div class="row"><span>company</span><b>resolved</b></div><div class="row"><span>phone</span><b>resolved</b></div><div class="row"><span>phone_link</span><b>resolved</b></div></div>
 </div><p class="cap">The preview follows the step you are reading. The pattern inside it is the real markup.</p></div></div>
</section></div>

<section class="done"><div class="wrap">
 <div class="done-head"><div><span class="k">The finished page</span><h2>Four patterns in, every value bound.</h2></div><p>The same run, repeated for the rest of the brief. Every section below is a pattern from the pack, as WordPress renders it on a plain light theme. The fifth pattern closes this page.</p></div>
 <div class="full th">${pageTop.replace('<div class="ln s"></div>', '')}${pattern('proof-strip')}${pattern('cta-band', { copy: bound })}${pattern('contact-section')}${pattern('logo-marquee')}</div>
 <div class="marks">${[proof, cta, contact, logos].map((p) => `<a href="${skillFor(p.slug)}">voyager-open/${p.slug}<em>${p.binds.length ? (p.binds.length + (p.slug === 'cta-band' ? 1 : 0)) + ' bound' : 'style: ' + p.style}</em></a>`).join('')}</div>

 <div class="run"><div><h2>Run the same build on your site.</h2><p>Install the plugin on the site and the skills in the agent's harness, then give it the brief above. The five abilities also reach the pack over MCP.</p></div>
 <ol><li><div><b>Add the skills to your agent</b><code>${CMD.skills}</code></div></li><li><div><b>Install the plugin on the site</b><code>${CMD.wp}</code></div></li><li><div><b>Read the site, then give it the brief</b><code>${CMD.wesper}</code></div></li></ol></div>
</div></section>

<section class="close th">${pattern('closing-cta', { copy: { 'Ready when you are.': 'Try the run in Playground first.', 'Book a call or send a message, and we will take it from there.': 'Every block and pattern loads with demo content, so you can watch the same steps on a real WordPress site in your browser.', 'Get in touch': 'Open in Playground', 'Email us': 'Read the source', '/contact/': PLAYGROUND, 'mailto:hello@example.com': REPO } })}</section>
<footer class="foot"><div class="wrap"><span>Voyager Open Blocks is free and open source, built and maintained by Voyager. The closing section is voyager-open/closing-cta.</span><span class="rr"><a href="${REPO}">GitHub</a><a href="${REPO}/blob/main/LICENSE">GPL-2.0-or-later</a></span></div></footer>
<script>
(()=>{const pv=document.querySelector('.pv'),st=[...document.querySelectorAll('.step')];if(!pv||!st.length||!('IntersectionObserver' in window))return;
const set=n=>{pv.dataset.step=n;st.forEach(s=>s.classList.toggle('on',s.dataset.s==n))};set(1);
const io=new IntersectionObserver(es=>{es.forEach(e=>{if(e.isIntersecting)set(e.target.dataset.s)})},{rootMargin:'-45% 0px -45% 0px'});st.forEach(s=>io.observe(s))})();
</script>`;

export default {
  key: 'build',
  letter: 'C',
  name: 'Watch the build',
  angle: 'The page is one agent run. Six steps play beside a page that builds itself as you scroll, each step lit by its part of the loop. Then the finished page, with the patterns at full size.',
  surface: 'Studio: lavender ground, dark console, white page',
  sections: ['Hero with the brief', 'Six-step build with a live preview', 'The finished page', 'Run it yourself', 'Closing CTA (the pattern itself)'],
  title: 'Open Blocks: watch the build',
  cls: 'd-build',
  css,
  body,
};
