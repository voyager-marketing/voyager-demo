<?php
/**
 * Title: Front Hero
 * Slug: voyager-demo/front-hero
 * Categories: voyager-demo
 * Keywords: hero, front page, showcase, platform, demo
 * Block Types: core/group
 *
 * The MCP playground URL is not decided yet — the secondary button points at
 * a marked placeholder anchor until the playground ships. Tracked in the
 * PRJ-56 Discoveries page.
 */
?>
<!-- wp:group {"align":"full","backgroundColor":"bg-canvas","textColor":"fg-1","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-canvas-background-color has-fg-1-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:paragraph {"align":"center","textColor":"accent-bright","fontSize":"sm","style":{"typography":{"fontWeight":"600","letterSpacing":"0.12em","textTransform":"uppercase"}}} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-sm-font-size" style="font-weight:600;letter-spacing:0.12em;text-transform:uppercase">Live demo — every feature in production</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"level":1,"textAlign":"center","fontSize":"5xl"} -->
    <h1 class="wp-block-heading has-text-align-center has-5-xl-font-size">The Voyager platform, running on itself</h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"lg","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
    <p class="has-text-align-center has-fg-3-color has-text-color has-lg-font-size" style="margin-bottom:var(--wp--preset--spacing--60)">This site runs the same Orbit + Blocks + Core stack we ship to clients. Every stat on this page is a live block binding, every section is a registered pattern, and AI agents handle the ops. Nothing is mocked — poke at anything.</p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"accent","textColor":"accent-fg-on"} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-accent-fg-on-color has-accent-background-color has-text-color has-background wp-element-button" href="/showcases/">Explore the showcases</a></div>
        <!-- /wp:button -->
        <!-- wp:button {"className":"is-style-outline","textColor":"fg-1"} -->
        <div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-fg-1-color has-text-color wp-element-button" href="#mcp-playground-coming-soon">Open the MCP playground</a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-5","fontSize":"label","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
    <p class="has-text-align-center has-fg-5-color has-text-color has-label-font-size" style="margin-top:var(--wp--preset--spacing--40)">MCP playground opens with first deploy — the button goes live when it does.</p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
