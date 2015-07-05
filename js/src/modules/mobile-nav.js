/*
* This module fades out UI elements when the user enters the content area
*/
nsh.mobileNav = (function($, breakpoints){
	'use strict';

	var mobileNav = {

		active: false,

		els: {
			body: 'body',
			masthead: '.masthead',
			toggler: false
		},

		setup: function() {

			// Create toggler
			mobileNav.els.toggler = $('<a href="#" class="primary-nav__toggler">Menu</a>');

			// Append it
			mobileNav.els.masthead.find('.l-container').append(mobileNav.els.toggler);

		},

		enable: function() {

			// Add can class
			mobileNav.els.body.addClass('can-animate-nav');

			// Click handler
			mobileNav.els.toggler.on('click.nsh.mobileNav', function(event) {

				if ( mobileNav.active ) {
					mobileNav.els.body.removeClass('has-nav');
					mobileNav.active = false;
				} else {
					mobileNav.els.body.addClass('has-nav');
					mobileNav.active = true;
				}

				event.preventDefault();

			});

		},

		disable: function() {

			// Remove can class
			mobileNav.els.body.removeClass('can-animate-nav').removeClass('has-nav');

			// Unbind click
			mobileNav.els.toggler.off('click.nsh.mobileNav');


		},

		init: function() {

			// Cache elements
			mobileNav.els.body = $(mobileNav.els.body);
			mobileNav.els.masthead = $(mobileNav.els.masthead);

			Harvey.attach('screen and (max-width: ' + breakpoints.mobileNav + 'px)', {
				setup: mobileNav.setup,
				on: mobileNav.enable,
				off: mobileNav.disable
			});

		}

	};


	$(document).on('ready', mobileNav.init);


	return mobileNav;

})(jQuery, nsh.breakpoints);
