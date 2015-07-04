<?php

/**
 * Returns a subtitle for a post.
 *
 * @package nsh
 *
 * @param string $prefix String to be printed before subtitle
 * @param string $suffix String to be printed after subtitle
 * @return false|string False, or the subtitle
 *
 */
 function nsh_get_subtitle($prefix = '', $suffix = '') {

 	$output = false;

 	// Get the title
 	$subtitle = get_field('sub-title');

 	// Bail if there's no subtitle
 	if ( !$subtitle ) {
 		return false;
 	} else {
 		$output = '';
 	}

 	// Prefix
 	if ( strlen($prefix) ) {
 		$output .= $prefix;
 	}

 	// Subtitle
 	$output .= $subtitle;

 	// Suffix
 	if ( strlen($suffix) ) {
 		$output .= $suffix;
 	}


 	return $output;

 }


/**
 * Prints a subtitle for a post.
 *
 * @package nsh
 *
 * @param string $tag The tag to wrap the subtitle in
 * @param string $class The class to apply
 * @param string $prefix String to be printed before subtitle
 * @param string $suffix String to be printed after subtitle
 *
 */
 function nsh_subtitle($tag = 'h3', $class = 'post__subtitle', $prefix = '', $suffix = '') {

 	$subtitle = nsh_get_subtitle($prefix, $suffix);

 	if ( $subtitle )  {

	 	echo '<' . $tag . ' class="' . $class . '">';
	 		echo $subtitle;
	 	echo '</' . $tag . '>';

 	}

 }
