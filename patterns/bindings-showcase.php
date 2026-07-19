<?php
/**
 * Title: Block Bindings Showcase
 * Slug: voyager-demo/bindings-showcase
 * Categories: voyager-demo
 * Keywords: bindings, showcase, demo, data, dynamic, api
 * Block Types: core/group
 */
?>

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"bg-panel","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-bg-panel-background-color has-background" style="padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
    <div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--70)">

        <!-- wp:paragraph {"align":"center","textColor":"accent-bright","fontSize":"sm","style":{"typography":{"fontWeight":"600","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-sm-font-size" style="font-weight:600;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'WordPress Block Bindings API', 'showcase eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","fontSize":"2xl","style":{"typography":{"letterSpacing":"-0.03em"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-2-xl-font-size" style="letter-spacing:-0.03em"><?php echo esc_html_x( '14 Binding Sources. Zero Custom Blocks.', 'showcase heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-4"} -->
        <p class="has-text-align-center has-fg-4-color has-text-color"><?php echo esc_html_x( 'Every section below pulls live data from a different binding source. No shortcodes, no custom blocks, no hard-coded values. Standard WordPress core blocks wired to dynamic data.', 'showcase description', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent-bright","fontSize":"sm","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-bright-color has-text-color has-sm-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/site-data', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"lg","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-lg-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Global Site Data', 'card heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'Phone, email, address, copyright, social links. Change once in Settings, updates everywhere.', 'card description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"bg-panel"} -->
            <hr class="wp-block-separator has-text-color has-fg-1-color has-alpha-channel-opacity has-bg-panel-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"label"} -->
            <p class="has-fg-4-color has-text-color has-label-font-size"><?php echo esc_html_x( 'Live value:', 'demo label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"fontWeight":"600"}},"metadata":{"bindings":{"content":{"source":"voyager/site-data","args":{"key":"copyright"}}}}} -->
            <p class="has-sm-font-size" style="font-weight:600">&copy; 2026 Voyager Marketing</p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-fg-3-color has-text-color has-sm-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/post-meta-text', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"lg","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-lg-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Post Meta + JSON Traversal', 'card heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( '77 fields across 8 CPTs. Dot-notation for nested JSON. Powers all pSEO pages.', 'card description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"bg-panel"} -->
            <hr class="wp-block-separator has-text-color has-fg-1-color has-alpha-channel-opacity has-bg-panel-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"label"} -->
            <p class="has-fg-4-color has-text-color has-label-font-size"><?php echo esc_html_x( 'Example key:', 'demo label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:code {"fontSize":"label"} -->
            <pre class="wp-block-code has-label-font-size"><code>sa_local_stats.0.value</code></pre>
            <!-- /wp:code -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent","fontSize":"sm","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-color has-text-color has-sm-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/pulse', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"lg","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-lg-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Ecosystem Metrics', 'card heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( '15 computed metrics. CPT counts, publishing velocity, freshness score, coverage. All from SQL.', 'card description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"bg-panel"} -->
            <hr class="wp-block-separator has-text-color has-fg-1-color has-alpha-channel-opacity has-bg-panel-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"label"} -->
            <p class="has-fg-4-color has-text-color has-label-font-size"><?php echo esc_html_x( 'Live value:', 'demo label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"fontWeight":"600"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"total_pseo_pages"}}}}} -->
                <p class="has-sm-font-size" style="font-weight:600">92</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
                <p class="has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'pSEO pages', 'pulse label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent-bright","fontSize":"sm","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-bright-color has-text-color has-sm-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/contextual-cta', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"lg","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-lg-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Smart CTAs', 'card heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'One pattern, infinite variations. Adapts headline, text, and URL based on page type, city, or industry.', 'card description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-fg-3-color has-text-color has-sm-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/geo', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"lg","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-lg-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Geo-Personalization', 'card heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'IP-based visitor location. CloudFlare headers first, API fallback. Personalizes any page for any visitor.', 'card description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent","fontSize":"sm","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-color has-text-color has-sm-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/ai-content', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:parameter -->

            <!-- wp:heading {"level":3,"fontSize":"lg","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-lg-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'AI-Generated Content', 'card heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'Calls Orbit AI abilities at render time. 24h transient cache. Meta descriptions, local content, dynamic CTAs.', 'card description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:16px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent","fontSize":"sm","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-color has-text-color has-sm-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/notion', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"lg","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-lg-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Notion Databases', 'card heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'Edit a Notion row, the WordPress page updates. Triple-layer caching, 14 property types, database aliases. The newest source.', 'card description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:separator {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"bg-panel"} -->
            <hr class="wp-block-separator has-text-color has-fg-1-color has-alpha-channel-opacity has-bg-panel-background-color has-background" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)"/>
            <!-- /wp:separator -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"label"} -->
            <p class="has-fg-4-color has-text-color has-label-font-size"><?php echo esc_html_x( 'Live from Notion:', 'demo label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"fontWeight":"600"}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Name","filter_key":"Name","filter_value":"What Huntress Is and How It Can Benefit You"}}}}} -->
            <p class="has-sm-font-size" style="font-weight:600"><?php echo esc_html_x( 'Loading from Notion...', 'notion demo fallback', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent-bright","fontSize":"sm","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-bright-color has-text-color has-sm-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/orbit', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"lg","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-lg-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Live Orbit Stats', 'card heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'Real-time Orbit API data. Lead counts, activity feed, conversion rates. Direct from the tracking engine.', 'card description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:16px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-fg-3-color has-text-color has-sm-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'voyager/meta', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"lg","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-lg-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Unrestricted Post Meta', 'card heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm"} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'Any post meta key, any post type. No field registry required. The raw power source for custom integrations.', 'card description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}},"border":{"radius":"12px"}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide has-fg-1-color has-bg-canvas-background-color has-text-color has-background" style="border-radius:12px;margin-top:var(--wp--preset--spacing--50)">

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"700","fontSize":"1.5rem"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"block_count"}}}}} -->
            <p class="has-accent-color has-text-color" style="font-size:1.5rem;font-weight:700">28</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
            <p class="has-fg-3-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'Voyager blocks', 'stat', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"fg-3","style":{"typography":{"fontWeight":"700","fontSize":"1.5rem"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"pattern_count"}}}}} -->
            <p class="has-fg-3-color has-text-color" style="font-size:1.5rem;font-weight:700">114</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
            <p class="has-fg-3-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'patterns', 'stat', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"accent-bright","style":{"typography":{"fontWeight":"700","fontSize":"1.5rem"}}} -->
            <p class="has-accent-bright-color has-text-color" style="font-size:1.5rem;font-weight:700">14</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
            <p class="has-fg-3-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'binding sources', 'stat', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"700","fontSize":"1.5rem"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"freshness_score"}}}}} -->
            <p class="has-accent-color has-text-color" style="font-size:1.5rem;font-weight:700">95%</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
            <p class="has-fg-3-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'content fresh', 'stat', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"16px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-bg-raised-background-color has-background" style="border-radius:16px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

        <!-- wp:paragraph {"textColor":"accent","fontSize":"sm","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
        <p class="has-accent-color has-text-color has-sm-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.1em"><?php echo esc_html_x( 'Live Notion Demo — voyager/notion source', 'demo section label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
        <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'The content below is pulled live from a Notion database row via the voyager/notion binding source. Edit the row in Notion and it updates here after cache expiry.', 'demo section description', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:separator {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"backgroundColor":"bg-panel"} -->
        <hr class="wp-block-separator has-text-color has-fg-1-color has-alpha-channel-opacity has-bg-panel-background-color has-background" style="margin-bottom:var(--wp--preset--spacing--30)"/>
        <!-- /wp:separator -->

        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-columns">

            <!-- wp:column {"width":"60%"} -->
            <div class="wp-block-column" style="flex-basis:60%">

                <!-- wp:paragraph {"textColor":"accent","fontSize":"label","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
                <p class="has-accent-color has-text-color has-label-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.1em"><?php echo esc_html_x( 'Property: Name (title)', 'demo property label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:heading {"level":3,"fontSize":"lg","style":{"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Name","filter_key":"Name","filter_value":"What Huntress Is and How It Can Benefit You"}}}}} -->
                <h3 class="wp-block-heading has-lg-font-size" style="margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Loading title from Notion...', 'notion title fallback', 'voyager-demo' ); ?></h3>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"textColor":"accent","fontSize":"label","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <p class="has-accent-color has-text-color has-label-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.1em;margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Property: Keyword (rich_text)', 'demo property label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Keyword","filter_key":"Name","filter_value":"What Huntress Is and How It Can Benefit You"}}}}} -->
                <p class="has-sm-font-size" style="font-weight:600;margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Loading keyword...', 'notion keyword fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"40%"} -->
            <div class="wp-block-column" style="flex-basis:40%">

                <!-- wp:paragraph {"textColor":"accent","fontSize":"label","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
                <p class="has-accent-color has-text-color has-label-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.1em"><?php echo esc_html_x( 'Property: Status (status)', 'demo property label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Status","filter_key":"Name","filter_value":"What Huntress Is and How It Can Benefit You"}}}}} -->
                <p class="has-sm-font-size" style="font-weight:600;margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Loading status...', 'notion status fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"textColor":"accent","fontSize":"label","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <p class="has-accent-color has-text-color has-label-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.1em;margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Property: Type (select)', 'demo property label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Type","filter_key":"Name","filter_value":"What Huntress Is and How It Can Benefit You"}}}}} -->
                <p class="has-sm-font-size" style="font-weight:600;margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Loading type...', 'notion type fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"textColor":"accent","fontSize":"label","style":{"typography":{"fontWeight":"600","textTransform":"uppercase","letterSpacing":"0.1em"},"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
                <p class="has-accent-color has-text-color has-label-font-size" style="font-weight:600;text-transform:uppercase;letter-spacing:0.1em;margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Property: Do Date (date)', 'demo property label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"fontSize":"sm","style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"top":"var:preset|spacing|10"}}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Do Date","filter_key":"Name","filter_value":"What Huntress Is and How It Can Benefit You"}}}}} -->
                <p class="has-sm-font-size" style="font-weight:600;margin-top:var(--wp--preset--spacing--10)"><?php echo esc_html_x( 'Loading date...', 'notion date fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->

        <!-- wp:paragraph {"textColor":"fg-4","fontSize":"label","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}}}} -->
        <p class="has-fg-4-color has-text-color has-label-font-size" style="margin-top:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Source: Voyager Content DB via Notion API. Cached 1hr. 5 property types demonstrated: title, rich_text, status, select, date.', 'demo footer note', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
