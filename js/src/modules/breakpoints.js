/*
 * This module defines breakpoints for responsive js
 */
; nsh.breakpoints = (function($){
	'use strict';

	var breakpoints = {
		full: 1400,
		large: 1200,
		mid: 820,
		small: 600,
		smaller: 420,
		noMediaqueries: 1020,
		mobileNav: 805
	};

	return breakpoints;

})(jQuery);
