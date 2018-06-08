<section>
     <div class="hero" style="background-image:url(<?php the_sub_field('hero_image_selected') ?>)">
         <div class="cta_container">
             <div class="cta_content">
                 <div class="cta_content wrap">
                     <?php the_sub_field('hero_text_selected'); ?>
                     
                     <?php $selected = get_sub_field('display_cta_button_selected'); ?>
                     
                     <?php if( in_array( true , [$selected]) ) { ?>
                     
                     <a class="button" href="<?php the_sub_field('hero_cta_button_url_selected') ?>"><?php the_sub_field('hero_button_text_selected'); ?></a>
                     
                     <?php } else { ?>
                     
                     <!--no content--> <?php } ?>
                 </div>
             </div>
         </div> 
     </div>
 </section>
