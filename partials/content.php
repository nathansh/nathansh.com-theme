<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="post__header">

		<?php if ( has_post_thumbnail() ): ?>
			<div class="l-content l-content--wide">
				<figure class="post__image">
					<?php the_post_thumbnail('post-full'); ?>
				</figure>
			</div>
		<?php endif; ?>

		<h1 class="post__title"><?php nsh_post_title(); ?><?php echo nsh_get_subtitle('<span class="post__subtitle"><span class="post__subtitle__prefix">: </span>', '</span>'); ?></h1>

		<div class="l-content">
			<?php get_template_part('partials/meta', get_post_type()); ?>
		</div>

	</header>

	<div class="post__content wysiwyg js-wysiwyg l-content">
		<?php the_content(); ?>
	</div><!-- .entry-summary -->

	<?php
		// Tags
		$tags = wp_get_post_tags($post->ID);
		if ( $tags ):
	?>
		<div class="l-content">
			<?php the_tags('<ul class="post-tags"><li class="post-tags__tag-wrapper">','</li><li class="post-tags__tag-wrapper">','</li></ul>'); ?></li>
		</div>
	<?php endif; ?>


</article><!-- #post-## -->

<?php // comments_template(); ?>
