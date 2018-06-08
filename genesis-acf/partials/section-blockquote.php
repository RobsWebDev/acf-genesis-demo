<section>
	<div class="landing-quote" style="background-color: <?php echo get_sub_field('background_color'); ?>">
		<div class="wrap">
			<div class="quote-text">
				<h4 class="quote"><?php echo get_sub_field('text'); ?></h4>
				<h6 class="quote-author"><?php echo get_sub_field('author'); ?></h6>
				<?php if( get_sub_field('company') ) { ?>
					<span class="company"><?php echo get_sub_field('company'); ?></span>
				<?php } ?>
			</div>
		</div>
	</div>
</section>
