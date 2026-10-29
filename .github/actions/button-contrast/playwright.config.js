/**
 * Playwright configuration for the button contrast gate — VOY-1874.
 *
 * Run it through run.mjs (the button-contrast action's body), which boots the
 * site this measures.
 * One viewport: contrast is a property of computed colours, not of pixels.
 */

const { defineConfig, devices } = require( '@playwright/test' );

module.exports = defineConfig( {
	testDir: __dirname,
	testMatch: 'button-contrast.spec.js',
	outputDir: './.results',

	fullyParallel: false,
	forbidOnly: !! process.env.CI,
	retries: 0,
	workers: 1,
	timeout: 5 * 60 * 1000,
	reporter: process.env.CI ? [ [ 'github' ], [ 'list' ] ] : [ [ 'list' ] ],

	use: {
		baseURL: process.env.BUTTON_CONTRAST_BASE_URL || 'http://127.0.0.1:9400',
		trace: 'retain-on-failure',
		colorScheme: 'light',
		timezoneId: 'UTC',
		locale: 'en-US',
		reducedMotion: 'reduce',
	},

	projects: [
		{
			name: 'desktop-1440',
			use: { ...devices[ 'Desktop Chrome' ], viewport: { width: 1440, height: 900 } },
		},
	],
} );
