<article id="post-<?php the_ID(); ?>" <?php post_class('showcase'); ?>>

	<header class="showcase__details">

		<h2 class="showcase__title"><?php the_title(); ?></h2>

		<?php get_template_part('partials/meta', get_post_type()); ?>

		<div class="showcase__description">
			<?php the_content(); ?>
		</div>

	</header>

	<div class="showcase__images">

		<?php

			$images = get_field('design_images');

			foreach ( $images as $image ) {
				echo '<figure class="showcase__image">';
					d7_acf_image($image['design_image'], 'portfolio-full', 'showcase__image-actual');
				echo '</figure>';
			}

		?>

	</div>

</article><!-- #post-## -->

<?php // comments_template(); ?>
