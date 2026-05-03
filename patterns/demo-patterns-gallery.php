<?php
/**
 * Title: Patterns Gallery
 * Slug: voyager-demo/demo-patterns-gallery
 * Categories: voyager-demo
 * Keywords: patterns, gallery, library, showcase, categories
 * Block Types: core/group
 */
?>
<!-- wp:group {"align":"full","className":"vo-starfield vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"backgroundColor":"bg-canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-starfield vo-reveal has-background is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-140 · PATTERN LIBRARY', 'page eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em","fontWeight":"500"},"color":{"text":"var(--wp--preset--color--bg-raised)"}},"fontFamily":"mono"} -->
        <h1 class="wp-block-heading has-text-align-center has-mono-font-family has-xx-large-font-size" style="color:var(--wp--preset--color--fg-1);letter-spacing:-0.03em;font-weight:500"><?php
        printf(
            /* translators: %s: accent-highlighted phrase */
            esc_html_x( '%s across 18 categories', 'page heading', 'voyager-demo' ),
            '<em class="vo-accent-word">' . esc_html_x( '122 patterns', 'page heading accent', 'voyager-demo' ) . '</em>'
        );
        ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-1","style":{"spacing":{"margin":{"bottom":"0"}}}} -->
        <p class="has-text-align-center has-fg-1-color has-text-color" style="margin-bottom:0"><?php echo esc_html_x( 'Drop-in sections for every page type. Hero banners, service grids, testimonial carousels, pricing tables, team layouts, pSEO templates, and full-page compositions. All use design tokens from theme.json.', 'page description', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- Category Grid -->
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal has-bg-raised-background-color has-background is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em;margin-bottom:var(--wp--preset--spacing--x-large)"><?php echo esc_html_x( 'Pattern Categories', 'section heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- Row 1: Page structure -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html_x( 'Hero', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( '10 patterns: animated hero, split hero, video background, particles, hero with stats, minimal, welcome', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent-bright","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent-bright);border-left-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"level":3,"textColor":"accent-bright","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-bright-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html_x( 'Features', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( '10 patterns: 3-col, 4-col, icons, cards, accordion, alternating, comparison, timeline, grid-6', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html_x( 'Testimonials', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( '8 patterns: carousel, grid, featured, minimal, large, bound-card, bound-grid, single', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 2 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","left":{"color":"#FF6B35","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#FF6B35;border-left-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#FF6B35"}},"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-text-color has-medium-font-size" style="color:#FF6B35;font-weight:700"><?php echo esc_html_x( 'Services', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( '7 patterns: grid, list, pricing, process, showcase, single-service', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","left":{"color":"#9333EA","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#9333EA;border-left-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#9333EA"}},"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-text-color has-medium-font-size" style="color:#9333EA;font-weight:700"><?php echo esc_html_x( 'Portfolio', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( '6 patterns: featured, filter, grid, masonry, testimonials combo, single + archive', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","left":{"color":"#0EA5E9","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#0EA5E9;border-left-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#0EA5E9"}},"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-text-color has-medium-font-size" style="color:#0EA5E9;font-weight:700"><?php echo esc_html_x( 'CTA & Contact', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( '10 patterns: banner, centered, features, newsletter, split, contextual + contact forms', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 3 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html_x( 'Full Pages', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( '13 patterns: agency, about, services, portfolio, FAQ, pricing, blog + 6 landing pages (app, course, event, product, startup, creative)', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent-bright","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent-bright);border-left-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"level":3,"textColor":"accent-bright","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-bright-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html_x( 'pSEO Templates', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( '10 patterns: service-area (5 layouts), industry (3 layouts), neighborhood (2 layouts). All data-bound via post meta.', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html_x( 'Creative & GSAP', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( '6 patterns: galaxy hero, parallax showcase, sticky services, team flip, comparison slider, creative showcase', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 4 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","left":{"color":"#FF6B35","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#FF6B35;border-left-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#FF6B35"}},"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-text-color has-medium-font-size" style="color:#FF6B35;font-weight:700"><?php echo esc_html_x( 'Team & Blog', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( '10 patterns: team grid, featured, list, bound archive + blog grid, list, recent posts, single', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","left":{"color":"#9333EA","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#9333EA;border-left-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#9333EA"}},"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-text-color has-medium-font-size" style="color:#9333EA;font-weight:700"><?php echo esc_html_x( 'Headers & Footers', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( '6 patterns: default header, mega menu header, logo+menu + 4-col footer, mega footer, minimal, site-data', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","left":{"color":"#0EA5E9","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#0EA5E9;border-left-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#0EA5E9"}},"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-text-color has-medium-font-size" style="color:#0EA5E9;font-weight:700"><?php echo esc_html_x( 'Stats & Pricing', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( '6 patterns: 4-col stats, animated, centered, counter + pricing comparison, pricing page', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- Pattern Cloud section -->
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained","contentSize":"780px"}} -->
<div class="wp-block-group alignfull vo-reveal has-fg-1-color has-bg-canvas-background-color has-text-color has-background is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-141 · Pattern Cloud', 'section eyebrow', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"}}} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em"><?php echo esc_html_x( 'Patterns that sync across every client site', 'cloud heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-3","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <p class="has-text-align-center has-fg-3-color has-text-color" style="margin-top:var(--wp--preset--spacing--medium)"><?php echo esc_html_x( 'Pattern Cloud exports your library as a JSON manifest via REST API. Client sites pull and auto-register patterns with 24-hour caching. AI can generate new patterns on demand using the generate-pattern ability.', 'cloud description', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-large"},"blockGap":{"left":"var:preset|spacing|large"}}}} -->
    <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--x-large)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-large-font-size" style="font-weight:700"><?php echo esc_html_x( 'Export', 'cloud step', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"small"} -->
            <p class="has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'REST endpoint exports all patterns with metadata, categories, and keywords', 'cloud step desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"textColor":"accent-bright","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-bright-color has-text-color has-large-font-size" style="font-weight:700"><?php echo esc_html_x( 'Sync', 'cloud step', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"small"} -->
            <p class="has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Client sites fetch and register patterns automatically via cron or manual MCP trigger', 'cloud step desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-large-font-size" style="font-weight:700"><?php echo esc_html_x( 'Generate', 'cloud step', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"small"} -->
            <p class="has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'AI creates new patterns from text descriptions using design tokens and block library', 'cloud step desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
