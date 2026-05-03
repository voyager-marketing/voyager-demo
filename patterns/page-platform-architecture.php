<?php
/**
 * Title: Platform Architecture
 * Slug: voyager-demo/page-platform-architecture
 * Categories: voyager-demo
 * Keywords: platform, architecture, ecosystem, overview, stakeholder, buyer, capabilities, AI, blocks, bindings
 * Block Types: core/post-content
 * Post Types: page
 * Viewport Width: 1400
 * Description: Comprehensive platform architecture page for stakeholders and buyers.
 */
?>
<!-- wp:group {"align":"full","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull">


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 1: HERO — Dark, dramatic, mission-statement grade
     ═══════════════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"background":{"backgroundImage":{"url":"","id":0,"source":"file","title":""}}},"gradient":"dark-fade","layout":{"type":"constrained","contentSize":"780px"}} -->
<div class="wp-block-group alignfull has-dark-fade-gradient-background has-background is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase","fontSize":"0.8rem"},"spacing":{"padding":{"top":"8px","bottom":"8px","left":"20px","right":"20px"}},"border":{"radius":"100px","width":"1px","color":"rgba(0,212,170,0.4)"}},"textColor":"accent"} -->
    <p class="has-text-align-center has-accent-color has-text-color" style="border-color:rgba(0,212,170,0.4);border-width:1px;border-radius:100px;padding-top:8px;padding-right:20px;padding-bottom:8px;padding-left:20px;font-size:0.8rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php echo esc_html_x( 'Platform Overview', 'hero badge', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.25rem, 5vw, 3.75rem)","letterSpacing":"-0.03em","fontWeight":"700","lineHeight":"1.05"},"color":{"text":"#ffffff"}}} -->
    <h1 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:clamp(2.25rem, 5vw, 3.75rem);font-weight:700;letter-spacing:-0.03em;line-height:1.05"><?php echo esc_html_x( 'One platform. Dozens of paths. Every piece of content handled.', 'hero heading', 'voyager-demo' ); ?></h1>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontSize":"clamp(1.05rem, 2vw, 1.25rem)","lineHeight":"1.6"},"color":{"text":"rgba(255,255,255,0.65)"}}} -->
    <p class="has-text-align-center" style="color:rgba(255,255,255,0.65);margin-top:var(--wp--preset--spacing--40);font-size:clamp(1.05rem, 2vw, 1.25rem);line-height:1.6"><?php echo esc_html_x( 'Voyager is a modular WordPress platform that unifies content creation, AI generation, dynamic data binding, lead tracking, and multi-site deployment into a single coherent system.', 'hero description', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 2: STAT BAR — Key numbers at a glance
     ═══════════════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"rgba(70,44,255,0.15)","width":"1px"}}},"backgroundColor":"bg-canvas","layout":{"type":"constrained","contentSize":"1200px"}} -->
<div class="wp-block-group alignfull has-bg-canvas-background-color has-background is-layout-constrained" style="border-top-color:rgba(70,44,255,0.15);border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"blockGap":"4px"}}} -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(2rem, 4vw, 2.75rem)","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1"}},"textColor":"accent"} -->
            <p class="has-text-align-center has-accent-color has-text-color" style="font-size:clamp(2rem, 4vw, 2.75rem);font-weight:700;letter-spacing:-0.02em;line-height:1"><?php echo esc_html_x( '30', 'stat number', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small","style":{"typography":{"fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size" style="font-weight:500;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'Custom Blocks', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"4px"}}} -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(2rem, 4vw, 2.75rem)","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1"}},"textColor":"accent"} -->
            <p class="has-text-align-center has-accent-color has-text-color" style="font-size:clamp(2rem, 4vw, 2.75rem);font-weight:700;letter-spacing:-0.02em;line-height:1"><?php echo esc_html_x( '135', 'stat number', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small","style":{"typography":{"fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size" style="font-weight:500;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'Block Patterns', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"4px"}}} -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(2rem, 4vw, 2.75rem)","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1"}},"textColor":"accent-bright"} -->
            <p class="has-text-align-center has-accent-bright-color has-text-color" style="font-size:clamp(2rem, 4vw, 2.75rem);font-weight:700;letter-spacing:-0.02em;line-height:1"><?php echo esc_html_x( '41', 'stat number', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small","style":{"typography":{"fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size" style="font-weight:500;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'AI Abilities', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"4px"}}} -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(2rem, 4vw, 2.75rem)","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1"}},"textColor":"accent"} -->
            <p class="has-text-align-center has-accent-color has-text-color" style="font-size:clamp(2rem, 4vw, 2.75rem);font-weight:700;letter-spacing:-0.02em;line-height:1"><?php echo esc_html_x( '9', 'stat number', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small","style":{"typography":{"fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size" style="font-weight:500;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'Binding Sources', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"blockGap":"4px"}}} -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(2rem, 4vw, 2.75rem)","fontWeight":"700","letterSpacing":"-0.02em","lineHeight":"1"}},"textColor":"accent-2"} -->
            <p class="has-text-align-center has-accent-2-color has-text-color" style="font-size:clamp(2rem, 4vw, 2.75rem);font-weight:700;letter-spacing:-0.02em;line-height:1"><?php echo esc_html_x( '20', 'stat number', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small","style":{"typography":{"fontWeight":"500","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size" style="font-weight:500;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'Editor Extensions', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 3: THE CONTENT LIFECYCLE — 3-phase visual flow
     ═══════════════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|70","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-raised-background-color has-background is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--70);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">
        <!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
        <p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'How it works', 'lifecycle eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1.1"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em;line-height:1.1"><?php echo esc_html_x( 'The Content Lifecycle', 'lifecycle heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-4","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"lineHeight":"1.6"}}} -->
        <p class="has-text-align-center has-fg-4-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);line-height:1.6"><?php echo esc_html_x( 'From idea to published page, every capability feeds into a single workflow. Patterns, AI, bindings, and analytics work together — not as isolated features.', 'lifecycle description', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- Three-phase flow: Create → Enhance → Deliver -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">

        <!-- Phase 1: Create -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"12px","top":{"color":"var:preset|color|accent","width":"3px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-top-color:var(--wp--preset--color--accent);border-top-width:3px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem","lineHeight":"1"}}} -->
            <p style="font-size:2.5rem;line-height:1">01</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-large-font-size" style="font-weight:700"><?php echo esc_html_x( 'Create', 'phase heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.6"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html_x( 'Start from any direction. Choose from 135 patterns, generate with AI, pull from Notion databases, or build from scratch with 30 custom blocks.', 'phase description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
                <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:500"><?php echo esc_html_x( '135 block patterns across 20 categories', 'capability', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
                <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:500"><?php echo esc_html_x( '21 AI content generation abilities', 'capability', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
                <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:500"><?php echo esc_html_x( 'Full-page AI composer', 'capability', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
                <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:500"><?php echo esc_html_x( 'Notion database sync', 'capability', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

        <!-- Phase 2: Enhance -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"12px","top":{"color":"var:preset|color|accent-bright","width":"3px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-top-color:var(--wp--preset--color--accent-bright);border-top-width:3px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem","lineHeight":"1"}}} -->
            <p style="font-size:2.5rem;line-height:1">02</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"textColor":"accent-bright","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-bright-color has-text-color has-large-font-size" style="font-weight:700"><?php echo esc_html_x( 'Enhance', 'phase heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.6"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html_x( 'Layer intelligence on top. Bind content to live data, run A/B tests, personalize by location, optimize SEO, add entrance animations — all without leaving the editor.', 'phase description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
                <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:500"><?php echo esc_html_x( '9 block binding sources (Notion, A/B, geo, AI)', 'capability', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
                <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:500"><?php echo esc_html_x( '14 GSAP entrance animations', 'capability', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
                <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:500"><?php echo esc_html_x( 'AI content transforms & SEO optimization', 'capability', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
                <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:500"><?php echo esc_html_x( '20 editor extensions', 'capability', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

        <!-- Phase 3: Deliver -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"12px","top":{"color":"var:preset|color|accent","width":"3px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-top-color:var(--wp--preset--color--accent);border-top-width:3px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2.5rem","lineHeight":"1"}}} -->
            <p style="font-size:2.5rem;line-height:1">03</p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-large-font-size" style="font-weight:700"><?php echo esc_html_x( 'Deliver', 'phase heading', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.6"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html_x( 'Deploy to any client site. Track leads, capture analytics, generate reports, and feed insights back into the creation cycle. Every site learns from the fleet.', 'phase description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"6px","margin":{"top":"var:preset|spacing|30"}}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
                <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:500"><?php echo esc_html_x( 'Lead tracking with form + phone capture', 'capability', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
                <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:500"><?php echo esc_html_x( 'Automated client reporting', 'capability', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
                <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:500"><?php echo esc_html_x( 'Fleet-wide deployment pipeline', 'capability', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"500"}}} -->
                <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:500"><?php echo esc_html_x( 'HMAC-secured webhook events', 'capability', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 4: THE FOUR PILLARS — Product architecture
     ═══════════════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-canvas-background-color has-background is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">
        <!-- wp:paragraph {"align":"center","textColor":"accent-2","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
        <p class="has-text-align-center has-accent-2-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Architecture', 'pillars eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1.1"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em;line-height:1.1"><?php echo esc_html_x( 'Four Products. Clear Responsibilities.', 'pillars heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-4","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"lineHeight":"1.6"}}} -->
        <p class="has-text-align-center has-fg-4-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);line-height:1.6"><?php echo esc_html_x( 'Each product owns one domain. No overlap, no dependency hell. Toggle features per site without touching code.', 'pillars description', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- Row 1: Blocks + Orbit -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">

        <!-- Voyager Blocks -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'Editor Experience', 'product label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="font-weight:700"><?php echo esc_html_x( 'Voyager Blocks', 'product name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.6"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html_x( 'Everything in the editor: 30 custom blocks, 135 patterns, 20 extensions, AI sidebar, block bindings, animations, mega menu, and a pattern management system.', 'product description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent"} -->
                <p class="has-accent-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( '30 Blocks', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent"} -->
                <p class="has-accent-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( '135 Patterns', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent"} -->
                <p class="has-accent-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( '9 Bindings', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent"} -->
                <p class="has-accent-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'AI Sidebar', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent"} -->
                <p class="has-accent-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'WebGL Effects', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- Voyager Orbit -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"12px","left":{"color":"var:preset|color|accent-bright","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent-bright);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent-bright","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-bright-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'Intelligence Layer', 'product label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="font-weight:700"><?php echo esc_html_x( 'Voyager Orbit', 'product name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.6"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html_x( 'Lead tracking, AI content generation, analytics, client reporting, webhooks, and 41 machine-readable abilities exposed via REST API and MCP protocol.', 'product description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent-bright"} -->
                <p class="has-accent-bright-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( '41 Abilities', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent-bright"} -->
                <p class="has-accent-bright-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'Lead Tracking', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent-bright"} -->
                <p class="has-accent-bright-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( '21 AI Generators', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent-bright"} -->
                <p class="has-accent-bright-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'Client Reports', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent-bright"} -->
                <p class="has-accent-bright-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'MCP Protocol', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 2: Core + Theme -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- Voyager Core -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"12px","left":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'Infrastructure', 'product label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="font-weight:700"><?php echo esc_html_x( 'Voyager Core', 'product name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.6"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html_x( 'Custom post types, GSAP entrance animations, mega menu infrastructure, block binding field groups, and per-site feature toggles.', 'product description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent"} -->
                <p class="has-accent-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( '6 CPTs', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent"} -->
                <p class="has-accent-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( '14 Animations', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent"} -->
                <p class="has-accent-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'Mega Menu', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent"} -->
                <p class="has-accent-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'Feature Toggles', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- Voyager Block Theme -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|30"},"border":{"radius":"12px","left":{"color":"var:preset|color|accent-2","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-left-color:var(--wp--preset--color--accent-2);border-left-width:4px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"textColor":"accent-2","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-2-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'Design System', 'product label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"fontSize":"large","style":{"typography":{"fontWeight":"700"}}} -->
            <h3 class="wp-block-heading has-large-font-size" style="font-weight:700"><?php echo esc_html_x( 'Voyager Block Theme', 'product name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.6"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html_x( 'Thin design layer. Design tokens, FSE templates, block styles, style variations, and typography. Client branding changes here — everything else stays constant.', 'product description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|30"},"blockGap":"8px"}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30)">
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent-2"} -->
                <p class="has-accent-2-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( '100+ Tokens', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent-2"} -->
                <p class="has-accent-2-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( '5 Style Variations', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent-2"} -->
                <p class="has-accent-2-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( '48 Block Styles', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"spacing":{"padding":{"top":"4px","bottom":"4px","left":"12px","right":"12px"}},"border":{"radius":"100px"},"typography":{"fontSize":"0.75rem","fontWeight":"600"}},"backgroundColor":"bg-canvas","textColor":"accent-2"} -->
                <p class="has-accent-2-color has-text-color has-bg-canvas-background-color has-background" style="border-radius:100px;padding-top:4px;padding-right:12px;padding-bottom:4px;padding-left:12px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'Fluid Typography', 'tag', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 5: CONTENT CREATION PATHS — All the ways in
     ═══════════════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-raised-background-color has-background is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">
        <!-- wp:paragraph {"align":"center","textColor":"accent-bright","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Content Creation', 'creation eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1.1"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em;line-height:1.1"><?php echo esc_html_x( 'Six Paths to a Finished Page', 'creation heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-4","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"lineHeight":"1.6"}}} -->
        <p class="has-text-align-center has-fg-4-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);line-height:1.6"><?php echo esc_html_x( 'Every path uses the same design tokens, the same blocks, the same bindings. The output is always consistent — only the input method changes.', 'creation description', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">

        <!-- Path 1 -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px","bottom":{"color":"var:preset|color|accent","width":"2px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-bottom-color:var(--wp--preset--color--accent);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"level":4,"textColor":"accent","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
            <h4 class="wp-block-heading has-accent-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html_x( 'Pattern Library', 'path name', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.5"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html_x( 'Pick a pattern, drop it in. 135 pre-designed sections across 20 categories — hero, services, testimonials, pricing, landing pages.', 'path description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- Path 2 -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px","bottom":{"color":"var:preset|color|accent-bright","width":"2px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-bottom-color:var(--wp--preset--color--accent-bright);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"level":4,"textColor":"accent-bright","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
            <h4 class="wp-block-heading has-accent-bright-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html_x( 'AI Page Composer', 'path name', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.5"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html_x( 'Describe what you need. AI generates a full page layout using your patterns, your blocks, your design tokens. Not generic — brand-native.', 'path description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- Path 3 -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px","bottom":{"color":"var:preset|color|accent","width":"2px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-bottom-color:var(--wp--preset--color--accent);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"level":4,"textColor":"accent","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
            <h4 class="wp-block-heading has-accent-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html_x( 'Notion Sync', 'path name', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.5"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html_x( 'Write in Notion, see it on your site. Database rows bind to WordPress patterns with triple-layer caching and client isolation.', 'path description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- Path 4 -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px","bottom":{"color":"var:preset|color|accent-2","width":"2px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-bottom-color:var(--wp--preset--color--accent-2);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"level":4,"textColor":"accent-2","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
            <h4 class="wp-block-heading has-accent-2-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html_x( 'Programmatic SEO', 'path name', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.5"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html_x( 'Generate hundreds of location-targeted pages from a single template. 22 bindable fields, 3 layout variants, AI-generated unique content per city.', 'path description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- Path 5 -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px","bottom":{"color":"var:preset|color|info","width":"2px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-bottom-color:var(--wp--preset--color--info);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"level":4,"textColor":"info","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
            <h4 class="wp-block-heading has-info-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html_x( 'MCP Agent Authoring', 'path name', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.5"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html_x( 'AI agents create and manage content through 41 machine-readable abilities. Scheduled agents run content pipelines, audits, and reporting autonomously.', 'path description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- Path 6 -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px","bottom":{"color":"var:preset|color|warn","width":"2px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-bottom-color:var(--wp--preset--color--warn);border-bottom-width:2px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"level":4,"textColor":"warn","fontSize":"medium","style":{"typography":{"fontWeight":"700"}}} -->
            <h4 class="wp-block-heading has-warn-color has-text-color has-medium-font-size" style="font-weight:700"><?php echo esc_html_x( 'Dynamic Bindings', 'path name', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.5"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html_x( 'One pattern, infinite variations. Bind blocks to CPT fields, A/B test variants, geolocation data, analytics, or AI-generated content — rendered at page load.', 'path description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 6: DATA BINDING ARCHITECTURE — The moat
     ═══════════════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"gradient":"dark-fade","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-dark-fade-gradient-background has-background is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">
        <!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
        <p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'The Binding Layer', 'binding eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"clamp(2rem, 5vw, 3.5rem)","letterSpacing":"-0.03em","fontWeight":"700","lineHeight":"1.1"},"color":{"text":"#ffffff"}}} -->
        <h2 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:clamp(2rem, 5vw, 3.5rem);font-weight:700;letter-spacing:-0.03em;line-height:1.1"><?php echo esc_html_x( 'One Pattern. Nine Data Sources. Infinite Variations.', 'binding heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}},"typography":{"fontSize":"clamp(1.05rem, 2vw, 1.25rem)","lineHeight":"1.6"},"color":{"text":"rgba(255,255,255,0.65)"}}} -->
        <p class="has-text-align-center" style="color:rgba(255,255,255,0.65);margin-top:var(--wp--preset--spacing--40);font-size:clamp(1.05rem, 2vw, 1.25rem);line-height:1.6"><?php echo esc_html_x( 'Block bindings decouple design from data. The same pattern renders differently based on which source feeds it — no template duplication, no code changes, no maintenance debt.', 'binding description', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- 9 Binding Sources Grid -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"8px"},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}},"backgroundColor":"bg-inset"} -->
        <div class="wp-block-column has-border-color has-bg-inset-background-color has-background" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
            <p class="has-text-color has-small-font-size" style="color:#ffffff;font-weight:600"><?php echo esc_html_x( 'Notion Databases', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}}} -->
            <p style="color:rgba(255,255,255,0.5);font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'Pull live data from Notion with triple-layer cache', 'source description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"8px"},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}},"backgroundColor":"bg-inset"} -->
        <div class="wp-block-column has-border-color has-bg-inset-background-color has-background" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
            <p class="has-text-color has-small-font-size" style="color:#ffffff;font-weight:600"><?php echo esc_html_x( 'CPT Meta Fields', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}} -->
            <p style="color:rgba(255,255,255,0.5);font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'Portfolio, team, services, testimonials, pSEO fields', 'source description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"8px"},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}},"backgroundColor":"bg-inset"} -->
        <div class="wp-block-column has-border-color has-bg-inset-background-color has-background" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
            <p class="has-text-color has-small-font-size" style="color:#ffffff;font-weight:600"><?php echo esc_html_x( 'A/B Testing', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}} -->
            <p style="color:rgba(255,255,255,0.5);font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'Serve variant content without page duplication', 'source description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--30)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"8px"},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}},"backgroundColor":"bg-inset"} -->
        <div class="wp-block-column has-border-color has-bg-inset-background-color has-background" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
            <p class="has-text-color has-small-font-size" style="color:#ffffff;font-weight:600"><?php echo esc_html_x( 'Geolocation', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}} -->
            <p style="color:rgba(255,255,255,0.5);font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'Location-personalized content and CTAs', 'source description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"8px"},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}},"backgroundColor":"bg-inset"} -->
        <div class="wp-block-column has-border-color has-bg-inset-background-color has-background" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
            <p class="has-text-color has-small-font-size" style="color:#ffffff;font-weight:600"><?php echo esc_html_x( 'AI Content', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}} -->
            <p style="color:rgba(255,255,255,0.5);font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'AI-generated fallback when no authored content exists', 'source description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"8px"},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}},"backgroundColor":"bg-inset"} -->
        <div class="wp-block-column has-border-color has-bg-inset-background-color has-background" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
            <p class="has-text-color has-small-font-size" style="color:#ffffff;font-weight:600"><?php echo esc_html_x( 'Contextual CTAs', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}} -->
            <p style="color:rgba(255,255,255,0.5);font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'Context-aware call-to-action text per page type', 'source description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Remaining 3 sources -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"margin":{"top":"var:preset|spacing|30"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--30)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"8px"},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}},"backgroundColor":"bg-inset"} -->
        <div class="wp-block-column has-border-color has-bg-inset-background-color has-background" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
            <p class="has-text-color has-small-font-size" style="color:#ffffff;font-weight:600"><?php echo esc_html_x( 'Conditional', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}} -->
            <p style="color:rgba(255,255,255,0.5);font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'Show/hide content based on post metadata', 'source description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"8px"},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}},"backgroundColor":"bg-inset"} -->
        <div class="wp-block-column has-border-color has-bg-inset-background-color has-background" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
            <p class="has-text-color has-small-font-size" style="color:#ffffff;font-weight:600"><?php echo esc_html_x( 'Analytics', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}} -->
            <p style="color:rgba(255,255,255,0.5);font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'Inject lead counts and activity metrics into content', 'source description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"8px"},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}},"backgroundColor":"bg-inset"} -->
        <div class="wp-block-column has-border-color has-bg-inset-background-color has-background" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"style":{"color":{"text":"#ffffff"},"typography":{"fontWeight":"600"}},"fontSize":"small"} -->
            <p class="has-text-color has-small-font-size" style="color:#ffffff;font-weight:600"><?php echo esc_html_x( 'Site Data', 'source name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"color":{"text":"rgba(255,255,255,0.5)"},"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}} -->
            <p style="color:rgba(255,255,255,0.5);font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'Site settings, organization info, global data', 'source description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 7: INTEGRATION LAYER — External connections
     ═══════════════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-raised-background-color has-background is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">
        <!-- wp:paragraph {"align":"center","textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
        <p class="has-text-align-center has-accent-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Connected Ecosystem', 'integration eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1.1"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em;line-height:1.1"><?php echo esc_html_x( 'Everything Talks to Everything', 'integration heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-4","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"lineHeight":"1.6"}}} -->
        <p class="has-text-align-center has-fg-4-color has-text-color" style="margin-top:var(--wp--preset--spacing--30);line-height:1.6"><?php echo esc_html_x( 'Not a walled garden. Every integration point uses standard protocols — REST API, MCP, webhooks, OAuth — so the platform extends rather than locks in.', 'integration description', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">

        <!-- Portal -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'Voyager Portal', 'integration name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"lineHeight":"1.5"}}} -->
            <p class="has-fg-1-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html_x( 'Next.js data platform. Aggregates analytics from all sites, manages billing, runs background jobs via Trigger.dev, and hosts the client dashboard.', 'integration description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- MCP Server -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"accent-2","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-2-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'MCP Server', 'integration name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"lineHeight":"1.5"}}} -->
            <p class="has-fg-1-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html_x( '117 tools across 16 domains on Cloudflare Workers. OAuth-secured. Bridges AI agents to WordPress, Notion, Stripe, and Google APIs.', 'integration description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- Notion -->
        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"accent-bright","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.05em"}}} -->
            <p class="has-accent-bright-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase;letter-spacing:0.05em"><?php echo esc_html_x( 'Notion', 'integration name', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"lineHeight":"1.5"}}} -->
            <p class="has-fg-1-color has-text-color has-small-font-size" style="line-height:1.5"><?php echo esc_html_x( '10 connected databases. Content authoring, brand system, roadmap, social calendar, and client data — all synced with client isolation.', 'integration description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 2: More integrations -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
            <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html_x( 'Google Analytics 4 + Search Console', 'integration', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'Traffic, rankings, and performance data piped into client reports', 'integration description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
            <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html_x( 'Stripe Billing', 'integration', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'Subscription management, checkout sessions, customer mapping', 'integration description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
            <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html_x( 'Form Integrations', 'integration', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'Gravity Forms, WPForms, CF7, Elementor — all captured as leads', 'integration description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
            <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small","style":{"typography":{"fontWeight":"600"}}} -->
            <p class="has-fg-1-color has-text-color has-small-font-size" style="font-weight:600"><?php echo esc_html_x( 'SEO Plugins', 'integration', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","style":{"typography":{"fontSize":"0.8rem","lineHeight":"1.4"}}} -->
            <p class="has-fg-4-color has-text-color" style="font-size:0.8rem;line-height:1.4"><?php echo esc_html_x( 'Yoast, RankMath, and Google Site Kit — auto-detected and integrated', 'integration description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 8: BUSINESS VALUE — Why this matters
     ═══════════════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-canvas-background-color has-background is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">
        <!-- wp:paragraph {"align":"center","textColor":"accent-bright","fontSize":"small","style":{"typography":{"fontWeight":"700","letterSpacing":"0.1em","textTransform":"uppercase"}}} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-small-font-size" style="font-weight:700;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Business Value', 'value eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1.1"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em;line-height:1.1"><?php echo esc_html_x( 'What This Means for You', 'value heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|60"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--60)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"clamp(1.5rem, 3vw, 2rem)","fontWeight":"700","lineHeight":"1"}}} -->
            <p class="has-accent-color has-text-color" style="font-size:clamp(1.5rem, 3vw, 2rem);font-weight:700;line-height:1"><?php echo esc_html_x( 'Ship faster', 'value title', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.6"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html_x( 'Patterns, AI composition, and dynamic bindings mean a full site goes from blank to launched in days, not months. Same quality, fraction of the time.', 'value description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"accent-bright","style":{"typography":{"fontSize":"clamp(1.5rem, 3vw, 2rem)","fontWeight":"700","lineHeight":"1"}}} -->
            <p class="has-accent-bright-color has-text-color" style="font-size:clamp(1.5rem, 3vw, 2rem);font-weight:700;line-height:1"><?php echo esc_html_x( 'Scale without hiring', 'value title', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.6"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html_x( 'Managed agents handle content pipelines, SEO audits, and reporting autonomously. Fleet deployment pushes updates to every client site at once.', 'value description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"clamp(1.5rem, 3vw, 2rem)","fontWeight":"700","lineHeight":"1"}}} -->
            <p class="has-accent-color has-text-color" style="font-size:clamp(1.5rem, 3vw, 2rem);font-weight:700;line-height:1"><?php echo esc_html_x( 'Own the stack', 'value title', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.6"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html_x( 'No third-party page builders, no proprietary lock-in. Pure WordPress with standard block editor, standard APIs, standard hosting. You own every line.', 'value description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"blockGap":"var:preset|spacing|20"},"border":{"radius":"12px"}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">
            <!-- wp:paragraph {"textColor":"accent-2","style":{"typography":{"fontSize":"clamp(1.5rem, 3vw, 2rem)","fontWeight":"700","lineHeight":"1"}}} -->
            <p class="has-accent-2-color has-text-color" style="font-size:clamp(1.5rem, 3vw, 2rem);font-weight:700;line-height:1"><?php echo esc_html_x( 'Future-proof', 'value title', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small","style":{"typography":{"lineHeight":"1.6"}}} -->
            <p class="has-fg-4-color has-text-color has-small-font-size" style="line-height:1.6"><?php echo esc_html_x( 'Built on WordPress 7.0, MCP protocol, and Block Bindings API. These are the standards the ecosystem is converging on — not legacy tech dressed up.', 'value description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════════
     SECTION 9: CTA — Dark, decisive
     ═══════════════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|50","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"}}},"gradient":"dark-fade","layout":{"type":"constrained","contentSize":"780px"}} -->
<div class="wp-block-group alignfull has-dark-fade-gradient-background has-background is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--50)">

    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"clamp(2rem, 5vw, 3.5rem)","letterSpacing":"-0.03em","fontWeight":"700","lineHeight":"1.1"},"color":{"text":"#ffffff"}}} -->
    <h2 class="wp-block-heading has-text-align-center" style="color:#ffffff;font-size:clamp(2rem, 5vw, 3.5rem);font-weight:700;letter-spacing:-0.03em;line-height:1.1"><?php echo esc_html_x( 'See the Platform in Action', 'cta heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|30"}},"typography":{"fontSize":"clamp(1.05rem, 2vw, 1.25rem)","lineHeight":"1.6"},"color":{"text":"rgba(255,255,255,0.65)"}}} -->
    <p class="has-text-align-center" style="color:rgba(255,255,255,0.65);margin-top:var(--wp--preset--spacing--30);font-size:clamp(1.05rem, 2vw, 1.25rem);line-height:1.6"><?php echo esc_html_x( 'This page was built with the same platform we deploy to clients. Every pattern, every binding, every design token — identical stack, identical quality.', 'cta description', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--50)">
        <!-- wp:button {"backgroundColor":"accent","textColor":"fg-1","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"40px","right":"40px"}},"border":{"radius":"8px"},"typography":{"fontWeight":"600","fontSize":"1rem"}}} -->
        <div class="wp-block-button" style="font-size:1rem;font-weight:600"><a class="wp-block-button__link has-fg-1-color has-accent-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px"><?php echo esc_html_x( 'Book a Demo', 'cta button', 'voyager-demo' ); ?></a></div>
        <!-- /wp:button -->
        <!-- wp:button {"backgroundColor":"bg-inset","textColor":"fg-1","style":{"spacing":{"padding":{"top":"16px","bottom":"16px","left":"40px","right":"40px"}},"border":{"radius":"8px","width":"1px","color":"rgba(255,255,255,0.15)"},"typography":{"fontWeight":"600","fontSize":"1rem"}}} -->
        <div class="wp-block-button" style="font-size:1rem;font-weight:600"><a class="wp-block-button__link has-fg-1-color has-bg-inset-background-color has-text-color has-background wp-element-button" style="border-color:rgba(255,255,255,0.15);border-width:1px;border-radius:8px;padding-top:16px;padding-right:40px;padding-bottom:16px;padding-left:40px"><?php echo esc_html_x( 'Explore the Demos', 'cta button secondary', 'voyager-demo' ); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->


</div>
<!-- /wp:group -->
