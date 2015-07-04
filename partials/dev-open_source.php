<div class="frieze frieze--first">

	<div class="l-content">
		<h2 class="frieze__title">Open source projects</h2>
	</div>

	<?php

		$the_query = new WP_Query(array(
			'post_type' => 'dev',
			'posts_per_page' => '-1',
			'meta_query' => array(
				array(
					'key' => 'dev_type',
					'value' => 'open_source'
					)
				)
			)
		);

		if ( $the_query->have_posts() ):

			echo '<ul class="link-tiles l-content l-content--wide js-link-tiles">';

			while ( $the_query->have_posts() ) : $the_query->the_post();

				include dirname(__DIR__) . "/partials/dev-open_source-item.php";

			endwhile;

			echo '</ul>'; // .link-tiles

		endif;

		wp_reset_postdata();
		unset($the_query);

	?>

</div>
