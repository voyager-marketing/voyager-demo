#!/usr/bin/env node
/**
 * run.mjs — boot a child theme over voyager-block-theme in the Playground CLI
 * and run the button contrast gate against it (VOY-1874, VOY-1885).
 *
 * This is the body of the `button-contrast` composite action (action.yml, next
 * to this file). Any Voyager child theme runs it, from its own checkout or
 * from this repo pinned to a sha; the theme under test is an input, not this
 * file's location.
 *
 * Usage:
 *   node .github/actions/button-contrast/run.mjs [--theme-dir .] [--parent-tag v2.11.6]
 *                                                [--known-bad] [--port 9400] [--keep]
 *
 *   --theme-dir   the child theme to measure (default: the current directory)
 *   --parent-tag  the voyager-block-theme release to render it over
 *                 (default: the `parent-tag` default in action.yml)
 *   --known-bad   plant the control in the main test as well, so the run fails
 *   --keep        leave the server running after the tests, for a browser
 *
 * The action passes the same three as BUTTON_CONTRAST_THEME_DIR,
 * BUTTON_CONTRAST_PARENT_TAG and BUTTON_CONTRAST_KNOWN_BAD. A flag wins over
 * its variable.
 *
 * Needs `gh`, logged in or with GH_TOKEN set: the parent theme is a release
 * zip on a private repo. In CI that token is RELEASE_READ_TOKEN, the same one
 * the Playground preview already requires. Needs Node 20+; installs a pinned
 * @playwright/test into node_modules next to this file (gitignored), so no
 * caller needs a package.json.
 *
 * What runs: WordPress in WASM with SQLite, the theme directory mounted as the
 * active child, the parent installed from its release zip, and mu-plugins/
 * mounted as must-use plugins. Nothing is seeded into the theme. The parent
 * zip, the Blueprint and the Playwright traces stay next to this file, so the
 * theme directory gains nothing to ignore.
 *
 * Exit codes: Playwright's own (0 pass, 1 fail), or 2 for a staging or boot
 * failure.
 */

import { spawn, spawnSync } from 'node:child_process';
import fs from 'node:fs';
import net from 'node:net';
import path from 'node:path';
import { fileURLToPath } from 'node:url';

const HERE = path.dirname( fileURLToPath( import.meta.url ) );
const STAGE = path.join( HERE, '.stage' );

const CLI_VERSION = '3.1.13';
const PLAYWRIGHT_VERSION = '1.56.1';
const WP_VERSION = '6.9';
const PHP_VERSION = '8.1';
const BOOT_TIMEOUT_MS = Number( process.env.BUTTON_CONTRAST_BOOT_TIMEOUT_MS || 10 * 60 * 1000 );

const args = process.argv.slice( 2 );
const opt = ( name, fallback ) => {
	const i = args.indexOf( name );
	return i !== -1 && args[ i + 1 ] ? args[ i + 1 ] : fallback;
};
const PORT = Number( opt( '--port', '9400' ) );
const KEEP = args.includes( '--keep' );
const KNOWN_BAD =
	args.includes( '--known-bad' ) || [ '1', 'true' ].includes( ( process.env.BUTTON_CONTRAST_KNOWN_BAD || '' ).toLowerCase() );
const IS_WIN = process.platform === 'win32';

function log( message ) {
	console.log( `[button-contrast] ${ message }` );
}

function fail( message ) {
	console.error( `[button-contrast FAIL] ${ message }` );
	process.exit( 2 );
}

/**
 * The parent release the child is measured over. action.yml holds the pin, as
 * the `parent-tag` input's default, so a local run and a CI run cannot measure
 * different parents. v2.11.6 is the first with VOY-1854's single owner for
 * button colours; bump it with the parent.
 *
 * @return {string} Tag.
 */
function pinnedParentTag() {
	const actionYml = fs.readFileSync( path.join( HERE, 'action.yml' ), 'utf8' );
	const match = actionYml.match( /^ {2}parent-tag:\r?\n(?: {4}.*\r?\n)*? {4}default: '?([^'\s]+)'?\s*$/m );
	if ( ! match ) {
		fail( 'action.yml declares no default for the parent-tag input' );
	}
	return match[ 1 ];
}

const PARENT_TAG = opt( '--parent-tag', process.env.BUTTON_CONTRAST_PARENT_TAG || pinnedParentTag() );

const THEME_DIR = path.resolve( opt( '--theme-dir', process.env.BUTTON_CONTRAST_THEME_DIR || '.' ) );
const STYLE_CSS = path.join( THEME_DIR, 'style.css' );
if ( ! fs.existsSync( STYLE_CSS ) ) {
	fail( `${ THEME_DIR } has no style.css. Point --theme-dir (the action's theme-dir input) at the child theme.` );
}

/**
 * The slug the theme is mounted and activated under: its Text Domain, which a
 * fork renames along with everything else, else the directory name. A
 * worktree or a renamed clone is not named after the theme: from the worktree
 * this was written in, the directory alone measured this repo as `voy-1885`.
 */
const CHILD_SLUG = ( () => {
	const header = fs.readFileSync( STYLE_CSS, 'utf8' ).slice( 0, 8192 );
	const domain = ( header.match( /^[ \t/*#@]*Text Domain:(.*)$/im ) || [] )[ 1 ];
	const slug = ( domain || '' ).trim();
	return /^[a-z0-9_-]+$/.test( slug ) ? slug : path.basename( THEME_DIR );
} )();

function run( cmd, cmdArgs, options = {} ) {
	const result = spawnSync( cmd, cmdArgs, { stdio: 'inherit', shell: IS_WIN, ...options } );
	return result.status === null ? 1 : result.status;
}

// --- 1. Stage the parent release zip --------------------------------------------

fs.mkdirSync( STAGE, { recursive: true } );
const parentZip = `voyager-block-theme-${ PARENT_TAG }.zip`;
const parentZipPath = path.join( STAGE, parentZip );

if ( fs.existsSync( parentZipPath ) ) {
	log( `parent ${ PARENT_TAG }: reusing ${ parentZipPath }` );
} else {
	log( `parent ${ PARENT_TAG }: downloading the release zip` );
	const part = `${ parentZipPath }.part`;
	const status = run( 'gh', [
		'release',
		'download',
		PARENT_TAG,
		'--repo',
		'voyager-marketing/voyager-block-theme',
		'--pattern',
		'voyager-block-theme.zip',
		'--output',
		part,
		'--clobber',
	] );
	if ( status !== 0 || ! fs.existsSync( part ) ) {
		fail(
			`could not download voyager-block-theme ${ PARENT_TAG }. It is a private repo: log in with \`gh auth login\`, ` +
				'or in CI set the RELEASE_READ_TOKEN secret (the Playground preview needs it too).'
		);
	}
	fs.renameSync( part, parentZipPath );
}

// --- 2. Blueprint ---------------------------------------------------------------

const blueprintPath = path.join( STAGE, 'blueprint.json' );
fs.writeFileSync(
	blueprintPath,
	JSON.stringify(
		{
			$schema: 'https://playground.wordpress.net/blueprint-schema.json',
			steps: [
				{
					step: 'installTheme',
					themeData: { resource: 'bundled', path: parentZip },
					options: { activate: false, targetFolderName: 'voyager-block-theme' },
				},
				{ step: 'activateTheme', themeFolderName: CHILD_SLUG },
			],
		},
		null,
		'\t'
	) + '\n'
);

// --- 3. Playwright, pinned, outside any package.json ------------------------------

const pwPackage = path.join( HERE, 'node_modules', '@playwright', 'test', 'package.json' );
const installed = fs.existsSync( pwPackage ) ? JSON.parse( fs.readFileSync( pwPackage, 'utf8' ) ).version : '';
if ( installed !== PLAYWRIGHT_VERSION ) {
	log( `installing @playwright/test@${ PLAYWRIGHT_VERSION } into ${ path.join( HERE, 'node_modules' ) }` );
	const status = run( 'npm', [
		'install',
		'--prefix',
		HERE,
		'--no-save',
		'--no-package-lock',
		'--no-audit',
		'--no-fund',
		`@playwright/test@${ PLAYWRIGHT_VERSION }`,
	] );
	if ( status !== 0 ) {
		fail( `npm could not install @playwright/test@${ PLAYWRIGHT_VERSION }` );
	}
}
const pwCli = path.join( HERE, 'node_modules', '@playwright', 'test', 'cli.js' );
if ( run( process.execPath, [ pwCli, 'install', ...( process.env.CI ? [ '--with-deps' ] : [] ), 'chromium' ], { shell: false } ) !== 0 ) {
	fail( 'playwright could not install chromium' );
}

// --- 4. Boot ----------------------------------------------------------------------

// Something else on the port would answer the fixture request, or make the CLI
// exit with EADDRINUSE after a long download. Say so before either happens.
const portFree = await new Promise( ( resolve ) => {
	const probe = net.createServer();
	probe.once( 'error', () => resolve( false ) );
	probe.once( 'listening', () => probe.close( () => resolve( true ) ) );
	probe.listen( PORT );
} );
if ( ! portFree ) {
	fail( `port ${ PORT } is in use (another Playground or wp-env?). Pass --port <free port>.` );
}

const cliArgs = [
	'-y',
	`@wp-playground/cli@${ CLI_VERSION }`,
	'server',
	`--php=${ PHP_VERSION }`,
	`--wp=${ WP_VERSION }`,
	`--port=${ PORT }`,
	`--blueprint=${ blueprintPath }`,
	'--blueprint-may-read-adjacent-files',
	'--mount-dir',
	THEME_DIR,
	`/wordpress/wp-content/themes/${ CHILD_SLUG }`,
	'--mount-dir',
	path.join( HERE, 'mu-plugins' ),
	'/wordpress/wp-content/mu-plugins',
	'--verbosity=normal',
];
log( `booting ${ CHILD_SLUG } over voyager-block-theme ${ PARENT_TAG } (WordPress ${ WP_VERSION }, PHP ${ PHP_VERSION }) on :${ PORT }` );

// `detached` gives the CLI its own process group on Linux and macOS, so stop()
// kills the whole tree. Through npx the server is a grandchild, and SIGTERM to
// npx alone leaves it holding the job open (voyager-blocks PR #201).
const server = spawn( IS_WIN ? 'npx.cmd' : 'npx', cliArgs, {
	cwd: THEME_DIR,
	stdio: [ 'ignore', 'pipe', 'pipe' ],
	shell: IS_WIN,
	detached: ! IS_WIN,
} );
let bootLog = '';
let exited = null;
const capture = ( chunk ) => {
	const text = chunk.toString();
	bootLog = ( bootLog + text ).slice( -100000 );
	for ( const line of text.split( /\r?\n/ ) ) {
		if ( line.trim() && ! /\[WS Server\]/.test( line ) ) {
			console.log( `  [cli] ${ line }` );
		}
	}
};
server.stdout.on( 'data', capture );
server.stderr.on( 'data', capture );
server.on( 'exit', ( code ) => {
	exited = code;
} );

function stop() {
	if ( exited !== null ) {
		return;
	}
	try {
		if ( IS_WIN ) {
			spawnSync( 'taskkill', [ '/pid', String( server.pid ), '/T', '/F' ], { stdio: 'ignore' } );
		} else {
			process.kill( -server.pid, 'SIGTERM' );
		}
	} catch {
		// Already gone.
	}
}
process.on( 'SIGINT', () => {
	stop();
	process.exit( 130 );
} );

const BASE = `http://127.0.0.1:${ PORT }`;

/**
 * Up means the CLI printed "Ready!" (it answers HTTP while Blueprint steps are
 * still running) AND the fixture endpoint answers with JSON naming this child.
 */
async function waitForBoot() {
	const start = Date.now();
	let lastNote = 0;
	let lastError = 'no attempt yet';
	while ( Date.now() - start < BOOT_TIMEOUT_MS ) {
		if ( exited !== null ) {
			return false;
		}
		if ( /Ready! WordPress is running/.test( bootLog ) ) {
			try {
				const res = await fetch( `${ BASE }/?button_contrast=fixtures`, { signal: AbortSignal.timeout( 30000 ) } );
				const body = await res.text();
				if ( res.ok && body.includes( `"stylesheet":"${ CHILD_SLUG }"` ) ) {
					log( `up after ${ Math.round( ( Date.now() - start ) / 1000 ) }s` );
					return true;
				}
				lastError = `HTTP ${ res.status }: ${ body.slice( 0, 200 ) }`;
			} catch ( error ) {
				lastError = String( error && error.cause ? error.cause.code || error.cause.message : error.message );
			}
		}
		if ( Date.now() - lastNote > 60000 ) {
			lastNote = Date.now();
			log( `booting... ${ Math.round( ( Date.now() - start ) / 1000 ) }s (last: ${ lastError })` );
		}
		await new Promise( ( r ) => setTimeout( r, 2000 ) );
	}
	log( `last response: ${ lastError }` );
	return false;
}

if ( ! ( await waitForBoot() ) ) {
	stop();
	fail(
		exited !== null
			? `the Playground CLI exited with code ${ exited } before the site came up (its output is above)`
			: `the site did not come up within ${ BOOT_TIMEOUT_MS / 1000 }s`
	);
}

// --- 5. Measure -------------------------------------------------------------------

if ( KNOWN_BAD ) {
	log( 'KNOWN-BAD CONTROL PLANTED in the main test: this run must fail' );
}
const status = run( process.execPath, [ pwCli, 'test', '--config', path.join( HERE, 'playwright.config.js' ) ], {
	cwd: THEME_DIR,
	shell: false,
	env: {
		...process.env,
		BUTTON_CONTRAST_BASE_URL: BASE,
		BUTTON_CONTRAST_KNOWN_BAD: KNOWN_BAD ? '1' : '',
	},
} );

if ( KEEP ) {
	log( `--keep: the site stays up at ${ BASE }/?page_id=<fixture page>&button_contrast=1 (Ctrl+C to stop)` );
} else {
	stop();
	process.exit( status );
}
