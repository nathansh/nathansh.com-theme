<li class="editable link-tiles__item">

	<a href="<?php the_field('dev_url'); ?>" <?php post_class('link-tile not-listing'); ?> >

		<div class="link-tile__content">
			<h4 <?php nsh_post_link_class('link-tile__title'); ?>><?php the_title(); ?></h4>

				<ul class="link-tile__meta">

					<?php
						$launch = get_field('dev_launch_date');
						if ( $launch ):
							$launch = strtotime($launch);
							$launch = date('Y', $launch);
					?>
						<li class="link-tile__meta__item"><span class="link-tile__meta__key">Launched:</span> <?php echo $launch; ?></li>
					<?php endif; ?>

					<?php $url = get_field('dev_url'); ?>
					<li class="link-tile__meta__item link-tile__meta__item--link"><?php echo str_replace("www", "", str_replace("http://", "", $url)); ?></li>

				</ul>

			<div class="link-tile__description">
				<?php d7_custom_excerpt('40', false); ?>
			</div>

			<span class="link-tile__flag" aria-hidden="true" ><?php nsh_dev_project_category(); ?></span>
		</div>

		<?php
			$image = d7_get_acf_image('dev_screenshot', 'medium-square');
			if ( $image ):
		?>
		<div class="link-tile__image">
			<?php echo $image; ?>
		</div>
		<?php endif; ?>

	</a>

	<?php edit_post_link('Edit'); ?>

</li>
