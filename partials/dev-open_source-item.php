<li class="editable link-tiles__item">
	<a href="<?php the_field('dev_url'); ?>" <?php post_class('link-tile not-listing'); ?> >
		<h4 <?php nsh_post_link_class('link-tile__title'); ?>><?php the_title(); ?></h4>
		<div class="link-tile__description">
			<?php the_content(); ?>
		</div>
		<span class="link-tile__flag" aria-hidden="true" ><?php nsh_dev_project_category(); ?></span>
	</a>
	<?php edit_post_link('Edit'); ?>
</li>
