/**
 * /open-blocks/sections/ style switch — Interactivity API view module.
 *
 * Plain ESM through WordPress's import map, like open-blocks-stage.js. The
 * directives are added server-side in functions.php
 * (voyager_demo_obs_group_directives and voyager_demo_obs_button_directives),
 * and the opening state comes from wp_interactivity_state() there:
 * state.on holds one boolean per style, plain included, with plain on.
 *
 * Each button carries its style in its context. Selecting one turns its
 * boolean on and every other off, which puts that style's classes on every
 * section's outer group and presses that button. Plain values rather than a
 * getter, for the reason open-blocks-stage.js gives.
 */

import { store, getContext } from '@wordpress/interactivity';

const { state } = store( 'voyager-demo/open-blocks-sections', {
	actions: {
		select() {
			const { style } = getContext();

			Object.keys( state.on ).forEach( ( key ) => {
				state.on[ key ] = key === style;
			} );
		},
	},
} );
