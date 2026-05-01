<?php
/**
 * Title: Design Showcase
 * Slug: voyager-demo/design-showcase
 * Categories: voyager-demo
 * Keywords: showcase, design, demo, premium, flow
 * Block Types: core/group
 * Viewport Width: 1400
 * Description: Full-page showcase of the Voyager premium design system.
 */
?>

<!-- ═══════════════════════════════════════════════════════════
     SECTION 1: HERO — Nova-style left-aligned + particles + stats
     Color: DARK (#0A0A1A behind particles shader)
     ═══════════════════════════════════════════════════════════ -->

<!-- wp:pattern {"slug":"voyager/hero-particles"} /-->


<!-- ═══════════════════════════════════════════════════════════
     SECTION 2: TRUST BAR — Light, compact, visual breathing room
     Color: WHITE (base)
     ═══════════════════════════════════════════════════════════ -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}},"border":{"bottom":{"color":"#e5e5e510","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:#e5e5e510;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.15em","fontWeight":"500"}},"textColor":"light-gray","fontSize":"x-small"} -->
		<p class="has-light-gray-color has-text-color has-x-small-font-size" style="font-weight:500;letter-spacing:0.15em;text-transform:uppercase"><?php echo esc_html_x( 'Trusted by', 'trust label', 'voyagermark' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"light-gray","fontSize":"base"} -->
		<p class="has-light-gray-color has-text-color has-base-font-size" style="font-weight:600;letter-spacing:-0.01em">Acme</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"light-gray","fontSize":"base"} -->
		<p class="has-light-gray-color has-text-color has-base-font-size" style="font-weight:600;letter-spacing:-0.01em">Pinnacle</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"light-gray","fontSize":"base"} -->
		<p class="has-light-gray-color has-text-color has-base-font-size" style="font-weight:600;letter-spacing:-0.01em">Meridian</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"light-gray","fontSize":"base"} -->
		<p class="has-light-gray-color has-text-color has-base-font-size" style="font-weight:600;letter-spacing:-0.01em">Vertex</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"light-gray","fontSize":"base"} -->
		<p class="has-light-gray-color has-text-color has-base-font-size" style="font-weight:600;letter-spacing:-0.01em">Catalyst</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════
     SECTION 3: PROCESS — Light, asymmetric 60/40 split
     Color: WHITE (base)
     ═══════════════════════════════════════════════════════════ -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--x-large)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|xx-large"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.15em","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"textColor":"accent-purple","fontSize":"x-small"} -->
			<p class="has-accent-purple-color has-text-color has-x-small-font-size" style="margin-bottom:var(--wp--preset--spacing--small);font-weight:500;letter-spacing:0.15em;text-transform:uppercase"><?php echo esc_html_x( 'How it works', 'process eyebrow', 'voyagermark' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"style":{"typography":{"letterSpacing":"-0.03em","fontWeight":"600","lineHeight":"1.15"},"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--medium);font-weight:600;letter-spacing:-0.03em;line-height:1.15"><?php echo esc_html_x( 'Three steps to a site that converts', 'process heading', 'voyagermark' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.75"},"color":{"text":"#636381"}},"fontSize":"small"} -->
			<p class="has-text-color has-small-font-size" style="color:#636381;line-height:1.75"><?php echo esc_html_x( 'No endless discovery phases. No design-by-committee. We move fast, measure everything, and ship sites that actually grow your business.', 'process description', 'voyagermark' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}} } -->
			<div class="wp-block-group">

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}},"border":{"bottom":{"color":"#e5e5e520","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group" style="border-bottom-color:#e5e5e520;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"200","letterSpacing":"-0.03em"},"layout":{"selfStretch":"fixed","flexSize":"80px"}},"textColor":"accent-purple","fontSize":"x-large"} -->
					<h3 class="wp-block-heading has-accent-purple-color has-text-color has-x-large-font-size" style="font-weight:200;letter-spacing:-0.03em">01</h3>
					<!-- /wp:heading -->
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}},"fontSize":"base"} -->
						<h4 class="wp-block-heading has-base-font-size" style="margin-bottom:4px;font-weight:600"><?php echo esc_html_x( 'Audit & Strategy', 'step 1', 'voyagermark' ); ?></h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"#636381"}},"fontSize":"small"} -->
						<p class="has-text-color has-small-font-size" style="color:#636381"><?php echo esc_html_x( 'We analyze your site, competitors, and market. You get a clear roadmap with prioritized opportunities.', 'step 1 desc', 'voyagermark' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}},"border":{"bottom":{"color":"#e5e5e520","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group" style="border-bottom-color:#e5e5e520;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"200","letterSpacing":"-0.03em"},"layout":{"selfStretch":"fixed","flexSize":"80px"}},"textColor":"accent-purple","fontSize":"x-large"} -->
					<h3 class="wp-block-heading has-accent-purple-color has-text-color has-x-large-font-size" style="font-weight:200;letter-spacing:-0.03em">02</h3>
					<!-- /wp:heading -->
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}},"fontSize":"base"} -->
						<h4 class="wp-block-heading has-base-font-size" style="margin-bottom:4px;font-weight:600"><?php echo esc_html_x( 'Design & Build', 'step 2', 'voyagermark' ); ?></h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"#636381"}},"fontSize":"small"} -->
						<p class="has-text-color has-small-font-size" style="color:#636381"><?php echo esc_html_x( 'Custom WordPress development with our design system — premium typography, flowing layouts, and craft in every detail.', 'step 2 desc', 'voyagermark' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"200","letterSpacing":"-0.03em"},"layout":{"selfStretch":"fixed","flexSize":"80px"}},"textColor":"accent-purple","fontSize":"x-large"} -->
					<h3 class="wp-block-heading has-accent-purple-color has-text-color has-x-large-font-size" style="font-weight:200;letter-spacing:-0.03em">03</h3>
					<!-- /wp:heading -->
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}},"fontSize":"base"} -->
						<h4 class="wp-block-heading has-base-font-size" style="margin-bottom:4px;font-weight:600"><?php echo esc_html_x( 'Launch & Grow', 'step 3', 'voyagermark' ); ?></h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"#636381"}},"fontSize":"small"} -->
						<p class="has-text-color has-small-font-size" style="color:#636381"><?php echo esc_html_x( 'Go live with confidence. We monitor performance, optimize for search, and iterate on data — not guesswork.', 'step 3 desc', 'voyagermark' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->

		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════
     SECTION 4: STATS — Subtle tint, compact
     Color: LIGHT TINT (light-bg)
     ═══════════════════════════════════════════════════════════ -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"backgroundColor":"light-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--xx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|large"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"-0.03em"}},"textColor":"navy","fontSize":"xx-large"} -->
			<h3 class="wp-block-heading has-text-align-center has-navy-color has-text-color has-xx-large-font-size" style="font-weight:700;letter-spacing:-0.03em">40+</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","textColor":"medium-gray","fontSize":"small"} -->
			<p class="has-text-align-center has-medium-gray-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Clients served', 'stat 1', 'voyagermark' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"-0.03em"}},"textColor":"primary","fontSize":"xx-large"} -->
			<h3 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-xx-large-font-size" style="font-weight:700;letter-spacing:-0.03em">3.2×</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","textColor":"medium-gray","fontSize":"small"} -->
			<p class="has-text-align-center has-medium-gray-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Average traffic increase', 'stat 2', 'voyagermark' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"-0.03em"}},"textColor":"navy","fontSize":"xx-large"} -->
			<h3 class="wp-block-heading has-text-align-center has-navy-color has-text-color has-xx-large-font-size" style="font-weight:700;letter-spacing:-0.03em">97%</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","textColor":"medium-gray","fontSize":"small"} -->
			<p class="has-text-align-center has-medium-gray-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Client retention', 'stat 3', 'voyagermark' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"-0.03em"}},"textColor":"navy","fontSize":"xx-large"} -->
			<h3 class="wp-block-heading has-text-align-center has-navy-color has-text-color has-xx-large-font-size" style="font-weight:700;letter-spacing:-0.03em">&lt;2s</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","textColor":"medium-gray","fontSize":"small"} -->
			<p class="has-text-align-center has-medium-gray-color has-text-color has-small-font-size"><?php echo esc_html_x( 'Average load time', 'stat 4', 'voyagermark' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════
     SECTION 4b: CORE PLATFORM — Light Pillar WebGL background + service cards
     Color: DARK (#0A0A1A behind shader)
     ═══════════════════════════════════════════════════════════ -->

<!-- wp:voyager/light-pillar {"align":"full","topColor":"#462CFF","bottomColor":"#F22AAA","intensity":1.0,"rotationSpeed":0.3,"glowAmount":0.005,"pillarWidth":3.0,"pillarHeight":0.4,"noiseIntensity":0.5,"pillarRotation":0,"minHeight":"800px"} -->
<div class="wp-block-voyager-light-pillar alignfull light-pillar-background" data-top-color="#462CFF" data-bottom-color="#F22AAA" data-intensity="1" data-rotation-speed="0.3" data-glow-amount="0.005" data-pillar-width="3" data-pillar-height="0.4" data-noise-intensity="0.5" data-pillar-rotation="0" style="min-height:800px">
	<div class="light-pillar__canvas-container"></div>
	<div class="light-pillar__inner-content">

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|xxxx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--xxxx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

			<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|large"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em","fontWeight":"500"},"border":{"radius":"100px","width":"1px","color":"#ffffff20"},"spacing":{"padding":{"top":"0.4rem","bottom":"0.4rem","left":"1.25rem","right":"1.25rem"}},"color":{"text":"#ffffffaa","background":"#ffffff08"}},"fontSize":"x-small"} -->
				<p class="has-text-color has-background has-border-color has-x-small-font-size" style="border-color:#ffffff20;border-width:1px;border-radius:100px;color:#ffffffaa;background-color:#ffffff08;padding-top:0.4rem;padding-right:1.25rem;padding-bottom:0.4rem;padding-left:1.25rem;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html_x( '◆ Voyager Platform', 'platform eyebrow', 'voyagermark' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"lineHeight":"1.1","letterSpacing":"-0.04em","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}},"color":{"text":"#ffffff"}},"fontSize":"display"} -->
			<h2 class="wp-block-heading has-text-align-center has-text-color has-display-font-size" style="color:#ffffff;margin-bottom:var(--wp--preset--spacing--medium);font-weight:600;letter-spacing:-0.04em;line-height:1.1"><?php echo esc_html_x( 'The foundation engineered for', 'platform heading line 1', 'voyagermark' ); ?> — <em><?php echo esc_html_x( 'unbounded scale.', 'platform heading line 2', 'voyagermark' ); ?></em></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.75"},"spacing":{"margin":{"bottom":"var:preset|spacing|xx-large"}},"color":{"text":"#9ca3af"}},"fontSize":"base"} -->
			<p class="has-text-align-center has-text-color has-base-font-size" style="color:#9ca3af;margin-bottom:var(--wp--preset--spacing--xx-large);line-height:1.75"><?php echo esc_html_x( 'Constructed on modern, next-generation architecture. Inherently performant, secure by design, and engineered to drive your digital presence from initial prototype to global dominance.', 'platform description', 'voyagermark' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"},"padding":{"left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large","bottom":"var:preset|spacing|xxxx-large"}}}} -->
		<div class="wp-block-columns alignwide" style="padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xxxx-large);padding-left:var(--wp--preset--spacing--x-large)">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"16px","width":"1px","color":"#ffffff12"},"color":{"background":"#ffffff06"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-background" style="border-color:#ffffff12;border-width:1px;border-radius:16px;background-color:#ffffff06;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}},"color":{"text":"#9ca3af"}},"fontSize":"xx-large"} -->
					<p class="has-text-color has-xx-large-font-size" style="color:#9ca3af;margin-bottom:var(--wp--preset--spacing--medium)">⚡</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}},"color":{"text":"#ffffff"}},"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-text-color has-medium-font-size" style="color:#ffffff;margin-bottom:var(--wp--preset--spacing--small);font-weight:600"><?php echo esc_html_x( 'Real-Time Analytics', 'card 1 title', 'voyagermark' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"#636381"},"typography":{"lineHeight":"1.7"}},"fontSize":"small"} -->
					<p class="has-text-color has-small-font-size" style="color:#636381;line-height:1.7"><?php echo esc_html_x( 'Data propagates seamlessly throughout your pipeline. Our real-time processing eliminates manual refreshes. All metrics remain continuously synchronized.', 'card 1 desc', 'voyagermark' ); ?></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"16px","width":"1px","color":"#ffffff12"},"color":{"background":"#ffffff06"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-background" style="border-color:#ffffff12;border-width:1px;border-radius:16px;background-color:#ffffff06;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}},"color":{"text":"#9ca3af"}},"fontSize":"xx-large"} -->
					<p class="has-text-color has-xx-large-font-size" style="color:#9ca3af;margin-bottom:var(--wp--preset--spacing--medium)">🛡️</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}},"color":{"text":"#ffffff"}},"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-text-color has-medium-font-size" style="color:#ffffff;margin-bottom:var(--wp--preset--spacing--small);font-weight:600"><?php echo esc_html_x( 'Ironclad Security', 'card 2 title', 'voyagermark' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"#636381"},"typography":{"lineHeight":"1.7"}},"fontSize":"small"} -->
					<p class="has-text-color has-small-font-size" style="color:#636381;line-height:1.7"><?php echo esc_html_x( 'Enterprise-tier encryption combined with continuous vulnerability scanning at the core level. Your data assets remain completely safeguarded.', 'card 2 desc', 'voyagermark' ); ?></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"16px","width":"1px","color":"#ffffff12"},"color":{"background":"#ffffff06"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-background" style="border-color:#ffffff12;border-width:1px;border-radius:16px;background-color:#ffffff06;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)">

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}},"color":{"text":"#9ca3af"}},"fontSize":"xx-large"} -->
					<p class="has-text-color has-xx-large-font-size" style="color:#9ca3af;margin-bottom:var(--wp--preset--spacing--medium)">🚀</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}},"color":{"text":"#ffffff"}},"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-text-color has-medium-font-size" style="color:#ffffff;margin-bottom:var(--wp--preset--spacing--small);font-weight:600"><?php echo esc_html_x( 'Elastic Infrastructure', 'card 3 title', 'voyagermark' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"#636381"},"typography":{"lineHeight":"1.7"}},"fontSize":"small"} -->
					<p class="has-text-color has-small-font-size" style="color:#636381;line-height:1.7"><?php echo esc_html_x( 'Containerized sites that automatically adapt to demand. Scale from a local sandbox to a distributed, multi-region deployment in minutes.', 'card 3 desc', 'voyagermark' ); ?></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

		</div>
		<!-- /wp:columns -->

	</div>
</div>
<!-- /wp:voyager/light-pillar -->


<!-- ═══════════════════════════════════════════════════════════
     SECTION 5: SERVICES — Light, featured card uses gradient (visible!)
     Color: WHITE (base)
     ═══════════════════════════════════════════════════════════ -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xx-large);padding-left:var(--wp--preset--spacing--x-large)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"580px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--x-large)">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.15em","fontWeight":"500"}},"textColor":"accent-purple","fontSize":"x-small"} -->
		<p class="has-accent-purple-color has-text-color has-x-small-font-size" style="font-weight:500;letter-spacing:0.15em;text-transform:uppercase"><?php echo esc_html_x( 'What we build', 'services eyebrow', 'voyagermark' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"style":{"typography":{"letterSpacing":"-0.03em","fontWeight":"600"}},"fontSize":"x-large"} -->
		<h2 class="wp-block-heading has-x-large-font-size" style="font-weight:600;letter-spacing:-0.03em"><?php echo esc_html_x( 'Services designed for growth', 'services heading', 'voyagermark' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:group {"className":"is-style-card-lift","style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"24px"}},"gradient":"voyager-primary","textColor":"base","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card-lift has-base-color has-voyager-primary-gradient-background has-text-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large)">
				<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}},"color":{"text":"#ffffffaa"}},"fontSize":"x-small"} -->
				<p class="has-text-color has-x-small-font-size" style="color:#ffffffaa;margin-bottom:var(--wp--preset--spacing--medium);font-weight:500;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Most popular', 'featured label', 'voyagermark' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|small"}}},"fontSize":"large"} -->
				<h3 class="wp-block-heading has-large-font-size" style="margin-bottom:var(--wp--preset--spacing--small);font-weight:600;line-height:1.2"><?php echo esc_html_x( 'Web Design & Development', 'service 1', 'voyagermark' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#ffffffcc"},"typography":{"lineHeight":"1.7"}},"fontSize":"small"} -->
				<p class="has-text-color has-small-font-size" style="color:#ffffffcc;line-height:1.7"><?php echo esc_html_x( 'Custom WordPress block themes with our premium design system. Fast, accessible, and built to convert visitors into customers.', 'service 1 desc', 'voyagermark' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|medium"}}} -->
			<div class="wp-block-group">

				<!-- wp:group {"className":"is-style-card-lift","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"16px","color":"#e5e5e540","width":"1px"}},"backgroundColor":"base","layout":{"type":"constrained"},"shadow":"layered"} -->
				<div class="wp-block-group is-style-card-lift has-border-color has-base-background-color has-background" style="border-color:#e5e5e540;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large);box-shadow:var(--wp--preset--shadow--layered)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}},"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:4px;font-weight:600"><?php echo esc_html_x( 'SEO & Content Strategy', 'service 2', 'voyagermark' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#636381"},"typography":{"lineHeight":"1.7"}},"fontSize":"small"} -->
					<p class="has-text-color has-small-font-size" style="color:#636381;line-height:1.7"><?php echo esc_html_x( 'Data-driven SEO with programmatic pages, content clusters, and schema markup that search engines love.', 'service 2 desc', 'voyagermark' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"is-style-card-lift","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"16px","color":"#e5e5e540","width":"1px"}},"backgroundColor":"base","layout":{"type":"constrained"},"shadow":"layered"} -->
				<div class="wp-block-group is-style-card-lift has-border-color has-base-background-color has-background" style="border-color:#e5e5e540;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large);box-shadow:var(--wp--preset--shadow--layered)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}},"fontSize":"medium"} -->
					<h3 class="wp-block-heading has-medium-font-size" style="margin-bottom:4px;font-weight:600"><?php echo esc_html_x( 'AI-Powered Marketing', 'service 3', 'voyagermark' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#636381"},"typography":{"lineHeight":"1.7"}},"fontSize":"small"} -->
					<p class="has-text-color has-small-font-size" style="color:#636381;line-height:1.7"><?php echo esc_html_x( 'Smart automation, content generation, and lead intelligence. AI that works while you sleep.', 'service 3 desc', 'voyagermark' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════
     SECTION 6: TESTIMONIALS — Light tint, featured center
     Color: LIGHT TINT (light-bg)
     ═══════════════════════════════════════════════════════════ -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxx-large","bottom":"var:preset|spacing|xxx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}}},"backgroundColor":"light-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-bg-background-color has-background" style="padding-top:var(--wp--preset--spacing--xxx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xxx-large);padding-left:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"-0.03em","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}}},"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--x-large);font-weight:600;letter-spacing:-0.03em"><?php echo esc_html_x( 'What our clients say', 'testimonials heading', 'voyagermark' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|medium"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"16px","color":"#e5e5e540","width":"1px"}},"backgroundColor":"base","layout":{"type":"constrained"},"shadow":"layered"} -->
			<div class="wp-block-group has-border-color has-base-background-color has-background" style="border-color:#e5e5e540;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large);box-shadow:var(--wp--preset--shadow--layered)">
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="line-height:1.75"><?php echo esc_html_x( '"Voyager transformed our online presence. The site loads fast, looks incredible, and our organic traffic has tripled."', 'testimonial 1', 'voyagermark' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"0"}}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="margin-bottom:0;font-weight:600"><?php echo esc_html_x( 'Sarah Chen', 'name 1', 'voyagermark' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"medium-gray","fontSize":"x-small"} -->
						<p class="has-medium-gray-color has-text-color has-x-small-font-size" style="margin-top:0"><?php echo esc_html_x( 'CEO, Pinnacle Solutions', 'role 1', 'voyagermark' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"16px","color":"var:preset|color|accent-purple","width":"1px"}},"backgroundColor":"base","layout":{"type":"constrained"},"shadow":"layered-elevated"} -->
			<div class="wp-block-group has-border-color has-base-background-color has-background" style="border-color:var(--wp--preset--color--accent-purple);border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--x-large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--x-large);padding-left:var(--wp--preset--spacing--large);box-shadow:var(--wp--preset--shadow--layered-elevated)">
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"base"} -->
				<p class="has-base-font-size" style="line-height:1.75"><?php echo esc_html_x( '"The AI tools they built into our site are a game changer. Lead scoring, content generation, automated reporting — best investment we made this year."', 'testimonial 2', 'voyagermark' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"0"}}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="margin-bottom:0;font-weight:600"><?php echo esc_html_x( 'Marcus Rivera', 'name 2', 'voyagermark' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"medium-gray","fontSize":"x-small"} -->
						<p class="has-medium-gray-color has-text-color has-x-small-font-size" style="margin-top:0"><?php echo esc_html_x( 'VP Marketing, Vertex Digital', 'role 2', 'voyagermark' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","left":"var:preset|spacing|large","right":"var:preset|spacing|large"}},"border":{"radius":"16px","color":"#e5e5e540","width":"1px"}},"backgroundColor":"base","layout":{"type":"constrained"},"shadow":"layered"} -->
			<div class="wp-block-group has-border-color has-base-background-color has-background" style="border-color:#e5e5e540;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--large);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large);box-shadow:var(--wp--preset--shadow--layered)">
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"small"} -->
				<p class="has-small-font-size" style="line-height:1.75"><?php echo esc_html_x( '"Finally, a dev team that understands both design and performance. Our PageSpeed scores went from 40s to consistent 90s."', 'testimonial 3', 'voyagermark' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--medium)">
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"0"}}},"fontSize":"small"} -->
						<p class="has-small-font-size" style="margin-bottom:0;font-weight:600"><?php echo esc_html_x( 'Elena Park', 'name 3', 'voyagermark' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"medium-gray","fontSize":"x-small"} -->
						<p class="has-medium-gray-color has-text-color has-x-small-font-size" style="margin-top:0"><?php echo esc_html_x( 'Founder, Meridian Health', 'role 3', 'voyagermark' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

	</div>
	<!-- /wp:columns -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════
     SECTION 7: CTA — Dark, centered, generous spacing
     Color: DARK (navy gradient)
     ═══════════════════════════════════════════════════════════ -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|xxxx-large","bottom":"var:preset|spacing|xxxx-large","left":"var:preset|spacing|x-large","right":"var:preset|spacing|x-large"}},"color":{"background":"linear-gradient(180deg, #1B1F3B 0%, #0f1129 100%)"}},"textColor":"base","layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group alignfull has-base-color has-text-color has-background" style="background:linear-gradient(180deg, #1B1F3B 0%, #0f1129 100%);padding-top:var(--wp--preset--spacing--xxxx-large);padding-right:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--xxxx-large);padding-left:var(--wp--preset--spacing--x-large)">

	<!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"-0.03em","fontWeight":"600","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|medium"}}},"fontSize":"x-large"} -->
	<h2 class="wp-block-heading has-text-align-center has-x-large-font-size" style="margin-bottom:var(--wp--preset--spacing--medium);font-weight:600;letter-spacing:-0.03em;line-height:1.1"><?php echo esc_html_x( 'Ready to build something remarkable?', 'cta heading', 'voyagermark' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.75"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-large"}},"color":{"text":"#9ca3af"}},"fontSize":"base"} -->
	<p class="has-text-align-center has-text-color has-base-font-size" style="color:#9ca3af;margin-bottom:var(--wp--preset--spacing--x-large);line-height:1.75"><?php echo esc_html_x( 'Get a free audit of your current site. We will show you exactly where the opportunities are — no strings attached.', 'cta desc', 'voyagermark' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"primary","textColor":"base","style":{"spacing":{"padding":{"top":"1.125rem","bottom":"1.125rem","left":"3rem","right":"3rem"}},"typography":{"fontWeight":"600"},"border":{"radius":"8px"}},"fontSize":"small"} -->
		<div class="wp-block-button has-custom-font-size has-small-font-size"><a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:1.125rem;padding-right:3rem;padding-bottom:1.125rem;padding-left:3rem;font-weight:600"><?php echo esc_html_x( 'Get your free site audit →', 'cta button', 'voyagermark' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}},"color":{"text":"#636381"}},"fontSize":"x-small"} -->
	<p class="has-text-align-center has-text-color has-x-small-font-size" style="color:#636381;margin-top:var(--wp--preset--spacing--medium)"><?php echo esc_html_x( '30-minute call · No commitment · Actionable takeaways', 'cta subtext', 'voyagermark' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
