<?php
/**
 * Title: Block & Extension Showcase
 * Slug: voyager-demo/demo-blocks-extensions
 * Categories: voyager-demo
 * Keywords: blocks, extensions, showcase, demo, gallery, complete
 * Block Types: core/group
 */
?>
<!-- Section 1: Hero (dark) -->
<!-- wp:group {"align":"full","className":"vo-starfield vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-starfield vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-40 · VOYAGER BLOCKS PLUGIN', 'showcase eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"fontSize":"xx-large","style":{"typography":{"letterSpacing":"-0.03em","fontWeight":"500"},"color":{"text":"var(--wp--preset--color--bg-raised)"}},"fontFamily":"mono"} -->
        <h1 class="wp-block-heading has-text-align-center has-mono-font-family has-xx-large-font-size" style="color:var(--wp--preset--color--fg-1);letter-spacing:-0.03em;font-weight:500"><?php
        printf(
            /* translators: %s: accent-highlighted phrase */
            esc_html_x( '28 Blocks. 15 Extensions. %s', 'showcase heading', 'voyager-demo' ),
            '<em class="vo-accent-word">' . esc_html_x( 'One Plugin.', 'showcase heading accent', 'voyager-demo' ) . '</em>'
        );
        ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-1","fontSize":"medium","style":{"spacing":{"margin":{"bottom":"0"}}}} -->
        <p class="has-text-align-center has-fg-1-color has-text-color has-medium-font-size" style="margin-bottom:0"><?php echo esc_html_x( 'Every block below is custom-built for performance, animation, and conversion. Extensions enhance core WordPress blocks with superpowers.', 'showcase description', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"layout":{"type":"flex","justifyContent":"center","flexWrap":"wrap"},"style":{"spacing":{"blockGap":"12px","margin":{"top":"var:preset|spacing|large"}}}} -->
        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--large)">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"600"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"}},"border":{"radius":"6px"},"color":{"background":"rgba(70,44,255,0.15)","text":"var(--wp--preset--color--accent)"}}} -->
            <p style="border-radius:6px;color:var(--wp--preset--color--accent);background-color:rgba(70,44,255,0.15);padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'GSAP Animations', 'tag', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"600"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"}},"border":{"radius":"6px"},"color":{"background":"rgba(242,42,170,0.15)","text":"var(--wp--preset--color--accent-bright)"}}} -->
            <p style="border-radius:6px;color:var(--wp--preset--color--accent-bright);background-color:rgba(242,42,170,0.15);padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'Conditional Loading', 'tag', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.75rem","fontWeight":"600"},"spacing":{"padding":{"top":"6px","bottom":"6px","left":"14px","right":"14px"}},"border":{"radius":"6px"},"color":{"background":"rgba(0,212,170,0.15)","text":"var(--wp--preset--color--accent)"}}} -->
            <p style="border-radius:6px;color:var(--wp--preset--color--accent);background-color:rgba(0,212,170,0.15);padding-top:6px;padding-right:14px;padding-bottom:6px;padding-left:14px;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'Block Bindings', 'tag', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- Section 2: Animation & Visual Blocks (light) -->
<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
    <div class="wp-block-group is-layout-constrained" style="margin-bottom:var(--wp--preset--spacing--x-large)">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-41 · Animation & Visual', 'section label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em"><?php echo esc_html_x( 'Motion that tells a story', 'animation heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center","textColor":"fg-4"} -->
        <p class="has-text-align-center has-fg-4-color has-text-color"><?php echo esc_html_x( 'GSAP-powered blocks that bring content to life with scroll-triggered animations, parallax depth, and dynamic counters.', 'animation desc', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'animated-section', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Scroll-Triggered Animations', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Wrap any content in fade, slide, zoom, or rotate animations. Configurable duration, delay, and easing with ScrollTrigger integration.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Hero entrances, feature reveals, staggered card appearances', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'animated-counter', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Animated Number Counter', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Count up to any number with easing. Supports prefix, suffix, decimals, and thousands separators. Triggers on scroll into view.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Stats sections, ROI metrics, project counts', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'text-reveal', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Text Reveal Animation', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Word-by-word or character-by-character reveal animation. Configurable stagger, duration, and split mode for dramatic headline entrances.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Hero headlines, brand statements, page titles', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'scroll-progress', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Scroll Progress Bar', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Visual progress indicator that tracks scroll position. Fixed or inline placement with customizable color, height, and position.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Long-form content, case studies, documentation pages', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'parallax-section', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Parallax Scrolling Section', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Multi-layer parallax depth effect on scroll. Set speed per layer, background images, and scroll direction for immersive page sections.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Hero backgrounds, storytelling sections, visual separators', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- Section 3: Background & Effect Blocks (base) -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
    <div class="wp-block-group is-layout-constrained" style="margin-bottom:var(--wp--preset--spacing--x-large)">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-42 · Background & Effects', 'section label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em"><?php echo esc_html_x( 'The "wow" blocks', 'bg heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center","textColor":"fg-4"} -->
        <p class="has-text-align-center has-fg-4-color has-text-color"><?php echo esc_html_x( 'WebGL and canvas-powered backgrounds that turn any section into an experience. Drop content inside and the effect wraps around it.', 'bg desc', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px"}},"backgroundColor":"bg-canvas","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-canvas-background-color has-background is-layout-constrained" style="border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'galaxy-background', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","textColor":"fg-1","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Galaxy Starfield', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small"} -->
                <p class="has-fg-1-color has-text-color has-small-font-size"><?php echo esc_html_x( 'WebGL-rendered starfield with twinkling stars, nebula colors, and mouse-reactive parallax. Customizable star count, speed, and color palette.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Hero sections, dark landing pages, SaaS product pages', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px"}},"backgroundColor":"bg-canvas","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-canvas-background-color has-background is-layout-constrained" style="border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'particles-background', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","textColor":"fg-1","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Particle Network', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small"} -->
                <p class="has-fg-1-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Canvas-based particle system with connecting lines. Particles react to mouse movement. Control density, speed, connection distance, and colors.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Tech company heroes, network visualizations, modern agency sites', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px"}},"backgroundColor":"bg-canvas","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-canvas-background-color has-background is-layout-constrained" style="border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'color-bends-background', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","textColor":"fg-1","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Color Bends Gradient', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small"} -->
                <p class="has-fg-1-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Animated mesh gradient that morphs between color stops. Smooth organic motion with configurable speed, colors, and blend modes.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Premium brand sections, creative agency headers, app landing pages', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px"}},"backgroundColor":"bg-canvas","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-canvas-background-color has-background is-layout-constrained" style="border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'cursor-trail', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","textColor":"fg-1","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Cursor Trail Effect', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","fontSize":"small"} -->
                <p class="has-fg-1-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Mouse-following particle trail effect. Choose trail styles, colors, and fade speed. Adds playful interactivity to any section.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Creative portfolios, interactive demos, event pages', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- Section 4: Service & Portfolio Blocks (light) -->
<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
    <div class="wp-block-group is-layout-constrained" style="margin-bottom:var(--wp--preset--spacing--x-large)">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-43 · Service & Portfolio', 'section label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em"><?php echo esc_html_x( 'Blocks that drive business pages', 'service heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center","textColor":"fg-4"} -->
        <p class="has-text-align-center has-fg-4-color has-text-color"><?php echo esc_html_x( 'Purpose-built for service pages, portfolios, and case studies. Every card, grid, and showcase is designed to convert visitors into leads.', 'service desc', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent-bright","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-bright-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'service-cards', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Service Cards Grid', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Responsive grid of service cards with icons, titles, descriptions, and links. Hover animations and configurable columns.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent-bright","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-bright-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'service-features', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Service Features List', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Animated feature checklist with icons. Toggle between list and grid layouts. Perfect for service detail pages and comparison sections.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent-bright","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-bright-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'service-showcase', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Service Showcase', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Full-width service presentation with image, stats, and CTA. Parent block for service-showcase-card children. Tabbed or accordion layout.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent-bright","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-bright-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'service-showcase-card', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Showcase Card', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Individual card within service-showcase. Each card has its own image, heading, description, and CTA button with animated transitions.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent-bright","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-bright-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'sticky-service-cards', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Sticky Service Cards', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Cards that stack and pin as you scroll. Each card overlaps the previous one, creating a deck-of-cards effect. Scroll-driven with GSAP pinning.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent-bright","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-bright-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'portfolio-filter', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Portfolio Filter Bar', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Animated category filter for portfolio items. Click to filter with smooth GSAP layout transitions. Supports taxonomy-based filtering.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent-bright","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-bright-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'portfolio-grid', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Portfolio Grid', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Masonry or grid layout for portfolio items. Configurable columns, gap, and hover effects. Pairs with portfolio-filter for filterable galleries.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent-bright","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-bright-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'portfolio-item', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Portfolio Item', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Individual portfolio entry with image overlay, category tag, title, and link. Hover reveals description with smooth scale and opacity transitions.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- Section 5: Social Proof Blocks (base) -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
    <div class="wp-block-group is-layout-constrained" style="margin-bottom:var(--wp--preset--spacing--x-large)">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-44 · Social Proof', 'section label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em"><?php echo esc_html_x( 'The conversion blocks', 'proof heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center","textColor":"fg-4"} -->
        <p class="has-text-align-center has-fg-4-color has-text-color"><?php echo esc_html_x( 'Testimonials, team showcases, and stats that build trust. These blocks turn visitors into believers.', 'proof desc', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'testimonial-carousel', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Testimonial Carousel', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Auto-playing carousel of testimonials with swipe support. Configurable speed, autoplay, and navigation dots. Parent for testimonial-item blocks.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'testimonial-item', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Testimonial Item', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Individual testimonial with avatar, quote, name, title, company, and star rating. Works inside carousel or standalone.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'team-flip-card', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Team Flip Card', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( '3D flip card for team members. Front shows photo and name, back reveals bio, role, and social links. CSS perspective transform animation.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'stats-counter', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Stats Counter Bar', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Horizontal row of animated stat numbers with labels. Counts up on scroll with configurable targets, prefixes, and suffixes per stat.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'why-choose-cards', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Why Choose Us Cards', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Animated value proposition cards with icon, number, title, and description. Staggered entrance animations and hover lift effects.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- Section 6: Interactive Blocks (light) -->
<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
    <div class="wp-block-group is-layout-constrained" style="margin-bottom:var(--wp--preset--spacing--x-large)">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-45 · Interactive & Data', 'section label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em"><?php echo esc_html_x( 'Blocks users play with', 'interactive heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center","textColor":"fg-4"} -->
        <p class="has-text-align-center has-fg-4-color has-text-color"><?php echo esc_html_x( 'Sliders, magnetic effects, data charts, and calculators. These blocks create engagement that keeps visitors on the page longer.', 'interactive desc', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'comparison-slider', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Before/After Slider', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Drag-to-compare two images side by side. Perfect for before/after website redesigns, photo edits, or A/B mockups. Touch and mouse support.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Case study before/after, design comparisons, property photos', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'magnetic-cards', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Magnetic Cards', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Cards that tilt toward the cursor with 3D perspective. Magnetic pull effect with customizable intensity, glare, and spring physics.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Pricing cards, team profiles, featured products', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'macos-dock', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'macOS Dock', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Apple Dock-style icon bar with magnification on hover. Parent block for macos-dock-item children. Use for app showcases or creative navigation.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Tool stacks, app galleries, creative link bars', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'macos-dock-item', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Dock Item', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Individual icon in the macOS dock. Set icon, label, link, and tooltip. Magnifies on hover with spring animation.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'video-lightbox', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Video Lightbox', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Click-to-play video in an overlay lightbox. Supports YouTube, Vimeo, and self-hosted. Custom thumbnail with animated play button.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'hero-showcase', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Hero Showcase', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Full-screen hero with animated device mockups, floating elements, and scroll-triggered parallax layers. The premium hero block.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'data-chart', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'Data Chart', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Chart.js-powered data visualization. Bar, line, pie, doughnut, and radar charts. Animated drawing on scroll, custom colors, and responsive sizing.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Analytics dashboards, performance reports, ROI visualizations', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"var:preset|color|border-1"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.8rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.8rem;font-weight:600"><?php echo esc_html_x( 'roi-calculator', 'block name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"medium","style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}}}} -->
                <h4 class="wp-block-heading has-medium-font-size" style="margin-top:var(--wp--preset--spacing--small)"><?php echo esc_html_x( 'ROI Calculator', 'block title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Interactive calculator with sliders and inputs. Real-time ROI projections based on configurable formulas. Built-in lead capture on results.', 'block desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontStyle":"italic"}}} -->
                <p class="has-accent-color has-text-color has-small-font-size" style="font-style:italic"><?php echo esc_html_x( 'Use case: Sales pages, pricing justification, lead generation tools', 'use case', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- Section 7: 15 Extensions (dark navy) -->
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
    <div class="wp-block-group is-layout-constrained" style="margin-bottom:var(--wp--preset--spacing--x-large)">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-47 · 15 Extensions', 'extension eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"},"color":{"text":"var(--wp--preset--color--bg-raised)"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="color:var(--wp--preset--color--fg-1);letter-spacing:-0.02em"><?php echo esc_html_x( 'Superpowers for core blocks', 'extension heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center","textColor":"fg-1"} -->
        <p class="has-text-align-center has-fg-1-color has-text-color"><?php echo esc_html_x( 'Extensions add new controls to existing WordPress blocks. No new blocks to learn — just more power in the blocks you already use.', 'extension desc', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- Row 1 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'ai-generate', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'AI Generate', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Add AI content generation to any block. One-click content for headings, paragraphs, lists, and more.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'ai-sidebar', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'AI Sidebar', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Full AI assistant panel in the block editor. Chat with AI about your content, get suggestions, and apply changes inline.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'entrance-animations', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Entrance Animations', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Scroll-triggered reveal effects for any block. Fade, slide, zoom, and rotate with configurable duration and delay.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- Row 2 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'hover-colors', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Hover Colors', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Dynamic color changes on hover for any block. Set background, text, and border colors that transition smoothly on mouse enter.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'binding-fields', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Binding Fields', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Visual field picker for block bindings. Browse available data sources and bind block attributes to dynamic data without code.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'scramble-text', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Scramble Text', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Letter-scramble animation effect on hover or scroll. Characters cycle through random letters before settling on the final text.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- Row 3 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'core-block-animations', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Core Block Animations', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'GSAP animation controls on core WordPress blocks. Add timeline sequences, scroll scrub, and stagger to paragraphs, images, and groups.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'advanced-group', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Advanced Group', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Enhanced group block controls. Sticky positioning, z-index, overflow, backdrop blur, and custom CSS class management.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'button-controls', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Button Controls', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Extended button styling options. Icon support, loading states, hover transforms, gradient borders, and size presets.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- Row 4 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'column-controls', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Column Controls', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Advanced column layout options. Vertical alignment, responsive breakpoints, order control, and equal-height column support.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'grid-controls', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Grid Controls', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'CSS Grid layout controls for group blocks. Define rows, columns, areas, and responsive breakpoints with a visual grid builder.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'heading-controls', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Heading Controls', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Typography enhancement for headings. Gradient text, text stroke, clamp sizing, letter spacing presets, and decorative underlines.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- Row 5 -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'image-controls', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Image Controls', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Advanced image effects. Object-fit controls, hover zoom, grayscale-to-color transitions, aspect ratio presets, and blur overlays.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'color-bends-style', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Color Bends Style', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Apply animated mesh gradient styles to any block background. Shared style system for the color-bends effect across sections.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group is-layout-constrained" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
                <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontFamily":"monospace","fontSize":"0.75rem","fontWeight":"600"}}} -->
                <p class="has-accent-color has-text-color" style="font-family:monospace;font-size:0.75rem;font-weight:600"><?php echo esc_html_x( 'mega-menu', 'ext name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":4,"fontSize":"small","textColor":"fg-1","style":{"spacing":{"margin":{"top":"4px"}}}} -->
                <h4 class="wp-block-heading has-fg-1-color has-text-color has-small-font-size" style="margin-top:4px"><?php echo esc_html_x( 'Mega Menu', 'ext title', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-1","style":{"typography":{"fontSize":"0.85rem"}}} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.85rem"><?php echo esc_html_x( 'Full mega-menu behavior for navigation blocks. Multi-column dropdowns, featured images, and CTA sections within nav menus.', 'ext desc', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- Section 8: Conditional Loading (light) -->
<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-46 · Performance', 'perf label', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"}}} -->
        <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em"><?php echo esc_html_x( 'Conditional loading. Zero bloat.', 'perf heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"medium"} -->
        <p class="has-text-align-center has-fg-4-color has-text-color has-medium-font-size"><?php echo esc_html_x( 'GSAP, Chart.js, and all block JavaScript only loads on pages that actually use those blocks. If a page has no animated blocks, no animation scripts load. Period.', 'perf desc', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"},"margin":{"top":"var:preset|spacing|x-large"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--x-large)">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:heading {"textAlign":"center","level":3,"textColor":"accent","fontSize":"xx-large"} -->
                <h3 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-xx-large-font-size">28</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small"} -->
                <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Custom blocks registered', 'stat label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:heading {"textAlign":"center","level":3,"textColor":"accent-bright","fontSize":"xx-large"} -->
                <h3 class="wp-block-heading has-text-align-center has-accent-bright-color has-text-color has-xx-large-font-size">114</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small"} -->
                <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Block patterns available', 'stat label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"12px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-bg-raised-background-color has-background is-layout-constrained" style="border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:heading {"textAlign":"center","level":3,"textColor":"accent","fontSize":"xx-large"} -->
                <h3 class="wp-block-heading has-text-align-center has-accent-color has-text-color has-xx-large-font-size">0 KB</h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small"} -->
                <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Unused block JS loaded', 'stat label', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"small","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
    <p class="has-text-align-center has-fg-4-color has-text-color has-small-font-size" style="margin-top:var(--wp--preset--spacing--large)"><?php echo esc_html_x( 'Each block registers its own script handle. WordPress only enqueues scripts for blocks present in the post content. GSAP loads once as a shared dependency — not per-block.', 'perf detail', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

</div>
<!-- /wp:group -->

<!-- Section 9: CTA -->
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"gradient":"primary-to-secondary","layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group alignfull vo-reveal has-accent-to-secondary-gradient-background has-background is-layout-constrained" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","textColor":"fg-1","style":{"elements":{"link":{"color":{"text":"var:preset|color|bg-raised"}}}}} -->
    <h2 class="wp-block-heading has-text-align-center has-fg-1-color has-text-color has-link-color has-x-large-font-size"><?php echo esc_html_x( 'Every block ships with Voyager Blocks.', 'cta heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-1","fontSize":"medium","style":{"elements":{"link":{"color":{"text":"var:preset|color|fg-1"}}}}} -->
    <p class="has-text-align-center has-fg-1-color has-text-color has-link-color has-medium-font-size"><?php echo esc_html_x( 'No per-block licensing. No feature gates. One plugin, every block, every extension.', 'cta desc', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
    <div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--large)">
        <!-- wp:button {"backgroundColor":"bg-raised","textColor":"accent","style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"40px","right":"40px"}},"typography":{"fontWeight":"700"}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-bg-raised-background-color has-text-color has-background wp-element-button" href="/contact/" style="padding-top:18px;padding-right:40px;padding-bottom:18px;padding-left:40px;font-weight:700"><?php echo esc_html_x( 'Get Voyager Blocks →', 'cta button', 'voyager-demo' ); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
