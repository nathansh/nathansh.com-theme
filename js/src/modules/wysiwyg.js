/*
 * This module does some tweaking of things from the wysiwyg
 */
;(function($){
	'use strict';

	var wysiwyg;

	function initWysiwyg() {

		// Cache the wysiwyg areas
		wysiwyg = $('.js-wysiwyg');

		// Initialize FitVids.js
		wysiwyg.fitVids();

	}

	$(document).on('ready', initWysiwyg);

	return {};

})(jQuery);
