<?php
/**
 * Title: Ecosystem Mega Page
 * Slug: voyager-demo/demo-ecosystem-mega
 * Categories: voyager-demo
 * Keywords: ecosystem, mega, diagram, architecture, overview, all, everything
 * Block Types: core/group
 */
?>
<!-- wp:group {"align":"full","className":"vo-starfield vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}},"background":{"backgroundImage":{"url":"","id":0,"source":"file","title":""}}},"backgroundColor":"bg-canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-starfield vo-reveal has-background is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"900px"}} -->
    <div class="wp-block-group is-layout-constrained">
        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-150 · THE COMPLETE PICTURE', 'mega page badge', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"clamp(2.5rem, 7vw, 5rem)","letterSpacing":"-0.03em","fontWeight":"500","lineHeight":"1.05"},"color":{"text":"var(--wp--preset--color--bg-raised)"}},"fontFamily":"mono"} -->
        <h1 class="wp-block-heading has-text-align-center has-mono-font-family" style="color:var(--wp--preset--color--fg-1);font-size:clamp(2.5rem, 7vw, 5rem);font-weight:500;letter-spacing:-0.03em;line-height:1.05"><?php
        printf(
            /* translators: %s: accent-highlighted phrase */
            esc_html_x( 'The Voyager WordPress %s', 'mega page h1', 'voyager-demo' ),
            '<em class="vo-accent-word">' . esc_html_x( 'Ecosystem', 'mega page h1 accent', 'voyager-demo' ) . '</em>'
        );
        ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-1","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}},"typography":{"fontSize":"clamp(1.05rem, 2vw, 1.25rem)","lineHeight":"1.6"}}} -->
        <p class="has-text-align-center has-fg-1-color has-text-color" style="margin-top:var(--wp--preset--spacing--medium);font-size:clamp(1.05rem, 2vw, 1.25rem);line-height:1.6"><?php echo esc_html_x( 'Everything on one page. Four plugins, one theme, 89 AI abilities, 28 custom blocks, 122 patterns, 7 binding sources, 8 custom post types, and a Notion-to-WordPress content pipeline. This is what modern WordPress looks like.', 'mega page subtitle', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- ═══════════════════════════════════════════════════════ -->
<!-- LAYER 1: ARCHITECTURE DIAGRAM                          -->
<!-- ═══════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal has-bg-raised-background-color has-background is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-151 · Architecture', 'section label', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em;margin-bottom:var(--wp--preset--spacing--x-large)"><?php echo esc_html_x( 'How the layers connect', 'architecture heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- Layer: Presentation -->
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"16px","width":"2px","color":"var:preset|color|accent"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-bg-raised-background-color has-background" style="border-color:var(--wp--preset--color--accent);border-width:2px;border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)">
        <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
        <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase;letter-spacing:0.1em"><?php echo esc_html_x( 'Presentation Layer', 'layer name', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html_x( 'Voyager Block Theme', 'plugin name', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( '17 colors, 7 spacing tiers, 4 font families, 5 style variations, 15 templates, 34 block styles', 'theme summary', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html_x( 'Voyager Blocks', 'plugin name', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( '28 blocks, 122 patterns, 13 extensions, AI sidebar, Pattern Cloud, GSAP animations', 'blocks summary', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- Connector arrow -->
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.5rem"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
    <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small);font-size:1.5rem">&#x2193;</p>
    <!-- /wp:paragraph -->

    <!-- Layer: Data -->
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"16px","width":"2px","color":"var:preset|color|accent"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-bg-raised-background-color has-background" style="border-color:var(--wp--preset--color--accent);border-width:2px;border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)">
        <!-- wp:paragraph {"textColor":"accent","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
        <p class="has-accent-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase;letter-spacing:0.1em"><?php echo esc_html_x( 'Data Layer', 'layer name', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html_x( 'Voyager Core', 'plugin name', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( '8 CPTs (portfolio, team, services, testimonials, service areas, industry pages, neighborhoods, notion pages), 60+ bindable meta fields, feature toggles', 'core summary', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html_x( 'Block Bindings', 'feature name', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( '7 binding sources: post-meta, site-data, geo, notion, ai-content, contextual-cta, stat-item. Server-side resolution at render time.', 'bindings summary', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- Connector arrow -->
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.5rem"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
    <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small);font-size:1.5rem">&#x2193;</p>
    <!-- /wp:paragraph -->

    <!-- Layer: Intelligence -->
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"16px","width":"2px","color":"var:preset|color|accent-bright"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-bg-raised-background-color has-background" style="border-color:var(--wp--preset--color--accent-bright);border-width:2px;border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)">
        <!-- wp:paragraph {"textColor":"accent-bright","fontSize":"small","style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"}}} -->
        <p class="has-accent-bright-color has-text-color has-small-font-size" style="font-weight:700;text-transform:uppercase;letter-spacing:0.1em"><?php echo esc_html_x( 'Intelligence Layer', 'layer name', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html_x( 'Voyager Orbit', 'plugin name', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( '89 AI abilities, lead tracking + scoring, activity timeline, client reporting, AI chat, safe-edit drafts, 15 admin pages, HMAC Portal bridge', 'orbit summary', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html_x( 'WordPress AI Stack', 'feature name', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'WP AI Client (router) + Anthropic Provider (Claude) + Abilities API (registration) + MCP Adapter (protocol bridge). Official WordPress AI infrastructure.', 'ai stack summary', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- Connector arrow -->
    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"1.5rem"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"var:preset|spacing|small"}}}} -->
    <p class="has-text-align-center" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:var(--wp--preset--spacing--small);font-size:1.5rem">&#x2193;</p>
    <!-- /wp:paragraph -->

    <!-- Layer: Connectivity -->
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"16px","width":"2px","color":"#0EA5E9"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-bg-raised-background-color has-background" style="border-color:#0EA5E9;border-width:2px;border-radius:16px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--large)">
        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","textTransform":"uppercase","letterSpacing":"0.1em"},"color":{"text":"#0EA5E9"}},"fontSize":"small"} -->
        <p class="has-text-color has-small-font-size" style="color:#0EA5E9;font-weight:700;text-transform:uppercase;letter-spacing:0.1em"><?php echo esc_html_x( 'Connectivity Layer', 'layer name', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->
        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
        <div class="wp-block-columns">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html_x( 'Voyager Portal', 'platform name', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Next.js data platform. Clerk auth, Supabase DB, Trigger.dev jobs. 31 MCP routes, client dashboard, social publishing, fleet management.', 'portal summary', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":4,"fontSize":"medium"} -->
                <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html_x( 'MCP Server + Notion Pipeline', 'feature name', 'voyager-demo' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
                <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( '64 MCP tools across 9 domains. Cloudflare Workers edge deployment. Notion content flows to WordPress via sync, polling, and binding.', 'mcp summary', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- ═══════════════════════════════════════════════════════ -->
<!-- LAYER 2: BY THE NUMBERS                                -->
<!-- ═══════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal has-fg-1-color has-bg-canvas-background-color has-text-color has-background is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-152 · By the Numbers', 'section label', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em;margin-bottom:var(--wp--preset--spacing--x-large)"><?php echo esc_html_x( 'The ecosystem in numbers', 'stats heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- Row 1: Big numbers -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"textAlign":"center","level":3,"textColor":"accent","style":{"typography":{"fontSize":"3.5rem","fontWeight":"800","letterSpacing":"-0.04em"}}} -->
            <h3 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="font-size:3.5rem;font-weight:800;letter-spacing:-0.04em">4</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-1","style":{"typography":{"fontWeight":"600"}}} -->
            <p class="has-text-align-center has-fg-1-color has-text-color" style="font-weight:600"><?php echo esc_html_x( 'WordPress Plugins', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Blocks + Orbit + Core + Theme', 'stat detail', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"textAlign":"center","level":3,"textColor":"accent-bright","style":{"typography":{"fontSize":"3.5rem","fontWeight":"800","letterSpacing":"-0.04em"}}} -->
            <h3 class="wp-block-heading has-text-align-center has-accent-bright-color has-text-color" style="font-size:3.5rem;font-weight:800;letter-spacing:-0.04em">89</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-1","style":{"typography":{"fontWeight":"600"}}} -->
            <p class="has-text-align-center has-fg-1-color has-text-color" style="font-weight:600"><?php echo esc_html_x( 'AI Abilities', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Leads, content, SEO, pSEO, analytics, publishing', 'stat detail', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"textAlign":"center","level":3,"textColor":"accent","style":{"typography":{"fontSize":"3.5rem","fontWeight":"800","letterSpacing":"-0.04em"}}} -->
            <h3 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="font-size:3.5rem;font-weight:800;letter-spacing:-0.04em">28</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-1","style":{"typography":{"fontWeight":"600"}}} -->
            <p class="has-text-align-center has-fg-1-color has-text-color" style="font-weight:600"><?php echo esc_html_x( 'Custom Blocks', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Animation, portfolio, services, interactive', 'stat detail', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.08)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.08);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
            <!-- wp:heading {"textAlign":"center","level":3,"textColor":"accent","style":{"typography":{"fontSize":"3.5rem","fontWeight":"800","letterSpacing":"-0.04em"}}} -->
            <h3 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="font-size:3.5rem;font-weight:800;letter-spacing:-0.04em">122</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-1","style":{"typography":{"fontWeight":"600"}}} -->
            <p class="has-text-align-center has-fg-1-color has-text-color" style="font-weight:600"><?php echo esc_html_x( 'Block Patterns', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( '18 categories across parent + child themes', 'stat detail', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- Row 2: More numbers -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"},"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--medium)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.06)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.06);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
            <!-- wp:heading {"textAlign":"center","level":4,"textColor":"accent","style":{"typography":{"fontSize":"2rem","fontWeight":"700"}}} -->
            <h4 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="font-size:2rem;font-weight:700">13</h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Block Extensions', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.06)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.06);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
            <!-- wp:heading {"textAlign":"center","level":4,"textColor":"accent-bright","style":{"typography":{"fontSize":"2rem","fontWeight":"700"}}} -->
            <h4 class="wp-block-heading has-text-align-center has-accent-bright-color has-text-color" style="font-size:2rem;font-weight:700">7</h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Binding Sources', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.06)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.06);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
            <!-- wp:heading {"textAlign":"center","level":4,"textColor":"accent","style":{"typography":{"fontSize":"2rem","fontWeight":"700"}}} -->
            <h4 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="font-size:2rem;font-weight:700">8</h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Custom Post Types', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.06)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.06);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
            <!-- wp:heading {"textAlign":"center","level":4,"textColor":"accent","style":{"typography":{"fontSize":"2rem","fontWeight":"700"}}} -->
            <h4 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="font-size:2rem;font-weight:700">5</h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Style Variations', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.06)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.06);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
            <!-- wp:heading {"textAlign":"center","level":4,"textColor":"accent-bright","style":{"typography":{"fontSize":"2rem","fontWeight":"700"}}} -->
            <h4 class="wp-block-heading has-text-align-center has-accent-bright-color has-text-color" style="font-size:2rem;font-weight:700">64</h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'MCP Server Tools', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.06)"}}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.06);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
            <!-- wp:heading {"textAlign":"center","level":4,"textColor":"accent","style":{"typography":{"fontSize":"2rem","fontWeight":"700"}}} -->
            <h4 class="wp-block-heading has-text-align-center has-accent-color has-text-color" style="font-size:2rem;font-weight:700">34</h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","textColor":"fg-3","fontSize":"small"} -->
            <p class="has-text-align-center has-fg-3-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Block Styles', 'stat label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- ═══════════════════════════════════════════════════════ -->
<!-- LAYER 3: CONTENT PIPELINE                              -->
<!-- ═══════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-153 · Content Pipeline', 'section label', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}}} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em;margin-bottom:var(--wp--preset--spacing--medium)"><?php echo esc_html_x( 'From idea to published page in minutes', 'pipeline heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
    <p class="has-text-align-center has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--x-large)"><?php echo esc_html_x( 'Content flows through a fully automated pipeline: plan in Notion, generate with AI, publish to WordPress, track with analytics, optimize with insights.', 'pipeline desc', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- Pipeline steps -->
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|small"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","top":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-top-color:var(--wp--preset--color--accent);border-top-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
            <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"2rem","fontWeight":"800"}}} -->
            <p class="has-accent-color has-text-color" style="font-size:2rem;font-weight:800">01</p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"level":4,"fontSize":"medium"} -->
            <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html_x( 'Plan', 'step name', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Content briefs and editorial calendar in Notion. AI agents generate strategic content plans.', 'step desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","top":{"color":"var:preset|color|accent-bright","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-top-color:var(--wp--preset--color--accent-bright);border-top-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
            <!-- wp:paragraph {"textColor":"accent-bright","style":{"typography":{"fontSize":"2rem","fontWeight":"800"}}} -->
            <p class="has-accent-bright-color has-text-color" style="font-size:2rem;font-weight:800">02</p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"level":4,"fontSize":"medium"} -->
            <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html_x( 'Generate', 'step name', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'AI abilities create content: service pages, pSEO pages, testimonials, team bios, FAQ, and schema markup.', 'step desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","top":{"color":"var:preset|color|accent","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-top-color:var(--wp--preset--color--accent);border-top-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
            <!-- wp:paragraph {"textColor":"accent","style":{"typography":{"fontSize":"2rem","fontWeight":"800"}}} -->
            <p class="has-accent-color has-text-color" style="font-size:2rem;font-weight:800">03</p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"level":4,"fontSize":"medium"} -->
            <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html_x( 'Publish', 'step name', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'WordPress receives content via upsert-post ability. SEO meta auto-set. Drip-publish avoids spam signals.', 'step desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|medium","right":"var:preset|spacing|medium"}},"border":{"radius":"12px","top":{"color":"#FF6B35","width":"4px"}}},"backgroundColor":"bg-raised"} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-radius:12px;border-top-color:#FF6B35;border-top-width:4px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"2rem","fontWeight":"800"},"color":{"text":"#FF6B35"}}} -->
            <p class="has-text-color" style="color:#FF6B35;font-size:2rem;font-weight:800">04</p>
            <!-- /wp:paragraph -->
            <!-- wp:heading {"level":4,"fontSize":"medium"} -->
            <h4 class="wp-block-heading has-medium-font-size"><?php echo esc_html_x( 'Optimize', 'step name', 'voyager-demo' ); ?></h4>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Lead tracking scores conversions. Content freshness scans flag stale pages. AI insights recommend improvements.', 'step desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- ═══════════════════════════════════════════════════════ -->
<!-- LAYER 4: WHAT MAKES IT DIFFERENT                       -->
<!-- ═══════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal has-bg-raised-background-color has-background is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|30"}}},"textColor":"accent-bright","fontFamily":"mono","className":"vo-eyebrow"} -->
    <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family vo-eyebrow" style="margin-top:0;margin-bottom:var(--wp--preset--spacing--30);font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-154 · Why This Matters', 'section label', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em;margin-bottom:var(--wp--preset--spacing--x-large)"><?php echo esc_html_x( 'Not a page builder. A platform.', 'differentiator heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"large"} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-large-font-size"><?php echo esc_html_x( 'AI-native', 'differentiator name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color"><?php echo esc_html_x( 'Not AI bolted on. Built from the ground up with WordPress AI Building Blocks. Every plugin registers abilities that AI agents can call directly.', 'differentiator desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"textColor":"accent-bright","fontSize":"large"} -->
            <h3 class="wp-block-heading has-accent-bright-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Data-bound', 'differentiator name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color"><?php echo esc_html_x( 'Content resolves at render time through block bindings. No shortcodes, no custom field UIs. Just WordPress blocks with metadata that sources pull dynamically.', 'differentiator desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3,"textColor":"accent","fontSize":"large"} -->
            <h3 class="wp-block-heading has-accent-color has-text-color has-large-font-size"><?php echo esc_html_x( 'Agent-ready', 'differentiator name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"textColor":"fg-4"} -->
            <p class="has-fg-4-color has-text-color"><?php echo esc_html_x( 'MCP protocol means any AI agent can control WordPress. Claude Code, the Portal, managed agents, and scheduled cron agents all use the same ability interface.', 'differentiator desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- ═══════════════════════════════════════════════════════ -->
<!-- FOOTER CTA                                             -->
<!-- ═══════════════════════════════════════════════════════ -->
<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"backgroundColor":"bg-canvas","textColor":"fg-1","layout":{"type":"constrained","contentSize":"700px"}} -->
<div class="wp-block-group alignfull vo-reveal has-fg-1-color has-bg-canvas-background-color has-text-color has-background is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:heading {"textAlign":"center","fontSize":"x-large","style":{"typography":{"letterSpacing":"-0.02em"}}} -->
    <h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="letter-spacing:-0.02em"><?php echo esc_html_x( 'This is what we build for every client.', 'cta heading', 'voyager-demo' ); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center","textColor":"fg-3","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
    <p class="has-text-align-center has-fg-3-color has-text-color" style="margin-top:var(--wp--preset--spacing--medium)"><?php echo esc_html_x( 'Every Voyager client gets the full ecosystem. Not a stripped-down version. Not a template. The same plugins, the same AI abilities, the same design system powering this demo site.', 'cta desc', 'voyager-demo' ); ?></p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}}} -->
    <div class="wp-block-buttons is-layout-flex" style="margin-top:var(--wp--preset--spacing--large)">
        <!-- wp:button {"backgroundColor":"accent","textColor":"fg-1","style":{"spacing":{"padding":{"top":"18px","bottom":"18px","left":"40px","right":"40px"}},"typography":{"fontWeight":"700","fontSize":"var(--wp--preset--font-size--medium)"},"border":{"radius":"8px"}}} -->
        <div class="wp-block-button has-custom-font-size"><a class="wp-block-button__link has-fg-1-color has-accent-background-color has-text-color has-background wp-element-button" href="/contact/" style="border-radius:8px;padding-top:18px;padding-right:40px;padding-bottom:18px;padding-left:40px;font-weight:700;font-size:var(--wp--preset--font-size--medium)"><?php echo esc_html_x( 'Get your free site audit \u2192', 'cta button', 'voyager-demo' ); ?></a></div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->

</div>
<!-- /wp:group -->
