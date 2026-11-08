/**
 * /open-blocks/ copy buttons.
 *
 * Each gallery card's copy group (.vd-ob-copy) arrives hidden, carrying
 * data-vd-ob-copy-item, and each of its buttons carries data-vd-ob-copy:
 * "markup" or "prompt". functions.php sets both at render time and prints
 * window.voyagerDemoObCopy before this script, with each pattern's markup read
 * from the pattern registry. This file wires the buttons, then reveals them,
 * so a visitor without JavaScript never sees a button that does nothing.
 *
 * A classic deferred script rather than a module like the stage's: it needs
 * no store and no import map.
 */
( function () {
	'use strict';

	var data = window.voyagerDemoObCopy;
	var timers = new WeakMap();
	var live = null;

	/**
	 * Say something through the shared status region. It is emptied first so
	 * that the same message, copied twice, is announced twice.
	 *
	 * @param {string} message
	 */
	function announce( message ) {
		if ( ! live ) {
			return;
		}
		live.textContent = '';
		window.setTimeout( function () {
			live.textContent = message;
		}, 100 );
	}

	/**
	 * The older copy path, for a browser without the async clipboard API or
	 * one that refuses it. Focus goes back to the button afterwards, so a
	 * keyboard user stays where they were.
	 *
	 * @param {string} text
	 * @return {boolean} Whether the browser reported a copy.
	 */
	function copyWithTextarea( text ) {
		var area = document.createElement( 'textarea' );
		var active = document.activeElement;
		var copied = false;

		area.value = text;
		area.setAttribute( 'readonly', '' );
		area.setAttribute( 'aria-hidden', 'true' );
		area.style.position = 'fixed';
		area.style.top = '0';
		area.style.left = '0';
		area.style.opacity = '0';
		document.body.appendChild( area );
		area.focus( { preventScroll: true } );
		area.select();
		area.setSelectionRange( 0, text.length );

		try {
			copied = document.execCommand( 'copy' );
		} catch ( error ) {
			copied = false;
		}

		document.body.removeChild( area );
		if ( active && 'function' === typeof active.focus ) {
			active.focus( { preventScroll: true } );
		}

		return copied;
	}

	/**
	 * @param {string} text
	 * @return {Promise<void>} Settles once the text is on the clipboard, or not.
	 */
	function copy( text ) {
		if ( navigator.clipboard && window.isSecureContext ) {
			return navigator.clipboard.writeText( text ).catch( function () {
				if ( ! copyWithTextarea( text ) ) {
					throw new Error( 'copy refused' );
				}
			} );
		}

		return copyWithTextarea( text )
			? Promise.resolve()
			: Promise.reject( new Error( 'copy refused' ) );
	}

	/**
	 * Show a short state on the button for two seconds, then put its label
	 * back. The width is held so the row does not jump. The accessible name is
	 * left alone: the status region carries the news.
	 *
	 * @param {HTMLButtonElement} button
	 * @param {string}            label
	 */
	function flash( button, label ) {
		window.clearTimeout( timers.get( button ) );

		if ( ! button.classList.contains( 'is-flashing' ) ) {
			button.style.minWidth = button.getBoundingClientRect().width + 'px';
			button.classList.add( 'is-flashing' );
		}
		button.textContent = label;

		timers.set(
			button,
			window.setTimeout( function () {
				button.textContent = button.getAttribute( 'data-vd-ob-label' );
				button.style.minWidth = '';
				button.classList.remove( 'is-flashing' );
			}, 2000 )
		);
	}

	/**
	 * Wire one button to the text it copies.
	 *
	 * @param {HTMLButtonElement} button
	 * @param {string}            kind  "markup" or "prompt".
	 * @param {string}            text
	 * @param {string}            title The item's name, for the accessible name.
	 */
	function wire( button, kind, text, title ) {
		var label = button.textContent.trim();

		// Six cards repeat the same two labels, so the accessible name says
		// which card. It starts with the visible label, for voice control.
		button.setAttribute( 'data-vd-ob-label', label );
		if ( title ) {
			button.setAttribute( 'aria-label', label + ': ' + title );
		}

		button.addEventListener( 'click', function () {
			copy( text ).then(
				function () {
					flash( button, data.copied );
					announce(
						'markup' === kind ? data.markupCopied : data.promptCopied
					);
				},
				function () {
					flash( button, data.failed );
					announce( data.copyFailed );
				}
			);
		} );
	}

	function init() {
		var groups = document.querySelectorAll( '.vd-ob-copy[data-vd-ob-copy-item]' );
		var revealed = 0;

		if ( ! data || ! data.items || ! groups.length ) {
			return;
		}

		live = document.createElement( 'p' );
		live.className = 'vd-ob-copy__live';
		live.setAttribute( 'role', 'status' );
		document.body.appendChild( live );

		Array.prototype.forEach.call( groups, function ( group ) {
			var item = data.items[ group.getAttribute( 'data-vd-ob-copy-item' ) ];
			var ready = 0;

			if ( ! item ) {
				return;
			}

			Array.prototype.forEach.call(
				group.querySelectorAll( 'button[data-vd-ob-copy]' ),
				function ( button ) {
					var kind = button.getAttribute( 'data-vd-ob-copy' );
					var text = 'markup' === kind ? item.markup : item.prompt;

					if ( ! text ) {
						( button.closest( '.wp-block-button' ) || button ).remove();
						return;
					}

					wire( button, kind, text, item.title );
					ready++;
				}
			);

			if ( ready ) {
				group.hidden = false;
				revealed++;
			}
		} );

		if ( revealed ) {
			Array.prototype.forEach.call(
				document.querySelectorAll( '.vd-ob-copy-hint[hidden]' ),
				function ( hint ) {
					hint.hidden = false;
				}
			);
		}
	}

	if ( 'loading' === document.readyState ) {
		document.addEventListener( 'DOMContentLoaded', init );
	} else {
		init();
	}
}() );
