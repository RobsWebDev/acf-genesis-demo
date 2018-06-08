<?php
/**
 *Template Name: Page Home
 **/

add_action('full_width_content', 'do_full_width_content' );

add_filter('body_class', 'add_full_width_body_class' );
function add_full_width_body_class($classes) {

	$classes[] = 'full-width-template';

	return $classes;

}

add_theme_support( 'genesis-structural-wraps', array( 'header', 'footer-widgets', 'footer', 'nav', 'subnav', ) );

function do_full_width_content() {

	?>

	<main class="main" role="main">

		<?php // Open The Flexible Content Loop
		// are there any rows within within our flexible content?
		if( have_rows('modules') ):

			// loop through all the rows of flexible content
			while ( have_rows('modules') ) : the_row();

				// HERO WITH TEXT AND BUTTON
				if( get_row_layout() == 'hero_with_text_and_button' )
					get_template_part('partials/section', 'hero');
					
				// HERO WITH TEXT AND SELECTED BUTTON
				if( get_row_layout() == 'hero_with_text_and_selected_button' )
					get_template_part('partials/section', 'hero-select-button');

				// IMAGE LEFT TEXT RIGHT
				if( get_row_layout() == 'left_image_right_text' )
					get_template_part('partials/section', 'image-text');

				// LEFT IMAGE RIGHT TEXT
				if( get_row_layout() == 'left_text_right_image' )
					get_template_part('partials/section', 'text-image');

				// 3 COLUMN PRICING TABLE
				if( get_row_layout() == '3_column_pricing_table' )
					get_template_part('partials/section', '3-column-price');

				// 2 COLUMN PRICING TABLE
				if( get_row_layout() == '2_column_pricing_table' )
					get_template_part('partials/section', '2-column-price');

				// HEADLINE WITH WYSIWYG
				if( get_row_layout() == 'headline_with_wysiwyg' )
					get_template_part('partials/section', 'headline-editor');

				// BLOCK QUOTES
				if( get_row_layout() == 'blockquote' )
					get_template_part('partials/section', 'blockquote');

				// FEATURED TESTIMONIAL
				if( get_row_layout() == 'featured_testimonial' )
					get_template_part('partials/section', 'featured-testimonial');
					
				// IMAGE GALLERY
				if( get_row_layout() == 'image_gallery' )
					get_template_part('partials/section', 'image-gallery');
					
				// CLASSIC TEXT EDITOR
				if( get_row_layout() == 'wysiwyg_editor' )
					get_template_part('partials/section', 'classic-editor');

				// CONTENT BLOCKS
				if( get_row_layout() == 'content_blocks' )
					get_template_part('partials/section', 'content-block');
					
				// TWO COLUMNS WITH TEXT
				if( get_row_layout() == '2_columns_with_text' )
					get_template_part('partials/section', '2-columns');

			endwhile; // close the loop of flexible content
		endif; // close flexible content conditional
		?>
	</main>

	<?php

}

get_header();

do_action('full_width_content');

get_footer();