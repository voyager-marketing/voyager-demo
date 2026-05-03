<?php
/**
 * Title: Demo AI Content Lab
 * Slug: voyager-demo/demo-ai-lab
 * Categories: voyager-demo
 * Keywords: ai, abilities, content, generation, lab, demo, showcase
 * Block Types: core/group
 */
?>

<!-- wp:group {"align":"full","className":"vo-starfield vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-starfield vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-20 · 32 AI ABILITIES', 'ai lab eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.05","fontSize":"clamp(2.5rem, 7vw, 4.5rem)","letterSpacing":"-0.03em","fontWeight":"500"},"color":{"text":"var(--wp--preset--color--bg-raised)"}},"fontFamily":"mono"} -->
        <h1 class="wp-block-heading has-text-align-center has-mono-font-family" style="color:var(--wp--preset--color--fg-1);font-size:clamp(2.5rem, 7vw, 4.5rem);font-weight:500;letter-spacing:-0.03em;line-height:1.05"><?php
        printf(
            /* translators: %s: accent-highlighted phrase */
            esc_html_x( 'The %s', 'ai lab heading', 'voyager-demo' ),
            '<em class="vo-accent-word">' . esc_html_x( 'AI Content Lab', 'ai lab heading accent', 'voyager-demo' ) . '</em>'
        );
        ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6","fontSize":"clamp(1.1rem, 2.5vw, 1.35rem)"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"fg-1"} -->
        <p class="has-text-align-center has-fg-1-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);font-size:clamp(1.1rem, 2.5vw, 1.35rem);line-height:1.6"><?php echo esc_html_x( '32 abilities that write, enrich, analyze, and report. Every one callable from chat, MCP, or a scheduled agent.', 'ai lab subtitle', 'voyager-demo' ); ?></p>
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
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-21 · Content Generation', 'ai lab section label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em;margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html_x( 'AI writes your content from context', 'ai lab generation heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","left":{"width":"4px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"background":{"backgroundImage":{"url":"","id":0,"source":"file","title":""}}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'generate-hero-content', 'ability name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'AI writes your homepage headline from your business context', 'hero content description', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","left":{"width":"2px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
            <p class="has-fg-4-color has-text-color has-bg-raised-background-color has-background has-small-font-size" style="border-radius:8px;border-left-width:2px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Output: "We turn local searches into booked appointments — SEO, ads, and AI for service businesses."', 'hero content example', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","left":{"width":"4px","color":"var(--wp--preset--color--accent-bright)"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:var(--wp--preset--color--accent-bright);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"accent-bright"} -->
            <p class="has-accent-bright-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'generate-service-description', 'ability name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Service pages written per city and industry', 'service desc description', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","left":{"width":"2px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
            <p class="has-fg-4-color has-text-color has-bg-raised-background-color has-background has-small-font-size" style="border-radius:8px;border-left-width:2px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Output: "Our Denver plumbing SEO package drives 3x more calls from Google Maps within 90 days."', 'service desc example', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","left":{"width":"4px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'generate-faq', 'ability name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( '3 Q&A pairs from topic + location. Schema-ready.', 'faq description', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","left":{"width":"2px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
            <p class="has-fg-4-color has-text-color has-bg-raised-background-color has-background has-small-font-size" style="border-radius:8px;border-left-width:2px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Output: "Q: How much does SEO cost in Austin? A: Most Austin businesses invest $1,500-3,000/mo for local SEO."', 'faq example', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","left":{"width":"4px","color":"#FF6B35"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:#FF6B35;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"color":{"text":"#FF6B35"}}} -->
            <p class="has-text-color" style="color:#FF6B35;margin-bottom:var(--wp--preset--spacing--20);font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'generate-seo-meta', 'ability name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Title + description that fit RankMath requirements', 'seo meta description', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","left":{"width":"2px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
            <p class="has-fg-4-color has-text-color has-bg-raised-background-color has-background has-small-font-size" style="border-radius:8px;border-left-width:2px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Output: Title (58 chars) + Description (155 chars) optimized for CTR and keyword placement.', 'seo meta example', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-22 · Content Enrichment', 'ai lab section label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em;margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html_x( 'AI fills in what you leave empty', 'ai lab enrichment heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","left":{"width":"4px","color":"var(--wp--preset--color--accent-bright)"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:var(--wp--preset--color--accent-bright);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"accent-bright"} -->
            <p class="has-accent-bright-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'enrich-binding-fields', 'ability name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Fill 15 empty meta fields per pSEO page', 'enrich bindings description', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","left":{"width":"2px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
            <p class="has-fg-4-color has-text-color has-bg-raised-background-color has-background has-small-font-size" style="border-radius:8px;border-left-width:2px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'One call: hero headline, intro paragraph, 3 FAQs, local stats, testimonial, CTA — all populated.', 'enrich bindings example', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","left":{"width":"4px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'generate-local-stats', 'ability name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'City-specific statistics from real data', 'local stats description', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","left":{"width":"2px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
            <p class="has-fg-4-color has-text-color has-bg-raised-background-color has-background has-small-font-size" style="border-radius:8px;border-left-width:2px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Output: "Denver has 2.1M residents, 14,200 active businesses, and 73% smartphone search rate."', 'local stats example', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","left":{"width":"4px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'generate-testimonial', 'ability name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Industry-relevant social proof', 'testimonial description', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","left":{"width":"2px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
            <p class="has-fg-4-color has-text-color has-bg-raised-background-color has-background has-small-font-size" style="border-radius:8px;border-left-width:2px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Output: Quote + name + role + company, matching the service vertical and city context.', 'testimonial example', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","left":{"width":"4px","color":"#9333EA"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:#9333EA;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"color":{"text":"#9333EA"}}} -->
            <p class="has-text-color" style="color:#9333EA;margin-bottom:var(--wp--preset--spacing--20);font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'bulk enrich (CLI)', 'ability name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( '20 pages at a time via CLI', 'bulk enrich description', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"8px","left":{"width":"2px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised"} -->
            <p class="has-fg-4-color has-text-color has-bg-raised-background-color has-background has-small-font-size" style="border-radius:8px;border-left-width:2px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'wp orbit enrich --batch=20 --type=service_area — enriches 300 fields in under 5 minutes.', 'bulk enrich example', 'voyager-demo' ); ?></p>
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
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-23 · Intelligence & Analysis', 'ai lab section label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}},"color":{"text":"var(--wp--preset--color--bg-raised)"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="color:var(--wp--preset--color--fg-1);letter-spacing:-0.03em;margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html_x( 'AI that watches, measures, and reports', 'ai lab intelligence heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'get-lead-summary', 'ability name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"color":{"text":"var(--wp--preset--color--bg-raised)"}}} -->
            <h3 class="wp-block-heading has-medium-font-size" style="color:var(--wp--preset--color--fg-1);margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Lead counts, velocity, conversion rates', 'lead summary description', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"small"} -->
            <p class="has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Real-time pipeline health. How many leads this week, which sources convert, where the funnel leaks.', 'lead summary detail', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'get-binding-stats', 'ability name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"color":{"text":"var(--wp--preset--color--bg-raised)"}}} -->
            <h3 class="wp-block-heading has-medium-font-size" style="color:var(--wp--preset--color--fg-1);margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Which bindings resolve, which fail, cache hit rates', 'binding stats description', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"small"} -->
            <p class="has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Source-level resolution rates, empty field counts, and cache performance across all binding types.', 'binding stats detail', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"accent-bright"} -->
            <p class="has-accent-bright-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'content-freshness', 'ability name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"color":{"text":"var(--wp--preset--color--bg-raised)"}}} -->
            <h3 class="wp-block-heading has-medium-font-size" style="color:var(--wp--preset--color--fg-1);margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Score every page by last update date', 'freshness description', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"small"} -->
            <p class="has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Pages older than 90 days get flagged. Scheduled agents can auto-refresh the worst offenders.', 'freshness detail', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"color":{"text":"#FF6B35"}}} -->
            <p class="has-text-color" style="color:#FF6B35;margin-bottom:var(--wp--preset--spacing--20);font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'audit-binding-health', 'ability name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}},"color":{"text":"var(--wp--preset--color--bg-raised)"}}} -->
            <h3 class="wp-block-heading has-medium-font-size" style="color:var(--wp--preset--color--fg-1);margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Fleet-wide binding coverage report', 'binding health description', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-3","fontSize":"small"} -->
            <p class="has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Which sites have empty fields, stale caches, or broken sources. One command, full fleet visibility.', 'binding health detail', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-24 · The Ability Registry', 'ai lab section label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em;margin-bottom:var(--wp--preset--spacing--40)"><?php echo esc_html_x( 'Every ability is discoverable and callable', 'ai lab registry heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"medium","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
        <p class="has-text-align-center has-fg-4-color has-text-color has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html_x( 'The WordPress Abilities API registers each capability as a machine-readable endpoint. Plugins declare what they can do. AI agents discover and call them.', 'ai lab registry description', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:heading {"level":3,"fontSize":"large","textColor":"accent","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'How it works', 'registry how heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:list {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <ul class="has-fg-4-color has-text-color has-small-font-size">
                <!-- wp:list-item -->
                <li><?php echo esc_html_x( 'Plugins register abilities with schema, permissions, and handlers', 'registry step 1', 'voyager-demo' ); ?></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li><?php echo esc_html_x( 'Abilities API indexes them with namespace and capability tags', 'registry step 2', 'voyager-demo' ); ?></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li><?php echo esc_html_x( 'MCP Adapter exposes them as tools for AI agents', 'registry step 3', 'voyager-demo' ); ?></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li><?php echo esc_html_x( 'REST API makes them callable from Portal and external systems', 'registry step 4', 'voyager-demo' ); ?></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:heading {"level":3,"fontSize":"large","textColor":"accent-bright","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
            <h3 class="wp-block-heading has-accent-bright-color has-text-color has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Every ability is callable from', 'registry callable heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:list {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
            <ul class="has-fg-4-color has-text-color has-small-font-size">
                <!-- wp:list-item -->
                <li><?php echo esc_html_x( 'Orbit Chat slash commands (/generate, /enrich, /audit)', 'callable chat', 'voyager-demo' ); ?></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li><?php echo esc_html_x( 'MCP tools via Claude Code or any MCP client', 'callable mcp', 'voyager-demo' ); ?></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li><?php echo esc_html_x( 'WP-CLI commands for batch operations', 'callable cli', 'voyager-demo' ); ?></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li><?php echo esc_html_x( 'REST API for external integrations and Portal', 'callable rest', 'voyager-demo' ); ?></li>
                <!-- /wp:list-item -->
                <!-- wp:list-item -->
                <li><?php echo esc_html_x( 'Scheduled agents that run on cron', 'callable agents', 'voyager-demo' ); ?></li>
                <!-- /wp:list-item -->
            </ul>
            <!-- /wp:list -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"var:preset|spacing|60"}},"border":{"radius":"16px","width":"1px","color":"var(--wp--preset--color--accent)"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide" style="border-color:var(--wp--preset--color--accent);border-width:1px;border-radius:16px;margin-top:var(--wp--preset--spacing--60);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--50)">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}},"textColor":"fg-4"} -->
        <p class="has-fg-4-color has-text-color" style="font-size:1rem"><?php echo esc_html_x( 'Live proof:', 'registry proof label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.9rem","fontWeight":"600"}},"textColor":"accent"} -->
        <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.9rem;font-weight:600"><?php echo esc_html_x( 'voyager/orbit', 'registry namespace', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem"}}} -->
        <p style="font-size:1rem"><?php echo esc_html_x( 'ability_count:', 'registry count label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":3,"style":{"typography":{"fontFamily":"monospace","fontWeight":"700"}},"textColor":"accent","fontSize":"large","metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"ability_count"}}}}} -->
        <h3 class="wp-block-heading has-accent-color has-text-color has-large-font-size" style="font-family:monospace;font-weight:700"><?php echo esc_html_x( '32', 'ability count fallback', 'voyager-demo' ); ?></h3>
        <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:heading {"textAlign":"center","level":2,"fontSize":"x-large","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}},"color":{"text":"var(--wp--preset--color--bg-raised)"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="color:var(--wp--preset--color--fg-1);margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( '32 abilities today. The system grows with every plugin update.', 'ai lab cta heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
        <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'New abilities ship automatically. No migrations. No breaking changes. Just more power.', 'ai lab cta subtitle', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
        <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
            <!-- wp:button {"backgroundColor":"accent","textColor":"fg-1","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"14px","bottom":"14px","left":"32px","right":"32px"}}}} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-fg-1-color has-accent-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:14px;padding-right:32px;padding-bottom:14px;padding-left:32px"><?php echo esc_html_x( 'See the full ability list', 'ai lab cta button', 'voyager-demo' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
