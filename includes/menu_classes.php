<?php

	/**
	 *	Add link name to css class of menu items
	 *
 	 * @package d7
	 * @subpackage boilerplate-theme_filters+hooks
	 *
	 * @internal called by `nav_menu_css_class` filter
	 *
	 */
	function d7_nav_class( $classes, $item, $args ) {

		// Menu item name
		$name = strtolower(str_replace("--", "", preg_replace("([^a-zA-Z])", "-", $item->title)));
		$classes[] = $name;

		// Add BEM classes
		$classes[] = $args->container_class . '__item';
		$classes[] = $args->container_class . '__item--' . $name;

	    return $classes;

	}

	add_filter('nav_menu_css_class', 'd7_nav_class', 10, 3);
