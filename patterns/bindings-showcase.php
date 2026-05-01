<?php
/**
 * Title: Block Bindings Showcase
 * Slug: voyager-demo/bindings-showcase
 * Categories: voyager-demo
 * Keywords: bindings, showcase, demo, data, dynamic, api
 * Block Types: core/group
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"light","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-light-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">

        <!-- wp:paragraph {"align":"center","textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
        <p class="has-text-align-center has-primary-color has-text-color has-small-font-size" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'WordPress Block Bindings API', 'showcase eyebrow', 'voyagermark' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em"><?php echo esc_html_x( '9 Binding Sources. Zero Custom Blocks.', 'showcase heading', 'voyagermark' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"contrast-muted"} -->
        <p class="has-text-align-center has-contrast-muted-color has-text-color"><?php echo esc_html_x( 'Every section below pulls live data from a different binding source. No shortcodes, no custom blocks, no hard-coded values. Standard WordPress core blocks wired to dynamic data.', 'showcase description', 'voyagermark' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"base"} -->
        <div class="wp-block-column has-base-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/site-data', 'source name', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Global Site Data', 'card heading', 'voyagermark' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"small"} -->
            <p class="has-contrast-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Phone, email, address, copyright, social links. Change once in Settings, updates everywhere.', 'card description', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"light"} -->
            <hr class="wp-block-separator has-text-color has-light-color has-alpha-channel-opacity has-light-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"x-small"} -->
            <p class="has-contrast-muted-color has-text-color has-x-small-font-size"><?php echo esc_html_x( 'Live value:', 'demo label', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}},"metadata":{"bindings":{"content":{"source":"voyager/site-data","args":{"key":"copyright"}}}}} -->
            <p class="has-small-font-size" style="font-weight:600">&copy; 2026 Voyager Marketing</p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"base"} -->
        <div class="wp-block-column has-base-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"secondary","fontSize":"small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-secondary-color has-text-color has-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/post-meta-text', 'source name', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Post Meta + JSON Traversal', 'card heading', 'voyagermark' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"small"} -->
            <p class="has-contrast-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( '77 fields across 8 CPTs. Dot-notation for nested JSON. Powers all pSEO pages.', 'card description', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"light"} -->
            <hr class="wp-block-separator has-text-color has-light-color has-alpha-channel-opacity has-light-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"x-small"} -->
            <p class="has-contrast-muted-color has-text-color has-x-small-font-size"><?php echo esc_html_x( 'Example key:', 'demo label', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:code {"fontSize":"x-small"} -->
            <pre class="wp-block-code has-x-small-font-size"><code>sa_local_stats.0.value</code></pre>
            <!-- /wp:code -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"base"} -->
        <div class="wp-block-column has-base-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/pulse', 'source name', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Ecosystem Metrics', 'card heading', 'voyagermark' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"small"} -->
            <p class="has-contrast-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( '15 computed metrics. CPT counts, publishing velocity, freshness score, coverage. All from SQL.', 'card description', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"light"} -->
            <hr class="wp-block-separator has-text-color has-light-color has-alpha-channel-opacity has-light-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"x-small"} -->
            <p class="has-contrast-muted-color has-text-color has-x-small-font-size"><?php echo esc_html_x( 'Live value:', 'demo label', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"total_pseo_pages"}}}}} -->
                <p class="has-small-font-size" style="font-weight:600">92</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"small"} -->
                <p class="has-contrast-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'pSEO pages', 'pulse label', 'voyagermark' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"base"} -->
        <div class="wp-block-column has-base-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/contextual-cta', 'source name', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Smart CTAs', 'card heading', 'voyagermark' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"small"} -->
            <p class="has-contrast-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'One pattern, infinite variations. Adapts headline, text, and URL based on page type, city, or industry.', 'card description', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"base"} -->
        <div class="wp-block-column has-base-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"secondary","fontSize":"small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-secondary-color has-text-color has-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/geo', 'source name', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Geo-Personalization', 'card heading', 'voyagermark' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"small"} -->
            <p class="has-contrast-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'IP-based visitor location. CloudFlare headers first, API fallback. Personalizes any page for any visitor.', 'card description', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"base"} -->
        <div class="wp-block-column has-base-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/ai-content', 'source name', 'voyagermark' ); ?></p>
            <!-- /wp:parameter -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'AI-Generated Content', 'card heading', 'voyagermark' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"small"} -->
            <p class="has-contrast-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Calls Orbit AI abilities at render time. 24h transient cache. Meta descriptions, local content, dynamic CTAs.', 'card description', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"base"} -->
        <div class="wp-block-column has-base-background-color has-background" style="border-radius:16px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/notion', 'source name', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Notion Databases', 'card heading', 'voyagermark' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"small"} -->
            <p class="has-contrast-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Edit a Notion row, the WordPress page updates. Triple-layer caching, 14 property types, database aliases. The newest source.', 'card description', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"light"} -->
            <hr class="wp-block-separator has-text-color has-light-color has-alpha-channel-opacity has-light-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"x-small"} -->
            <p class="has-contrast-muted-color has-text-color has-x-small-font-size"><?php echo esc_html_x( 'Live from Notion:', 'demo label', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Name","filter_key":"Name","filter_value":"What Huntress Is and How It Can Benefit You"}}}}} -->
            <p class="has-small-font-size" style="font-weight:600"><?php echo esc_html_x( 'Loading from Notion...', 'notion demo fallback', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"base"} -->
        <div class="wp-block-column has-base-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"primary","fontSize":"small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-primary-color has-text-color has-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/orbit', 'source name', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Live Orbit Stats', 'card heading', 'voyagermark' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"small"} -->
            <p class="has-contrast-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Real-time Orbit API data. Lead counts, activity feed, conversion rates. Direct from the tracking engine.', 'card description', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"base"} -->
        <div class="wp-block-column has-base-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"secondary","fontSize":"small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-secondary-color has-text-color has-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/meta', 'source name', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Unrestricted Post Meta', 'card heading', 'voyagermark' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"small"} -->
            <p class="has-contrast-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Any post meta key, any post type. No field registry required. The raw power source for custom integrations.', 'card description', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"border":{"radius":"12px"}},"backgroundColor":"dark","textColor":"light","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide has-light-color has-dark-background-color has-text-color has-background" style="border-radius:12px;margin-top:var(--wp--preset--spacing--50)">

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"700","fontSize":"1.5rem"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"block_count"}}}}} -->
            <p class="has-accent-color has-text-color" style="font-size:1.5rem;font-weight:700">28</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small"} -->
            <p class="has-light-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Voyager blocks', 'stat', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"secondary","style":{"typography":{"fontWeight":"700","fontSize":"1.5rem"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"pattern_count"}}}}} -->
            <p class="has-secondary-color has-text-color" style="font-size:1.5rem;font-weight:700">114</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small"} -->
            <p class="has-light-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'patterns', 'stat', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"primary","style":{"typography":{"fontWeight":"700","fontSize":"1.5rem"}}} -->
            <p class="has-primary-color has-text-color" style="font-size:1.5rem;font-weight:700">9</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small"} -->
            <p class="has-light-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'binding sources', 'stat', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"700","fontSize":"1.5rem"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"freshness_score"}}}}} -->
            <p class="has-accent-color has-text-color" style="font-size:1.5rem;font-weight:700">95%</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"light-muted","fontSize":"small"} -->
            <p class="has-light-muted-color has-text-color has-small-font-size"><?php echo esc_html_x( 'content fresh', 'stat', 'voyagermark' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"base","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-base-background-color has-background" style="border-radius:16px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

        <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
        <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.1em"><?php echo esc_html_x( 'Live Notion Demo — voyager/notion source', 'demo section label', 'voyagermark' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"textColor":"contrast-muted","fontSize":"small","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
        <p class="has-contrast-muted-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'The content below is pulled live from a Notion database row via the voyager/notion binding source. Edit the row in Notion and it updates here after cache expiry.', 'demo section description', 'voyagermark' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"backgroundColor":"light"} -->
        <hr class="wp-block-separator has-text-color has-light-color has-alpha-channel-opacity has-light-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--30)"/>
        <!-- /wp:separator -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns">

            <!-- wp:column {"width":"60%"} -->
            <div class="wp-block-column" style="flex-basis:60%">

                <!-- wp:paragraph {"textColor":"accent","fontSize":"x-small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
                <p class="has-accent-color has-text-color has-x-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.1em"><?php echo esc_html_x( 'Property: Name (title)', 'demo property label', 'voyagermark' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Name","filter_key":"Name","filter_value":"What Huntress Is and How It Can Benefit You"}}}}} -->
                <h3 class="wp-block-heading has-large-font-size" style="margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Loading title from Notion...', 'notion title fallback', 'voyagermark' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"textColor":"accent","fontSize":"x-small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <p class="has-accent-color has-text-color has-x-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.1em;margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Property: Keyword (rich_text)', 'demo property label', 'voyagermark' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Keyword","filter_key":"Name","filter_value":"What Huntress Is and How It Can Benefit You"}}}}} -->
                <p class="has-small-font-size" style="font-weight:600;margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Loading keyword...', 'notion keyword fallback', 'voyagermark' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"40%"} -->
            <div class="wp-block-column" style="flex-basis:40%">

                <!-- wp:paragraph {"textColor":"accent","fontSize":"x-small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
                <p class="has-accent-color has-text-color has-x-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.1em"><?php echo esc_html_x( 'Property: Status (status)', 'demo property label', 'voyagermark' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Status","filter_key":"Name","filter_value":"What Huntress Is and How It Can Benefit You"}}}}} -->
                <p class="has-small-font-size" style="font-weight:600;margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Loading status...', 'notion status fallback', 'voyagermark' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"textColor":"accent","fontSize":"x-small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <p class="has-accent-color has-text-color has-x-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.1em;margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Property: Type (select)', 'demo property label', 'voyagermark' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Type","filter_key":"Name","filter_value":"What Huntress Is and How It Can Benefit You"}}}}} -->
                <p class="has-small-font-size" style="font-weight:600;margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Loading type...', 'notion type fallback', 'voyagermark' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"textColor":"accent","fontSize":"x-small","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <p class="has-accent-color has-text-color has-x-small-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.1em;margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Property: Do Date (date)', 'demo property label', 'voyagermark' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"small","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Do Date","filter_key":"Name","filter_value":"What Huntress Is and How It Can Benefit You"}}}}} -->
                <p class="has-small-font-size" style="font-weight:600;margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Loading date...', 'notion date fallback', 'voyagermark' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->

        <!-- wp:paragraph {"textColor":"muted","fontSize":"x-small","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
        <p class="has-muted-color has-text-color has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Source: Voyager Content DB via Notion API. Cached 1hr. 5 property types demonstrated: title, rich_text, status, select, date.', 'demo footer note', 'voyagermark' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
