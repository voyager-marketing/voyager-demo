<?php
/**
 * Title: Demo Fleet Command
 * Slug: voyager-demo/demo-fleet
 * Categories: voyager-demo
 * Keywords: fleet, command, dashboard, multi-site, management, agency, enterprise, demo
 * Block Types: core/group
 */
?>

<!-- ============================
     SECTION 1 — HERO (dark)
     ============================ -->
<!-- wp:group {"align":"full","className":"vo-starfield vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-starfield vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-70 · MULTI-SITE MGMT', 'fleet hero eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.05","fontSize":"clamp(2.5rem, 7vw, 5rem)","letterSpacing":"-0.03em","fontWeight":"500"},"color":{"text":"var(--wp--preset--color--bg-raised)"}},"fontFamily":"mono"} -->
        <h1 class="wp-block-heading has-text-align-center has-mono-font-family" style="color:var(--wp--preset--color--fg-1);font-size:clamp(2.5rem, 7vw, 5rem);font-weight:500;letter-spacing:-0.03em;line-height:1.05"><?php echo esc_html_x( 'Fleet Command', 'fleet hero heading', 'voyager-demo' ); ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6","fontSize":"clamp(1.1rem, 2.5vw, 1.35rem)"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"fg-1"} -->
        <p class="has-text-align-center has-fg-1-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);font-size:clamp(1.1rem, 2.5vw, 1.35rem);line-height:1.6"><?php echo esc_html_x( 'One dashboard. Every client site. Patterns, bindings, performance, and health — monitored and managed from here.', 'fleet hero subtitle', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- ============================
     SECTION 2 — THE FLEET AT A GLANCE (light)
     ============================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-71 · Live Metrics', 'fleet stats eyebrow', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.03em;margin-bottom:var(--wp--preset--spacing--60)"><?php echo esc_html_x( 'The Fleet at a Glance', 'fleet stats heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- Stat 1: Client Sites -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"align":"center","textColor":"accent","style":{"typography":{"fontWeight":"700","fontSize":"2.5rem","letterSpacing":"-0.04em"}},"metadata":{"bindings":{"content":{"source":"voyager/orbit","args":{"key":"site_count"}}}}} -->
            <p class="has-text-align-center has-accent-color has-text-color" style="font-size:2.5rem;font-weight:700;letter-spacing:-0.04em">12</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Client Sites', 'fleet stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- Stat 2: Total pSEO Pages -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"align":"center","textColor":"accent-bright","style":{"typography":{"fontWeight":"700","fontSize":"2.5rem","letterSpacing":"-0.04em"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"total_pseo_pages"}}}}} -->
            <p class="has-text-align-center has-accent-bright-color has-text-color" style="font-size:2.5rem;font-weight:700;letter-spacing:-0.04em">847</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Total pSEO Pages', 'fleet stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- Stat 3: AI Abilities -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"align":"center","textColor":"accent","style":{"typography":{"fontWeight":"700","fontSize":"2.5rem","letterSpacing":"-0.04em"}},"metadata":{"bindings":{"content":{"source":"voyager/orbit","args":{"key":"ability_count"}}}}} -->
            <p class="has-text-align-center has-accent-color has-text-color" style="font-size:2.5rem;font-weight:700;letter-spacing:-0.04em">40</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'AI Abilities', 'fleet stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- Stat 4: Content Freshness -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"align":"center","textColor":"accent","style":{"typography":{"fontWeight":"700","fontSize":"2.5rem","letterSpacing":"-0.04em"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"freshness_score"}}}}} -->
            <p class="has-text-align-center has-accent-color has-text-color" style="font-size:2.5rem;font-weight:700;letter-spacing:-0.04em">94%</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Content Freshness', 'fleet stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- ============================
     SECTION 3 — PATTERN CLOUD (base)
     ============================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-72 · Pattern Cloud', 'fleet pattern cloud eyebrow', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.03em"}}} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.03em"><?php echo esc_html_x( 'Design once. Push to 50 sites simultaneously.', 'fleet pattern cloud heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-4","style":{"typography":{"lineHeight":"1.6","fontSize":"clamp(1rem, 2vw, 1.15rem)"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
    <p class="has-text-align-center has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60);font-size:clamp(1rem, 2vw, 1.15rem);line-height:1.6"><?php echo esc_html_x( 'The Pattern Cloud API distributes block patterns across every site in the fleet via a JSON manifest. Design changes propagate automatically — no manual updates, no version drift.', 'fleet pattern cloud description', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- Card 1: Design -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-left-color:var(--wp--preset--color--accent);border-left-width:4px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
            <p style="margin-bottom:var(--wp--preset--spacing--20);font-size:2rem">1</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","textColor":"accent"} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Design', 'fleet pattern cloud step', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Create patterns in the Voyager Blocks plugin. Test locally with live preview, design tokens, and theme integration.', 'fleet pattern cloud step detail', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- Card 2: Sync -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px","left":{"color":"var:preset|color|accent-bright","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-left-color:var(--wp--preset--color--accent-bright);border-left-width:4px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
            <p style="margin-bottom:var(--wp--preset--spacing--20);font-size:2rem">2</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","textColor":"accent-bright"} -->
            <h3 class="wp-block-heading has-accent-bright-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Sync', 'fleet pattern cloud step', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Pattern Cloud API distributes to all fleet sites via JSON manifest. Each site pulls only the patterns it needs.', 'fleet pattern cloud step detail', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- Card 3: Update -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-left-color:var(--wp--preset--color--accent);border-left-width:4px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}}} -->
            <p style="margin-bottom:var(--wp--preset--spacing--20);font-size:2rem">3</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","textColor":"accent"} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Update', 'fleet pattern cloud step', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Change the source pattern, every site refreshes within 24 hours. No deploys, no tickets, no version drift.', 'fleet pattern cloud step detail', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Live proof: pattern count -->
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"8px"}},"backgroundColor":"bg-raised","layout":{"type":"flex","justifyContent":"center","flexWrap":"nowrap"}} -->
    <div class="wp-block-group has-bg-raised-background-color has-background is-layout-flex" style="border-radius:8px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">

        <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
        <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Patterns in the cloud right now:', 'fleet pattern count label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontWeight":"700","fontSize":"1.25rem"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"pattern_count"}}}}} -->
        <p class="has-accent-color has-text-color" style="font-size:1.25rem;font-weight:700">114</p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- ============================
     SECTION 4 — BINDING HEALTH MONITOR (dark navy)
     ============================ -->
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-73 · Binding Health', 'fleet binding health eyebrow', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.03em"},"color":{"text":"var(--wp--preset--color--bg-raised)"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="color:var(--wp--preset--color--fg-1);letter-spacing:-0.03em;margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Binding Health Monitor', 'fleet binding health heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-1","style":{"typography":{"lineHeight":"1.6","fontSize":"clamp(1rem, 2vw, 1.15rem)"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
    <p class="has-text-align-center has-fg-1-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60);font-size:clamp(1rem, 2vw, 1.15rem);line-height:1.6"><?php echo esc_html_x( 'The fleet-binding-audit agent checks every site weekly. Empty fields, missing sources, stale Notion caches, API errors — all flagged automatically. Resolution rate threshold: 90%.', 'fleet binding health description', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- Mock dashboard table -->
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"border":{"radius":"12px"},"overflow":"hidden"},"backgroundColor":"bg-raised","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide has-bg-raised-background-color has-background is-layout-default" style="border-radius:12px;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">

        <!-- Table header -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"bottom":{"color":"#E2E0EA","width":"1px"}}},"backgroundColor":"bg-raised","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group has-bg-raised-background-color has-background is-layout-flex" style="border-bottom-color:#E2E0EA;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"layout":{"selfStretch":"fixed","flexSize":"30%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Client Site', 'fleet table header', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Bindings', 'fleet table header', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Healthy', 'fleet table header', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Score', 'fleet table header', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.75rem","letterSpacing":"0.1em","textTransform":"uppercase"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.75rem;font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Status', 'fleet table header', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- Row 1 -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"bottom":{"color":"#F0EEF5","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group is-layout-flex" style="border-bottom-color:#F0EEF5;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"30%"}},"textColor":"fg-1"} -->
            <p class="has-fg-1-color has-text-color" style="font-size:0.9rem;font-weight:600"><?php echo esc_html_x( 'acmeplumbing.com', 'fleet table site', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.9rem">48</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.9rem">47</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="font-size:0.9rem;font-weight:700">98%</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.75rem","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"color":{"background":"rgba(0,212,170,0.12)"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color has-background" style="border-radius:100px;background-color:rgba(0,212,170,0.12);padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Healthy', 'fleet table status', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- Row 2 -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"bottom":{"color":"#F0EEF5","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group is-layout-flex" style="border-bottom-color:#F0EEF5;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"30%"}},"textColor":"fg-1"} -->
            <p class="has-fg-1-color has-text-color" style="font-size:0.9rem;font-weight:600"><?php echo esc_html_x( 'brightdental.com', 'fleet table site', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.9rem">72</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.9rem">70</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="font-size:0.9rem;font-weight:700">97%</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.75rem","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"color":{"background":"rgba(0,212,170,0.12)"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color has-background" style="border-radius:100px;background-color:rgba(0,212,170,0.12);padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Healthy', 'fleet table status', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- Row 3 -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"bottom":{"color":"#F0EEF5","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group is-layout-flex" style="border-bottom-color:#F0EEF5;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"30%"}},"textColor":"fg-1"} -->
            <p class="has-fg-1-color has-text-color" style="font-size:0.9rem;font-weight:600"><?php echo esc_html_x( 'summitroofing.com', 'fleet table site', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.9rem">35</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.9rem">33</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="font-size:0.9rem;font-weight:700">94%</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.75rem","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"color":{"background":"rgba(0,212,170,0.12)"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color has-background" style="border-radius:100px;background-color:rgba(0,212,170,0.12);padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Healthy', 'fleet table status', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- Row 4 — warning -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"bottom":{"color":"#F0EEF5","width":"1px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group is-layout-flex" style="border-bottom-color:#F0EEF5;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"30%"}},"textColor":"fg-1"} -->
            <p class="has-fg-1-color has-text-color" style="font-size:0.9rem;font-weight:600"><?php echo esc_html_x( 'eliteauto.com', 'fleet table site', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.9rem">61</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.9rem">54</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"accent-bright"} -->
            <p class="has-accent-bright-color has-text-color" style="font-size:0.9rem;font-weight:700">89%</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.75rem","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"color":{"background":"rgba(242,42,170,0.12)"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"accent-bright"} -->
            <p class="has-accent-bright-color has-text-color has-background" style="border-radius:100px;background-color:rgba(242,42,170,0.12);padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Warning', 'fleet table status', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- Row 5 -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
        <div class="wp-block-group is-layout-flex" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"30%"}},"textColor":"fg-1"} -->
            <p class="has-fg-1-color has-text-color" style="font-size:0.9rem;font-weight:600"><?php echo esc_html_x( 'premierlawn.com', 'fleet table site', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.9rem">29</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.9rem">28</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.9rem"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="font-size:0.9rem;font-weight:700">97%</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","fontSize":"0.75rem","letterSpacing":"0.05em","textTransform":"uppercase"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"color":{"background":"rgba(0,212,170,0.12)"},"layout":{"selfStretch":"fixed","flexSize":"15%"}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color has-background" style="border-radius:100px;background-color:rgba(0,212,170,0.12);padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Healthy', 'fleet table status', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- ============================
     SECTION 5 — MCP: THE UNIVERSAL REMOTE (light)
     ============================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-74 · Model Context Protocol', 'fleet mcp eyebrow', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.03em"}}} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.03em"><?php echo esc_html_x( 'MCP — The Universal Remote', 'fleet mcp heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-4","style":{"typography":{"lineHeight":"1.6","fontSize":"clamp(1rem, 2vw, 1.15rem)"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
    <p class="has-text-align-center has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60);font-size:clamp(1rem, 2vw, 1.15rem);line-height:1.6"><?php echo esc_html_x( '64 tools across 9 domains. Any MCP-compatible AI can control any site in the fleet.', 'fleet mcp description', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- 3x3 grid of domain cards -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:heading {"level":4,"textColor":"accent","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-accent-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'Content', 'fleet mcp domain', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","fontFamily":"monospace"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.8rem"><?php echo esc_html_x( '9 tools', 'fleet mcp count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'create-post, update-post, notion-sync', 'fleet mcp tools', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:heading {"level":4,"textColor":"accent","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-accent-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'SEO', 'fleet mcp domain', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","fontFamily":"monospace"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.8rem"><?php echo esc_html_x( '8 tools', 'fleet mcp count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'audit-page, generate-schema, pseo-batch', 'fleet mcp tools', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:heading {"level":4,"textColor":"accent","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-accent-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'Leads', 'fleet mcp domain', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","fontFamily":"monospace"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.8rem"><?php echo esc_html_x( '7 tools', 'fleet mcp count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'get-leads, lead-velocity, coverage-report', 'fleet mcp tools', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 2 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:heading {"level":4,"textColor":"accent","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-accent-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'Analytics', 'fleet mcp domain', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","fontFamily":"monospace"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.8rem"><?php echo esc_html_x( '6 tools', 'fleet mcp count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'site-health, block-usage, performance-check', 'fleet mcp tools', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:heading {"level":4,"textColor":"accent","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-accent-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'Social', 'fleet mcp domain', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","fontFamily":"monospace"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.8rem"><?php echo esc_html_x( '8 tools', 'fleet mcp count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'create-post, schedule-post, get-analytics', 'fleet mcp tools', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:heading {"level":4,"textColor":"accent","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-accent-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'Site Management', 'fleet mcp domain', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","fontFamily":"monospace"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.8rem"><?php echo esc_html_x( '8 tools', 'fleet mcp count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'update-plugin, check-health, clear-cache', 'fleet mcp tools', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 3 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:heading {"level":4,"textColor":"accent","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-accent-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'Fleet', 'fleet mcp domain', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","fontFamily":"monospace"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.8rem"><?php echo esc_html_x( '6 tools', 'fleet mcp count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'fleet-status, binding-audit, pattern-sync', 'fleet mcp tools', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:heading {"level":4,"textColor":"accent","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-accent-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'AI', 'fleet mcp domain', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","fontFamily":"monospace"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.8rem"><?php echo esc_html_x( '7 tools', 'fleet mcp count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'generate-content, run-ability, list-abilities', 'fleet mcp tools', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:heading {"level":4,"textColor":"accent","fontSize":"medium"} -->
            <h4 class="wp-block-heading has-accent-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'Publishing', 'fleet mcp domain', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","fontFamily":"monospace"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-family:monospace;font-size:0.8rem"><?php echo esc_html_x( '5 tools', 'fleet mcp count', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'publish-queue, schedule-content, notion-push', 'fleet mcp tools', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- ============================
     SECTION 6 — MANAGED AGENTS (base)
     ============================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-75 · Autonomous Operations', 'fleet agents eyebrow', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.03em"}}} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.03em"><?php echo esc_html_x( 'Managed Agents', 'fleet agents heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-4","style":{"typography":{"lineHeight":"1.6","fontSize":"clamp(1rem, 2vw, 1.15rem)"},"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
    <p class="has-text-align-center has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--60);font-size:clamp(1rem, 2vw, 1.15rem);line-height:1.6"><?php echo esc_html_x( 'AI agents that run across the fleet autonomously. Scheduled, monitored, and self-healing.', 'fleet agents description', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- Row 1: 3 agents -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- Agent 1: Content Machine -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:heading {"level":3,"fontSize":"large","textColor":"fg-1"} -->
            <h3 class="wp-block-heading has-fg-1-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Content Machine', 'fleet agent name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"100px"}},"backgroundColor":"bg-raised","textColor":"accent"} -->
            <p class="has-accent-color has-bg-raised-background-color has-text-color has-background" style="border-radius:100px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-family:monospace;font-size:0.75rem"><?php echo esc_html_x( 'Mon / Wed / Fri 8am ET', 'fleet agent schedule', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Generates strategic content briefs from keyword gaps, competitor analysis, and topical authority maps.', 'fleet agent purpose', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- Agent 2: SEO Blitz -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:heading {"level":3,"fontSize":"large","textColor":"fg-1"} -->
            <h3 class="wp-block-heading has-fg-1-color has-text-color has-large-font-size"><?php echo esc_html_x( 'SEO Blitz', 'fleet agent name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"100px"}},"backgroundColor":"bg-raised","textColor":"accent-bright"} -->
            <p class="has-accent-bright-color has-bg-raised-background-color has-text-color has-background" style="border-radius:100px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-family:monospace;font-size:0.75rem"><?php echo esc_html_x( 'Tue 10am ET', 'fleet agent schedule', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Expands the pSEO matrix — discovers new city/service combos and generates unique landing pages at scale.', 'fleet agent purpose', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- Agent 3: SEO Page Builder -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:heading {"level":3,"fontSize":"large","textColor":"fg-1"} -->
            <h3 class="wp-block-heading has-fg-1-color has-text-color has-large-font-size"><?php echo esc_html_x( 'SEO Page Builder', 'fleet agent name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"100px"}},"backgroundColor":"bg-raised","textColor":"accent"} -->
            <p class="has-accent-color has-bg-raised-background-color has-text-color has-background" style="border-radius:100px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-family:monospace;font-size:0.75rem"><?php echo esc_html_x( 'Mon 9am ET', 'fleet agent schedule', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Fills service area content gaps with unique, data-enriched pages — local stats, FAQs, testimonials.', 'fleet agent purpose', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 2: 3 agents -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- Agent 4: Lead Intelligence -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:heading {"level":3,"fontSize":"large","textColor":"fg-1"} -->
            <h3 class="wp-block-heading has-fg-1-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Lead Intelligence', 'fleet agent name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"100px"}},"backgroundColor":"bg-raised","textColor":"accent"} -->
            <p class="has-accent-color has-bg-raised-background-color has-text-color has-background" style="border-radius:100px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-family:monospace;font-size:0.75rem"><?php echo esc_html_x( 'Daily 7am ET', 'fleet agent schedule', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Coverage analysis and velocity tracking across all fleet sites. Spots trends before clients ask.', 'fleet agent purpose', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- Agent 5: Site QA -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:heading {"level":3,"fontSize":"large","textColor":"fg-1"} -->
            <h3 class="wp-block-heading has-fg-1-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Site QA', 'fleet agent name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"100px"}},"backgroundColor":"bg-raised","textColor":"accent-bright"} -->
            <p class="has-accent-bright-color has-bg-raised-background-color has-text-color has-background" style="border-radius:100px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-family:monospace;font-size:0.75rem"><?php echo esc_html_x( 'Daily 6am ET', 'fleet agent schedule', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'PHP lint, JSON validation, template and pattern integrity checks across every site daily.', 'fleet agent purpose', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- Agent 6: Fleet Binding QA -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|10"},"border":{"radius":"12px","width":"1px","color":"#E2E0EA"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-color:#E2E0EA;border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:heading {"level":3,"fontSize":"large","textColor":"fg-1"} -->
            <h3 class="wp-block-heading has-fg-1-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Fleet Binding QA', 'fleet agent name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem"},"spacing":{"padding":{"top":"4px","bottom":"4px","left":"10px","right":"10px"}},"border":{"radius":"100px"}},"backgroundColor":"bg-raised","textColor":"accent"} -->
            <p class="has-accent-color has-bg-raised-background-color has-text-color has-background" style="border-radius:100px;padding-top:4px;padding-right:10px;padding-bottom:4px;padding-left:10px;font-family:monospace;font-size:0.75rem"><?php echo esc_html_x( 'Thu 10am ET', 'fleet agent schedule', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Fleet-wide binding health — empty fields, stale Notion caches, broken sources, API errors.', 'fleet agent purpose', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- ============================
     SECTION 7 — CTA (gradient)
     ============================ -->
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #462CFF 0%, #F22AAA 100%);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"clamp(1.8rem, 5vw, 3rem)","letterSpacing":"-0.03em","fontWeight":"700","lineHeight":"1.1"},"color":{"text":"#FFFFFF"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="color:#FFFFFF;margin-bottom:var(--wp--preset--spacing--40);font-size:clamp(1.8rem, 5vw, 3rem);font-weight:700;letter-spacing:-0.03em;line-height:1.1"><?php echo esc_html_x( 'Manage 1 site or 50. The ecosystem scales. The tools don\'t change.', 'fleet cta heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6","fontSize":"clamp(1rem, 2vw, 1.15rem)"},"spacing":{"margin":{"bottom":"var:preset|spacing|50"}},"color":{"text":"rgba(255,255,255,0.85)"}}} -->
        <p class="has-text-align-center" style="color:rgba(255,255,255,0.85);margin-bottom:var(--wp--preset--spacing--50);font-size:clamp(1rem, 2vw, 1.15rem);line-height:1.6"><?php echo esc_html_x( 'Same plugins. Same patterns. Same AI agents. Whether you run a single WordPress site or an entire agency fleet.', 'fleet cta subtitle', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons is-layout-flex">
            <!-- wp:button {"backgroundColor":"bg-raised","textColor":"accent","style":{"border":{"radius":"8px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"40px","right":"40px"}},"typography":{"fontWeight":"700"}}} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-bg-raised-background-color has-text-color has-background" style="border-radius:8px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px;font-weight:700"><?php echo esc_html_x( 'Talk to Us', 'fleet cta button', 'voyager-demo' ); ?></a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
