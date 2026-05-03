<?php
/**
 * Title: Demo Automation Pipeline
 * Slug: voyager-demo/demo-automation
 * Categories: voyager-demo
 * Keywords: automation, pipeline, notion, ai, content, lifecycle, demo
 * Block Types: core/group
 */
?>

<!-- ==================== SECTION 1: HERO (DARK) ==================== -->

<!-- wp:group {"align":"full","className":"vo-starfield vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-starfield vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"11px","letterSpacing":"0.08em","textTransform":"uppercase","fontWeight":"500"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"accent-bright","fontFamily":"mono"} -->
        <p class="has-text-align-center has-accent-bright-color has-text-color has-mono-font-family" style="margin-top:0;margin-bottom:0;font-size:11px;font-weight:500;letter-spacing:0.08em;text-transform:uppercase"><?php echo esc_html_x( '— DEMO · D-110 · CONTENT AUTOMATION', 'automation hero eyebrow', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"lineHeight":"1.05","fontSize":"clamp(2.5rem, 7vw, 4.5rem)","letterSpacing":"-0.03em","fontWeight":"500"},"color":{"text":"var(--wp--preset--color--bg-raised)"}},"fontFamily":"mono"} -->
        <h1 class="wp-block-heading has-text-align-center has-mono-font-family" style="color:var(--wp--preset--color--fg-1);font-size:clamp(2.5rem, 7vw, 4.5rem);font-weight:500;letter-spacing:-0.03em;line-height:1.05"><?php
        printf(
            /* translators: %s: accent-highlighted phrase */
            esc_html_x( 'From Idea to %s in 15 Minutes', 'automation hero heading', 'voyager-demo' ),
            '<em class="vo-accent-word">' . esc_html_x( 'Published', 'automation hero heading accent', 'voyager-demo' ) . '</em>'
        );
        ?></h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.6","fontSize":"clamp(1.1rem, 2.5vw, 1.35rem)"},"spacing":{"margin":{"top":"var:preset|spacing|40"}}},"textColor":"fg-1"} -->
        <p class="has-text-align-center has-fg-1-color has-text-color" style="margin-top:var(--wp--preset--spacing--40);font-size:clamp(1.1rem, 2.5vw, 1.35rem);line-height:1.6"><?php echo esc_html_x( 'This is the exact pipeline that published the 8 blog posts on this site. Notion → AI → WordPress → SEO → Live.', 'automation hero subtitle', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- ==================== SECTION 2: THE PIPELINE (LIGHT) ==================== -->

<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}},"fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em;margin-bottom:var(--wp--preset--spacing--70)"><?php echo esc_html_x( 'The Pipeline', 'automation pipeline heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|50"}},"layout":{"type":"constrained","contentSize":"1200px"}} -->
    <div class="wp-block-group alignwide is-layout-constrained">

        <!-- ===== STEP 1: Write in Notion ===== -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"width":"4px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center">

                <!-- wp:column {"verticalAlignment":"center","width":"80px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80px">

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"3rem","fontWeight":"800","lineHeight":"1"},"color":{"text":"var(--wp--preset--color--accent)"}}} -->
                    <p style="color:var(--wp--preset--color--accent);font-size:3rem;font-weight:800;line-height:1">01</p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">

                    <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Write in Notion', 'automation step 1 title', 'voyager-demo' ); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"textColor":"fg-4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
                    <p class="has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Writer creates a row in Notion. Title, keyword, brief. That\'s it. The content database is the single source of truth.', 'automation step 1 desc', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"16px","right":"16px"}},"border":{"radius":"8px","width":"1px","color":"var(--wp--preset--color--fg-3)"}},"backgroundColor":"bg-raised","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group has-bg-raised-background-color has-background" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:8px;padding-top:12px;padding-right:16px;padding-bottom:12px;padding-left:16px">

                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"}},"textColor":"accent"} -->
                        <p class="has-accent-color has-text-color" style="font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Live Proof — Notion Title', 'automation step 1 proof label', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9rem"}},"metadata":{"bindings":{"content":{"source":"voyager/notion","args":{"database":"content","key":"Name","filter_key":"Name","filter_value":"Why You Need Digital Marketing For Professional Services"}}}}} -->
                        <p style="font-size:0.9rem;font-weight:600"><?php echo esc_html_x( 'Loading...', 'binding fallback', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:column -->

            </div>
            <!-- /wp:columns -->

        </div>
        <!-- /wp:group -->

        <!-- ===== STEP 2: AI Generates the Draft ===== -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"width":"4px","color":"var(--wp--preset--color--accent-bright)"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:var(--wp--preset--color--accent-bright);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center">

                <!-- wp:column {"verticalAlignment":"center","width":"80px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80px">

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"3rem","fontWeight":"800","lineHeight":"1"},"color":{"text":"var(--wp--preset--color--accent-bright)"}}} -->
                    <p style="color:var(--wp--preset--color--accent-bright);font-size:3rem;font-weight:800;line-height:1">02</p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">

                    <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'AI Generates the Draft', 'automation step 2 title', 'voyager-demo' ); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"textColor":"fg-4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
                    <p class="has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Orbit AI takes the brief and writes 800+ words, meta description, and schema suggestions. One ability call, fully structured output.', 'automation step 2 desc', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"16px","right":"16px"}},"border":{"radius":"8px","width":"1px","color":"var(--wp--preset--color--fg-3)"}},"backgroundColor":"bg-raised","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group has-bg-raised-background-color has-background" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:8px;padding-top:12px;padding-right:16px;padding-bottom:12px;padding-left:16px">

                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"}},"textColor":"accent"} -->
                        <p class="has-accent-color has-text-color" style="font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Live Proof — AI Abilities', 'automation step 2 proof label', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9rem"}},"metadata":{"bindings":{"content":{"source":"voyager/orbit","args":{"key":"ability_count"}}}}} -->
                        <p style="font-size:0.9rem;font-weight:600"><?php echo esc_html_x( '32', 'binding fallback', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:column -->

            </div>
            <!-- /wp:columns -->

        </div>
        <!-- /wp:group -->

        <!-- ===== STEP 3: Quality Gates Check ===== -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"width":"4px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center">

                <!-- wp:column {"verticalAlignment":"center","width":"80px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80px">

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"3rem","fontWeight":"800","lineHeight":"1"},"color":{"text":"var(--wp--preset--color--accent)"}}} -->
                    <p style="color:var(--wp--preset--color--accent);font-size:3rem;font-weight:800;line-height:1">03</p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">

                    <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Quality Gates Check', 'automation step 3 title', 'voyager-demo' ); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"textColor":"fg-4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
                    <p class="has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Automated checks run before anything goes live. Every post must pass all four gates.', 'automation step 3 desc', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group">

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"fg-1"} -->
                        <p class="has-fg-1-color has-text-color" style="font-size:0.9rem"><?php echo esc_html_x( "\u2705 Word count \u2265 800", 'automation gate 1', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"fg-1"} -->
                        <p class="has-fg-1-color has-text-color" style="font-size:0.9rem"><?php echo esc_html_x( "\u2705 SEO meta description present", 'automation gate 2', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"fg-1"} -->
                        <p class="has-fg-1-color has-text-color" style="font-size:0.9rem"><?php echo esc_html_x( "\u2705 2+ internal links included", 'automation gate 3', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.9rem"}},"textColor":"fg-1"} -->
                        <p class="has-fg-1-color has-text-color" style="font-size:0.9rem"><?php echo esc_html_x( "\u2705 CTA paragraph at the end", 'automation gate 4', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:column -->

            </div>
            <!-- /wp:columns -->

        </div>
        <!-- /wp:group -->

        <!-- ===== STEP 4: Publish to WordPress ===== -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"width":"4px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center">

                <!-- wp:column {"verticalAlignment":"center","width":"80px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80px">

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"3rem","fontWeight":"800","lineHeight":"1"},"color":{"text":"var(--wp--preset--color--accent)"}}} -->
                    <p style="color:var(--wp--preset--color--accent);font-size:3rem;font-weight:800;line-height:1">04</p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">

                    <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Publish to WordPress', 'automation step 4 title', 'voyager-demo' ); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"textColor":"fg-4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
                    <p class="has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'The publish command creates the post, sets RankMath meta, uploads the featured image, and writes the post ID back to Notion. Zero manual WordPress editing.', 'automation step 4 desc', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"16px","right":"16px"}},"border":{"radius":"8px","width":"1px","color":"var(--wp--preset--color--fg-3)"}},"backgroundColor":"bg-raised","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group has-bg-raised-background-color has-background" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:8px;padding-top:12px;padding-right:16px;padding-bottom:12px;padding-left:16px">

                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"}},"textColor":"accent"} -->
                        <p class="has-accent-color has-text-color" style="font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Live Proof — Blog Posts', 'automation step 4 proof label', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9rem"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"blog_post_count"}}}}} -->
                        <p style="font-size:0.9rem;font-weight:600"><?php echo esc_html_x( '8', 'binding fallback', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:column -->

            </div>
            <!-- /wp:columns -->

        </div>
        <!-- /wp:group -->

        <!-- ===== STEP 5: Block Bindings Activate ===== -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"width":"4px","color":"var(--wp--preset--color--accent-bright)"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:var(--wp--preset--color--accent-bright);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center">

                <!-- wp:column {"verticalAlignment":"center","width":"80px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80px">

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"3rem","fontWeight":"800","lineHeight":"1"},"color":{"text":"var(--wp--preset--color--accent-bright)"}}} -->
                    <p style="color:var(--wp--preset--color--accent-bright);font-size:3rem;font-weight:800;line-height:1">05</p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">

                    <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Block Bindings Activate', 'automation step 5 title', 'voyager-demo' ); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"textColor":"fg-4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
                    <p class="has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'On every page view, 12 data sources resolve live. Phone numbers, CTAs, geo-text, metrics — all dynamic. Content is never stale.', 'automation step 5 desc', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"16px","right":"16px"}},"border":{"radius":"8px","width":"1px","color":"var(--wp--preset--color--fg-3)"}},"backgroundColor":"bg-raised","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group has-bg-raised-background-color has-background" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:8px;padding-top:12px;padding-right:16px;padding-bottom:12px;padding-left:16px">

                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"}},"textColor":"accent"} -->
                        <p class="has-accent-color has-text-color" style="font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Live Proof — Freshness Score', 'automation step 5 proof label', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9rem"}},"metadata":{"bindings":{"content":{"source":"voyager/pulse","args":{"key":"freshness_score"}}}}} -->
                        <p style="font-size:0.9rem;font-weight:600"><?php echo esc_html_x( '95%', 'binding fallback', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:column -->

            </div>
            <!-- /wp:columns -->

        </div>
        <!-- /wp:group -->

        <!-- ===== STEP 6: Orbit Tracks Everything ===== -->

        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","left":{"width":"4px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-bg-raised-background-color has-background" style="border-radius:12px;border-left-width:4px;border-left-color:var(--wp--preset--color--accent);padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns are-vertically-aligned-center">

                <!-- wp:column {"verticalAlignment":"center","width":"80px"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80px">

                    <!-- wp:paragraph {"style":{"typography":{"fontSize":"3rem","fontWeight":"800","lineHeight":"1"},"color":{"text":"var(--wp--preset--color--accent)"}}} -->
                    <p style="color:var(--wp--preset--color--accent);font-size:3rem;font-weight:800;line-height:1">06</p>
                    <!-- /wp:paragraph -->

                </div>
                <!-- /wp:column -->

                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center">

                    <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"large"} -->
                    <h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Orbit Tracks Everything', 'automation step 6 title', 'voyager-demo' ); ?></h3>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph {"textColor":"fg-4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
                    <p class="has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Every form fill, chat, page visit tracked. Portal aggregates across all client sites. Reports generate automatically.', 'automation step 6 desc', 'voyager-demo' ); ?></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:group {"style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"16px","right":"16px"}},"border":{"radius":"8px","width":"1px","color":"var(--wp--preset--color--fg-3)"}},"backgroundColor":"bg-raised","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                    <div class="wp-block-group has-bg-raised-background-color has-background" style="border-color:var(--wp--preset--color--border-1);border-width:1px;border-radius:8px;padding-top:12px;padding-right:16px;padding-bottom:12px;padding-left:16px">

                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"}},"textColor":"accent"} -->
                        <p class="has-accent-color has-text-color" style="font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Live Proof — Leads Tracked', 'automation step 6 proof label', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                        <!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontSize":"0.9rem"}},"metadata":{"bindings":{"content":{"source":"voyager/orbit","args":{"key":"lead_count"}}}}} -->
                        <p style="font-size:0.9rem;font-weight:600"><?php echo esc_html_x( '0', 'binding fallback', 'voyager-demo' ); ?></p>
                        <!-- /wp:paragraph -->

                    </div>
                    <!-- /wp:group -->

                </div>
                <!-- /wp:column -->

            </div>
            <!-- /wp:columns -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->

<!-- ==================== SECTION 3: WHAT THIS MEANS (DARK) ==================== -->

<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #1B1F3B 0%, #2A2F52 100%);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|70"}},"color":{"text":"var(--wp--preset--color--bg-raised)"}},"fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="color:var(--wp--preset--color--fg-1);letter-spacing:-0.03em;margin-bottom:var(--wp--preset--spacing--70)"><?php echo esc_html_x( 'What This Means', 'automation comparison heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","width":"1px","color":"rgba(255,255,255,0.1)"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-column" style="border-color:rgba(255,255,255,0.1);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase","fontSize":"0.8rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"critical"} -->
            <p class="has-critical-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30);font-size:0.8rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php echo esc_html_x( 'Before', 'automation before label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"fg-3"} -->
                <p class="has-fg-3-color has-text-color" style="font-size:0.95rem"><?php echo esc_html_x( '2 posts per month', 'automation before item', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"fg-3"} -->
                <p class="has-fg-3-color has-text-color" style="font-size:0.95rem"><?php echo esc_html_x( '2+ hours each post', 'automation before item', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"fg-3"} -->
                <p class="has-fg-3-color has-text-color" style="font-size:0.95rem"><?php echo esc_html_x( 'Manual WordPress editing', 'automation before item', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"fg-3"} -->
                <p class="has-fg-3-color has-text-color" style="font-size:0.95rem"><?php echo esc_html_x( 'Forget SEO fields half the time', 'automation before item', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem"}},"textColor":"fg-3"} -->
                <p class="has-fg-3-color has-text-color" style="font-size:0.95rem"><?php echo esc_html_x( 'No lead attribution', 'automation before item', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"12px","width":"1px","color":"rgba(0,212,170,0.3)"}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-column" style="border-color:rgba(0,212,170,0.3);border-width:1px;border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.15em","textTransform":"uppercase","fontSize":"0.8rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--30);font-size:0.8rem;font-weight:700;letter-spacing:0.15em;text-transform:uppercase"><?php echo esc_html_x( 'After', 'automation after label', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group">

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"600"}},"textColor":"fg-1"} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.95rem;font-weight:600"><?php echo esc_html_x( '12 posts per month', 'automation after item', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"600"}},"textColor":"fg-1"} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.95rem;font-weight:600"><?php echo esc_html_x( '15 minutes each post', 'automation after item', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"600"}},"textColor":"fg-1"} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.95rem;font-weight:600"><?php echo esc_html_x( 'Never open WordPress', 'automation after item', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"600"}},"textColor":"fg-1"} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.95rem;font-weight:600"><?php echo esc_html_x( 'Automated SEO on every post', 'automation after item', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph {"style":{"typography":{"fontSize":"0.95rem","fontWeight":"600"}},"textColor":"fg-1"} -->
                <p class="has-fg-1-color has-text-color" style="font-size:0.95rem;font-weight:600"><?php echo esc_html_x( 'Full lead attribution', 'automation after item', 'voyager-demo' ); ?></p>
                <!-- /wp:paragraph -->

            </div>
            <!-- /wp:group -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- ==================== SECTION 4: MANAGED AGENTS (BASE) ==================== -->

<!-- wp:group {"align":"full","className":"vo-section vo-section--raised vo-reveal","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-section vo-section--raised vo-reveal is-layout-constrained">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"letterSpacing":"-0.03em"},"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}},"fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="letter-spacing:-0.03em;margin-bottom:var(--wp--preset--spacing--30)"><?php echo esc_html_x( 'Managed Agents', 'automation agents heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","textColor":"fg-4","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|70"}}}} -->
        <p class="has-text-align-center has-fg-4-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--70)"><?php echo esc_html_x( 'AI agents that run autonomously on a schedule. No human in the loop.', 'automation agents subtitle', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","top":{"width":"3px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-top-width:3px;border-top-color:var(--wp--preset--color--accent);border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Mon / Wed / Fri 8am', 'agent schedule', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Content Machine', 'agent name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Generates strategic content briefs from keyword gaps, competitor analysis, and content calendar.', 'agent desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","top":{"width":"3px","color":"var(--wp--preset--color--accent-bright)"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-top-width:3px;border-top-color:var(--wp--preset--color--accent-bright);border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"accent-bright"} -->
            <p class="has-accent-bright-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Tue 10am', 'agent schedule', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'SEO Blitz', 'agent name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Expands the pSEO matrix — new service areas, city pages, and landing page variants.', 'agent desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","top":{"width":"3px","color":"var(--wp--preset--color--accent)"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-top-width:3px;border-top-color:var(--wp--preset--color--accent);border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"accent"} -->
            <p class="has-accent-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Daily 7am', 'agent schedule', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Lead Intelligence', 'agent name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Coverage analysis, lead velocity tracking, and source attribution across all touchpoints.', 'agent desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|40","top":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|40"}}}} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--preset--spacing--40)">

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","top":{"width":"3px","color":"var(--wp--preset--color--warn)"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-top-width:3px;border-top-color:var(--wp--preset--color--warn);border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"warn"} -->
            <p class="has-warn-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Thu 10am', 'agent schedule', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Fleet Binding QA', 'agent name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Audits all binding sources across the fleet — catches empty fields, stale caches, and broken data sources.', 'agent desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px","top":{"width":"3px","color":"var(--wp--preset--color--info)"}}},"backgroundColor":"bg-raised","layout":{"type":"constrained"}} -->
        <div class="wp-block-column has-bg-raised-background-color has-background" style="border-top-width:3px;border-top-color:var(--wp--preset--color--info);border-radius:12px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">

            <!-- wp:paragraph {"style":{"typography":{"fontWeight":"700","letterSpacing":"0.05em","textTransform":"uppercase","fontSize":"0.7rem"},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"info"} -->
            <p class="has-info-color has-text-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:0.7rem;font-weight:700;letter-spacing:0.05em;text-transform:uppercase"><?php echo esc_html_x( 'Wed 2pm', 'agent schedule', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":3,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"fontSize":"medium"} -->
            <h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:var(--wp--preset--spacing--20)"><?php echo esc_html_x( 'Content Freshness', 'agent name', 'voyager-demo' ); ?></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"textColor":"fg-4","fontSize":"small"} -->
            <p class="has-fg-4-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Detects stale content, checks publish dates, scores freshness, and flags posts that need updating.', 'agent desc', 'voyager-demo' ); ?></p>
            <!-- /wp:paragraph -->

        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"></div>
        <!-- /wp:column -->

    </div>
    <!-- /wp:columns -->

</div>
<!-- /wp:group -->

<!-- ==================== SECTION 5: CTA ==================== -->

<!-- wp:group {"align":"full","className":"vo-reveal","style":{"spacing":{"padding":{"top":"var:preset|spacing|80","bottom":"var:preset|spacing|80","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull vo-reveal is-layout-constrained" style="background:linear-gradient(135deg, #462CFF 0%, #F22AAA 100%);padding-top:var(--wp--preset--spacing--80);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--60)">

    <!-- wp:group {"layout":{"type":"constrained","contentSize":"780px"}} -->
    <div class="wp-block-group is-layout-constrained">

        <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"letterSpacing":"-0.03em","lineHeight":"1.1"},"color":{"text":"var(--wp--preset--color--bg-raised)"}},"fontSize":"xx-large"} -->
        <h2 class="wp-block-heading has-text-align-center has-xx-large-font-size" style="color:var(--wp--preset--color--fg-1);letter-spacing:-0.03em;line-height:1.1"><?php echo esc_html_x( 'This pipeline published 8 blog posts, 4 case studies, and 92 landing pages.', 'automation cta heading', 'voyager-demo' ); ?></h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"clamp(1.1rem, 2.5vw, 1.35rem)","lineHeight":"1.6"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}},"color":{"text":"rgba(255,255,255,0.85)"}}} -->
        <p class="has-text-align-center" style="color:rgba(255,255,255,0.85);margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--50);font-size:clamp(1.1rem, 2.5vw, 1.35rem);line-height:1.6"><?php echo esc_html_x( 'What could it do for your content?', 'automation cta subtitle', 'voyager-demo' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">

            <!-- wp:button {"backgroundColor":"bg-raised","textColor":"accent","style":{"typography":{"fontWeight":"700"},"border":{"radius":"8px"},"spacing":{"padding":{"top":"16px","bottom":"16px","left":"32px","right":"32px"}}}} -->
            <div class="wp-block-button"><a class="wp-block-button__link has-accent-color has-bg-raised-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:16px;padding-right:32px;padding-bottom:16px;padding-left:32px;font-weight:700" href="/contact/"><?php echo esc_html_x( 'Talk to Us', 'automation cta button', 'voyager-demo' ); ?></a></div>
            <!-- /wp:button -->

        </div>
        <!-- /wp:buttons -->

    </div>
    <!-- /wp:group -->

</div>
<!-- /wp:group -->
