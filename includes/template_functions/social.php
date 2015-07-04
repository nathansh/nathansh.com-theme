<?php

/**
 * Return markup for social contact links
 *
 * @package nsh
 *
 * @return string|false Output html string, or false
 *
 */
function nsh_get_social() {

	$output = false;

		// Possible contact methods
		$methods = array(

			'twitter' => array(
				'field' => 'twitter',
				'name' => 'Twitter',
				'url_base' => 'https://www.twitter.com/'
			),

			'github' => array(
				'field' => 'github',
				'name' => 'GitHub'
			),

			'dribbble' => array(
				'field' => 'dribbble',
				'name' => 'Dribbble'
			),

			'soundcloud' => array(
				'field' => 'soundcloud',
				'name' => 'SoundCloud'
			),

			'email' => array(
				'field' => 'email',
				'name' => 'Email',
				'url_base' => 'mailto:'
			)

		);

		// Loop through 'em!
		// Track items so we only open a <ul> when we have field values
		$items = 0;

		foreach ( $methods as $method => $details ) {

			$value = get_field($details['field'], 'option');

			if ( $value ) {

				// If it's the first match, open a <ul>
				if ( $items === 0 ) {
					$output .= '<ul class="social">';
				}

				// Set url from field, with base if it's set
				$url = isset($details['url_base']) ? $details['url_base'] . $value : $value;

				// Markup!
				$output .= '<li><a href="' . $url . '" class="social__item social__item--' . $method . '">' . $details['name'] . '</a></li>';

				$items++;

			} // if $value

		} // foreach

		// Close the <ul> if htere are items
		if ( $items ) {
			$output .= '</ul>';
		}

	return $output;

}


/**
 * Prints markup for social contact links
 *
 * @package nsh
 *
 * @uses nsh_get_social
 *
 */
function nsh_social() {

	$social = nsh_get_social();

	if ( $social ) {
		echo $social;
	}

}
