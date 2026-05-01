<?php
/**
 * Title: Behind the Build
 * Slug: voyager-demo/behind-the-build
 * Categories: voyager-demo
 * Keywords: technical, stack, build, case study, deep dive, architecture
 * Block Types: core/group
 */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"backgroundColor":"dark","textColor":"light","layout":{"type":"constrained","contentSize":"780px"}} -->
<div class="wp-block-group alignfull has-dark-background-color has-light-text-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--70);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
    <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase">Behind the build</p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"fontSize":"x-large"} -->
    <h2 class="wp-block-heading has-x-large-font-size">How we built it</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"textColor":"muted","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|50"}}}} -->
    <p class="has-muted-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--50)">A look under the hood at the tools, decisions, and architecture behind this project.</p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns">

        <!-- wp:column -->
        <div class="wp-block-column">

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","width":"1px","color":"#ffffff15"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-color:#ffffff15;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:heading {"level":4,"textColor":"secondary","fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em","fontWeight":"600"}}} -->
                <h4 class="wp-block-heading has-secondary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase">Theme</h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"light","fontSize":"small"} -->
                <p class="has-light-color has-text-color has-small-font-size">Custom block theme with design tokens, Inter typography, and GSAP entrance animations.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}},"border":{"radius":"12px","width":"1px","color":"#ffffff15"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-color:#ffffff15;border-width:1px;border-radius:12px;margin-top:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:heading {"level":4,"textColor":"secondary","fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em","fontWeight":"600"}}} -->
                <h4 class="wp-block-heading has-secondary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase">Blocks</h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"light","fontSize":"small"} -->
                <p class="has-light-color has-text-color has-small-font-size">Voyager Blocks for animated sections, stats counters, testimonial carousels, and portfolio grids.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","width":"1px","color":"#ffffff15"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-color:#ffffff15;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:heading {"level":4,"textColor":"secondary","fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em","fontWeight":"600"}}} -->
                <h4 class="wp-block-heading has-secondary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase">AI</h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"light","fontSize":"small"} -->
                <p class="has-light-color has-text-color has-small-font-size">Voyager Orbit for lead tracking and AI abilities. Content generated via Claude and published through MCP.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}},"border":{"radius":"12px","width":"1px","color":"#ffffff15"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-color:#ffffff15;border-width:1px;border-radius:12px;margin-top:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:heading {"level":4,"textColor":"secondary","fontSize":"small","style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.05em","fontWeight":"600"}}} -->
                <h4 class="wp-block-heading has-secondary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.05em;text-transform:uppercase">SEO</h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"light","fontSize":"small"} -->
                <p class="has-light-color has-text-color has-small-font-size">Programmatic SEO with block bindings, RankMath schema, and automated internal linking across all pages.</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
