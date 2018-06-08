<div class="pricing-2" style="background-color: <?php echo get_sub_field('background_color'); ?>">
	<div class="wrap">
		<h2 class="pricing-headline"><?php echo get_sub_field('heading'); ?></h2>

		<?php if( have_rows('columns') ) {

			$columns = 2;
			$increment = 0; ?>

			<section class="pricing-columns">

				<?php while ( have_rows('columns') ) : the_row(); ?>

					<div class="pricing-table one-half <?php if($increment % $columns == 0){echo'first';}$increment++; ?>">
						<h5 class="pricing-title"><?php echo get_sub_field('column_heading'); ?></h5>
						<h6 class="price"><?php echo get_sub_field('price'); ?></h6>

						<?php if( have_rows('features_list') ) { ?>

							<ul class="pricing-features">

								<?php while ( have_rows('features_list') ) : the_row(); ?>
									<li class="single-feature"><?php echo get_sub_field('feature'); ?></li>
								<?php endwhile; ?>
							</ul>
						<?php } ?>
						<div class="price-button">
							<a class="button" href="<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('button'); ?></a>
						</div>
					</div>
				<?php endwhile; ?>
			</section>
		<?php } ?>
	</div>
</div>
