<!doctype html>

<!--


             _   _                     _
            | | | |                   | |
 _ __   __ _| |_| |__   __ _ _ __  ___| |__    ___ ___  _ __ ___
| '_ \ / _` | __| '_ \ / _` | '_ \/ __| '_ \  / __/ _ \| '_ ` _ \
| | | | (_| | |_| | | | (_| | | | \__ \ | | || (_| (_) | | | | | |
|_| |_|\__,_|\__|_| |_|\__,_|_| |_|___/_| |_(_)___\___/|_| |_| |_|



-->

<!--[if IE 8 ]>    <html class="ie ie8 lt-ie6 lt-ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 lt-ie6 lt-ie7 lt-ie8 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="<?php bloginfo('language') ?>"><!--<![endif]-->
<head>

	<title><?php d7_document_title(); ?></title>

	<?php include "partials/share_meta.php"; ?>

	<meta name="description" content="<?php bloginfo('description') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<script src="https://use.typekit.net/cwh3exw.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>

    <?php include_once "partials/favicons.php"; ?>

    <!-- This bit of the uggliest code you've ever seen deals an icon font loading issue in IE8 -->
    <!--[if IE 8]>
        <style>html.ie-force-pseudo-refresh :before,html.ie-force-pseudo-refresh :after {content : none !important;}</style>
        <script>window.attachEvent&&!window.addEventListener&&window.attachEvent("onload",function(){var a=document.documentElement,b=a.className;a.className=b+" ie-force-pseudo-refresh",setTimeout(function(){a.className=b},10)});</script>
    <![endif]-->

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico?ver=2">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo get_bloginfo('rss2_url'); ?>" />

	<?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<div class="skip-links">
  <a href="#main-content" class="skip-links__link js-skip-link">Skip to main content</a>
</div>


	<header class="masthead l-flush js-focus-ui">
		<div class="l-container l-container--wide">
			<h1 class="site-name">
				<a href="<?php bloginfo('url'); ?>" class="site-name__link">
					<?php echo get_avatar(1, 150, '', 'Photo of Nathan Shubert-Harbison', array('class' => 'site-name__avatar')); ?>
					<?php bloginfo('name'); ?>
				</a>
			</h1>
			<?php

				/**
				 * @link https://codex.wordpress.org/Function_Reference/wp_nav_menu
				 */
				wp_nav_menu( array(
					'container' => 'nav',
					'container_class' => 'primary-nav',
					'theme_location' => 'primary',
					'menu_class' => 'primary-nav__items',
					'items_wrap' => '<h2 class="u-screen-reader">Main menu</h2><ul class="%2$s">%3$s</ul>',
					'depth' => 1
					)
				);

				// get_search_form();
			?>
		</div>
	</header><!-- #masthead -->
