<?php
/**
 * Title: AI Abilities Showcase
 * Slug: voyager-demo/demo-abilities
 * Categories: voyager-demo
 * Keywords: abilities, ai, mcp, ecosystem, demo, agents, architecture
 * Block Types: core/group
 */
?>
<!-- Section 1: Hero (dark background) -->
<!-- wp:group {"align":"full","className":"vo-section vo-starfield vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-starfield vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-10 · 89 AI ABILITIES', 'abilities hero eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.25rem, 6vw, 4rem)","letterSpacing":"-0.02em","fontWeight":"500","lineHeight":"1.1"}},"textColor":"fg-1","fontFamily":"mono"} -->
        <h1 class="wp-block-heading has-text-align-center has-fg-1-color has-text-color has-mono-font-family" style="font-size:clamp(2.25rem, 6vw, 4rem);font-weight:500;letter-spacing:-0.02em;line-height:1.1"><?php
        printf(
            /* translators: %s: accent-highlighted phrase */
            esc_html_x( 'AI-native WordPress — every plugin %s', 'abilities hero heading', 'voyager-demo' ),
            '<em class="vo-accent-word">' . esc_html_x( 'speaks AI', 'abilities hero heading accent', 'voyager-demo' ) . '</em>'
        );
        ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-1","style":{"typography":{"lineHeight":"1.6","fontSize":"clamp(1rem, 2vw, 1.2rem)"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
        <p class="has-text-align-center has-fg-1-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);font-size:clamp(1rem, 2vw, 1.2rem);line-height:1.6"><?php echo esc_html_x( 'The Abilities API lets every plugin register machine-readable capabilities. The MCP Adapter exposes them all to AI agents via Model Context Protocol. The result: 89 abilities across 10 domains, callable by Claude Code, the admin chat, REST API, or any MCP client.', 'abilities hero subtitle', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- Section 2: Ability Domains (light background) -->
<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase">— DEMO · D-11 · <?php echo esc_html_x( 'Ability domains', 'abilities section eyebrow', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
    <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html_x( '10 domains. 89 abilities. Every corner of WordPress.', 'abilities section heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
    <p class="has-text-align-center has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html_x( 'Each domain groups related abilities that plugins register independently. The Abilities API unifies them into a single, queryable surface.', 'abilities section description', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- Row 1 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- Lead Tracking -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Lead Tracking', 'domain name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
            <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html_x( '6 abilities', 'domain count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Track, score, and analyze leads from forms, phone clicks, and Jobber.', 'domain description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Lead scoring', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Activity log', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Jobber sync', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- Content Generation -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent-bright","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent-bright);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Content Generation', 'domain name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"accent-bright","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
            <p class="has-accent-bright-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html_x( '14 abilities', 'domain count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'AI-generate testimonials, hero copy, service pages, team bios, FAQs, and CTAs.', 'domain description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Hero copy', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Testimonials', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'FAQs', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'SEO meta', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- SEO & Optimization -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'SEO & Optimization', 'domain name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
            <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html_x( '8 abilities', 'domain count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Content gaps, internal links, schema markup, A/B variants, freshness scans.', 'domain description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Gap analysis', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Schema markup', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'A/B variants', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 2 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- pSEO System -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"color":"#FF6B35","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#FF6B35;border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'pSEO System', 'domain name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"color":{"text":"#FF6B35"}},"fontSize":"small"} -->
            <p class="has-text-color has-small-font-size" style="color:#FF6B35;font-weight:700"><?php echo esc_html_x( '12 abilities', 'domain count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Service areas, industries, neighborhoods — batch create, enrich, score, drip-publish.', 'domain description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Batch create', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Enrich', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Drip-publish', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- Publishing & Editing -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"color":"#9333EA","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#9333EA;border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Publishing & Editing', 'domain name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"color":{"text":"#9333EA"}},"fontSize":"small"} -->
            <p class="has-text-color has-small-font-size" style="color:#9333EA;font-weight:700"><?php echo esc_html_x( '6 abilities', 'domain count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Upsert posts, safe-edit drafts, SEO meta, media upload, featured images.', 'domain description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Upsert', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Safe-edit', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Media upload', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- Analytics & Reports -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"color":"#0EA5E9","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:#0EA5E9;border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Analytics & Reports', 'domain name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700"},"color":{"text":"#0EA5E9"}},"fontSize":"small"} -->
            <p class="has-text-color has-small-font-size" style="color:#0EA5E9;font-weight:700"><?php echo esc_html_x( '5 abilities', 'domain count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Lead stats, monthly reports, AI insights, client reports, activity timeline.', 'domain description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Lead stats', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Monthly reports', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'AI insights', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 3 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- Block Bindings -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Block Bindings', 'domain name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
            <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html_x( '9 abilities', 'domain count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Binding stats, health audits, field discovery, Notion schema, cache management.', 'domain description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Health audit', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Field discovery', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Notion schema', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- Theme & Design -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent-bright","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent-bright);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Theme & Design', 'domain name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"accent-bright","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
            <p class="has-accent-bright-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html_x( '7 abilities', 'domain count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Design tokens, pattern suggestions, portfolio entries, accessibility audits.', 'domain description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Design tokens', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Pattern suggest', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'A11y audit', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- Site Management -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="wp-block-heading has-large-font-size"><?php echo esc_html_x( 'Site Management', 'domain name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700"}}} -->
            <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700"><?php echo esc_html_x( '8 abilities', 'domain count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'WP-CLI, site health, DNA analysis, setup verification, cache clearing, DB optimization.', 'domain description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"var:preset|spacing|20","margin":{"top":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'WP-CLI', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'Site health', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"4px"}},"backgroundColor":"bg-raised","textColor":"fg-4"} -->
                <p class="has-fg-4-color has-bg-raised-background-color has-text-color has-background" style="border-radius:4px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-size:0.75rem"><?php echo esc_html_x( 'DB optimize', 'ability tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- Section 3: Architecture (dark background) -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","textColor":"fg-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal has-fg-1-color has-text-color is-layout-constrained">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-12 · Architecture', 'architecture section eyebrow', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
    <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html_x( 'How it works', 'architecture section heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
    <p class="has-text-align-center has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html_x( 'Three steps from code to capability. No configuration, no middleware, no glue.', 'architecture section description', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- Step 1: Register -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","width":"1px","color":"#ffffff15"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-color:#ffffff15;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"700","fontSize":"2rem"}}} -->
                <p class="has-accent-color has-text-color" style="font-size:2rem;font-weight:700">01</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"textColor":"fg-1","fontSize":"large"} -->
                <h3 class="wp-block-heading has-fg-1-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Register', 'architecture step title', 'voyager-demo' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Any plugin calls register_ability() with a name, schema, and callback.', 'architecture step description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- Step 2: Expose -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","width":"1px","color":"#ffffff15"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-color:#ffffff15;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                <!-- wp:paragraph {"textColor":"accent-bright","style":{"typography":{"fontWeight":"700","fontSize":"2rem"}}} -->
                <p class="has-accent-bright-color has-text-color" style="font-size:2rem;font-weight:700">02</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"textColor":"fg-1","fontSize":"large"} -->
                <h3 class="wp-block-heading has-fg-1-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Expose', 'architecture step title', 'voyager-demo' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Abilities API + MCP Adapter make it available to Claude, REST, and the admin chat.', 'architecture step description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- Step 3: Execute -->
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","width":"1px","color":"#ffffff15"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group" style="border-color:#ffffff15;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"700","fontSize":"2rem"}}} -->
                <p class="has-accent-color has-text-color" style="font-size:2rem;font-weight:700">03</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"textColor":"fg-1","fontSize":"large"} -->
                <h3 class="wp-block-heading has-fg-1-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Execute', 'architecture step title', 'voyager-demo' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'AI agents call abilities by name. Results flow back as structured data.', 'architecture step description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- Section 4: MCP (light background) -->
<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-13 · Model Context Protocol', 'mcp section eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size"><?php echo esc_html_x( 'Connected via Model Context Protocol', 'mcp section heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
        <p class="has-text-align-center has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html_x( 'Every ability is exposed to external AI agents via MCP, enabling WordPress to be controlled by Claude Code, the Voyager Portal, or any MCP-compatible client. One protocol, universal access.', 'mcp section description', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- Stats bar -->
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"blockGap":"8px"}}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="font-size:1.5rem;font-weight:700">89</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'abilities', 'stats bar label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"1px"}},"backgroundColor":"bg-raised"} -->
        <hr class="wp-block-separator has-text-color has-fg-1-color has-alpha-channel-opacity has-bg-raised-background-color has-background"/>
        <!-- /wp:separator -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"blockGap":"8px"}}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}},"textColor":"accent-bright"} -->
            <p class="has-accent-bright-color has-text-color" style="font-size:1.5rem;font-weight:700">10</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'domains', 'stats bar label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"1px"}},"backgroundColor":"bg-raised"} -->
        <hr class="wp-block-separator has-text-color has-fg-1-color has-alpha-channel-opacity has-bg-raised-background-color has-background"/>
        <!-- /wp:separator -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"blockGap":"8px"}}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="font-size:1.5rem;font-weight:700">4</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'plugins', 'stats bar label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:separator {"style":{"layout":{"selfStretch":"fixed","flexSize":"1px"}},"backgroundColor":"bg-raised"} -->
        <hr class="wp-block-separator has-text-color has-fg-1-color has-alpha-channel-opacity has-bg-raised-background-color has-background"/>
        <!-- /wp:separator -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"},"style":{"spacing":{"blockGap":"8px"}}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.5rem","fontWeight":"700"}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="font-size:1.5rem;font-weight:700">1</p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'protocol', 'stats bar label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
