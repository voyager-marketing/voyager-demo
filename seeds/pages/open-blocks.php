<?php
/**
 * Seed: /open-blocks/ page, the Voyager Open Blocks gallery (VOY-1766).
 *
 * Built from the pack itself: the five patterns render live through
 * core/pattern, the icon block is voyager-open/icon, and the site-data
 * lines are bound to voyager/site-data. Deploy does not run the seeder,
 * so demo carries this markup through the Voyager MCP content tools; keep
 * the two identical. The page is held out of search until launch
 * (VOYAGER_DEMO_HELD_PAGES in functions.php).
 *
 * Keep "--" out of the block-comment JSON. WordPress stores it as
 * --, and the upsert path strips the backslashes, so a value like
 * var(--wp--custom--voyager--radius--3) lands as var(u002du002dwp...) and the
 * block fails validation in the editor. That is why the cards here carry no
 * radius token.
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'post_type'  => 'page',
    'slug'       => 'open-blocks',
    'title'      => 'Open Blocks',
    'excerpt'    => 'Every block, binding source and pattern in the Voyager Open Blocks pack, rendered live, with a Playground link, its SKILL.md and an agent prompt for each.',
    'menu_order' => 2,
    'content'    => <<<'HTML'
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|5"}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-fg-1-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"accent-bright","fontSize":"label","fontFamily":"mono"} -->
<p class="has-accent-bright-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Voyager Open Blocks · GPL-2.0-or-later · WordPress 6.9+</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.03em"}},"fontSize":"5xl"} -->
<h1 class="wp-block-heading has-5-xl-font-size" style="letter-spacing:-0.03em">Blocks your AI agent can actually use.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3","fontSize":"lg"} -->
<p class="has-fg-3-color has-text-color has-lg-font-size">A free WordPress block pack where every block, binding source and pattern ships with a SKILL.md an agent can follow, and every pattern is checked with the block editor's own parser before it ships.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprint.json">Open in Playground</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/voyager-marketing/voyager-open-blocks">Read the source</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:heading {"style":{"spacing":{"margin":{"top":"var:preset|spacing|8"}}},"fontSize":"2xl"} -->
<h2 class="wp-block-heading has-2-xl-font-size" style="margin-top:var(--wp--preset--spacing--8)">How it works</h2>
<!-- /wp:heading -->

<!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|4"}},"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"16rem"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"bg-raised","borderColor":"border-hair","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-border-color has-border-hair-border-color has-bg-raised-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:voyager-open/icon {"icon":"document","size":32,"textColor":"accent-bright"} /-->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Read</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
<p class="has-fg-3-color has-text-color has-sm-font-size"><a href="https://github.com/humanmade/wesper">Wesper</a> reads what the site accepts: registered blocks, theme tokens and bindable fields. <a href="https://github.com/voyager-marketing/voyager-wayfinder">Wayfinder</a> maps how the site is built and where each thing is edited. Wayfinder is pre-1.0.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"bg-raised","borderColor":"border-hair","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-border-color has-border-hair-border-color has-bg-raised-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:voyager-open/icon {"icon":"check-circle","size":32,"textColor":"accent-bright"} /-->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Check</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
<p class="has-fg-3-color has-text-color has-sm-font-size"><a href="https://github.com/humanmade/block-runner">Block Runner</a> validates the markup an agent writes before it is saved, so an invalid block is caught before it reaches the editor.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|3"}},"backgroundColor":"bg-raised","borderColor":"border-hair","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-border-color has-border-hair-border-color has-bg-raised-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:voyager-open/icon {"icon":"link","size":32,"textColor":"accent-bright"} /-->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Bind</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
<p class="has-fg-3-color has-text-color has-sm-font-size">The pack binds block attributes to real site data through voyager/site-data and voyager/post-meta-text, using only the arguments its catalog lists.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-fg-1-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"fontSize":"3xl"} -->
<h2 class="wp-block-heading has-3-xl-font-size">Five patterns, rendered live</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">Each panel below is the registered pattern, rendered by this site with its stock copy. Nothing is a screenshot. Where a pattern binds to site data, it shows this site's own settings.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-fg-1-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Pattern · voyager-open/cta-band</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">CTA band</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">A full-width band: eyebrow, heading and one line of copy beside a primary button and a click-to-call button bound to site data.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprints/cta-band.json">Open in Playground</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-open-cta-band/SKILL.md">Read the SKILL.md</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Agent prompt</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-inset","textColor":"fg-2","fontSize":"sm"} -->
<pre class="wp-block-code has-fg-2-color has-bg-inset-background-color has-text-color has-background has-sm-font-size"><code>Add the voyager-open/cta-band pattern to the end of the Services page. Rewrite the heading and the line of copy for that page, keep the click-to-call button bound to voyager/site-data phone_link, and validate the page with Block Runner before saving.</code></pre>
<!-- /wp:code --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}},"backgroundColor":"bg-panel","textColor":"fg-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-fg-1-color has-bg-panel-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:pattern {"slug":"voyager-open/cta-band"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-fg-1-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Pattern · voyager-open/proof-strip</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Proof strip</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">One ruled row of three to six checkmarked credentials, usually right under a hero: licenses, years in business, guarantees.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprints/proof-strip.json">Open in Playground</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-open-proof-strip/SKILL.md">Read the SKILL.md</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Agent prompt</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-inset","textColor":"fg-2","fontSize":"sm"} -->
<pre class="wp-block-code has-fg-2-color has-bg-inset-background-color has-text-color has-background has-sm-font-size"><code>Insert the voyager-open/proof-strip pattern directly under the home page hero. Fill it with four credentials taken from the About page, such as licenses and years in business. Use only facts the site already states.</code></pre>
<!-- /wp:code --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}},"backgroundColor":"bg-panel","textColor":"fg-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-fg-1-color has-bg-panel-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:pattern {"slug":"voyager-open/proof-strip"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-fg-1-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Pattern · voyager-open/logo-marquee</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Logo marquee</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">An eyebrow over a row of logos that drifts sideways when it is wider than the screen. It ships placeholder logos, shown here, to replace with your own.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprints/logo-marquee.json">Open in Playground</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-open-logo-marquee/SKILL.md">Read the SKILL.md</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Agent prompt</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-inset","textColor":"fg-2","fontSize":"sm"} -->
<pre class="wp-block-code has-fg-2-color has-bg-inset-background-color has-text-color has-background has-sm-font-size"><code>Add the voyager-open/logo-marquee pattern above the footer on the home page. Replace every placeholder logo with a client logo from the media library, and give each image alt text that names the company.</code></pre>
<!-- /wp:code --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}},"backgroundColor":"bg-panel","textColor":"fg-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-fg-1-color has-bg-panel-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:pattern {"slug":"voyager-open/logo-marquee"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-fg-1-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Pattern · voyager-open/contact-section</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Contact section</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">Phone, email, address and hours bound to site data, beside a slot that holds an email fallback until a form plugin's block replaces it.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprints/contact-section.json">Open in Playground</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-open-contact-section/SKILL.md">Read the SKILL.md</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Agent prompt</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-inset","textColor":"fg-2","fontSize":"sm"} -->
<pre class="wp-block-code has-fg-2-color has-bg-inset-background-color has-text-color has-background has-sm-font-size"><code>Put the voyager-open/contact-section pattern on the Contact page. Keep the phone, email, address and hours bound to voyager/site-data, and replace the form slot with the form plugin's block.</code></pre>
<!-- /wp:code --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}},"backgroundColor":"bg-panel","textColor":"fg-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-fg-1-color has-bg-panel-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:pattern {"slug":"voyager-open/contact-section"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-fg-1-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Pattern · voyager-open/closing-cta</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Closing CTA</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">A centered band to end a page: a heading, one line of copy, a primary button and an email button bound to site data. The last section of this page is the same pattern with its copy rewritten.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprints/closing-cta.json">Open in Playground</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-open-closing-cta/SKILL.md">Read the SKILL.md</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Agent prompt</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-inset","textColor":"fg-2","fontSize":"sm"} -->
<pre class="wp-block-code has-fg-2-color has-bg-inset-background-color has-text-color has-background has-sm-font-size"><code>End the About page with the voyager-open/closing-cta pattern. Write a heading and one line of copy that fit the page, and keep the email button bound to voyager/site-data email_link.</code></pre>
<!-- /wp:code --></section>
<!-- /wp:group -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5"}}},"backgroundColor":"bg-panel","textColor":"fg-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-fg-1-color has-bg-panel-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5)"><!-- wp:pattern {"slug":"voyager-open/closing-cta"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-fg-1-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"fontSize":"3xl"} -->
<h2 class="wp-block-heading has-3-xl-font-size">One block, two binding sources</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">The binding sources keep their production names, so patterns written for this pack work on any site that already uses them.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-fg-1-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Block · voyager-open/icon</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Icon</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">An outline icon from a fixed set of 35, with an optional link and a CSS-only animation. It saves no HTML, so there is nothing to go stale. The row below is the block, rendered live.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|6"}},"backgroundColor":"bg-panel","borderColor":"border-hair","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group has-border-color has-border-hair-border-color has-bg-panel-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:voyager-open/icon {"icon":"rocket-launch","size":40,"animation":"float","animationTrigger":"always","textColor":"accent-bright"} /-->

<!-- wp:voyager-open/icon {"icon":"shield-check","size":40,"textColor":"fg-2"} /-->

<!-- wp:voyager-open/icon {"icon":"phone","size":40,"textColor":"fg-2"} /-->

<!-- wp:voyager-open/icon {"icon":"map-pin","size":40,"textColor":"fg-2"} /-->

<!-- wp:voyager-open/icon {"icon":"clock","size":40,"textColor":"fg-2"} /-->

<!-- wp:voyager-open/icon {"icon":"sparkles","size":40,"animation":"pulse","animationTrigger":"hover","textColor":"fg-2"} /--></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprints/icon.json">Open in Playground</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-open-icon/SKILL.md">Read the SKILL.md</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Agent prompt</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-inset","textColor":"fg-2","fontSize":"sm"} -->
<pre class="wp-block-code has-fg-2-color has-bg-inset-background-color has-text-color has-background has-sm-font-size"><code>Add a row of three voyager-open/icon blocks above the features list: shield-check, clock and wrench, 32 pixels each. Take the names from the block's enum, and leave the labels empty because the icons are decorative.</code></pre>
<!-- /wp:code --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-fg-1-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Binding source · voyager/site-data</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Site data</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">Company name, phone, email, address, hours and social links, set once under Settings › Site Data and bound everywhere, including ready-made tel: and mailto: links. The three values below are bound live to this site's settings.</p>
<!-- /wp:paragraph -->

<!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|5","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|2"}},"backgroundColor":"bg-panel","borderColor":"border-hair","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group has-border-color has-border-hair-border-color has-bg-panel-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--5);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-sm-font-size">company →</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"voyager/site-data","args":{"key":"company"}}}},"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
<p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size">Company name</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-sm-font-size">phone →</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"voyager/site-data","args":{"key":"phone"}}}},"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
<p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size">Phone number</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|3"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-sm-font-size">copyright →</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"metadata":{"bindings":{"content":{"source":"voyager/site-data","args":{"key":"copyright"}}}},"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
<p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size">Copyright line</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprints/site-data.json">Open in Playground</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-site-data/SKILL.md">Read the SKILL.md</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Agent prompt</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-inset","textColor":"fg-2","fontSize":"sm"} -->
<pre class="wp-block-code has-fg-2-color has-bg-inset-background-color has-text-color has-background has-sm-font-size"><code>Bind the footer phone number and its Call us button to voyager/site-data: phone for the text, phone_link for the button URL. Check get-catalog for the exact keys before binding.</code></pre>
<!-- /wp:code --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-fg-1-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Binding source · voyager/post-meta-text</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"fontSize":"xl"} -->
<h3 class="wp-block-heading has-xl-font-size">Post meta text</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">Binds text to an allowlisted post meta field of the current post, including a dot path into a JSON value. This page has no bindable fields of its own, so there is nothing to show live here. The Playground opens a page bound to its own demo fields.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/voyager-marketing/voyager-open-blocks/main/blueprints/post-meta-text.json">Open in Playground</a></div>
<!-- /wp:button -->

<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://github.com/voyager-marketing/voyager-open-blocks/blob/main/skills/voyager-post-meta-text/SKILL.md">Read the SKILL.md</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons -->

<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.08em","textTransform":"uppercase"}},"textColor":"fg-4","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-4-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.08em;text-transform:uppercase">Agent prompt</p>
<!-- /wp:paragraph -->

<!-- wp:code {"backgroundColor":"bg-inset","textColor":"fg-2","fontSize":"sm"} -->
<pre class="wp-block-code has-fg-2-color has-bg-inset-background-color has-text-color has-background has-sm-font-size"><code>Make a service_eyebrow field bindable on pages with voyager_open_blocks_register_bindable_meta(), then bind each service page's eyebrow paragraph to it through voyager/post-meta-text.</code></pre>
<!-- /wp:code --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|5","right":"var:preset|spacing|5"},"blockGap":"var:preset|spacing|4"}},"backgroundColor":"bg-panel","textColor":"fg-1","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-fg-1-color has-bg-panel-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--5)"><!-- wp:heading {"fontSize":"3xl"} -->
<h2 class="wp-block-heading has-3-xl-font-size">Install</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3"} -->
<p class="has-fg-3-color has-text-color">Download the plugin zip from the latest release, then upload it under Plugins › Add New Plugin › Upload Plugin and activate it. The pack needs WordPress 6.9 or later and PHP 8.1 or later.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://github.com/voyager-marketing/voyager-open-blocks/releases/latest/download/voyager-open-blocks.zip">Download the plugin zip</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->

<!-- wp:group {"tagName":"section","metadata":{"name":"Closing CTA"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained","contentSize":"720px"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)"><!-- wp:heading {"metadata":{"name":"Heading"},"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">Want this running on your own site?</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"metadata":{"name":"Body"},"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center">Voyager builds and runs WordPress sites this way: agents draft from your blocks and your data, a person reviews, and every page is validated before it ships.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"metadata":{"name":"Primary button"}} -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="https://voyagermark.com/contact/">Talk to Voyager</a></div>
<!-- /wp:button -->

<!-- wp:button {"metadata":{"name":"Secondary button"},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="https://voyagermark.com/">Visit voyagermark.com</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></section>
<!-- /wp:group -->
HTML,
];
