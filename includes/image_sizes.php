<?php

	/**
	 * Image sizes
	 *
	 * @link https://codex.wordpress.org/Function_Reference/add_image_size
	 *
	 */

	// Add post thumbnail theme support
    add_theme_support( 'post-thumbnails' );

	// Add Image Sizes
	add_image_size('listing', 930, 489, true);
	add_image_size('post-full', 1200, 600, true);
	add_image_size('medium-square', 330, 330, true);
	add_image_size('small-square', 210, 210, true);
	add_image_size('portfolio-full', 1052);
