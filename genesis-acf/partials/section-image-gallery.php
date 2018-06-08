<section class="image-gallery">
    <div class="images">
        <?php $gallery_image_images = get_sub_field( 'gallery_image' ); ?>
    </div>
        		<?php if ( $gallery_image_images ) :  ?>
        			<?php foreach ( $gallery_image_images as $gallery_image_image ): ?>
        				<a href="<?php echo $gallery_image_image['url']; ?>">
        					<img src="<?php echo $gallery_image_image['sizes']['medium']; ?>" alt="<?php echo $gallery_image_image['alt']; ?>" />
        				</a>
        			<p><?php echo $gallery_image_image['caption']; ?></p>
        			<?php endforeach; ?>
        		<?php endif; ?>
	
</section>