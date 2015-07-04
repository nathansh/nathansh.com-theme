<?php

/**
 * Return the name of a dev project's category. Uses the first one.
 *
 * @package nsh
 * @return string
 *
 */
function nsh_get_dev_project_category() {

	$output = false;
	$terms = get_the_terms(get_the_ID(), 'dev-category');

	if ( $terms ) {
		return $terms[0]->name;
	}


	return $output;

}


/**
 * Prints the name of a dev project's category. Uses the first one.
 *
 * @package nsh
 * @uses nsh_get_dev_project_category
 *
 */
function nsh_dev_project_category() {

	$category = nsh_get_dev_project_category();

	if ( $category ) {
		echo $category;
	}

}
