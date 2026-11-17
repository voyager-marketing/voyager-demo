<?php
/**
 * Seed: /open-blocks/sections/, the Voyager Open Blocks section gallery.
 *
 * A child page of /open-blocks/. An intro, then the
 * voyager-demo/open-blocks-sections pattern, which prints every pattern the
 * installed pack registers, grouped by section with its layouts side by
 * side, under a Plain, Panel, Inverted and Accent switch, each layout with
 * its copy buttons. All of that is read from the pattern registry when the
 * page renders (functions.php, the /open-blocks/sections/ section gallery),
 * so a layout a later pack release adds appears after the next deploy with
 * no edit here. Nothing on the page counts patterns by hand.
 *
 * Deploy does not run the seeder, so demo carries this markup through the
 * Voyager MCP content tools; keep the two identical. The page is held out of
 * search until launch: open-blocks/sections is in VOYAGER_DEMO_HELD_PAGES.
 *
 * Do not open and save this page in the block editor. The editor replaces a
 * core/pattern block with a copy of the pattern's blocks, which would freeze
 * the gallery at the release it was saved under.
 *
 * Keep "--" out of the block-comment JSON, and <, >, & and quotes out of
 * attribute values: the upsert path escapes them (see the header of
 * seeds/pages/open-blocks.php).
 *
 * @package VoyagerDemo
 */

declare(strict_types=1);

return [
    'post_type'  => 'page',
    'slug'       => 'sections',
    'parent'     => 'open-blocks',
    'title'      => 'Open Blocks sections',
    'excerpt'    => 'Every Voyager Open Blocks section in every layout the pack ships, rendered by this site, with a switch for the Panel, Inverted and Accent section styles and copy buttons on each.',
    'menu_order' => 0,
    'content'    => <<<'HTML'
<!-- wp:group {"tagName":"section","align":"full","className":"vd-obs-intro","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|5","left":"var:preset|spacing|5","right":"var:preset|spacing|5"}}},"backgroundColor":"bg-canvas","textColor":"fg-2","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull vd-obs-intro has-fg-2-color has-bg-canvas-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--5);padding-bottom:var(--wp--preset--spacing--5);padding-left:var(--wp--preset--spacing--5)"><!-- wp:paragraph {"style":{"typography":{"letterSpacing":"0.06em","textTransform":"uppercase"}},"textColor":"fg-3","fontSize":"label","fontFamily":"mono"} -->
<p class="has-fg-3-color has-text-color has-mono-font-family has-label-font-size" style="letter-spacing:0.06em;text-transform:uppercase"><a href="/open-blocks/">Open Blocks</a> · Section gallery</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-0.04em","lineHeight":"1.02"}},"fontSize":"5xl"} -->
<h1 class="wp-block-heading has-5-xl-font-size" style="letter-spacing:-0.04em;line-height:1.02">Every section, in every section style.</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"textColor":"fg-3","fontSize":"lg"} -->
<p class="has-fg-3-color has-text-color has-lg-font-size">Each layout below is a pattern from the pack, rendered by this site from the markup the pack registers. Pick a section style and every section takes it at once: Panel, Inverted or Accent, or Plain for none. The colours come from the pack's role map reading this theme's palette, the Voyager design system. This page adds no colour of its own.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
<p class="has-fg-4-color has-text-color has-sm-font-size">The text in each section is the pack's own placeholder copy. Phone numbers, emails and other bound values come from this demo site's settings, which hold made-up details.</p>
<!-- /wp:paragraph --></section>
<!-- /wp:group -->

<!-- wp:pattern {"slug":"voyager-demo/open-blocks-sections"} /-->
HTML,
];
