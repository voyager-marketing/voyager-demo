<?php
/**
 * Title: Patterns Gallery
 * Slug: voyager-demo/demo-patterns-gallery
 * Categories: voyager-demo
 * Keywords: patterns, gallery, library, showcase, categories
 * Block Types: core/group
 */
?>
<!-- wp:group {"align":"full","className":"vo-starfield vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|8","left":"var:preset|spacing|7","right":"var:preset|spacing|7"}}},"backgroundColor":"bg-canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-starfield vo-reveal has-background is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--7)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-140 · PATTERN LIBRARY', 'page eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"fontSize":"2xl","style":{"typography":{"letterSpacing":"-0.03em","fontWeight":"500"},"color":{"text":"var(--wp--preset--color--bg-raised)"}},"fontFamily":"mono"} -->
        <h1 class="wp-block-heading has-text-align-center has-mono-font-family has-2-xl-font-size" style="color:var(--wp--preset--color--fg-1);letter-spacing:-0.03em;font-weight:500"><?php
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
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|7","right":"var:preset|spacing|7"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal has-bg-raised-background-color has-background is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--7)">

    <!-- wp:heading {"textAlign":"center","fontSize":"xl","style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}}} -->
    <h2 class="wp-block-heading has-text-align-center has-xl-font-size" style="letter-spacing:-0.02em;margin-bottom:var(--wp--preset--spacing--7)"><?php echo esc_html_x( 'Pattern Categories', 'section heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- Row 1: Page structure -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|5"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"md","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-md-font-size" style="font-weight:700"><?php echo esc_html_x( 'Hero', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--3)"><?php echo esc_html_x( '10 patterns: animated hero, split hero, video background, particles, hero with stats, minimal, welcome', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent-bright","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent-bright);border-left-width:4px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
            <!-- wp:heading {"level":3,"textColor":"accent-bright","fontSize":"md","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-bright-color has-text-color has-md-font-size" style="font-weight:700"><?php echo esc_html_x( 'Features', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--3)"><?php echo esc_html_x( '10 patterns: 3-col, 4-col, icons, cards, accordion, alternating, comparison, timeline, grid-6', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"md","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-md-font-size" style="font-weight:700"><?php echo esc_html_x( 'Testimonials', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--3)"><?php echo esc_html_x( '8 patterns: carousel, grid, featured, minimal, large, bound-card, bound-grid, single', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 2 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|5"},"margin":{"top":"var:preset|spacing|5"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--5)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"12px","left":{"color":"#FF6B35","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#FF6B35;border-left-width:4px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#FF6B35"}},"fontSize":"md"} -->
            <h3 class="wp-block-heading has-text-color has-md-font-size" style="color:#FF6B35;font-weight:700"><?php echo esc_html_x( 'Services', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--3)"><?php echo esc_html_x( '7 patterns: grid, list, pricing, process, showcase, single-service', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"12px","left":{"color":"#9333EA","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#9333EA;border-left-width:4px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#9333EA"}},"fontSize":"md"} -->
            <h3 class="wp-block-heading has-text-color has-md-font-size" style="color:#9333EA;font-weight:700"><?php echo esc_html_x( 'Portfolio', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--3)"><?php echo esc_html_x( '6 patterns: featured, filter, grid, masonry, testimonials combo, single + archive', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"12px","left":{"color":"#0EA5E9","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#0EA5E9;border-left-width:4px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#0EA5E9"}},"fontSize":"md"} -->
            <h3 class="wp-block-heading has-text-color has-md-font-size" style="color:#0EA5E9;font-weight:700"><?php echo esc_html_x( 'CTA & Contact', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--3)"><?php echo esc_html_x( '10 patterns: banner, centered, features, newsletter, split, contextual + contact forms', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 3 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|5"},"margin":{"top":"var:preset|spacing|5"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--5)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"md","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-md-font-size" style="font-weight:700"><?php echo esc_html_x( 'Full Pages', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--3)"><?php echo esc_html_x( '13 patterns: agency, about, services, portfolio, FAQ, pricing, blog + 6 landing pages (app, course, event, product, startup, creative)', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent-bright","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent-bright);border-left-width:4px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
            <!-- wp:heading {"level":3,"textColor":"accent-bright","fontSize":"md","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-bright-color has-text-color has-md-font-size" style="font-weight:700"><?php echo esc_html_x( 'pSEO Templates', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--3)"><?php echo esc_html_x( '10 patterns: service-area (5 layouts), industry (3 layouts), neighborhood (2 layouts). All data-bound via post meta.', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"md","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-md-font-size" style="font-weight:700"><?php echo esc_html_x( 'Creative & GSAP', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--3)"><?php echo esc_html_x( '6 patterns: galaxy hero, parallax showcase, sticky services, team flip, comparison slider, creative showcase', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 4 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|5"},"margin":{"top":"var:preset|spacing|5"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--5)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"12px","left":{"color":"#FF6B35","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#FF6B35;border-left-width:4px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#FF6B35"}},"fontSize":"md"} -->
            <h3 class="wp-block-heading has-text-color has-md-font-size" style="color:#FF6B35;font-weight:700"><?php echo esc_html_x( 'Team & Blog', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--3)"><?php echo esc_html_x( '10 patterns: team grid, featured, list, bound archive + blog grid, list, recent posts, single', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"12px","left":{"color":"#9333EA","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#9333EA;border-left-width:4px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#9333EA"}},"fontSize":"md"} -->
            <h3 class="wp-block-heading has-text-color has-md-font-size" style="color:#9333EA;font-weight:700"><?php echo esc_html_x( 'Headers & Footers', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--3)"><?php echo esc_html_x( '6 patterns: default header, mega menu header, logo+menu + 4-col footer, mega footer, minimal, site-data', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"12px","left":{"color":"#0EA5E9","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#0EA5E9;border-left-width:4px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">
            <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"700"},"color":{"text":"#0EA5E9"}},"fontSize":"md"} -->
            <h3 class="wp-block-heading has-text-color has-md-font-size" style="color:#0EA5E9;font-weight:700"><?php echo esc_html_x( 'Stats & Pricing', 'category name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"sm","style":{"spacing":{"margin":{"top":"var:preset|spacing|3"}}}} -->
            <p class="has-fg-4-color has-text-color has-sm-font-size" style="margin-top:var(--wp--preset--spacing--3)"><?php echo esc_html_x( '6 patterns: 4-col stats, animated, centered, counter + pricing comparison, pricing page', 'category patterns', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- Pattern Cloud section -->
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|7","right":"var:preset|spacing|7"}}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained","contentSize":"780px"}} -->
<div class="wp-block-group alignfull vo-reveal has-fg-1-color has-bg-canvas-background-color has-text-color has-background is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--7)">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-141 · Pattern Cloud', 'section eyebrow', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"xl","style":{"typography":{"letterSpacing":"-0.02em"}}} -->
    <h2 class="wp-block-heading has-text-align-center has-xl-font-size" style="letter-spacing:-0.02em"><?php echo esc_html_x( 'Patterns that sync across every client site', 'cloud heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-3","style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}}} -->
    <p class="has-text-align-center has-fg-3-color has-text-color" style="margin-top:var(--wp--preset--spacing--5)"><?php echo esc_html_x( 'Pattern Cloud exports your library as a JSON manifest via REST API. Client sites pull and auto-register patterns with 24-hour caching. AI can generate new patterns on demand using the generate-pattern ability.', 'cloud description', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"style":{"spacing":{"margin":{"top":"var:preset|spacing|7"},"blockGap":{"left":"var:preset|spacing|6"}}}} -->
    <div class="wp-block-columns" style="margin-top:var(--wp--preset--spacing--7)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"lg","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-lg-font-size" style="font-weight:700"><?php echo esc_html_x( 'Export', 'cloud step', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
            <p class="has-fg-3-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'REST endpoint exports all patterns with metadata, categories, and keywords', 'cloud step desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"textColor":"accent-bright","fontSize":"lg","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-bright-color has-text-color has-lg-font-size" style="font-weight:700"><?php echo esc_html_x( 'Sync', 'cloud step', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
            <p class="has-fg-3-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'Client sites fetch and register patterns automatically via cron or manual MCP trigger', 'cloud step desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"lg","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-lg-font-size" style="font-weight:700"><?php echo esc_html_x( 'Generate', 'cloud step', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"sm"} -->
            <p class="has-fg-3-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'AI creates new patterns from text descriptions using design tokens and block library', 'cloud step desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->
