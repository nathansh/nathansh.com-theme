<?php
	global $the_query;
	if (  $the_query->max_num_pages > 1 ) :
?>

	<?php $page_number = get_query_var('paged'); ?>

	<nav class="pagination">
		<ul>
			<?php if ( $the_query->max_num_pages > $page_number): ?>
				<li class="pagination__item pagination__item--older"><?php next_posts_link( __( 'Older', get_bloginfo('name') ), $the_query->max_num_pages); ?></li>
			<?php endif; ?>

			<?php if ( $page_number > 1 ): ?>
				<li class="pagination__item pagination__item--newer"><?php previous_posts_link( __( 'Newer', get_bloginfo('name') ) ); ?></li>
			<?php endif; ?>
		</ul>
	</nav><!-- #nav-below -->
<?php endif; ?>
