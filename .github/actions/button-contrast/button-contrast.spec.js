/**
 * Button contrast gate for the child theme — VOY-1874.
 *
 * Hovers, focuses and disables every button style this site offers, on every
 * surface the child paints, and fails when the computed text colour measures
 * under 4.5:1 against the computed background.
 *
 * Ported from voyager-block-theme's tests/contrast/button-contrast.spec.js
 * (VOY-1854). That gate sees only the parent, painted with the design system's
 * palette. A child that overrides a button colour in its own theme.json or CSS
 * can still drift: demo's filled hover measured 4.13:1 (VOY-1870) with the
 * parent's gate green. Here the paint is this child's.
 *
 * The fixture is mu-plugins/button-contrast-fixture.php, booted by run.mjs,
 * the button-contrast action's body. The second test loads the same page with a
 * known-bad rule planted and requires the gate to fail it, so a run that
 * passes has also shown it can fail.
 */

const fs = require( 'node:fs' );
const { test, expect } = require( '@playwright/test' );

/** WCAG 2.1 SC 1.4.3, normal text. Buttons here are `sm` at 500, not large text. */
const FLOOR = 4.5;

/** States measured on a live link. */
const LINK_STATES = [ 'rest', 'hover', 'focus-visible' ];

/** States measured on a disabled button: at rest, and hovered to prove it does not react. */
const DISABLED_STATES = [ 'disabled', 'disabled:hover' ];

/**
 * BUTTON_CONTRAST_KNOWN_BAD=1 plants the control into the main test too, so
 * the whole job goes red. That is how to watch this gate fail on purpose.
 */
const PLANT_IN_MAIN = process.env.BUTTON_CONTRAST_KNOWN_BAD === '1';

/** @type {{page: number, home: string, stylesheet: string, template: string, buttons: {default: string, styles: string[]}, surfaces: string[], palette: Object<string, string>}} */
let fixtures;

test.beforeAll( async ( { request } ) => {
	const response = await request.get( '/?button_contrast=fixtures' );
	expect( response.ok(), 'the button contrast fixture mu-plugin must be active' ).toBeTruthy();
	fixtures = await response.json();
	expect( fixtures.page, 'fixture page was not seeded' ).toBeGreaterThan( 0 );
	expect( fixtures.template, 'the parent theme must be active under this child' ).toBe( 'voyager-block-theme' );
	expect( fixtures.stylesheet, 'this child must be the active theme' ).not.toBe( fixtures.template );
	for ( const surface of fixtures.surfaces ) {
		expect( fixtures.palette[ surface ], `theme.json must declare the ${ surface } surface` ).toBeTruthy();
	}
} );

/**
 * Positive controls: the stylesheets and the palette under test are applied.
 *
 * A gate that measures a page without the theme's CSS passes on core's styles
 * alone, and one that measures someone else's palette passes on theirs. So
 * before a single pair counts: the parent's main.css is parsed with rules in
 * it, every stylesheet the child enqueues answered, and every surface's
 * computed background is the colour this child's theme.json gives its slug.
 *
 * The child's sheets are checked by response, not by rule count: its
 * style.css is a header comment with no rules, so "parsed with rules" would
 * fail a correct page.
 *
 * @param {import('@playwright/test').Page}       page     Page.
 * @param {Array<{path: string, status: number}>} childCss The child's stylesheet responses.
 */
async function assertChildPaintApplied( page, childCss ) {
	const parentRules = await page.evaluate( () => {
		const sheet = [ ...document.styleSheets ].find(
			( s ) => s.href && s.href.includes( '/themes/voyager-block-theme/public/css/main.css' )
		);
		try {
			return sheet ? sheet.cssRules.length : 0;
		} catch {
			return 0;
		}
	} );
	expect( parentRules, "the parent's public/css/main.css must load and parse" ).toBeGreaterThan( 0 );
	expect( childCss.length, `the page must load a stylesheet from themes/${ fixtures.stylesheet }/` ).toBeGreaterThan( 0 );
	for ( const sheet of childCss ) {
		expect( sheet.status, `${ sheet.path } must load` ).toBeLessThan( 400 );
	}

	for ( const surface of fixtures.surfaces ) {
		const painted = await page
			.locator( `.button-contrast-surface--${ surface }` )
			.evaluate( ( el ) => {
				const m = getComputedStyle( el ).backgroundColor.match( /\d+/g ).map( Number );
				return '#' + m.slice( 0, 3 ).map( ( v ) => v.toString( 16 ).padStart( 2, '0' ) ).join( '' );
			} );
		expect( painted, `${ surface } surface must be painted from this child's theme.json` ).toBe(
			fixtures.palette[ surface ].toLowerCase()
		);
	}
}

/**
 * Computed text colour against the computed background, inside the page.
 *
 * The background is found by walking up through transparent ancestors and
 * compositing every translucent layer onto the first opaque one, which is what
 * the eye sees. A background image anywhere on that path makes the pair
 * unmeasurable, and that is reported as a failure rather than guessed.
 *
 * @param {Element} el The button.
 * @return {{text: string, background: string, ratio: number|null, note: string}} Measurement.
 */
function measureInPage( el ) {
	const parse = ( value ) => {
		const m = value.match( /^rgba?\(\s*([\d.]+)[\s,]+([\d.]+)[\s,]+([\d.]+)(?:\s*[,/]\s*([\d.]+%?))?\s*\)$/ );
		if ( ! m ) {
			return null;
		}
		let a = m[ 4 ] === undefined ? 1 : parseFloat( m[ 4 ] );
		if ( m[ 4 ] && m[ 4 ].endsWith( '%' ) ) {
			a /= 100;
		}
		return { r: +m[ 1 ], g: +m[ 2 ], b: +m[ 3 ], a };
	};
	const over = ( top, base ) => ( {
		r: top.r * top.a + base.r * ( 1 - top.a ),
		g: top.g * top.a + base.g * ( 1 - top.a ),
		b: top.b * top.a + base.b * ( 1 - top.a ),
		a: 1,
	} );
	const hex = ( c ) =>
		'#' + [ c.r, c.g, c.b ].map( ( v ) => Math.round( v ).toString( 16 ).padStart( 2, '0' ) ).join( '' );
	const luminance = ( c ) => {
		const ch = ( v ) => {
			const s = v / 255;
			return s <= 0.04045 ? s / 12.92 : ( ( s + 0.055 ) / 1.055 ) ** 2.4;
		};
		return 0.2126 * ch( c.r ) + 0.7152 * ch( c.g ) + 0.0722 * ch( c.b );
	};

	const layers = [];
	let node = el;
	let note = '';
	for ( ; node && node.nodeType === 1; node = node.parentElement ) {
		const style = getComputedStyle( node );
		if ( style.backgroundImage !== 'none' ) {
			note = `background-image on <${ node.tagName.toLowerCase() }> makes the pair unmeasurable`;
		}
		const bg = parse( style.backgroundColor );
		if ( ! bg ) {
			note = `unparsed background-color "${ style.backgroundColor }"`;
			break;
		}
		if ( bg.a > 0 ) {
			layers.push( bg );
		}
		if ( bg.a >= 1 ) {
			break;
		}
	}

	// Nothing opaque all the way up: the canvas is white.
	let background = { r: 255, g: 255, b: 255, a: 1 };
	for ( let i = layers.length - 1; i >= 0; i-- ) {
		background = layers[ i ].a >= 1 ? layers[ i ] : over( layers[ i ], background );
	}

	const rawText = getComputedStyle( el ).color;
	let text = parse( rawText );
	if ( ! text ) {
		return { text: rawText, background: hex( background ), ratio: null, note: `unparsed color "${ rawText }"` };
	}
	text = text.a < 1 ? over( text, background ) : text;

	const [ hi, lo ] = [ luminance( text ), luminance( background ) ].sort( ( a, b ) => b - a );
	const ratio = Math.round( ( ( hi + 0.05 ) / ( lo + 0.05 ) ) * 100 ) / 100;

	return { text: hex( text ), background: hex( background ), ratio: note ? null : ratio, note };
}

/**
 * Put one button into one state and measure it.
 *
 * Every state starts from neutral: pointer parked in the corner, nothing
 * focused, so no state leaks into the next.
 *
 * @param {import('@playwright/test').Page}    page    Page.
 * @param {import('@playwright/test').Locator} locator The button.
 * @param {string}                             state   State name.
 * @return {Promise<{text: string, background: string, ratio: number|null, note: string}>} Measurement.
 */
async function measure( page, locator, state ) {
	await page.mouse.move( 0, 0 );
	await page.evaluate( () => document.activeElement && document.activeElement.blur() );

	if ( state === 'hover' || state === 'disabled:hover' ) {
		await locator.hover( { force: state === 'disabled:hover' } );
	}

	if ( state === 'focus-visible' ) {
		// Arrive by keyboard. A programmatic focus() after pointer movement does
		// not match :focus-visible, and that is the state keyboard users get.
		await locator.focus();
		await page.keyboard.press( 'Shift+Tab' );
		await page.keyboard.press( 'Tab' );
		const visible = await locator.evaluate(
			( el ) => document.activeElement === el && el.matches( ':focus-visible' )
		);
		if ( ! visible ) {
			return { text: '?', background: '?', ratio: null, note: 'could not reach :focus-visible by keyboard' };
		}
	}

	if ( state === 'hover' ) {
		const hovered = await locator.evaluate( ( el ) => el.matches( ':hover' ) );
		if ( ! hovered ) {
			return { text: '?', background: '?', ratio: null, note: 'pointer did not produce :hover' };
		}
	}

	return locator.evaluate( measureInPage );
}

/**
 * Measure every style, state and surface on one fixture URL.
 *
 * @param {import('@playwright/test').Page} page     Page.
 * @param {boolean}                         knownBad Plant the known-bad control.
 * @return {Promise<Array<{surface: string, style: string, state: string, text: string, background: string, ratio: number|null, note: string}>>} Rows.
 */
async function measureAll( page, knownBad ) {
	const url = `/?page_id=${ fixtures.page }&button_contrast=1${ knownBad ? '&button_contrast_known_bad=1' : '' }`;
	const childCss = [];
	const onResponse = ( response ) => {
		const { pathname } = new URL( response.url() );
		if ( pathname.includes( `/themes/${ fixtures.stylesheet }/` ) && pathname.endsWith( '.css' ) ) {
			childCss.push( { path: pathname, status: response.status() } );
		}
	};
	page.on( 'response', onResponse );
	await page.goto( new URL( url, fixtures.home ).href, { waitUntil: 'load' } );
	page.off( 'response', onResponse );
	await page.evaluate( () => document.fonts.ready );
	await assertChildPaintApplied( page, childCss );

	const rows = [];
	for ( const surface of fixtures.surfaces ) {
		for ( const style of fixtures.buttons.styles ) {
			const scope = `[data-contrast-surface="${ surface }"][data-contrast-style="${ style }"]`;
			const link = page.locator( `a${ scope }` );
			const disabled = page.locator( `button${ scope }` );

			for ( const [ locator, states ] of [ [ link, LINK_STATES ], [ disabled, DISABLED_STATES ] ] ) {
				const count = await locator.count();
				for ( const state of states ) {
					const result =
						count === 1
							? await measure( page, locator, state )
							: { text: '?', background: '?', ratio: null, note: `expected 1 element, found ${ count }` };
					rows.push( { surface, style, state, ...result } );
				}
			}
		}
	}
	return rows;
}

/**
 * A row fails when it could not be measured or measures under the floor.
 *
 * @param {{ratio: number|null}} row Row.
 * @return {boolean} Whether it fails.
 */
const fails = ( row ) => row.ratio === null || row.ratio < FLOOR;

/**
 * One line per row, aligned, for the log and the failure message.
 *
 * @param {Array<object>} rows Rows.
 * @return {string} Table.
 */
function table( rows ) {
	return rows
		.map( ( r ) =>
			[
				fails( r ) ? 'FAIL' : 'ok  ',
				r.surface.padEnd( 9 ),
				r.style.padEnd( 16 ),
				r.state.padEnd( 14 ),
				`text ${ r.text }`,
				`on ${ r.background }`,
				r.ratio === null ? `- ${ r.note }` : `${ r.ratio.toFixed( 2 ) }:1`,
			].join( '  ' )
		)
		.join( '\n' );
}

/**
 * The same rows as a Markdown table on the job summary page, when there is one.
 *
 * @param {string}        title Heading.
 * @param {Array<object>} rows  Rows.
 */
function summarize( title, rows ) {
	if ( ! process.env.GITHUB_STEP_SUMMARY ) {
		return;
	}
	const lines = [
		`### ${ title }`,
		'',
		'| | Surface | Style | State | Text | Background | Ratio |',
		'|---|---|---|---|---|---|---|',
		...rows.map(
			( r ) =>
				`| ${ fails( r ) ? 'FAIL' : 'ok' } | ${ r.surface } | ${ r.style } | ${ r.state } | \`${ r.text }\` | \`${ r.background }\` | ${
					r.ratio === null ? r.note : `${ r.ratio.toFixed( 2 ) }:1`
				} |`
		),
		'',
	];
	fs.appendFileSync( process.env.GITHUB_STEP_SUMMARY, lines.join( '\n' ) + '\n' );
}

test( 'every button style clears 4.5:1 at rest, on hover, on focus and disabled', async ( { page } ) => {
	const rows = await measureAll( page, PLANT_IN_MAIN );

	const expected =
		fixtures.surfaces.length * fixtures.buttons.styles.length * ( LINK_STATES.length + DISABLED_STATES.length );
	const heading = `[button-contrast] ${ rows.length } pairs checked on ${ fixtures.stylesheet } over ${ fixtures.template }, floor ${ FLOOR }:1${
		PLANT_IN_MAIN ? ' (KNOWN-BAD CONTROL PLANTED)' : ''
	}`;
	console.log( `\n${ heading }\n${ table( rows ) }\n` );
	summarize( heading.replace( '[button-contrast] ', 'Button contrast: ' ), rows );

	// A gate that measured nothing passes. Pin the count to what the fixture
	// declares, and to the issue's floor of 12, so a style that stops rendering
	// or a selector that stops matching is red, not quietly smaller.
	expect( rows.length, 'pairs checked' ).toBe( expected );
	expect( rows.length, 'pairs checked' ).toBeGreaterThanOrEqual( 12 );

	const failures = rows.filter( fails );
	expect(
		failures,
		`${ failures.length } button state(s) under ${ FLOOR }:1:\n${ table( failures ) }`
	).toEqual( [] );
} );

test( 'the gate fails the known-bad control: accent text on the outline hover accent fill', async ( { page } ) => {
	const rows = await measureAll( page, true );
	const bad = rows.filter( ( r ) => r.style === 'outline' && r.state === 'hover' );

	console.log( `\n[button-contrast] known-bad control, outline hover:\n${ table( bad ) }\n` );
	summarize( 'Known-bad control (must fail): outline hover', bad );

	expect( bad, 'outline hover rows' ).toHaveLength( fixtures.surfaces.length );
	for ( const row of bad ) {
		expect( fails( row ), `known-bad outline hover on ${ row.surface } should fail` ).toBe( true );
		expect( row.text, 'the planted rule should paint the text the fill colour' ).toBe( row.background );
	}
} );
