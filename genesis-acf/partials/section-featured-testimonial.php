<section class="testimonial">
            <?php if ( get_sub_field( 'featured_testimonial_image' ) ) { ?>
		<div class="testimonial-image alignright"><img src="<?php the_sub_field( 'featured_testimonial_image' ); ?>" />
    			<?php } ?>
		</div>
	<?php the_sub_field( 'featured_testimonial_text' ); ?>
			
		<div class="testimonial-byline"><?php the_sub_field( 'featured_testimonial_author' ); ?></div>
</section>
