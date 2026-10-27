<?php
/**
 * Seed: /open-blocks/ page, the Voyager Open Blocks product page.
 *
 * Direction A from VOY-1824, revised (VOY-1851): a hero with a bound pattern,
 * the figures strip, one agent run in six steps (from direction C, static),
 * the pattern stage with its light and dark switch, the binding sources
 * table, install, and the closing CTA. Built from the pack itself: the
 * patterns render live through core/pattern, the icons are voyager-open/icon,
 * and the hero's call button is bound to voyager/site-data.
 *
 * The stage switch is wired at render time by functions.php
 * (voyager_demo_stage_group_directives), keyed on the vd-stage,
 * vd-stage-canvas, vd-stage-show-light and vd-stage-show-dark classes set
 * here. The light look is the section-light group style in theme.json. The
 * page opens on light because the canvases are saved with that style.
 *
 * Deploy does not run the seeder, so demo carries this markup through the
 * Voyager MCP content tools; keep the two identical. The page is held out of
 * search until launch (VOYAGER_DEMO_HELD_PAGES in functions.php).
 *
 * Keep "--" out of the block-comment JSON. WordPress stores it as
 * --, and the upsert path strips the backslashes, so a value like
 * var(--wp--custom--voyager--radius--3) lands as var(u002du002dwp...) and the
 * block fails validation in the editor. Radii here are plain px values for
 * that reason. "--" in the HTML itself (a CLI flag in a code block) is not
 * escaped and is safe. Keep <, >, & and quotes out of attribute values for
 * the same reason: they are escaped with a backslash too.
 *
 * The border, radius and padding shared by the code blocks, step cards and
 * pattern cards are in assets/css/custom.css, not in each block's attributes:
 * repeated per block they doubled the markup sent through the upsert.
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'post_type'  => 'page',
    'slug'       => 'open-blocks',
    'title'      => 'Open Blocks',
    'excerpt'    => 'Voyager Open Blocks, the free block pack an AI agent can use correctly: one agent run in six steps, the five patterns on a light and a dark theme, and how to install it.',
    'menu_order' => 2,
    'content'    => <<<'HTML'
<!-- wp:group {"tagName":"section","align":"full","className":"vd-ob-hero","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"backgroundColor":"bg-canvas","textColor":"fg-2","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull vd-ob-hero has-fg-2-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|8","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-3","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-3-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Free · GPL-2.0-or-later · WordPress 6.9+</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.04em","lineHeight":"1.02"}},"fontSize":"5xl"} -->
<h1 class="wp-block-heading has-5-xl-font-size" style="letter-spacing:-0.04em;line-height:1.02">Blocks your <em>AI agent</em> can use correctly.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3","fontSize":"lg"} -->
<p class="has-fg-3-color has-text-color has-lg-font-size">A free WordPress block pack for teams that let an agent edit their sites. Every block, binding source and pattern ships with a SKILL.md, so the agent reads the site, writes markup the editor accepts and binds it to real data.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprint.json">Open in Playground</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/voyager-marketing/voyager-open-blocks">Read the source</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:code {"backgroundColor":"bg-panel","textColor":"fg-2","fontSize":"sm"} -->
<pre class="wp-block-code has-fg-2-color has-bg-panel-background-color has-text-color has-background has-sm-font-size"><code>$ npx skills add voyager-marketing/voyager-open-blocks</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
<p class="has-fg-4-color has-text-color has-sm-font-size">For agencies and developers whose agent reads skills, in Claude Code or any harness that loads the Agent Skills layout.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%"><!-- wp:group {"className":"is-style-section-light vd-ob-browser","style":{"border":{"radius":"14px","width":"1px"},"spacing":{"blockGap":"var:preset|spacing|0"}},"borderColor":"border-1","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-section-light vd-ob-browser has-border-color has-border-1-border-color" style="border-width:1px;border-radius:14px"><!-- wp:paragraph {"style":{"border":{"bottom":{"color":"var:preset|color|fg-3","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|3","bottom":"var:preset|spacing|3","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"textColor":"fg-5","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-5-color has-text-color has-mono-font-family has-label-font-size" style="border-bottom-color:var(--wp--preset--color--fg-3);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--3);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--3);padding-left:var(--wp--preset--spacing--5)">voyager-open/cta-band, rendered by this site</p>
<!-- /wp:paragraph -->

<!-- wp:pattern {"slug":"voyager-open/cta-band"} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|4"}}},"textColor":"signal-ok","fontSize":"label","fontFamily":"mono"} -->
<p class="has-signal-ok-color has-text-color has-mono-font-family has-label-font-size" style="margin-top:var(--wp--preset--spacing--4)">Click to call: text ← voyager/site-data phone, url ← phone_link</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="margin-top:var(--wp--preset--spacing--5)">skills/voyager-open-cta-band/SKILL.md, read by the agent</p>
<!-- /wp:paragraph -->

<!-- wp:code {"className":"vd-ob-skill","backgroundColor":"bg-panel","textColor":"fg-3","fontSize":"label"} -->
<pre class="wp-block-code vd-ob-skill has-fg-3-color has-bg-panel-background-color has-text-color has-background has-label-font-size"><code>core/group (section, full width, constrained)   "CTA band"
  core/columns (wide, centered)
    core/column 60%
      core/paragraph  small, uppercase          "Eyebrow"
      core/heading h2                           "Heading"
      core/paragraph                            "Body"
    core/column 40%
      core/buttons (right)
        core/button  "Contact us" -&gt; /contact/  "Primary button"
        core/button  outline                    "Click to call"
            text &lt;- voyager/site-data { key: phone }
            url  &lt;- voyager/site-data { key: phone_link }</code></pre>
<!-- /wp:code --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"vd-ob-facts","style":{"border":{"top":{"color":"var:preset|color|border-hair","width":"1px"},"bottom":{"color":"var:preset|color|border-hair","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"backgroundColor":"bg-panel","textColor":"fg-3","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull vd-ob-facts has-fg-3-color has-bg-panel-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--border-hair);border-top-width:1px;border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","columnCount":5,"minimumColumnWidth":"9rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"1","letterSpacing":"-0.03em"}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"display"} -->
<p class="has-fg-1-color has-text-color has-display-font-family has-3-xl-font-size" style="font-weight:600;letter-spacing:-0.03em;line-height:1">5</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"base"} -->
<p class="has-base-font-size">patterns</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"1","letterSpacing":"-0.03em"}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"display"} -->
<p class="has-fg-1-color has-text-color has-display-font-family has-3-xl-font-size" style="font-weight:600;letter-spacing:-0.03em;line-height:1">35</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"base"} -->
<p class="has-base-font-size">icons in one block</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"1","letterSpacing":"-0.03em"}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"display"} -->
<p class="has-fg-1-color has-text-color has-display-font-family has-3-xl-font-size" style="font-weight:600;letter-spacing:-0.03em;line-height:1">2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"base"} -->
<p class="has-base-font-size">binding sources</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"1","letterSpacing":"-0.03em"}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"display"} -->
<p class="has-fg-1-color has-text-color has-display-font-family has-3-xl-font-size" style="font-weight:600;letter-spacing:-0.03em;line-height:1">5</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"base"} -->
<p class="has-base-font-size">abilities over REST and MCP</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|2"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","lineHeight":"1","letterSpacing":"-0.03em"}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"display"} -->
<p class="has-fg-1-color has-text-color has-display-font-family has-3-xl-font-size" style="font-weight:600;letter-spacing:-0.03em;line-height:1">9</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"base"} -->
<p class="has-base-font-size">SKILL.md files</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"vd-ob-run","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|7"}},"backgroundColor":"bg-canvas","textColor":"fg-2","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull vd-ob-run has-fg-2-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|8"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-3","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-3-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase"><strong>01</strong> · How it works</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">One agent run, in six steps.</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">The agent got one brief: put the CTA band at the end of the Services page, rewrite its copy for that page, keep the call button bound to Site Data and validate before saving. This is the run, in the order the pack's skill gives it.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|5"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"18rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"className":"vd-agent-step","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"backgroundColor":"bg-panel","layout":{"type":"constrained"}} -->
<div class="wp-block-group vd-agent-step has-bg-panel-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Step 1</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"accent-bright","fontSize":"label","fontFamily":"mono"} -->
<p class="has-accent-bright-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">It reads the site before it writes anything.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">Wesper collects the blocks this site registers, its theme tokens and the fields it can bind. The agent works from that file, not from what it remembers about WordPress.</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"fg-2","fontSize":"label"} -->
<pre class="wp-block-code has-fg-2-color has-bg-canvas-background-color has-text-color has-background has-label-font-size"><code>$ npx wesper collect --wp-path ./public --out site.context.json
$ npx wesper summarize site.context.json</code></pre>
<!-- /wp:code -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"signal-ok","fontSize":"label"} -->
<pre class="wp-block-code has-signal-ok-color has-bg-canvas-background-color has-text-color has-background has-label-font-size"><code>blocks · tokens · bindable fields</code></pre>
<!-- /wp:code --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vd-agent-step","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"backgroundColor":"bg-panel","layout":{"type":"constrained"}} -->
<div class="wp-block-group vd-agent-step has-bg-panel-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Step 2</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"accent-bright","fontSize":"label","fontFamily":"mono"} -->
<p class="has-accent-bright-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Read</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">It picks a pattern from the catalog.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">The <code>get-catalog</code> ability lists the pack's patterns, the named blocks inside each one and every bindable field with its exact args. The brief asks for a call to action, so it takes the CTA band.</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"fg-2","fontSize":"label"} -->
<pre class="wp-block-code has-fg-2-color has-bg-canvas-background-color has-text-color has-background has-label-font-size"><code>GET voyager-open-blocks/get-catalog</code></pre>
<!-- /wp:code -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"signal-ok","fontSize":"label"} -->
<pre class="wp-block-code has-signal-ok-color has-bg-canvas-background-color has-text-color has-background has-label-font-size"><code>voyager-open/cta-band   copy: Eyebrow, Heading, Body
voyager-open/proof-strip
voyager-open/logo-marquee
voyager-open/contact-section
voyager-open/closing-cta</code></pre>
<!-- /wp:code --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vd-agent-step","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"backgroundColor":"bg-panel","layout":{"type":"constrained"}} -->
<div class="wp-block-group vd-agent-step has-bg-panel-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Step 3</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-3","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-3-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Write</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">It places the pattern with this page's copy.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color"><code>insert</code> adds a copy of the pattern at the end of the page and rewrites its named blocks by label. The heading and the line now belong to the Services page.</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"fg-2","fontSize":"label"} -->
<pre class="wp-block-code has-fg-2-color has-bg-canvas-background-color has-text-color has-background has-label-font-size"><code>POST voyager-open-blocks/insert
{"post_id":42,
 "item":"voyager-open/cta-band",
 "position":2,"mode":"copy",
 "copy":{"Eyebrow":"Emergency repairs",
   "Heading":"Need a plumber today?",
   "Body":"Licensed plumbers on call…"}}</code></pre>
<!-- /wp:code --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vd-agent-step","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"backgroundColor":"bg-panel","layout":{"type":"constrained"}} -->
<div class="wp-block-group vd-agent-step has-bg-panel-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Step 4</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"accent-2","fontSize":"label","fontFamily":"mono"} -->
<p class="has-accent-2-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Check</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">It proves the markup is valid before it saves.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">Every piece of markup <code>insert</code> returns goes through Block Runner in strict mode, against the site context from step 1. Exit 0 saves. Exit 1 means fix it and validate again.</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"fg-2","fontSize":"label"} -->
<pre class="wp-block-code has-fg-2-color has-bg-canvas-background-color has-text-color has-background has-label-font-size"><code>$ npx block-runner validate page.html --strict --json --context site.context.json</code></pre>
<!-- /wp:code -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"signal-ok","fontSize":"label"} -->
<pre class="wp-block-code has-signal-ok-color has-bg-canvas-background-color has-text-color has-background has-label-font-size"><code>exit 0  valid, saved</code></pre>
<!-- /wp:code --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vd-agent-step","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"backgroundColor":"bg-panel","layout":{"type":"constrained"}} -->
<div class="wp-block-group vd-agent-step has-bg-panel-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Step 5</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"signal-ok","fontSize":"label","fontFamily":"mono"} -->
<p class="has-signal-ok-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Bind</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">It binds the one value the pattern left open.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">The click-to-call button already reads <code>phone</code> and <code>phone_link</code> from Site Data. The agent also binds the eyebrow to the company name. <code>bind</code> refuses any args the catalog does not list.</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"fg-2","fontSize":"label"} -->
<pre class="wp-block-code has-fg-2-color has-bg-canvas-background-color has-text-color has-background has-label-font-size"><code>POST voyager-open-blocks/bind
{"post_id":42,"path":"2/0/0/0",
 "attribute":"content",
 "source":"voyager/site-data",
 "args":{"key":"company"}}</code></pre>
<!-- /wp:code --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vd-agent-step","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"backgroundColor":"bg-panel","layout":{"type":"constrained"}} -->
<div class="wp-block-group vd-agent-step has-bg-panel-background-color has-background"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Step 6</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"signal-ok","fontSize":"label","fontFamily":"mono"} -->
<p class="has-signal-ok-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Bind</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Then it checks that every value arrived.</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color"><code>get-post-blocks</code> reads the page back. Each binding reports resolved or fell back, with the reason and a preview of the value, so the agent proves the page instead of assuming it.</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"fg-2","fontSize":"label"} -->
<pre class="wp-block-code has-fg-2-color has-bg-canvas-background-color has-text-color has-background has-label-font-size"><code>GET voyager-open-blocks/get-post-blocks</code></pre>
<!-- /wp:code -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"signal-ok","fontSize":"label"} -->
<pre class="wp-block-code has-signal-ok-color has-bg-canvas-background-color has-text-color has-background has-label-font-size"><code>company     resolved  “Example Co.”
phone       resolved  “(555) 010-0199”
phone_link  resolved  “tel:5550100199”</code></pre>
<!-- /wp:code --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"vd-stage","style":{"border":{"top":{"color":"var:preset|color|border-hair","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"bg-panel","textColor":"fg-2","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull vd-stage has-fg-2-color has-bg-panel-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--border-hair);border-top-width:1px;padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|8"},"margin":{"bottom":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom" style="margin-bottom:var(--wp--preset--spacing--6)"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-3","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-3-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase"><strong>02</strong> · Patterns</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Five patterns that follow your theme.</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">Core blocks and your theme's presets, nothing else. Each render below is the pattern's real markup, rendered by this site. Switch the theme and watch it follow.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"vd-stage-switch","style":{"spacing":{"blockGap":"var:preset|spacing|2"}}} -->
<div class="wp-block-buttons vd-stage-switch"><!-- wp:button {"tagName":"button","className":"is-style-outline vd-stage-show-light"} -->
<div class="wp-block-button is-style-outline vd-stage-show-light"><button type="button" class="wp-block-button__link wp-element-button">Light theme</button></div>
<!-- /wp:button -->

<!-- wp:button {"tagName":"button","className":"is-style-outline vd-stage-show-dark"} -->
<div class="wp-block-button is-style-outline vd-stage-show-dark"><button type="button" class="wp-block-button__link wp-element-button">Voyager dark</button></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","className":"vd-ob-card","style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"backgroundColor":"bg-raised","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide vd-ob-card has-bg-raised-background-color has-background"><!-- wp:group {"className":"vd-ob-card__meta","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vd-ob-card__meta"><!-- wp:paragraph {"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
<p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size">voyager-open/cta-band</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"signal-ok","fontSize":"label","fontFamily":"mono"} -->
<p class="has-signal-ok-color has-text-color has-mono-font-family has-label-font-size">binds phone · phone_link</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-section-light vd-stage-canvas","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-section-light vd-stage-canvas"><!-- wp:pattern {"slug":"voyager-open/cta-band"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vd-ob-card__desc","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vd-ob-card__desc"><!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
<p class="has-fg-3-color has-text-color has-sm-font-size">Heading and one line beside a primary button and a click-to-call button.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprints/cta-band.json">Try in Playground</a> · <a href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-open-cta-band/SKILL.md">SKILL.md</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:group {"className":"vd-ob-card","style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"backgroundColor":"bg-raised","layout":{"type":"default"}} -->
<div class="wp-block-group vd-ob-card has-bg-raised-background-color has-background"><!-- wp:group {"className":"vd-ob-card__meta","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vd-ob-card__meta"><!-- wp:paragraph {"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
<p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size">voyager-open/proof-strip</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"accent-2","fontSize":"label","fontFamily":"mono"} -->
<p class="has-accent-2-color has-text-color has-mono-font-family has-label-font-size">style: Ticks</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-section-light vd-stage-canvas","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-section-light vd-stage-canvas"><!-- wp:pattern {"slug":"voyager-open/proof-strip"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vd-ob-card__desc","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vd-ob-card__desc"><!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
<p class="has-fg-3-color has-text-color has-sm-font-size">Four credentials in a ticked row between two rules.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprints/proof-strip.json">Try in Playground</a> · <a href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-open-proof-strip/SKILL.md">SKILL.md</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:group {"className":"vd-ob-card","style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"backgroundColor":"bg-raised","layout":{"type":"default"}} -->
<div class="wp-block-group vd-ob-card has-bg-raised-background-color has-background"><!-- wp:group {"className":"vd-ob-card__meta","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vd-ob-card__meta"><!-- wp:paragraph {"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
<p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size">voyager-open/logo-marquee</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"accent-2","fontSize":"label","fontFamily":"mono"} -->
<p class="has-accent-2-color has-text-color has-mono-font-family has-label-font-size">style: Marquee</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-section-light vd-stage-canvas","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-section-light vd-stage-canvas"><!-- wp:pattern {"slug":"voyager-open/logo-marquee"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vd-ob-card__desc","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vd-ob-card__desc"><!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
<p class="has-fg-3-color has-text-color has-sm-font-size">A row of logos that drifts when it is wider than the screen, and holds still under reduced motion.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprints/logo-marquee.json">Try in Playground</a> · <a href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-open-logo-marquee/SKILL.md">SKILL.md</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:group {"align":"wide","className":"vd-ob-card","style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"backgroundColor":"bg-raised","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide vd-ob-card has-bg-raised-background-color has-background"><!-- wp:group {"className":"vd-ob-card__meta","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vd-ob-card__meta"><!-- wp:paragraph {"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
<p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size">voyager-open/contact-section</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"signal-ok","fontSize":"label","fontFamily":"mono"} -->
<p class="has-signal-ok-color has-text-color has-mono-font-family has-label-font-size">binds phone · email · address · address_locality · hours · phone_link · email_link</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-section-light vd-stage-canvas","layout":{"type":"default"}} -->
<div class="wp-block-group is-style-section-light vd-stage-canvas"><!-- wp:pattern {"slug":"voyager-open/contact-section"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vd-ob-card__desc","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vd-ob-card__desc"><!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
<p class="has-fg-3-color has-text-color has-sm-font-size">Phone, email, address and hours from Site Data, beside a slot for your form.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprints/contact-section.json">Try in Playground</a> · <a href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-open-contact-section/SKILL.md">SKILL.md</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"42%"} -->
<div class="wp-block-column" style="flex-basis:42%"><!-- wp:group {"className":"vd-ob-card","style":{"spacing":{"blockGap":"var:preset|spacing|0"}},"backgroundColor":"bg-raised","layout":{"type":"default"}} -->
<div class="wp-block-group vd-ob-card has-bg-raised-background-color has-background"><!-- wp:group {"className":"vd-ob-card__meta","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vd-ob-card__meta"><!-- wp:paragraph {"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
<p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size">voyager-open/icon</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"accent-2","fontSize":"label","fontFamily":"mono"} -->
<p class="has-accent-2-color has-text-color has-mono-font-family has-label-font-size">block</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"is-style-section-light vd-stage-canvas","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
<div class="wp-block-group is-style-section-light vd-stage-canvas" style="padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--5)"><!-- wp:voyager-open/icon {"icon":"rocket-launch","size":32,"animation":"float","animationTrigger":"always","textColor":"accent-bright"} /-->

<!-- wp:voyager-open/icon {"icon":"shield-check","size":32} /-->

<!-- wp:voyager-open/icon {"icon":"phone","size":32} /-->

<!-- wp:voyager-open/icon {"icon":"map-pin","size":32} /-->

<!-- wp:voyager-open/icon {"icon":"clock","size":32} /-->

<!-- wp:voyager-open/icon {"icon":"sparkles","size":32,"animation":"pulse","animationTrigger":"hover"} /-->

<!-- wp:voyager-open/icon {"icon":"envelope","size":32} /-->

<!-- wp:voyager-open/icon {"icon":"bolt","size":32} /-->

<!-- wp:voyager-open/icon {"icon":"globe","size":32} /-->

<!-- wp:voyager-open/icon {"icon":"light-bulb","size":32} /--></div>
<!-- /wp:group -->

<!-- wp:group {"className":"vd-ob-card__desc","style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group vd-ob-card__desc"><!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
<p class="has-fg-3-color has-text-color has-sm-font-size">35 outline icons, an optional link and CSS-only motion. It saves no HTML, so there is nothing to go stale.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"sm"} -->
<p class="has-sm-font-size"><a href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-open-icon/SKILL.md">SKILL.md</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"58%"} -->
<div class="wp-block-column" style="flex-basis:58%"><!-- wp:group {"className":"vd-ob-card","style":{"spacing":{"padding":{"top":"var:preset|spacing|2","bottom":"var:preset|spacing|2","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"backgroundColor":"bg-raised","layout":{"type":"default"}} -->
<div class="wp-block-group vd-ob-card has-bg-raised-background-color has-background" style="padding-top:var(--wp--preset--spacing--2);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--2);padding-left:var(--wp--preset--spacing--5)"><!-- wp:table {"hasFixedLayout":false,"className":"vd-ob-sources","borderColor":"border-hair","fontSize":"base"} -->
<figure class="wp-block-table vd-ob-sources has-base-font-size"><table class="has-border-color has-border-hair-border-color"><thead><tr><th>Binding source</th><th>Reads</th></tr></thead><tbody><tr><td><code>voyager/site-data</code></td><td>Company, phone, email, address, hours and social links, from Settings › Site Data.</td></tr><tr><td><code>voyager/post-meta-text</code></td><td>Allowlisted post meta, with JSON dot paths for nested values.</td></tr><tr><td>5 abilities</td><td><code>get-catalog</code>, <code>get-post-blocks</code>, <code>insert</code>, <code>configure</code> and <code>bind</code>, over REST and to MCP clients through the MCP Adapter.</td></tr></tbody></table></figure>
<!-- /wp:table --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"vd-ob-install","style":{"border":{"top":{"color":"var:preset|color|border-hair","width":"1px"}},"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"bg-canvas","textColor":"fg-2","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull vd-ob-install has-fg-2-color has-bg-canvas-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--border-hair);border-top-width:1px;padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:columns {"verticalAlignment":"bottom","align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|4","left":"var:preset|spacing|8"},"margin":{"bottom":"var:preset|spacing|6"}}}} -->
<div class="wp-block-columns alignwide are-vertically-aligned-bottom" style="margin-bottom:var(--wp--preset--spacing--6)"><!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-3","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-3-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase"><strong>03</strong> · Install</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Give it to your agent.</h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom"} -->
<div class="wp-block-column is-vertically-aligned-bottom"><!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">Install the plugin on the site and the skills in the agent's harness. Then ask for a page.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|5","left":"var:preset|spacing|5"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"14px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"bg-panel","borderColor":"border-hair","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-hair-border-color has-bg-panel-background-color has-background" style="border-width:1px;border-radius:14px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Install</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">Pick the route that matches how you ship plugins.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Skills, in the agent's harness</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"fg-2","fontSize":"sm"} -->
<pre class="wp-block-code has-fg-2-color has-bg-canvas-background-color has-text-color has-background has-sm-font-size"><code>$ npx skills add voyager-marketing/voyager-open-blocks</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Plugin zip, from the <a href="https://github.com/voyager-marketing/voyager-open-blocks/releases/latest">latest release</a></p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"fg-2","fontSize":"sm"} -->
<pre class="wp-block-code has-fg-2-color has-bg-canvas-background-color has-text-color has-background has-sm-font-size"><code>$ wp plugin install voyager-open-blocks.zip --activate</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase">Composer</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-canvas","textColor":"fg-2","fontSize":"sm"} -->
<pre class="wp-block-code has-fg-2-color has-bg-canvas-background-color has-text-color has-background has-sm-font-size"><code>$ composer config repositories.voyager-open-blocks vcs https://github.com/voyager-marketing/voyager-open-blocks
$ composer require voyager-marketing/voyager-open-blocks</code></pre>
<!-- /wp:code -->

<!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
<p class="has-fg-4-color has-text-color has-sm-font-size">Or skip installing: <a href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprint.json">open the pack in Playground</a> with demo content.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"style":{"border":{"radius":"14px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"bg-panel","borderColor":"border-hair","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-border-color has-border-hair-border-color has-bg-panel-background-color has-background" style="border-width:1px;border-radius:14px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading">Then ask for a page</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">One prompt the skills are written for.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"left":{"color":"var:preset|color|accent-bright","width":"3px"}},"spacing":{"padding":{"top":"var:preset|spacing|4","bottom":"var:preset|spacing|4","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"backgroundColor":"bg-canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-bg-canvas-background-color has-background" style="border-left-color:var(--wp--preset--color--accent-bright);border-left-width:3px;padding-top:var(--wp--preset--spacing--4);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--4);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"textColor":"fg-1","fontFamily":"mono"} -->
<p class="has-fg-1-color has-text-color has-mono-font-family">Add the voyager-open/cta-band pattern to the end of the Services page. Rewrite the heading and the line of copy for that page, keep the click-to-call button bound to voyager/site-data phone_link, and validate the page with Block Runner before saving.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
<p class="has-fg-4-color has-text-color has-sm-font-size">Start the agent at <a href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-open-blocks/SKILL.md">skills/voyager-open-blocks/SKILL.md</a>.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","className":"vd-ob-close","style":{"border":{"top":{"color":"var:preset|color|border-hair","width":"1px"}},"spacing":{"padding":{"bottom":"var:preset|spacing|8"},"blockGap":"var:preset|spacing|0"}},"backgroundColor":"bg-panel","textColor":"fg-2","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull vd-ob-close has-fg-2-color has-bg-panel-background-color has-text-color has-background" style="border-top-color:var(--wp--preset--color--border-hair);border-top-width:1px;padding-bottom:var(--wp--preset--spacing--8)"><!-- wp:group {"tagName":"section","metadata":{"name":"Closing CTA"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"metadata":{"name":"Heading"},"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">Try the pack before you install it.</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"Body"},"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center">Playground loads every block and pattern with demo content, in your browser.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"metadata":{"name":"Primary button"}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprint.json">Open in Playground</a></div>
<!-- /wp:button -->

<!-- wp:button {"metadata":{"name":"Secondary button"},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/voyager-marketing/voyager-open-blocks">Read the source</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-text-align-center has-fg-4-color has-text-color has-mono-font-family has-label-font-size">This section is voyager-open/closing-cta, with its copy and links rewritten.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->
HTML,
];
