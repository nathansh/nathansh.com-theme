<div class="frieze">

	<div class="l-content">
		<h2 class="frieze__title">A few favourite Domain7 projects</h2>
		<?php if ( $intros[0]['development_agency_intro'] ): ?>
			<div class="wysiwyg frieze__intro">
				<?php echo $intros[0]['development_agency_intro']; ?>
			</div>
		<?php endif; ?>
	</div><!-- .l-content -->

	<?php

		$the_query = new WP_Query(array(
			'post_type' => 'dev',
			'posts_per_page' => '-1',
			'meta_key' => 'dev_launch_date',
			'orderby' => 'meta_value',
			'order' => 'DESC',
			'meta_query' => array(
				array(
					'key' => 'dev_type',
					'value' => 'agency'
					)
				)
			)
		);

		if ( $the_query->have_posts() ):

			echo '<ul class="link-tiles link-tiles--full l-content">';

			while ( $the_query->have_posts() ) : $the_query->the_post();

				include dirname(__DIR__) . "/partials/dev-agency-item.php";

			endwhile;

			echo '</div>'; // .link-tiles

		endif;

		wp_reset_postdata();
		unset($the_query);

	?>

</div>
