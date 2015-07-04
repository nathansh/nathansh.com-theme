<?php

/**
 * Return the post title, or a linked title to an external link for link posts
 *
 * @package nsh
 *
 * @return string Title or linked title to link
 *
 */
function nsh_get_post_title() {

	$link = get_field('post_link');

	if ( $link ) {
		return '<a href="' . $link . '" rel="nofollow" class="external-link">' . get_the_title() . '</a>';
	} else {
		return get_the_title();
	}

}


/**
 * Print the post title, or a linked title to an external link for link posts
 *
 * @package nsh
 *
 * @uses nsh_get_post_title
 *
 * @return string Title or linked title to link
 *
 */
function nsh_post_title() {

	$link = nsh_get_post_title();

	if ( $link ) {
		echo $link;
	}
}
