/*
* This module fades out UI elements when the user enters the content area
*/
nsh.focusMode = (function($, breakpoints){
	'use strict';

	var focusMode = {

		focusing: false,

		els: {
			content: '.js-focus-content',
			ui: '.js-focus-ui'
		},

		init: function() {

			// Cache elements
			focusMode.els.content = $(focusMode.els.content);
			focusMode.els.ui = $(focusMode.els.ui);

			// Init only for non-media queries because we'll proceed basing it on media queries
			if ( !Modernizr.mq('only all') ) {
				focusMode.initFocus();
			}

		},

		initFocus: function() {

			// Enable focus by hovering over the content
			focusMode.els.content.on('mouseenter.nsh.focusmode', function() {

				setTimeout(function(){
					$('body').addClass('focus-mode');
					focusMode.focusing = true;
				}, 150);

			});

			// Exit focus mode if we hover over the UI
			focusMode.els.ui.on('mouseenter.nsh.focusmode', function() {
				$('body').removeClass('focus-mode');
				focusMode.focusing = false;
			});

		},

		killFocus: function() {

			focusMode.els.content.off('mouseenter.nsh.focusmode');
			$('body').removeClass('focus-mode');
			focusMode.focusing = false;

		}

	};


	$(document).on('ready', focusMode.init());

	Harvey.attach('screen and (min-width: ' + (breakpoints.mobileNav + 1) + 'px)', {
		on: focusMode.initFocus,
		off: focusMode.killFocus
	});

	return focusMode;

})(jQuery, nsh.breakpoints);
