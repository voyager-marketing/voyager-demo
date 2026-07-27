/**
 * MCP playground — Interactivity API view module (TK-2162).
 *
 * Plain ESM. `@wordpress/interactivity` resolves through the import map that
 * WordPress prints for script modules, so this file ships unbundled — this
 * theme has no npm pipeline and does not need one for this.
 *
 * Two deliberate choices worth knowing before editing:
 *
 * 1. Selection lives in global store state, not in element context. Writing
 *    to a context property from inside a nested context creates an own
 *    property on the *inner* context instead of updating the outer one, so a
 *    shared "which tool is selected" value in context would silently stop
 *    working the moment it was set from a tool button. Each button carries
 *    only its own `tool` in context and compares against `state.selected`.
 *
 * 2. The initial hidden/selected attributes are rendered by PHP, not derived
 *    here. Server-side directive processing cannot evaluate these getters
 *    (they are JS), so it would strip the attributes it could not resolve and
 *    every panel would flash open before hydration. The pattern emits the
 *    correct first-paint state and this module takes over from there.
 */

import { store, getContext } from '@wordpress/interactivity';

/**
 * Fill %1$s / %2$s placeholders in a translated string.
 *
 * The strings come from PHP translation functions, so they keep PHP's
 * positional syntax rather than being reworded for JS.
 *
 * @param {string} template Translated string with positional placeholders.
 * @param {...(string|number)} values Replacements, in order.
 * @return {string} The filled string.
 */
const format = ( template, ...values ) =>
	values.reduce(
		( out, value, index ) => out.replaceAll( `%${ index + 1 }$s`, String( value ) ),
		String( template )
	);

const { state } = store( 'voyager-demo/mcp-playground', {
	state: {
		/** Whether the element's own tool is the selected one. */
		get isSelected() {
			return getContext().tool === state.selected;
		},
		get isNotSelected() {
			return getContext().tool !== state.selected;
		},
		get isCalling() {
			return state.status === 'calling';
		},
		get hasNoResponse() {
			return state.status !== 'done';
		},
		get hasNoError() {
			return state.status !== 'error';
		},
		get hasNoLatency() {
			return state.latency === '';
		},
		/** Idle copy under the response panel stays up until a call lands. */
		get hasResponseOrError() {
			return state.status === 'done' || state.status === 'error';
		},
		get buttonLabel() {
			return state.status === 'calling' ? state.callingLabel : state.runLabel;
		},
	},

	actions: {
		/**
		 * Switch tools. Clears the previous response rather than leaving it
		 * under a different tool's request preview, which would read as
		 * though that tool had returned it.
		 */
		select() {
			const { tool } = getContext();

			if ( tool === state.selected || state.status === 'calling' ) {
				return;
			}

			state.selected = tool;
			state.status = 'idle';
			state.response = '';
			state.error = '';
			state.latency = '';
		},

		/**
		 * Fire the selected tool against this site's own REST route. The
		 * route decides recorded vs live; this action only reports what it
		 * was told, and never claims a latency it did not measure.
		 */
		*run() {
			if ( state.status === 'calling' ) {
				return;
			}

			state.status = 'calling';
			state.response = '';
			state.error = '';
			state.latency = '';

			const startedAt = performance.now();

			try {
				const response = yield fetch( state.endpoint, {
					method: 'POST',
					headers: { 'Content-Type': 'application/json' },
					body: JSON.stringify( { tool: state.selected } ),
				} );

				const payload = yield response.json();
				const roundTrip = Math.round( performance.now() - startedAt );

				if ( ! response.ok ) {
					throw new Error( payload?.message || `HTTP ${ response.status }` );
				}

				state.response = JSON.stringify( payload.result, null, 2 );
				state.latency =
					payload.mode === 'live'
						? format( state.liveLatency, payload.upstream_ms, roundTrip )
						: format( state.recordedLatency, roundTrip );
				state.status = 'done';
			} catch ( error ) {
				state.error = `${ state.failedLabel } ${ error.message }`;
				state.status = 'error';
			}
		},
	},
} );
