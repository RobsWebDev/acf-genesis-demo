<section>
        <?php if ( have_rows( 'content_block_column' ) ) : ?>
            <?php while ( have_rows( 'content_block_column' ) ) : the_row(); ?>
        <div class="content-block">
            <div class="wrap">
			<?php the_sub_field( 'content' ); ?>
		    </div>
        </div>
	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>
</section>