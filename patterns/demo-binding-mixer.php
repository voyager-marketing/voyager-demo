<?php
/**
 * Title: Demo Binding Mixer
 * Slug: voyager-demo/demo-binding-mixer
 * Categories: voyager-demo
 * Keywords: bindings, mixer, recipes, data, sources, demo, dynamic, combinations
 * Block Types: core/group
 */
?>

<!-- wp:group {"align":"full","className":"vo-starfield vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-starfield vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-90 · 12 BINDING SOURCES', 'mixer eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.05","fontSize":"clamp(2.5rem, 7vw, 4.5rem)","letterSpacing":"-0.03em","fontWeight":"500"},"color":{"text":"var(--wp--preset--color--bg-raised)"}},"fontFamily":"mono"} -->
        <h1 class="wp-block-heading has-text-align-center has-mono-font-family" style="color:var(--wp--preset--color--fg-1);font-size:clamp(2.5rem, 7vw, 4.5rem);font-weight:500;letter-spacing:-0.03em;line-height:1.05"><?php
        printf(
            /* translators: %s: accent-highlighted phrase */
            esc_html_x( 'The %s', 'mixer heading', 'voyager-demo' ),
            '<em class="vo-accent-word">' . esc_html_x( 'Binding Mixer', 'mixer heading accent', 'voyager-demo' ) . '</em>'
        );
        ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6","fontSize":"clamp(1.1rem, 2.5vw, 1.35rem)"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"fg-1"} -->
        <p class="has-text-align-center has-fg-1-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);font-size:clamp(1.1rem, 2.5vw, 1.35rem);line-height:1.6"><?php echo esc_html_x( '12 sources. Infinite combinations. Mix data from geo, AI, Notion, analytics, and post meta — all in one block.', 'mixer subtitle', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-91 · Recipe Cards', 'mixer section label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em;margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html_x( 'Multi-source combinations that unlock new effects', 'mixer recipes heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","top":{"width":"4px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-top-width:4px;border-top-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Recipe 1 — 3 Sources', 'recipe label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'The Local Hero', 'recipe 1 name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)">

                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","lineHeight":"1.8"}},"textColor":"fg-4"} -->
                <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.75rem;line-height:1.8"><?php echo esc_html_x( 'post-meta-text → sa_hero_headline', 'recipe 1 source 1', 'voyager-demo' ); ?><br><?php echo esc_html_x( 'geo → city', 'recipe 1 source 2', 'voyager-demo' ); ?><br><?php echo esc_html_x( 'site-data → phone', 'recipe 1 source 3', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Result: "SEO Services in {your city}" with local phone number. Personalized for every visitor, SEO-optimized per service area.', 'recipe 1 result', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","top":{"width":"4px","color":"var(--wp--preset--color--accent-bright)"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-top-width:4px;border-top-color:var(--wp--preset--color--accent-bright);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"accent-bright"} -->
            <p class="has-accent-bright-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Recipe 2 — 2 Sources', 'recipe label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'The Smart CTA', 'recipe 2 name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)">

                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","lineHeight":"1.8"}},"textColor":"fg-4"} -->
                <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.75rem;line-height:1.8"><?php echo esc_html_x( 'contextual-cta → headline + button_text + button_url', 'recipe 2 source 1', 'voyager-demo' ); ?><br><?php echo esc_html_x( 'site-data → phone', 'recipe 2 source 2', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Result: CTA that adapts to page type + always has current phone. Blog says "Read more", service page says "Get a quote".', 'recipe 2 result', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","top":{"width":"4px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-top-width:4px;border-top-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Recipe 3 — 2 Sources', 'recipe label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'The Time-Aware Banner', 'recipe 3 name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)">

                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","lineHeight":"1.8"}},"textColor":"fg-4"} -->
                <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.75rem;line-height:1.8"><?php echo esc_html_x( 'conditional → hours rule: open/closed', 'recipe 3 source 1', 'voyager-demo' ); ?><br><?php echo esc_html_x( 'ab-test → variant selection', 'recipe 3 source 2', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Result: Different message per visitor, changes by time of day. "Call now — we are open" vs "Leave a message — we open at 9am".', 'recipe 3 result', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","top":{"width":"4px","color":"#FF6B35"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-top-width:4px;border-top-color:#FF6B35;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}},"color":{"text":"#FF6B35"}}} -->
            <p class="has-text-color" style="color:#FF6B35;margin-bottom:var(--wp--preset--spacing--10);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Recipe 4 — 3 Sources', 'recipe label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'The Proof Dashboard', 'recipe 4 name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)">

                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","lineHeight":"1.8"}},"textColor":"fg-4"} -->
                <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.75rem;line-height:1.8"><?php echo esc_html_x( 'pulse → total_pseo_pages, freshness_score', 'recipe 4 source 1', 'voyager-demo' ); ?><br><?php echo esc_html_x( 'orbit → lead_count, ability_count', 'recipe 4 source 2', 'voyager-demo' ); ?><br><?php echo esc_html_x( 'analytics → pageviews_30d (when connected)', 'recipe 4 source 3', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Result: Always-current proof numbers, no maintenance. Stats update themselves as your site grows.', 'recipe 4 result', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","top":{"width":"4px","color":"#9333EA"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-top-width:4px;border-top-color:#9333EA;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}},"color":{"text":"#9333EA"}}} -->
            <p class="has-text-color" style="color:#9333EA;margin-bottom:var(--wp--preset--spacing--10);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Recipe 5 — 2 Sources', 'recipe label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'The Notion-Powered Page', 'recipe 5 name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)">

                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","lineHeight":"1.8"}},"textColor":"fg-4"} -->
                <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.75rem;line-height:1.8"><?php echo esc_html_x( 'notion → content from Notion database', 'recipe 5 source 1', 'voyager-demo' ); ?><br><?php echo esc_html_x( 'conditional → show only if newer_than_30', 'recipe 5 source 2', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Result: Fresh content from Notion, auto-hides stale entries. Edit in Notion, see it on your site within 4 hours.', 'recipe 5 result', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","top":{"width":"4px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-top-width:4px;border-top-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Recipe 6 — 4 Sources', 'recipe label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'The Everything Header', 'recipe 6 name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"margin":{"bottom":"var:preset|spacing|30"}},"border":{"radius":"8px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background" style="border-radius:8px;margin-bottom:var(--wp--preset--spacing--30);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)">

                <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","lineHeight":"1.8"}},"textColor":"fg-4"} -->
                <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.75rem;line-height:1.8"><?php echo esc_html_x( 'post-meta-text → service name', 'recipe 6 source 1', 'voyager-demo' ); ?><br><?php echo esc_html_x( 'geo → visitor city', 'recipe 6 source 2', 'voyager-demo' ); ?><br><?php echo esc_html_x( 'site-data → company phone', 'recipe 6 source 3', 'voyager-demo' ); ?><br><?php echo esc_html_x( 'orbit → lead count proof number', 'recipe 6 source 4', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Result: One header block group, 4 data sources, completely dynamic. No maintenance, ever-current.', 'recipe 6 result', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-92 · Live Mixer', 'mixer live section label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"color":{"text":"var(--wp--preset--color--bg-raised)"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="color:var(--wp--preset--color--fg-1);letter-spacing:-0.03em;margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Recipe 4 — live from real data', 'mixer live heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
        <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size" style="margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html_x( 'These numbers are resolved at render time from pulse + orbit binding sources. Refresh the page — they update live.', 'mixer live description', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"accent"} -->
            <p class="has-text-align-center has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'voyager/pulse', 'source label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"clamp(2rem, 5vw, 3rem)","fontWeight":"700","fontFamily":"monospace"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"accent","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"total_pseo_pages"}}}}} -->
            <h3 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-family:monospace;font-size:clamp(2rem, 5vw, 3rem);font-weight:700"><?php echo esc_html_x( '—', 'stat fallback', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'pSEO Pages', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"accent-bright"} -->
            <p class="has-text-align-center has-accent-bright-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'voyager/pulse', 'source label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"clamp(2rem, 5vw, 3rem)","fontWeight":"700","fontFamily":"monospace"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"accent","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"freshness_score"}}}}} -->
            <h3 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-family:monospace;font-size:clamp(2rem, 5vw, 3rem);font-weight:700"><?php echo esc_html_x( '—', 'stat fallback', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Freshness Score', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"accent"} -->
            <p class="has-text-align-center has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'voyager/orbit', 'source label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"clamp(2rem, 5vw, 3rem)","fontWeight":"700","fontFamily":"monospace"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"accent","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"lead_count"}}}}} -->
            <h3 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-family:monospace;font-size:clamp(2rem, 5vw, 3rem);font-weight:700"><?php echo esc_html_x( '—', 'stat fallback', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Leads Tracked', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}},"color":{"text":"#FF6B35"}}} -->
            <p class="has-text-align-center has-text-color" style="color:#FF6B35;margin-bottom:var(--wp--preset--spacing--10);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'voyager/pulse', 'source label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontSize":"clamp(2rem, 5vw, 3rem)","fontWeight":"700","fontFamily":"monospace"},"spacing":{"margin":{"bottom":"var:preset|spacing|10"}}},"textColor":"accent","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"ability_count"}}}}} -->
            <h3 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--10);font-family:monospace;font-size:clamp(2rem, 5vw, 3rem);font-weight:700"><?php echo esc_html_x( '—', 'stat fallback', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'AI Abilities', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal has-bg-raised-background-color has-background is-layout-constrained" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"x-large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
        <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Every recipe uses standard WordPress blocks. No custom code. No plugins beyond Voyager.', 'mixer cta heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small"} -->
        <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Add a binding source to any heading, paragraph, button, or image. Mix sources freely. The block editor is now a data platform.', 'mixer cta subtitle', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
            <!-- wp:button {"backgroundColor":"accent","textColor":"fg-1","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}}}} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-fg-1-color has-accent-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px"><?php echo esc_html_x( 'Explore all 12 binding sources', 'mixer cta button', 'voyager-demo' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
