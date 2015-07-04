<?php

	$category = get_field('design_category');
	$date = get_field('design_date');
	$url = get_field('design_url');

?>

<ul class="post-meta showcase__meta">

	<!-- Date -->
	<?php if ( $date ): ?>
		<li class="post-meta__item"><span class="post-meta__key">Date: </span><?php echo $date; ?></li>
	<?php endif; ?>

	<!-- Type -->
	<?php if ( $category) : ?>
		<li class="post-meta__item"><span class="post-meta__key">Type: </span><?php echo $category->name; ?></li>
	<?php endif; ?>

	<!-- URL -->
	<?php if ( $url) : ?>
		<li class="post-meta__item showcase__url">
			<a href="<?php echo $url; ?>" class="external-link">
				<?php echo str_replace("http://", "", str_replace("www.", "", $url)); ?>
			</a>
		</li>
	<?php endif; ?>


</ul><!-- .post-meta -->
