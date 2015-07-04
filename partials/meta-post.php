<?php

	// Post category
	$category = get_the_category($post->ID);

	// Custom fields
	$custom_fields = d7_get_custom_fields($post->ID);

?>

<ul class="post-meta">

	<!-- Post date -->
	<li class="post-meta__item post-meta--date"><?php echo get_the_date(); ?> <?php nsh_post_link_permalink(); ?></li>

</ul><!-- .post-meta -->
