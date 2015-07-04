<article id="post-<?php the_ID(); ?>" <?php post_class('editable'); ?>>


		<header class="post__header l-content">

	<a href="<?php nsh_post_link(); ?>" class="post__image-link" rel="bookmark">
			<?php if ( has_post_thumbnail() ): ?>
				<figure class="post__image">
					<?php the_post_thumbnail('listing'); ?>
				</figure>
			<?php endif; ?>

			<h2 class="post__title">
				<span <?php nsh_post_link_class('post__link'); ?>>
					<?php the_title(); ?>
					<?php echo nsh_get_subtitle('<span class="post__subtitle"><span class="post__subtitle__prefix">: </span>', '</span>'); ?>
				</span>
			</h2>

	</a>
			<?php get_template_part('partials/meta', get_post_type()); ?>

		</header>


	<div class="post__content post__content--summary">

		<div class="wysiwyg js-wysiwyg l-content">
			<?php
				// Display full post for link posts
				if ( !get_field('post_link') ) {
					d7_custom_excerpt(70, false);
				} else {
					the_content();
				}
			?>
		</div>

		<?php

			// Tags
			$tags = wp_get_post_tags($post->ID);
			if ( $tags ) {
				the_tags('<ul class="post-tags"><li class="post-tags__tag-wrapper">','</li><li class="post-tags__tag-wrapper">','</li></ul>');
			}

		?>

	</div><!-- .entry-content -->

	<?php edit_post_link('Edit'); ?>

</article><!-- #post-## -->
