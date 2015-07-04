<?php get_header(); ?>

	<div class="l-main l-container">

		<section id="main-content">

			<div class="l-content l-content--wide">

				<h1 class="page-title"><?php wp_title(false); ?></h1>

				<!-- Intro -->
				<?php if ( $intro = get_field('design_intro', 'options') ): ?>
					<div class="post__content u-wysiwyg">
						<?php echo $intro; ?>
					</div>
				<?php endif; ?>

				<!-- Work grid -->
				<?php

					if ( have_posts() ) :

						echo '<ul class="grid-list">';

						// Start the Loop.
						while ( have_posts() ) : the_post();

							if ( $images = get_field('design_images') ) {

								echo '<li class="grid-list__item editable">';
									echo '<a class="grid-list__link" href="' . get_permalink() . '">';
										d7_acf_image($images[0]['design_image'], 'small-square', 'grid-list__image');
									echo '</a>';

									$edit = get_edit_post_link();
									if ( $edit ) {
										echo '<a href="' . $edit . '" class="editable__link">Edit</a>';
									}

								echo '</li>';

							}


						endwhile;

						echo '</ul>';

						// Pagination
						get_template_part('partials/pagination');

					else :

						// If no content, include the "No posts found" template.
						get_template_part('partials/content', 'none');

					endif;
				?>


			</div><!-- .l-main__content -->

		</section><!--  #main_content-->

	</div><!--  .l-main -->

<?php get_footer(); ?>
