<?php

/**
 * Returns the permalink or URL for a link post
 *
 * @package nsh
 *
 * @return string
 *
 */
function nsh_get_post_link() {

	// Get the link if it's a link post
	$link = get_field('post_link');

	// If so, use the link, otherwise permalink
	if ( $link )  {
		return $link;
	} else {
		return get_permalink();
	}

}


/**
 * Prints the permalink or URL for a link post
 *
 * @package nsh
 *
 * @uses nsh_get_post_link
 *
 * @return string
 *
 */
function nsh_post_link() {

	$link = nsh_get_post_link();

	if ( $link ) {
		echo $link;
	}

}


/**
 * Returns a link to a permalink for link post posts, or false
 *
 * @package nsh
 *
 * @return string|false
 *
 */
function nsh_get_post_link_permalink() {

	$output = false;

	if ( get_field('post_link') ) {

		$output = '<a href="' . get_permalink() . '" class="post__permalink">Permalink</a>';

	}

	return $output;

}


/**
 * Echos a link to a permalink for link post posts
 *
 * @package nsh
 *
 * @uses nsh_post_link_permalink()
 *
 * @return string|false
 *
 */
function nsh_post_link_permalink() {

	$permalink = nsh_get_post_link_permalink();

	if ( $permalink ) {
		echo $permalink;
	}

}


/**
 * Returns a class for a post link. Mainly used for added `external-link` classes.
 *
 * @package nsh
 *
 * @param string $classes class names to also use
 * @return string string of classes
 *
 */
function nsh_get_post_link_class($classes = '') {

	$output = false;
	$link = get_field('post_link'); // Check if it's a link post by checking the field

	// Check if we're going to make output 'true'
	if ( $link || strlen($classes) ) {
		$output = '';
	}

	// If classes were passed in, use them
	if ( strlen($classes) ) {
		$output .= $classes;
	}

	// External link class
	if ( $link ) {
		$output .= ' external-link';
	}

	// Special case for dev projects
	if ( get_post_type() == 'dev' ) {

		$dev_link = get_field('dev_url');
		$output .= ' external-link';

		// Test for github
		if ( strstr($dev_link, 'github') ) {
			$output .= ' external-link--github';
		}

	}

	$output = trim($output);

	return $output;

}


/**
 * Prints a class for a post link. Mainly used for added `external-link` classes.
 *
 * @package nsh
 * @uses nsh_get_post_link_class()
 * @param string $classes class names to also use
 *
 */
function nsh_post_link_class($classes = '') {

	$classes = nsh_get_post_link_class($classes);

	if ( $classes ) {
		echo 'class="' . $classes . '"';
	}

}
