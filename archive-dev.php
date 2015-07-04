<?php

	get_header();

	// Get intro text
	$intros = get_field('development_intros', 'options');

?>

	<div class="l-main l-container">

		<section id="main-content">

			<div class="l-content">

				<h1 class="page-title"><?php wp_title(false); ?></h1>

				<?php if ( $intros[0]['development_intro'] ): ?>
					<div class="post__content wysiwyg">
						<?php echo $intros[0]['development_intro']; ?>
					</div>
				<?php endif; ?>

			</div><!-- .l-content -->

				<!-- OPEN SOURCE PROJECTS -->
				<?php include "partials/dev-open_source.php"; ?>

				<!-- AGENCY PROJECTS -->
				<?php include "partials/dev-agency.php"; ?>


		</section><!--  #main_content-->

	</div><!--  .l-main -->

<?php get_footer(); ?>
