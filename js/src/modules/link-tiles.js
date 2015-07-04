/*
 * This module sets tweaks the link tiles to perfection
 */
;(function($, breakpoints, Modernizr){
	'use strict';

	// equal height columns
	var tiles = $('.js-link-tiles');

	function initLinkTiles() {

		sizeTiles();

		Harvey.attach('screen and (min-width: ' + (breakpoints.small + 1) + 'px)', {
			on: sizeTiles,
			off: clearTileSizes
		});

	}

	function sizeTiles() {

		tiles.equalHeightColumns({
			selector: '.link-tile',
			outerHeight: true
		});

	}

	function clearTileSizes() {

		tiles.equalHeightColumns('kill');

	}

	$(window).on('load', initLinkTiles);


	return {};

})(jQuery, nsh.breakpoints, Modernizr);
