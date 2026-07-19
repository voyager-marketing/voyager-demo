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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|7","right":"var:preset|spacing|7"}},"border":{"bottom":{"color":"#e5e5e510","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="border-bottom-color:#e5e5e510;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--7)">

	<!-- wp:group {"align":"wide","layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.15em","fontWeight":"500"}},"textColor":"fg-3","fontSize":"label"} -->
		<p class="has-fg-3-color has-text-color has-label-font-size" style="font-weight:500;letter-spacing:0.15em;text-transform:uppercase"><?php echo esc_html_x( 'Trusted by', 'trust label', 'voyager-demo' ); ?></p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"fg-3","fontSize":"base"} -->
		<p class="has-fg-3-color has-text-color has-base-font-size" style="font-weight:600;letter-spacing:-0.01em">Acme</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"fg-3","fontSize":"base"} -->
		<p class="has-fg-3-color has-text-color has-base-font-size" style="font-weight:600;letter-spacing:-0.01em">Pinnacle</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"fg-3","fontSize":"base"} -->
		<p class="has-fg-3-color has-text-color has-base-font-size" style="font-weight:600;letter-spacing:-0.01em">Meridian</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"fg-3","fontSize":"base"} -->
		<p class="has-fg-3-color has-text-color has-base-font-size" style="font-weight:600;letter-spacing:-0.01em">Vertex</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","letterSpacing":"-0.01em"}},"textColor":"fg-3","fontSize":"base"} -->
		<p class="has-fg-3-color has-text-color has-base-font-size" style="font-weight:600;letter-spacing:-0.01em">Catalyst</p>
		<!-- /wp:paragraph -->
	</div>
	<!-- /wp:group -->

</div>
<!-- /wp:group -->


<!-- ═══════════════════════════════════════════════════════════
     SECTION 3: PROCESS — Light, asymmetric 60/40 split
     Color: WHITE (base)
     ═══════════════════════════════════════════════════════════ -->

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|7","right":"var:preset|spacing|7"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--7)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|8"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"40%"} -->
		<div class="wp-block-column" style="flex-basis:40%">
			<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.15em","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}},"textColor":"accent-2","fontSize":"label"} -->
			<p class="has-accent-2-color has-text-color has-label-font-size" style="margin-bottom:var(--wp--preset--spacing--3);font-weight:500;letter-spacing:0.15em;text-transform:uppercase"><?php echo esc_html_x( 'How it works', 'process eyebrow', 'voyager-demo' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:heading {"style":{"typography":{"letterSpacing":"-0.03em","fontWeight":"600","lineHeight":"1.15"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}},"fontSize":"xl"} -->
			<h2 class="wp-block-heading has-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--5);font-weight:600;letter-spacing:-0.03em;line-height:1.15"><?php echo esc_html_x( 'Three steps to a site that converts', 'process heading', 'voyager-demo' ); ?></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.75"},"color":{"text":"#636381"}},"fontSize":"sm"} -->
			<p class="has-text-color has-sm-font-size" style="color:#636381;line-height:1.75"><?php echo esc_html_x( 'No endless discovery phases. No design-by-committee. We move fast, measure everything, and ship sites that actually grow your business.', 'process description', 'voyager-demo' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"60%"} -->
		<div class="wp-block-column" style="flex-basis:60%">

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}} } -->
			<div class="wp-block-group">

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}},"border":{"bottom":{"color":"#e5e5e520","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group" style="border-bottom-color:#e5e5e520;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"200","letterSpacing":"-0.03em"},"layout":{"selfStretch":"fixed","flexSize":"80px"}},"textColor":"accent-2","fontSize":"xl"} -->
					<h3 class="wp-block-heading has-accent-2-color has-text-color has-xl-font-size" style="font-weight:200;letter-spacing:-0.03em">01</h3>
					<!-- /wp:heading -->
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}},"fontSize":"base"} -->
						<h4 class="wp-block-heading has-base-font-size" style="margin-bottom:4px;font-weight:600"><?php echo esc_html_x( 'Audit & Strategy', 'step 1', 'voyager-demo' ); ?></h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"#636381"}},"fontSize":"sm"} -->
						<p class="has-text-color has-sm-font-size" style="color:#636381"><?php echo esc_html_x( 'We analyze your site, competitors, and market. You get a clear roadmap with prioritized opportunities.', 'step 1 desc', 'voyager-demo' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}},"border":{"bottom":{"color":"#e5e5e520","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group" style="border-bottom-color:#e5e5e520;border-bottom-width:1px;padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"200","letterSpacing":"-0.03em"},"layout":{"selfStretch":"fixed","flexSize":"80px"}},"textColor":"accent-2","fontSize":"xl"} -->
					<h3 class="wp-block-heading has-accent-2-color has-text-color has-xl-font-size" style="font-weight:200;letter-spacing:-0.03em">02</h3>
					<!-- /wp:heading -->
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}},"fontSize":"base"} -->
						<h4 class="wp-block-heading has-base-font-size" style="margin-bottom:4px;font-weight:600"><?php echo esc_html_x( 'Design & Build', 'step 2', 'voyager-demo' ); ?></h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"#636381"}},"fontSize":"sm"} -->
						<p class="has-text-color has-sm-font-size" style="color:#636381"><?php echo esc_html_x( 'Custom WordPress development with our design system — premium typography, flowing layouts, and craft in every detail.', 'step 2 desc', 'voyager-demo' ); ?></p>
						<!-- /wp:paragraph -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6"}}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
				<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"200","letterSpacing":"-0.03em"},"layout":{"selfStretch":"fixed","flexSize":"80px"}},"textColor":"accent-2","fontSize":"xl"} -->
					<h3 class="wp-block-heading has-accent-2-color has-text-color has-xl-font-size" style="font-weight:200;letter-spacing:-0.03em">03</h3>
					<!-- /wp:heading -->
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:heading {"level":4,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}},"fontSize":"base"} -->
						<h4 class="wp-block-heading has-base-font-size" style="margin-bottom:4px;font-weight:600"><?php echo esc_html_x( 'Launch & Grow', 'step 3', 'voyager-demo' ); ?></h4>
						<!-- /wp:heading -->
						<!-- wp:paragraph {"style":{"color":{"text":"#636381"}},"fontSize":"sm"} -->
						<p class="has-text-color has-sm-font-size" style="color:#636381"><?php echo esc_html_x( 'Go live with confidence. We monitor performance, optimize for search, and iterate on data — not guesswork.', 'step 3 desc', 'voyager-demo' ); ?></p>
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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|8","bottom":"var:preset|spacing|8","left":"var:preset|spacing|7","right":"var:preset|spacing|7"}}},"backgroundColor":"bg-panel","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-panel-background-color has-background" style="padding-top:var(--wp--preset--spacing--8);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--7)">

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|6"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"-0.03em"}},"textColor":"fg-2","fontSize":"2xl"} -->
			<h3 class="wp-block-heading has-text-align-center has-fg-2-color has-text-color has-2-xl-font-size" style="font-weight:700;letter-spacing:-0.03em">40+</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"sm"} -->
			<p class="has-text-align-center has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'Clients served', 'stat 1', 'voyager-demo' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"-0.03em"}},"textColor":"accent-bright","fontSize":"2xl"} -->
			<h3 class="wp-block-heading has-text-align-center has-accent-bright-color has-text-color has-2-xl-font-size" style="font-weight:700;letter-spacing:-0.03em">3.2×</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"sm"} -->
			<p class="has-text-align-center has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'Average traffic increase', 'stat 2', 'voyager-demo' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"-0.03em"}},"textColor":"fg-2","fontSize":"2xl"} -->
			<h3 class="wp-block-heading has-text-align-center has-fg-2-color has-text-color has-2-xl-font-size" style="font-weight:700;letter-spacing:-0.03em">97%</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"sm"} -->
			<p class="has-text-align-center has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'Client retention', 'stat 3', 'voyager-demo' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:heading {"level":3,"textAlign":"center","style":{"typography":{"fontWeight":"700","letterSpacing":"-0.03em"}},"textColor":"fg-2","fontSize":"2xl"} -->
			<h3 class="wp-block-heading has-text-align-center has-fg-2-color has-text-color has-2-xl-font-size" style="font-weight:700;letter-spacing:-0.03em">&lt;2s</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"align":"center","textColor":"fg-4","fontSize":"sm"} -->
			<p class="has-text-align-center has-fg-4-color has-text-color has-sm-font-size"><?php echo esc_html_x( 'Average load time', 'stat 4', 'voyager-demo' ); ?></p>
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

		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|8","left":"var:preset|spacing|7","right":"var:preset|spacing|7"}}},"layout":{"type":"constrained","contentSize":"700px"}} -->
		<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--7)">

			<!-- wp:group {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|6"}}}} -->
			<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--6)">
				<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.2em","fontWeight":"500"},"border":{"radius":"100px","width":"1px","color":"#ffffff20"},"spacing":{"padding":{"top":"0.4rem","bottom":"0.4rem","left":"1.25rem","right":"1.25rem"}},"color":{"text":"#ffffffaa","background":"#ffffff08"}},"fontSize":"label"} -->
				<p class="has-text-color has-background has-border-color has-label-font-size" style="border-color:#ffffff20;border-width:1px;border-radius:100px;color:#ffffffaa;background-color:#ffffff08;padding-top:0.4rem;padding-right:1.25rem;padding-bottom:0.4rem;padding-left:1.25rem;font-weight:500;letter-spacing:0.2em;text-transform:uppercase"><?php echo esc_html_x( '◆ Voyager Platform', 'platform eyebrow', 'voyager-demo' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->

			<!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"lineHeight":"1.1","letterSpacing":"-0.04em","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}},"color":{"text":"#ffffff"}},"fontSize":"5xl"} -->
			<h2 class="wp-block-heading has-text-align-center has-text-color has-5-xl-font-size" style="color:#ffffff;margin-bottom:var(--wp--preset--spacing--5);font-weight:600;letter-spacing:-0.04em;line-height:1.1"><?php echo esc_html_x( 'The foundation engineered for', 'platform heading line 1', 'voyager-demo' ); ?> — <em><?php echo esc_html_x( 'unbounded scale.', 'platform heading line 2', 'voyager-demo' ); ?></em></h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.75"},"spacing":{"margin":{"bottom":"var:preset|spacing|8"}},"color":{"text":"#9ca3af"}},"fontSize":"base"} -->
			<p class="has-text-align-center has-text-color has-base-font-size" style="color:#9ca3af;margin-bottom:var(--wp--preset--spacing--8);line-height:1.75"><?php echo esc_html_x( 'Constructed on modern, next-generation architecture. Inherently performant, secure by design, and engineered to drive your digital presence from initial prototype to global dominance.', 'platform description', 'voyager-demo' ); ?></p>
			<!-- /wp:paragraph -->

		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|5"},"padding":{"left":"var:preset|spacing|7","right":"var:preset|spacing|7","bottom":"var:preset|spacing|10"}}}} -->
		<div class="wp-block-columns alignwide" style="padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--7)">

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"16px","width":"1px","color":"#ffffff12"},"color":{"background":"#ffffff06"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-background" style="border-color:#ffffff12;border-width:1px;border-radius:16px;background-color:#ffffff06;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|5"}},"color":{"text":"#9ca3af"}},"fontSize":"2xl"} -->
					<p class="has-text-color has-2-xl-font-size" style="color:#9ca3af;margin-bottom:var(--wp--preset--spacing--5)">⚡</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}},"color":{"text":"#ffffff"}},"fontSize":"md"} -->
					<h3 class="wp-block-heading has-text-color has-md-font-size" style="color:#ffffff;margin-bottom:var(--wp--preset--spacing--3);font-weight:600"><?php echo esc_html_x( 'Real-Time Analytics', 'card 1 title', 'voyager-demo' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"#636381"},"typography":{"lineHeight":"1.7"}},"fontSize":"sm"} -->
					<p class="has-text-color has-sm-font-size" style="color:#636381;line-height:1.7"><?php echo esc_html_x( 'Data propagates seamlessly throughout your pipeline. Our real-time processing eliminates manual refreshes. All metrics remain continuously synchronized.', 'card 1 desc', 'voyager-demo' ); ?></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"16px","width":"1px","color":"#ffffff12"},"color":{"background":"#ffffff06"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-background" style="border-color:#ffffff12;border-width:1px;border-radius:16px;background-color:#ffffff06;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|5"}},"color":{"text":"#9ca3af"}},"fontSize":"2xl"} -->
					<p class="has-text-color has-2-xl-font-size" style="color:#9ca3af;margin-bottom:var(--wp--preset--spacing--5)">🛡️</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}},"color":{"text":"#ffffff"}},"fontSize":"md"} -->
					<h3 class="wp-block-heading has-text-color has-md-font-size" style="color:#ffffff;margin-bottom:var(--wp--preset--spacing--3);font-weight:600"><?php echo esc_html_x( 'Ironclad Security', 'card 2 title', 'voyager-demo' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"#636381"},"typography":{"lineHeight":"1.7"}},"fontSize":"sm"} -->
					<p class="has-text-color has-sm-font-size" style="color:#636381;line-height:1.7"><?php echo esc_html_x( 'Enterprise-tier encryption combined with continuous vulnerability scanning at the core level. Your data assets remain completely safeguarded.', 'card 2 desc', 'voyager-demo' ); ?></p>
					<!-- /wp:paragraph -->

				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"16px","width":"1px","color":"#ffffff12"},"color":{"background":"#ffffff06"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group has-border-color has-background" style="border-color:#ffffff12;border-width:1px;border-radius:16px;background-color:#ffffff06;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6)">

					<!-- wp:paragraph {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|5"}},"color":{"text":"#9ca3af"}},"fontSize":"2xl"} -->
					<p class="has-text-color has-2-xl-font-size" style="color:#9ca3af;margin-bottom:var(--wp--preset--spacing--5)">🚀</p>
					<!-- /wp:paragraph -->

					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}},"color":{"text":"#ffffff"}},"fontSize":"md"} -->
					<h3 class="wp-block-heading has-text-color has-md-font-size" style="color:#ffffff;margin-bottom:var(--wp--preset--spacing--3);font-weight:600"><?php echo esc_html_x( 'Elastic Infrastructure', 'card 3 title', 'voyager-demo' ); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph {"style":{"color":{"text":"#636381"},"typography":{"lineHeight":"1.7"}},"fontSize":"sm"} -->
					<p class="has-text-color has-sm-font-size" style="color:#636381;line-height:1.7"><?php echo esc_html_x( 'Containerized sites that automatically adapt to demand. Scale from a local sandbox to a distributed, multi-region deployment in minutes.', 'card 3 desc', 'voyager-demo' ); ?></p>
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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|8","left":"var:preset|spacing|7","right":"var:preset|spacing|7"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--8);padding-left:var(--wp--preset--spacing--7)">

	<!-- wp:group {"layout":{"type":"constrained","contentSize":"580px"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}}} -->
	<div class="wp-block-group" style="margin-bottom:var(--wp--preset--spacing--7)">
		<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.15em","fontWeight":"500"}},"textColor":"accent-2","fontSize":"label"} -->
		<p class="has-accent-2-color has-text-color has-label-font-size" style="font-weight:500;letter-spacing:0.15em;text-transform:uppercase"><?php echo esc_html_x( 'What we build', 'services eyebrow', 'voyager-demo' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"style":{"typography":{"letterSpacing":"-0.03em","fontWeight":"600"}},"fontSize":"xl"} -->
		<h2 class="wp-block-heading has-xl-font-size" style="font-weight:600;letter-spacing:-0.03em"><?php echo esc_html_x( 'Services designed for growth', 'services heading', 'voyager-demo' ); ?></h2>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|5"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column {"width":"45%"} -->
		<div class="wp-block-column" style="flex-basis:45%">
			<!-- wp:group {"className":"is-style-card-lift","style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"24px"}},"gradient":"voyager-primary","textColor":"fg-1","layout":{"type":"constrained"}} -->
			<div class="wp-block-group is-style-card-lift has-fg-1-color has-voyager-primary-gradient-background has-text-color has-background" style="border-radius:24px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6)">
				<!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"0.1em","fontWeight":"500"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}},"color":{"text":"#ffffffaa"}},"fontSize":"label"} -->
				<p class="has-text-color has-label-font-size" style="color:#ffffffaa;margin-bottom:var(--wp--preset--spacing--5);font-weight:500;letter-spacing:0.1em;text-transform:uppercase"><?php echo esc_html_x( 'Most popular', 'featured label', 'voyager-demo' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600","lineHeight":"1.2"},"spacing":{"margin":{"bottom":"var:preset|spacing|3"}}},"fontSize":"lg"} -->
				<h3 class="wp-block-heading has-lg-font-size" style="margin-bottom:var(--wp--preset--spacing--3);font-weight:600;line-height:1.2"><?php echo esc_html_x( 'Web Design & Development', 'service 1', 'voyager-demo' ); ?></h3>
				<!-- /wp:heading -->
				<!-- wp:paragraph {"style":{"color":{"text":"#ffffffcc"},"typography":{"lineHeight":"1.7"}},"fontSize":"sm"} -->
				<p class="has-text-color has-sm-font-size" style="color:#ffffffcc;line-height:1.7"><?php echo esc_html_x( 'Custom WordPress block themes with our premium design system. Fast, accessible, and built to convert visitors into customers.', 'service 1 desc', 'voyager-demo' ); ?></p>
				<!-- /wp:paragraph -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"55%"} -->
		<div class="wp-block-column" style="flex-basis:55%">
			<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|5"}}} -->
			<div class="wp-block-group">

				<!-- wp:group {"className":"is-style-card-lift","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"16px","color":"#e5e5e540","width":"1px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"},"shadow":"layered"} -->
				<div class="wp-block-group is-style-card-lift has-border-color has-bg-raised-background-color has-background" style="border-color:#e5e5e540;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);box-shadow:var(--wp--preset--shadow--layered)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}},"fontSize":"md"} -->
					<h3 class="wp-block-heading has-md-font-size" style="margin-bottom:4px;font-weight:600"><?php echo esc_html_x( 'SEO & Content Strategy', 'service 2', 'voyager-demo' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#636381"},"typography":{"lineHeight":"1.7"}},"fontSize":"sm"} -->
					<p class="has-text-color has-sm-font-size" style="color:#636381;line-height:1.7"><?php echo esc_html_x( 'Data-driven SEO with programmatic pages, content clusters, and schema markup that search engines love.', 'service 2 desc', 'voyager-demo' ); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"className":"is-style-card-lift","style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"16px","color":"#e5e5e540","width":"1px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"},"shadow":"layered"} -->
				<div class="wp-block-group is-style-card-lift has-border-color has-bg-raised-background-color has-background" style="border-color:#e5e5e540;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);box-shadow:var(--wp--preset--shadow--layered)">
					<!-- wp:heading {"level":3,"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"4px"}}},"fontSize":"md"} -->
					<h3 class="wp-block-heading has-md-font-size" style="margin-bottom:4px;font-weight:600"><?php echo esc_html_x( 'AI-Powered Marketing', 'service 3', 'voyager-demo' ); ?></h3>
					<!-- /wp:heading -->
					<!-- wp:paragraph {"style":{"color":{"text":"#636381"},"typography":{"lineHeight":"1.7"}},"fontSize":"sm"} -->
					<p class="has-text-color has-sm-font-size" style="color:#636381;line-height:1.7"><?php echo esc_html_x( 'Smart automation, content generation, and lead intelligence. AI that works while you sleep.', 'service 3 desc', 'voyager-demo' ); ?></p>
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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|9","bottom":"var:preset|spacing|9","left":"var:preset|spacing|7","right":"var:preset|spacing|7"}}},"backgroundColor":"bg-panel","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-bg-panel-background-color has-background" style="padding-top:var(--wp--preset--spacing--9);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--9);padding-left:var(--wp--preset--spacing--7)">

	<!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"-0.03em","fontWeight":"600"},"spacing":{"margin":{"bottom":"var:preset|spacing|7"}}},"fontSize":"xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--7);font-weight:600;letter-spacing:-0.03em"><?php echo esc_html_x( 'What our clients say', 'testimonials heading', 'voyager-demo' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|5"}}}} -->
	<div class="wp-block-columns alignwide">

		<!-- wp:column -->
		<div class="wp-block-column">
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"16px","color":"#e5e5e540","width":"1px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"},"shadow":"layered"} -->
			<div class="wp-block-group has-border-color has-bg-raised-background-color has-background" style="border-color:#e5e5e540;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);box-shadow:var(--wp--preset--shadow--layered)">
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"sm"} -->
				<p class="has-sm-font-size" style="line-height:1.75"><?php echo esc_html_x( '"Voyager transformed our online presence. The site loads fast, looks incredible, and our organic traffic has tripled."', 'testimonial 1', 'voyager-demo' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--5)">
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"0"}}},"fontSize":"sm"} -->
						<p class="has-sm-font-size" style="margin-bottom:0;font-weight:600"><?php echo esc_html_x( 'Sarah Chen', 'name 1', 'voyager-demo' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"fg-4","fontSize":"label"} -->
						<p class="has-fg-4-color has-text-color has-label-font-size" style="margin-top:0"><?php echo esc_html_x( 'CEO, Pinnacle Solutions', 'role 1', 'voyager-demo' ); ?></p>
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
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|7","bottom":"var:preset|spacing|7","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"16px","color":"var:preset|color|accent-purple","width":"1px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"},"shadow":"layered-elevated"} -->
			<div class="wp-block-group has-border-color has-bg-raised-background-color has-background" style="border-color:var(--wp--preset--color--accent-2);border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--7);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--7);padding-left:var(--wp--preset--spacing--6);box-shadow:var(--wp--preset--shadow--layered-elevated)">
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"base"} -->
				<p class="has-base-font-size" style="line-height:1.75"><?php echo esc_html_x( '"The AI tools they built into our site are a game changer. Lead scoring, content generation, automated reporting — best investment we made this year."', 'testimonial 2', 'voyager-demo' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--5)">
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"0"}}},"fontSize":"sm"} -->
						<p class="has-sm-font-size" style="margin-bottom:0;font-weight:600"><?php echo esc_html_x( 'Marcus Rivera', 'name 2', 'voyager-demo' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"fg-4","fontSize":"label"} -->
						<p class="has-fg-4-color has-text-color has-label-font-size" style="margin-top:0"><?php echo esc_html_x( 'VP Marketing, Vertex Digital', 'role 2', 'voyager-demo' ); ?></p>
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
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|6","bottom":"var:preset|spacing|6","left":"var:preset|spacing|6","right":"var:preset|spacing|6"}},"border":{"radius":"16px","color":"#e5e5e540","width":"1px"}},"backgroundColor":"bg-raised","layout":{"type":"constrained"},"shadow":"layered"} -->
			<div class="wp-block-group has-border-color has-bg-raised-background-color has-background" style="border-color:#e5e5e540;border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--6);padding-right:var(--wp--preset--spacing--6);padding-bottom:var(--wp--preset--spacing--6);padding-left:var(--wp--preset--spacing--6);box-shadow:var(--wp--preset--shadow--layered)">
				<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.75"}},"fontSize":"sm"} -->
				<p class="has-sm-font-size" style="line-height:1.75"><?php echo esc_html_x( '"Finally, a dev team that understands both design and performance. Our PageSpeed scores went from 40s to consistent 90s."', 'testimonial 3', 'voyager-demo' ); ?></p>
				<!-- /wp:paragraph -->
				<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--5)">
					<!-- wp:group -->
					<div class="wp-block-group">
						<!-- wp:paragraph {"style":{"typography":{"fontWeight":"600"},"spacing":{"margin":{"bottom":"0"}}},"fontSize":"sm"} -->
						<p class="has-sm-font-size" style="margin-bottom:0;font-weight:600"><?php echo esc_html_x( 'Elena Park', 'name 3', 'voyager-demo' ); ?></p>
						<!-- /wp:paragraph -->
						<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"0"}}},"textColor":"fg-4","fontSize":"label"} -->
						<p class="has-fg-4-color has-text-color has-label-font-size" style="margin-top:0"><?php echo esc_html_x( 'Founder, Meridian Health', 'role 3', 'voyager-demo' ); ?></p>
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

<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|7","right":"var:preset|spacing|7"}},"color":{"background":"linear-gradient(180deg, #1B1F3B 0%, #0f1129 100%)"}},"textColor":"fg-1","layout":{"type":"constrained","contentSize":"600px"}} -->
<div class="wp-block-group alignfull has-fg-1-color has-text-color has-background" style="background:linear-gradient(180deg, #1B1F3B 0%, #0f1129 100%);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--7);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--7)">

	<!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"-0.03em","fontWeight":"600","lineHeight":"1.1"},"spacing":{"margin":{"bottom":"var:preset|spacing|5"}}},"fontSize":"xl"} -->
	<h2 class="wp-block-heading has-text-align-center has-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--5);font-weight:600;letter-spacing:-0.03em;line-height:1.1"><?php echo esc_html_x( 'Ready to build something remarkable?', 'cta heading', 'voyager-demo' ); ?></h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"1.75"},"spacing":{"margin":{"bottom":"var:preset|spacing|7"}},"color":{"text":"#9ca3af"}},"fontSize":"base"} -->
	<p class="has-text-align-center has-text-color has-base-font-size" style="color:#9ca3af;margin-bottom:var(--wp--preset--spacing--7);line-height:1.75"><?php echo esc_html_x( 'Get a free audit of your current site. We will show you exactly where the opportunities are — no strings attached.', 'cta desc', 'voyager-demo' ); ?></p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
	<div class="wp-block-buttons">
		<!-- wp:button {"backgroundColor":"accent","textColor":"fg-1","style":{"spacing":{"padding":{"top":"1.125rem","bottom":"1.125rem","left":"3rem","right":"3rem"}},"typography":{"fontWeight":"600"},"border":{"radius":"8px"}},"fontSize":"sm"} -->
		<div class="wp-block-button has-custom-font-size has-sm-font-size"><a class="wp-block-button__link has-fg-1-color has-accent-background-color has-text-color has-background wp-element-button" style="border-radius:8px;padding-top:1.125rem;padding-right:3rem;padding-bottom:1.125rem;padding-left:3rem;font-weight:600"><?php echo esc_html_x( 'Get your free site audit →', 'cta button', 'voyager-demo' ); ?></a></div>
		<!-- /wp:button -->
	</div>
	<!-- /wp:buttons -->

	<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"var:preset|spacing|5"}},"color":{"text":"#636381"}},"fontSize":"label"} -->
	<p class="has-text-align-center has-text-color has-label-font-size" style="color:#636381;margin-top:var(--wp--preset--spacing--5)"><?php echo esc_html_x( '30-minute call · No commitment · Actionable takeaways', 'cta subtext', 'voyager-demo' ); ?></p>
	<!-- /wp:paragraph -->

</div>
<!-- /wp:group -->
