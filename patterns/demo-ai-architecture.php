<?php
/**
 * Title: AI Architecture
 * Slug: voyager-demo/demo-ai-architecture
 * Categories: voyager-demo
 * Keywords: ai, architecture, mcp, abilities, wp-ai-client, ecosystem, demo
 * Block Types: core/group
 */
?>


<!-- ============================================================ -->
<!-- SECTION 1: DA-01 · HERO — starfield + 60/35                    -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-starfield vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"bg-canvas","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-starfield vo-reveal has-bg-canvas-background-color has-background is-layout-constrained" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · DA-01 · WP AI INFRASTRUCTURE', 'ai-arch hero eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":1,"style":{"typography":{"lineHeight":"1","letterSpacing":"-0.03em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"5xl","fontFamily":"mono"} -->
            <h1 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-5xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1;letter-spacing:-0.03em"><?php
            printf(
                /* translators: %s: accent-highlighted phrase "WordPress AI Stack" */
                esc_html_x( 'The %s.', 'ai-arch hero heading', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'WordPress AI Stack', 'ai-arch hero accent phrase', 'voyager-demo' ) . '</span>'
            );
            ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Three plugins turn WordPress into an AI-native platform. Provider-agnostic SDK, typed ability registry, MCP protocol bridge — every layer composes cleanly with the next.', 'ai-arch hero subtitle', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ============================================================ -->
<!-- SECTION 2: DA-02 · THREE LAYERS — deliverable grid (3 cards)   -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DA-02 · THREE LAYERS · 03 PLUGINS', 'ai-arch layers eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"mono"} -->
            <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-3xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.05;letter-spacing:-0.02em"><?php
            printf(
                /* translators: %s: accent-highlighted phrase "one problem cleanly" */
                esc_html_x( 'Each layer solves %s.', 'ai-arch layers heading', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'one problem cleanly', 'ai-arch layers accent phrase', 'voyager-demo' ) . '</span>'
            );
            ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Together they make any WordPress plugin AI-capable without vendor lock-in. Each layer ships with a public contract; the next layer reads from it.', 'ai-arch layers description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- 3-card deliverable grid (vo-deliverable-card utility) -->
        <!-- wp:group {"className":"vo-deliverable-grid","layout":{"type":"default"}} -->
        <div class="wp-block-group vo-deliverable-grid">

            <!-- wp:group {"className":"vo-deliverable-card","layout":{"type":"default"}} -->
            <div class="wp-block-group vo-deliverable-card">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'DA-02.01 · LAYER 01', 'ai-arch layer ref', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em","lineHeight":"1.15"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"lg","fontFamily":"mono"} -->
                <h3 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-lg-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;letter-spacing:-0.01em;line-height:1.15"><?php echo esc_html_x( 'WP AI Client', 'ai-arch layer 1 heading', 'voyager-demo' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"sm","fontFamily":"body"} -->
                <p class="has-fg-3-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'A provider-agnostic AI SDK. Plugins call wp_ai_generate() without knowing the model behind it. Swap Claude for GPT or Gemini without changing a line of plugin code.', 'ai-arch layer 1 description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'PROVIDER-AGNOSTIC · CENTRAL KEY · SETTINGS UI', 'ai-arch layer 1 tags', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"vo-deliverable-card","layout":{"type":"default"}} -->
            <div class="wp-block-group vo-deliverable-card">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'DA-02.02 · LAYER 02', 'ai-arch layer ref', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em","lineHeight":"1.15"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"lg","fontFamily":"mono"} -->
                <h3 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-lg-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;letter-spacing:-0.01em;line-height:1.15"><?php echo esc_html_x( 'Abilities API', 'ai-arch layer 2 heading', 'voyager-demo' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"sm","fontFamily":"body"} -->
                <p class="has-fg-3-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'A registry where plugins declare capabilities. Orbit registers 32 abilities with typed input and output schemas — every contract enforced strict, additionalProperties false for Anthropic compatibility.', 'ai-arch layer 2 description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'TYPED SCHEMAS · 32 ABILITIES · REST + MCP', 'ai-arch layer 2 tags', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"vo-deliverable-card","layout":{"type":"default"}} -->
            <div class="wp-block-group vo-deliverable-card">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'DA-02.03 · LAYER 03', 'ai-arch layer ref', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em","lineHeight":"1.15"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"lg","fontFamily":"mono"} -->
                <h3 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-lg-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;letter-spacing:-0.01em;line-height:1.15"><?php echo esc_html_x( 'MCP Adapter', 'ai-arch layer 3 heading', 'voyager-demo' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"sm","fontFamily":"body"} -->
                <p class="has-fg-3-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Bridges abilities to the Model Context Protocol. Claude Code, Cursor, or any MCP client calls them as tools — 64 tools across 9 domains over stdio, with CORS for web clients.', 'ai-arch layer 3 description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '64 TOOLS · 09 DOMAINS · STDIO TRANSPORT', 'ai-arch layer 3 tags', 'voyager-demo' ); ?></p>
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
<!-- SECTION 3: DA-03 · DATA FLOW — hairline numbered stack          -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DA-03 · DATA FLOW · 05 STEPS', 'ai-arch flow eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"mono"} -->
            <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-3xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.05;letter-spacing:-0.02em"><?php
            printf(
                /* translators: %s: accent-highlighted phrase "five steps" */
                esc_html_x( 'Registration to execution in %s.', 'ai-arch flow heading', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'five steps', 'ai-arch flow accent phrase', 'voyager-demo' ) . '</span>'
            );
            ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'How a single PHP callback becomes an AI-callable tool. The plugin author writes step one — the rest is automatic.', 'ai-arch flow description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- Numbered hair-stack — boxed -->
        <!-- wp:group {"className":"vo-hair-stack vo-hair-stack--boxed","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group vo-hair-stack vo-hair-stack--boxed" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"flex-start","verticalAlignment":"top"}} -->
            <div class="wp-block-group is-layout-flex">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'F-01', 'ai-arch step ref', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.5"><?php echo esc_html_x( 'Plugin registers ability with typed input/output schema', 'ai-arch step 1', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"flex-start","verticalAlignment":"top"}} -->
            <div class="wp-block-group is-layout-flex">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'F-02', 'ai-arch step ref', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.5"><?php echo esc_html_x( 'Abilities API indexes it into the global registry', 'ai-arch step 2', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"flex-start","verticalAlignment":"top"}} -->
            <div class="wp-block-group is-layout-flex">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'F-03', 'ai-arch step ref', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.5"><?php echo esc_html_x( 'MCP Adapter exposes it as an MCP tool with JSON schema', 'ai-arch step 3', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"flex-start","verticalAlignment":"top"}} -->
            <div class="wp-block-group is-layout-flex">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'F-04', 'ai-arch step ref', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.5"><?php echo esc_html_x( 'AI agent discovers and calls the tool via MCP protocol', 'ai-arch step 4', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"flex-start","verticalAlignment":"top"}} -->
            <div class="wp-block-group is-layout-flex">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'F-05', 'ai-arch step ref', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.5"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"md","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.5"><?php echo esc_html_x( 'WordPress executes the callback and returns structured results', 'ai-arch step 5', 'voyager-demo' ); ?></p>
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
<!-- SECTION 4: DA-04 · MCP DOMAINS — metric-stack (9 rows)         -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DA-04 · MCP SURFACE · 09 DOMAINS', 'ai-arch domains eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"mono"} -->
            <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-3xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.05;letter-spacing:-0.02em"><?php
            printf(
                /* translators: %s: accent-highlighted phrase "natural language" */
                esc_html_x( 'Nine domains. One %s.', 'ai-arch domains heading', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'natural language', 'ai-arch domains accent phrase', 'voyager-demo' ) . '</span>'
            );
            ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Each domain groups related tools that AI agents discover and call through plain English. The MCP surface is the agency operating system.', 'ai-arch domains description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- 9-row metric stack -->
        <!-- wp:group {"className":"vo-metric-stack vo-metric-stack--boxed","layout":{"type":"default"}} -->
        <div class="wp-block-group vo-metric-stack vo-metric-stack--boxed">

            <!-- wp:group {"className":"vo-metric-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group vo-metric-row">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'CONTENT', 'domain name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Create, update, publish posts and pages', 'domain description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"vo-metric-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group vo-metric-row">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'SEO', 'domain name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Meta, keywords, schema markup, site audit', 'domain description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"vo-metric-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group vo-metric-row">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'LEADS', 'domain name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Track, query, and report conversions', 'domain description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"vo-metric-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group vo-metric-row">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'ANALYTICS', 'domain name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'GA4, GSC, pageviews, CTR data', 'domain description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"vo-metric-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group vo-metric-row">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'SOCIAL', 'domain name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Posts, scheduling, calendar management', 'domain description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"vo-metric-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group vo-metric-row">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'SITE MGMT', 'domain name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Options, cache, health checks', 'domain description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"vo-metric-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group vo-metric-row">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'FLEET', 'domain name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Multi-site monitoring and sync', 'domain description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"vo-metric-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group vo-metric-row">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'AI', 'domain name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Generate, enrich, analyze content', 'domain description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"vo-metric-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group vo-metric-row">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
                <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'PUBLISHING', 'domain name', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"sm","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;font-weight:500"><?php echo esc_html_x( 'Notion pipeline, queue, schedule', 'domain description', 'voyager-demo' ); ?></p>
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
<!-- SECTION 5: DA-05 · WHAT THIS MEANS — 3 audience cards          -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DA-05 · WHY IT MATTERS', 'ai-arch meaning eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"mono"} -->
            <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-3xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.05;letter-spacing:-0.02em"><?php
            printf(
                /* translators: %s: accent-highlighted phrase "every audience" */
                esc_html_x( 'A clean primitive for %s.', 'ai-arch meaning heading', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'every audience', 'ai-arch meaning accent phrase', 'voyager-demo' ) . '</span>'
            );
            ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'The same registration ritual answers three different problems. Developers ship faster, agencies run leaner, businesses run smarter.', 'ai-arch meaning description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"},"blockGap":{"left":"var:preset|spacing|medium","top":"var:preset|spacing|medium"}}}} -->
        <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"color":"var:preset|color|border-hair","width":"1px","radius":"2px"}}} -->
            <div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;border-radius:2px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'DA-05.01 · DEVELOPERS', 'ai-arch audience ref', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em","lineHeight":"1.15"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"lg","fontFamily":"mono"} -->
                <h3 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-lg-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;letter-spacing:-0.01em;line-height:1.15"><?php echo esc_html_x( 'Register an ability, get MCP for free', 'ai-arch dev value', 'voyager-demo' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"sm","fontFamily":"body"} -->
                <p class="has-fg-3-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Write one PHP callback with a schema. The Abilities API handles discovery, the MCP Adapter handles protocol translation. Plugin code stays clean.', 'ai-arch dev description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"color":"var:preset|color|border-hair","width":"1px","radius":"2px"}}} -->
            <div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;border-radius:2px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'DA-05.02 · AGENCIES', 'ai-arch audience ref', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em","lineHeight":"1.15"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"lg","fontFamily":"mono"} -->
                <h3 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-lg-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;letter-spacing:-0.01em;line-height:1.15"><?php echo esc_html_x( 'One assistant runs the whole fleet', 'ai-arch agency value', 'voyager-demo' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"sm","fontFamily":"body"} -->
                <p class="has-fg-3-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Through natural language, a single AI agent creates content, checks SEO, monitors leads, and runs site health across every client site you manage.', 'ai-arch agency description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|small"},"border":{"color":"var:preset|color|border-hair","width":"1px","radius":"2px"}}} -->
            <div class="wp-block-column has-border-color" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;border-radius:2px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'DA-05.03 · BUSINESSES', 'ai-arch audience ref', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"500","letterSpacing":"-0.01em","lineHeight":"1.15"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"lg","fontFamily":"mono"} -->
                <h3 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-lg-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;letter-spacing:-0.01em;line-height:1.15"><?php echo esc_html_x( 'Capabilities, not just content', 'ai-arch biz value', 'voyager-demo' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"sm","fontFamily":"body"} -->
                <p class="has-fg-3-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Your site does not just display information. It can generate, analyze, optimize, and act — all triggered by AI through a standard protocol.', 'ai-arch biz description', 'voyager-demo' ); ?></p>
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
<!-- SECTION 6: DA-06 · ABILITY SCHEMA — code reference card        -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DA-06 · DEVELOPER REFERENCE', 'ai-arch schema eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"mono"} -->
            <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-3xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.05;letter-spacing:-0.02em"><?php
            printf(
                /* translators: %s: accent-highlighted phrase "the contract" */
                esc_html_x( 'Every ability ships %s.', 'ai-arch schema heading', 'voyager-demo' ),
                '<span class="vo-accent-word">' . esc_html_x( 'the contract', 'ai-arch schema accent phrase', 'voyager-demo' ) . '</span>'
            );
            ?></h2>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
            <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Define what it accepts, what it returns, and how to execute it. additionalProperties false on every input schema — required for Anthropic API compatibility.', 'ai-arch schema description', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

        <!-- Bordered card holding the code reference -->
        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","right":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large"},"margin":{"top":"var:preset|spacing|large"}},"border":{"color":"var:preset|color|border-hair","width":"1px","radius":"2px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-border-color has-bg-raised-background-color has-background" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;border-radius:2px;margin-top:var(--wp--preset--spacing--large);padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

            <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-4","fontFamily":"mono"} -->
            <p class="has-fg-4-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'DA-06.A · ABILITY REGISTRATION', 'ai-arch code ref', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:code {"style":{"spacing":{"margin":{"top":"var:preset|spacing|small"}},"typography":{"fontSize":"0.85rem","lineHeight":"1.7"}}} -->
            <pre class="wp-block-code" style="margin-top:var(--wp--preset--spacing--small);font-size:0.85rem;line-height:1.7"><code>register_ability( 'voyager-orbit/generate-hero-content', [
    'title'         =&gt; 'Generate Hero Content',
    'description'   =&gt; 'Creates headline + subhead for any page',
    'input_schema'  =&gt; [
        'type'       =&gt; 'object',
        'properties' =&gt; [
            'page_type'  =&gt; [ 'type' =&gt; 'string' ],
            'industry'   =&gt; [ 'type' =&gt; 'string' ],
            'tone'       =&gt; [ 'type' =&gt; 'string', 'default' =&gt; 'professional' ],
        ],
        'required'              =&gt; [ 'page_type', 'industry' ],
        'additionalProperties'  =&gt; false,
    ],
    'output_schema' =&gt; [
        'type'       =&gt; 'object',
        'properties' =&gt; [
            'headline' =&gt; [ 'type' =&gt; 'string' ],
            'subhead'  =&gt; [ 'type' =&gt; 'string' ],
        ],
    ],
    'callback' =&gt; [ HeroGenerator::class, 'generate' ],
] );</code></pre>
            <!-- /wp:code -->

            <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"var:preset|spacing|small","bottom":"0"}}},"textColor":"fg-4","fontSize":"sm","fontFamily":"body"} -->
            <p class="has-fg-4-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:var(--wp--preset--spacing--small);margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Once registered, this ability is callable from MCP, REST, the Orbit chat, or any internal PHP path. The schema is the contract; everything else flows from it.', 'ai-arch schema note', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ============================================================ -->
<!-- SECTION 7: DA-07 · CTA — 60/35 with ghost link card            -->
<!-- ============================================================ -->
<!-- wp:group {"align":"full","className":"vo-section vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-reveal is-layout-constrained">

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large"}},"layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DA-07 · NEXT STEP', 'ai-arch cta eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"className":"vo-grid-60-35","style":{"spacing":{"margin":{"top":"var:preset|spacing|large"}}},"layout":{"type":"default"}} -->
        <div class="wp-block-group vo-grid-60-35" style="margin-top:var(--wp--preset--spacing--large)">

            <!-- LEFT: heading + body -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">

                <!-- wp:heading {"level":2,"style":{"typography":{"lineHeight":"1.05","letterSpacing":"-0.02em","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"3xl","fontFamily":"mono"} -->
                <h2 class="wp-block-heading has-fg-1-color has-text-color has-mono-font-family has-3xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.05;letter-spacing:-0.02em"><?php
                printf(
                    /* translators: %s: accent-highlighted phrase "build on it" */
                    esc_html_x( 'The future of WordPress. %s.', 'ai-arch cta heading', 'voyager-demo' ),
                    '<span class="vo-accent-word">' . esc_html_x( 'Build on it', 'ai-arch cta accent phrase', 'voyager-demo' ) . '</span>'
                );
                ?></h2>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"md","fontFamily":"body"} -->
                <p class="has-fg-3-color has-text-color has-body-font-family has-md-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( 'Every plugin becomes an AI capability. Every site becomes an intelligent platform. The stack is open, standard, and ready — we run it on production today.', 'ai-arch cta description', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

            <!-- RIGHT: bordered card with ghost link -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"},"blockGap":"var:preset|spacing|medium"},"border":{"color":"var:preset|color|border-hair","width":"1px","radius":"2px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-border-color has-bg-raised-background-color has-background" style="border-color:var(--wp--preset--color--border-hair);border-width:1px;border-radius:2px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
                <p class="has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( 'BOOK A DEMO', 'ai-arch cta card eyebrow', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontWeight":"500","lineHeight":"1.15","letterSpacing":"-0.01em"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-1","fontSize":"xl","fontFamily":"mono"} -->
                <p class="has-fg-1-color has-text-color has-mono-font-family has-xl-font-size" style="margin-top:0;margin-bottom:0;font-weight:500;line-height:1.15;letter-spacing:-0.01em"><?php echo esc_html_x( 'See the stack live', 'ai-arch cta card title', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.6"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"fg-3","fontSize":"sm","fontFamily":"body"} -->
                <p class="has-fg-3-color has-text-color has-body-font-family has-sm-font-size" style="margin-top:0;margin-bottom:0;line-height:1.6"><?php echo esc_html_x( '20-minute walkthrough on your domain. We register an ability live and call it from Claude Code.', 'ai-arch cta card body', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium"},"blockGap":"0"},"border":{"top":{"color":"var:preset|color|border-hair","width":"1px"}}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border-hair);border-top-width:1px;padding-top:var(--wp--preset--spacing--medium)">

                    <!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
                    <p style="margin-top:0;margin-bottom:0"><a class="vo-ghost-link" href="/contact/"><?php echo esc_html_x( 'Get started →', 'ai-arch cta link', 'voyager-demo' ); ?></a></p>
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
