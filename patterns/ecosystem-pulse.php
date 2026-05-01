<?php
/**
 * Title: Ecosystem Pulse
 * Slug: voyager-demo/ecosystem-pulse
 * Categories: voyager-demo
 * Keywords: pulse, stats, live, ecosystem, data, dashboard, metrics, velocity
 * Block Types: core/group
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"dark","textColor":"light","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-light-color has-dark-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--60)">

        <!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
        <p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Ecosystem pulse', 'pulse section eyebrow', 'voyagermark' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em"><?php echo esc_html_x( 'Built different. Measured live.', 'pulse section heading', 'voyagermark' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"light-muted","style":{"spacing":{"margin":{"bottom":"0"}}}} -->
        <p class="has-text-align-center has-light-muted-color has-text-color" style="margin-bottom:0"><?php echo esc_html_x( 'Every number on this page is computed from real WordPress data — CPTs, patterns, publishing velocity, and content freshness. No hard-coded stats.', 'pulse section description', 'voyagermark' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:heading {"level":3,"textColor":"accent","style":{"typography":{"fontSize":"3rem","letterSpacing":"-0.04em","fontWeight":"700"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"total_pseo_pages"}}}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color" style="font-size:3rem;font-weight:700;letter-spacing:-0.04em">92</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"light","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <p class="has-light-color has-text-color" style="font-weight:600;margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'pSEO landing pages', 'pulse metric label', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
            <p class="has-light-muted-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Service areas + industry pages + neighborhoods, all data-bound', 'pulse metric detail', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:heading {"level":3,"textColor":"secondary","style":{"typography":{"fontSize":"3rem","letterSpacing":"-0.04em","fontWeight":"700"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"cities_covered"}}}}} -->
            <h3 class="wp-block-heading has-secondary-color has-text-color" style="font-size:3rem;font-weight:700;letter-spacing:-0.04em">15</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"light","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <p class="has-light-color has-text-color" style="font-weight:600;margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Cities covered', 'pulse metric label', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"coverage_label"}}}}} -->
            <p class="has-light-muted-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--10)">15 cities, 92 landing pages</p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:heading {"level":3,"textColor":"primary","style":{"typography":{"fontSize":"3rem","letterSpacing":"-0.04em","fontWeight":"700"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"freshness_score"}}}}} -->
            <h3 class="wp-block-heading has-primary-color has-text-color" style="font-size:3rem;font-weight:700;letter-spacing:-0.04em">95%</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"light","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <p class="has-light-color has-text-color" style="font-weight:600;margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Content freshness', 'pulse metric label', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}}} -->
            <p class="has-light-muted-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Percentage of content updated in the last 90 days', 'pulse metric detail', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.06)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.06);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-columns is-not-stacked-on-mobile">
                <!-- wp:column {"width":"auto"} -->
                <div class="wp-block-column" style="flex-basis:auto">
                    <!-- wp:heading {"level":4,"textColor":"accent","style":{"typography":{"fontSize":"1.75rem","fontWeight":"700"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"avg_posts_per_week"}}}}} -->
                    <h4 class="wp-block-heading has-accent-color has-text-color" style="font-size:1.75rem;font-weight:700">3.2</h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small"} -->
                    <p class="has-light-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Avg posts/week over the last 90 days', 'pulse velocity label', 'voyagermark' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.06)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.06);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-columns is-not-stacked-on-mobile">
                <!-- wp:column {"width":"auto"} -->
                <div class="wp-block-column" style="flex-basis:auto">
                    <!-- wp:heading {"level":4,"textColor":"secondary","style":{"typography":{"fontSize":"1.75rem","fontWeight":"700"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"content_this_month"}}}}} -->
                    <h4 class="wp-block-heading has-secondary-color has-text-color" style="font-size:1.75rem;font-weight:700">8</h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small"} -->
                    <p class="has-light-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'New content pieces this month', 'pulse monthly label', 'voyagermark' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.06)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.06);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-columns is-not-stacked-on-mobile">
                <!-- wp:column {"width":"auto"} -->
                <div class="wp-block-column" style="flex-basis:auto">
                    <!-- wp:heading {"level":4,"textColor":"primary","style":{"typography":{"fontSize":"1.75rem","fontWeight":"700"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"newest_post_date"}}}}} -->
                    <h4 class="wp-block-heading has-primary-color has-text-color" style="font-size:1.75rem;font-weight:700">2 hours ago</h4>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small"} -->
                    <p class="has-light-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Last content published', 'pulse recency label', 'voyagermark' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.06)"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide" style="border-color:rgba(255,255,255,0.06);border-width:1px;border-radius:12px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small"} -->
            <p class="has-light-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Voyager blocks:', 'pulse footer label', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"light","fontSize":"small","style":{"typography":{"fontWeight":"600"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"block_count"}}}}} -->
            <p class="has-light-color has-text-color has-small-font-size" style="font-weight:600">28</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small"} -->
            <p class="has-light-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Patterns:', 'pulse footer label', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"light","fontSize":"small","style":{"typography":{"fontWeight":"600"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"pattern_count"}}}}} -->
            <p class="has-light-color has-text-color has-small-font-size" style="font-weight:600">114</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small"} -->
            <p class="has-light-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Days live:', 'pulse footer label', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"light","fontSize":"small","style":{"typography":{"fontWeight":"600"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"uptime_days"}}}}} -->
            <p class="has-light-color has-text-color has-small-font-size" style="font-weight:600">830</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small"} -->
            <p class="has-light-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Total content:', 'pulse footer label', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"light","fontSize":"small","style":{"typography":{"fontWeight":"600"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"total_content"}}}}} -->
            <p class="has-light-color has-text-color has-small-font-size" style="font-weight:600">120</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
