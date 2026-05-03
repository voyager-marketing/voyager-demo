<?php
/**
 * Title: Personalization Playground
 * Slug: voyager-demo/demo-personalization
 * Categories: voyager-demo
 * Keywords: personalization, playground, demo, bindings, geo, ab-test, conditional, pulse, site-data
 * Block Types: core/group
 */
?>


<!-- ============================================================ -->
<!-- SECTION 1: Hero — dark canvas + starfield, mono display,        -->
<!-- em-dash eyebrow, selective accent on "built for you",           -->
<!-- asymmetric 60/35 grid, scroll-reveal.                           -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-starfield vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-starfield vo-reveal has-bg-canvas-background-color has-background is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— LIVE DEMO · D-01 · 07 INSTRUMENTS', 'Demo personalization hero eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"5xl","fontFamily":"mono"} -->
            <h1 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-5xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1;letter-spacing:-0.03em"><?php
            printf(
                /* translators: %s: accent-highlighted phrase "built for you" */
                esc_html_x( 'This page was %s.', 'Demo personalization hero headline', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'built for you', 'Demo personalization hero accent phrase', 'voyager-demo' ) . '</span>'
            );
            ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Every section below adapts to who you are, where you are, and when you\'re visiting. Nothing is hardcoded — seven binding sources resolved server-side before the page reaches your browser.', 'Demo personalization hero support paragraph', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ============================================================ -->
<!-- SECTION 2: D-02 · VOYAGER/GEO — data-table rows on canvas      -->
<!-- Mono 60/35 header + 6 hairline rows (label · value). No card   -->
<!-- fills. border-hair frame + bottom-rule on every row.           -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— D-02 · VOYAGER/GEO', 'section source', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"mono"} -->
            <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-3xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.05;letter-spacing:-0.02em"><?php
            printf(
                /* translators: %s: accent-highlighted phrase "where you are" */
                esc_html_x( 'We know %s.', 'Geo heading', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'where you are', 'Geo accent phrase', 'voyager-demo' ) . '</span>'
            );
            ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'CloudFlare headers, IP API fallback, 24-hour cache. Every value resolved server-side before the page reaches your browser.', 'geo description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- Hairline data table — 6 rows on bg-canvas, border-hair frame + per-row bottom rule -->
        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"blockGap":"0"},"border":{"color":"var:preset|color|border-hair","width":"1px"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'CITY', 'geo label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/geo","args":{"key":"city"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Detecting...', 'geo fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'REGION', 'geo label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/geo","args":{"key":"region"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Detecting...', 'geo fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'COUNTRY', 'geo label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/geo","args":{"key":"country"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'US', 'geo fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'GREETING', 'geo label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/geo","args":{"key":"greeting"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Serving businesses nationwide', 'geo fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'LOCAL CTA', 'geo label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/geo","args":{"key":"local_cta"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Get your free site audit', 'geo fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'PHONE', 'geo label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/geo","args":{"key":"phone"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( '(555) 000-0000', 'geo fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ============================================================ -->
<!-- SECTION 3: D-03 · VOYAGER/CONTEXTUAL-CTA — 60/35 with one card -->
<!-- Left: mono heading + explanation. Right: single bg-raised card -->
<!-- with border-hair frame holding the resolved CTA + ghost link.  -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— D-03 · VOYAGER/CONTEXTUAL-CTA', 'section source', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- LEFT: heading + explanation -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">

                <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"mono"} -->
                <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-3xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.05;letter-spacing:-0.02em"><?php
                printf(
                    /* translators: %s: accent-highlighted phrase "to context" */
                    esc_html_x( 'One pattern. Adapts %s.', 'CTA heading', 'voyager-demo' ),
                    '<span class="vo-accent-word">' . esc_html_x( 'to context', 'CTA accent phrase', 'voyager-demo' ) . '</span>'
                );
                ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
                <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'The same pattern renders different content depending on where it appears. On a service_area page it says "Ready to grow in {city}?" — on a blog post it says "Want more insights?" — on a regular page it says "Let\'s talk about your project."', 'cta explanation', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontSize":"sm","fontFamily":"body"} -->
                <p class="has-fg-4-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'This page is a "page" post type — so you\'re seeing the page-specific CTA. Visit a blog post or service area page to see it change.', 'cta context', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- RIGHT: single bg-raised card, border-hair frame, resolved CTA values + ghost link -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"color":"var:preset|color|border-hair","width":"1px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-bg-raised-background-color has-background" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'RESOLVED CTA · FOR THIS PAGE', 'cta card eyebrow', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.15","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"xl","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/contextual-cta","args":{"key":"headline"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.15;letter-spacing:-0.01em"><?php echo esc_html_x( 'Ready to grow?', 'cta fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"sm","fontFamily":"body","metadata":{"bindings":{"content":{"source":"voyager/contextual-cta","args":{"key":"subtext"}}}}} -->
                <p class="has-fg-3-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Book a free strategy call', 'cta fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium"},"blockGap":"0"},"border":{"top":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-hair);border-top-width:1px;padding-top:var(--wp--preset--spacing--medium)">

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.15em","textTransform":"uppercase","fontWeight":"600","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|accent-bright"}}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                    <p class="has-accent-bright-color has-text-color has-mono-font-family has-link-color" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:600;letter-spacing:0.15em;line-height:1;text-transform:uppercase"><a href="/contact/" class="vo-ghost-link" data-binding="voyager/contextual-cta:button_text"><?php
                    printf(
                        '%s →',
                        esc_html_x( 'Get Started', 'cta fallback', 'voyager-demo' )
                    );
                    ?></a></p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:group -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ============================================================ -->
<!-- SECTION 4: D-04 · VOYAGER/AB-TEST — 3-column with vertical    -->
<!-- hairline dividers (reference A). Transparent columns on        -->
<!-- bg-canvas. Each column: T-NN ref code + mono heading + value  -->
<!-- + note.                                                        -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— D-04 · VOYAGER/AB-TEST', 'section source', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"mono"} -->
            <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-3xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.05;letter-spacing:-0.02em"><?php
            printf(
                /* translators: %s: accent-highlighted phrase "assigned to you" */
                esc_html_x( 'Three tests. One variant %s.', 'AB heading', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'assigned to you', 'AB accent phrase', 'voyager-demo' ) . '</span>'
            );
            ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Three tests running simultaneously on this page. Cookie-hashed. Deterministic per visitor. Same on every reload, different in incognito.', 'ab description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
        <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"color":"var:preset|color|border-hair","width":"1px","radius":"2px"}}} -->
            <div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;border-radius:2px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'T-01 · HEADLINE', 'ab ref code', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.15","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"fg-1","fontSize":"xl","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/ab-test","args":{"variants":"Grow Faster With Data|Scale Your Digital Presence|Marketing That Actually Works","test_id":"playground-headline"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-xl-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-weight:500;line-height:1.15;letter-spacing:-0.01em"><?php echo esc_html_x( 'Grow Faster With Data', 'ab fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"0"}}},"textColor":"fg-4","fontSize":"sm","fontFamily":"body"} -->
                <p class="has-fg-4-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:0;line-height:1.6"><?php echo esc_html_x( '3 variants. Cookie-hashed. Deterministic per visitor.', 'ab note', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"color":"var:preset|color|border-hair","width":"1px","radius":"2px"}}} -->
            <div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;border-radius:2px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'T-02 · CTA BUTTON', 'ab ref code', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.15","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"fg-1","fontSize":"xl","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/ab-test","args":{"variants":"Get Started Free|Book Your Call|See It In Action","test_id":"playground-cta"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-xl-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-weight:500;line-height:1.15;letter-spacing:-0.01em"><?php echo esc_html_x( 'Get Started Free', 'ab fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"0"}}},"textColor":"fg-4","fontSize":"sm","fontFamily":"body"} -->
                <p class="has-fg-4-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:0;line-height:1.6"><?php echo esc_html_x( '3 variants. Same hash, different test_id = independent assignment.', 'ab note', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"color":"var:preset|color|border-hair","width":"1px","radius":"2px"}}} -->
            <div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;border-radius:2px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'T-03 · VALUE PROP', 'ab ref code', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.15","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"fg-1","fontSize":"xl","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/ab-test","args":{"variants":"Zero third-party tools needed|Built into your WordPress site|One platform, every channel","test_id":"playground-value"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-xl-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-weight:500;line-height:1.15;letter-spacing:-0.01em"><?php echo esc_html_x( 'Zero third-party tools needed', 'ab fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"var:preset|spacing|medium","bottom":"0"}}},"textColor":"fg-4","fontSize":"sm","fontFamily":"body"} -->
                <p class="has-fg-4-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:var(--wp--preset--spacing--medium);margin-bottom:0;line-height:1.6"><?php echo esc_html_x( '3 variants. All tests use the same visitor cookie but produce independent results.', 'ab note', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:column -->

        </div>
        <!-- /wp:columns -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ============================================================ -->
<!-- SECTION 5: D-05 · VOYAGER/CONDITIONAL — stacked rule rows      -->
<!-- 60/35 header + 4 hairline rows (rule · resolved · note) —      -->
<!-- reference B stacked list pattern.                              -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— D-05 · VOYAGER/CONDITIONAL', 'section source', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"mono"} -->
            <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-3xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.05;letter-spacing:-0.02em"><?php
            printf(
                /* translators: %s: accent-highlighted phrase "when you visit" */
                esc_html_x( 'Content shifts with %s.', 'Conditional heading', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'when you visit', 'Conditional accent phrase', 'voyager-demo' ) . '</span>'
            );
            ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Content that changes based on when you visit and who you are. Rules evaluated server-side on every request.', 'conditional description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- Stacked hairline rows — rule on left, resolved content middle, note right -->
        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"blockGap":"0"},"border":{"color":"var:preset|color|border-hair","width":"1px"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
                <div class="wp-block-group is-layout-flex">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                    <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'R-01 · HOURS', 'conditional ref code', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                    <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '9–17 · SITE TZ', 'conditional rule spec', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/conditional","args":{"rule":"hours","value":"9-17","content":"We're open right now! Let's talk.","else":"We're closed, but leave a message."}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-weight:500;line-height:1.3"><?php echo esc_html_x( 'Checking hours...', 'conditional fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
                <div class="wp-block-group is-layout-flex">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                    <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'R-02 · DAY OF WEEK', 'conditional ref code', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                    <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'WEEKDAY · WEEKEND', 'conditional rule spec', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/conditional","args":{"rule":"days","value":"weekday","content":"Weekday energy. Let's get to work.","else":"Weekend vibes. We'll be back Monday."}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-weight:500;line-height:1.3"><?php echo esc_html_x( 'Checking day...', 'conditional fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
                <div class="wp-block-group is-layout-flex">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                    <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'R-03 · SEASONAL', 'conditional ref code', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                    <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'MONTH · DEC', 'conditional rule spec', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/conditional","args":{"rule":"month","value":"dec","content":"Happy holidays from Voyager!","else":"Building something great, any time of year."}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-weight:500;line-height:1.3"><?php echo esc_html_x( 'Checking month...', 'conditional fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|small"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
                <div class="wp-block-group is-layout-flex">
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                    <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'R-04 · LOGIN STATUS', 'conditional ref code', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->
                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                    <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'LOGGED_IN · YES/NO', 'conditional rule spec', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.3"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/conditional","args":{"rule":"logged_in","value":"yes","content":"Logged in. Welcome back, team.","else":"Viewing as guest. Want the full picture?"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-weight:500;line-height:1.3"><?php echo esc_html_x( 'Checking status...', 'conditional fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ============================================================ -->
<!-- SECTION 6: D-06 · VOYAGER/PULSE — metric rows, hairline stack  -->
<!-- 60/35 header + 6 rows (metric name left, large mono value      -->
<!-- right). Same hairline stacked pattern as reference B.          -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— D-06 · VOYAGER/PULSE', 'section source', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"mono"} -->
            <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-3xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.05;letter-spacing:-0.02em"><?php
            printf(
                /* translators: %s: accent-highlighted phrase "live numbers" */
                esc_html_x( 'The site answers with %s.', 'Pulse heading', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'live numbers', 'Pulse accent phrase', 'voyager-demo' ) . '</span>'
            );
            ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Computed metrics from your WordPress database. Cached for 2 hours, refreshed automatically.', 'pulse description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"blockGap":"0"},"border":{"color":"var:preset|color|border-hair","width":"1px"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'PSEO PAGES', 'pulse label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"2xl","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"total_pseo_pages"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-2xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1"><?php echo esc_html_x( '0', 'pulse fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'CITIES COVERED', 'pulse label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"2xl","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"cities_covered"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-2xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1"><?php echo esc_html_x( '0', 'pulse fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'BLOG POSTS', 'pulse label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"2xl","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"blog_post_count"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-2xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1"><?php echo esc_html_x( '0', 'pulse fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'TOTAL CONTENT', 'pulse label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"2xl","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"total_content"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-2xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1"><?php echo esc_html_x( '0', 'pulse fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'THIS MONTH', 'pulse label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"2xl","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"content_this_month"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-2xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1"><?php echo esc_html_x( '0', 'pulse fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'FRESHNESS SCORE', 'pulse label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"2xl","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"freshness_score"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-2xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1"><?php echo esc_html_x( '0', 'pulse fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'PATTERNS', 'pulse label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"2xl","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"pattern_count"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-2xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1"><?php echo esc_html_x( '0', 'pulse fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'BLOCKS', 'pulse label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"2xl","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"block_count"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-2xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1"><?php echo esc_html_x( '0', 'pulse fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ============================================================ -->
<!-- SECTION 7: D-07 · VOYAGER/SITE-DATA — stacked data rows        -->
<!-- 60/35 header + 7 hairline rows (key · value) on bg-canvas.     -->
<!-- Mirrors the geo table style for consistency.                   -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— D-07 · VOYAGER/SITE-DATA', 'section source', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"mono"} -->
            <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-3xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.05;letter-spacing:-0.02em"><?php
            printf(
                /* translators: %s: accent-highlighted phrase "one source of truth" */
                esc_html_x( 'Edit once. %s updates.', 'Site-data heading', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'Every page', 'Site-data accent phrase', 'voyager-demo' ) . '</span>'
            );
            ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Change the phone number in Settings and every page updates instantly. One source of truth, zero find-and-replace.', 'site-data description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"blockGap":"0"},"border":{"color":"var:preset|color|border-hair","width":"1px"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'COMPANY', 'site-data label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/site-data","args":{"key":"company"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Company Name', 'site-data fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'TAGLINE', 'site-data label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/site-data","args":{"key":"tagline"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Your tagline', 'site-data fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'PHONE', 'site-data label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/site-data","args":{"key":"phone"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( '(555) 000-0000', 'site-data fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'EMAIL', 'site-data label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/site-data","args":{"key":"email"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'hello@example.com', 'site-data fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'ADDRESS', 'site-data label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/site-data","args":{"key":"address"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( '123 Main St', 'site-data fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"},"border":{"bottom":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="border-bottom-color:var(--wp--preset--color--border-hair);border-bottom-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'HOURS', 'site-data label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/site-data","args":{"key":"hours"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Mon-Fri 9-5', 'site-data fallback', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group is-layout-flex" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'COPYRIGHT', 'site-data label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono","metadata":{"bindings":{"content":{"source":"voyager/site-data","args":{"key":"copyright"}}}}} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500">&copy; 2026 Company</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ============================================================ -->
<!-- SECTION 8: Final CTA — dark canvas + starfield, mono display,   -->
<!-- em-dash eyebrow, selective accent word, 60/35 grid, primary +   -->
<!-- ghost CTAs. Replaces the flat magenta-wash brochure block.      -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-section--roomy vo-starfield vo-reveal","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--roomy vo-starfield vo-reveal is-layout-constrained" style="margin-top:0;margin-bottom:0">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO CONCLUSION · D-12', 'Demo personalization CTA eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"5xl","fontFamily":"mono"} -->
            <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-5xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1;letter-spacing:-0.03em"><?php
            printf(
                /* translators: %s: accent-highlighted pronoun "your" */
                esc_html_x( 'Now imagine this on %s website.', 'Demo personalization CTA headline', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'your', 'Demo personalization CTA accent word', 'voyager-demo' ) . '</span>'
            );
            ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Every page personalized. Every visitor tracked. Every metric live. No third-party tools. No JavaScript hacks. Just WordPress, doing what it was never supposed to do.', 'Demo personalization CTA body', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"},"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"left","verticalAlignment":"center"}} -->
        <div class="wp-block-group is-layout-flex" style="margin-top:var(--wp--preset--spacing--x-large)">

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"accent","textColor":"accent-fg-on","style":{"border":{"radius":"2px"},"spacing":{"padding":{"top":"0.75rem","bottom":"0.75rem","left":"1.25rem","right":"1.25rem"}},"typography":{"fontWeight":"500","letterSpacing":"0.04em"}},"fontSize":"base","fontFamily":"mono"} -->
                <div class="wp-block-button has-custom-font-size has-mono-font-family has-base-font-size" style="font-weight:500;letter-spacing:0.04em">
                    <a class="wp-block-button__link has-accent-fg-on-color has-accent-background-color has-text-color has-background wp-element-button" href="/contact/" style="border-radius:2px;padding-top:0.75rem;padding-right:1.25rem;padding-bottom:0.75rem;padding-left:1.25rem;font-weight:500;letter-spacing:0.04em"><?php echo esc_html_x( 'Build this for me →', 'Demo personalization CTA primary', 'voyager-demo' ); ?></a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|fg-3"}}}},"textColor":"fg-4","fontFamily":"mono"} -->
            <p class="has-fg-4-color has-text-color has-mono-font-family has-link-color" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><a href="/contact/"><?php echo esc_html_x( 'TALK TO A HUMAN →', 'Demo personalization CTA ghost link', 'voyager-demo' ); ?></a></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
