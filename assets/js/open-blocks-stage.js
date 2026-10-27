/**
 * /open-blocks/ pattern stage switch — Interactivity API view module (VOY-1851).
 *
 * Plain ESM through WordPress's import map, like mcp-playground.js. The
 * directives are added server-side in functions.php
 * (voyager_demo_stage_group_directives and voyager_demo_stage_button_directives),
 * and the opening state comes from wp_interactivity_state() there.
 *
 * isLight and isDark are both plain state values rather than one value and a
 * getter. The first paint is written in PHP, and a getter is the kind of value
 * server-side directive processing cannot evaluate (see mcp-playground.js).
 */

import { store } from '@wordpress/interactivity';

const { state } = store( 'voyager-demo/open-blocks-stage', {
	actions: {
		showLight() {
			state.isLight = true;
			state.isDark = false;
		},
		showDark() {
			state.isLight = false;
			state.isDark = true;
		},
	},
} );
