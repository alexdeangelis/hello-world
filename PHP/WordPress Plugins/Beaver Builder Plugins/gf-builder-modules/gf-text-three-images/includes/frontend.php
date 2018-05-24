<?php 


if ($settings->gf_text_three_images_bg_toggle == 'gf_text_three_images_bg_toggle_color') {
    $bg_type = 'gf-text-three-images-bg-color';
} else {
    $bg_type = 'gf-text-three-images-bg-image';
}
?>




<div class="gf-row gf-text-three-images <?php echo $bg_type; ?>">
    
    <?php 
    
    $url = wp_get_attachment_url( $settings->gf_text_three_images_bg_image );
    
    if ($bg_type=='gf-text-three-images-bg-image' && $url) { 
        
        if ($settings->gf_text_three_images_overlay_toggle == 'gf_text_three_images_overlay_toggle_yes') {
    
    ?>
    
    <div class="overlay">

        <?php } } ?>
            
        <div class="gf-row-text-three-images-wrap">

            <div class="container">

                <div class="row">


                    <div class="col-xs-12 col-sm-6">

                        <div class="text-three-images-container">
                            
                            <div class="main-text-wrap">
                                <?php echo $settings->gf_text_three_images_editor; ?>
                            </div>
                            
                        </div>

                    </div>

                    <div class="col-xs-12 col-sm-6">
                        
                        <?php if ($settings->gf_text_three_images_extra_url && $settings->gf_text_three_images_extra_url_text) { ?>
                        
                        <div class="link-wrap">
                            
                            <a href="<?php echo $settings->gf_text_three_images_extra_url; ?>"><?php echo $settings->gf_text_three_images_extra_url_text; ?></a>
                            
                        </div>
                        
                        <?php } ?>
                        
                        <div class="images-container">
                            
                            <?php if ($settings->gf_text_three_images_image_1) { 
                            $img_1 = wp_get_attachment_url( $settings->gf_text_three_images_image_1 );
                            ?>
                            
                            <div class="image-wrap image-1">
                                <a href="<?php echo $settings->gf_text_three_images_link_1; ?>">
                                    <img src="<?php echo $img_1; ?>"/>
                                </a>
                            </div>
                            
                            <?php } ?>
                            
                            <?php if ($settings->gf_text_three_images_image_2) { 
                            $img_2 = wp_get_attachment_url( $settings->gf_text_three_images_image_2 );
                            ?>
                            
                            <div class="image-wrap image-2">
                                <a href="<?php echo $settings->gf_text_three_images_link_2; ?>">
                                    <img src="<?php echo $img_2; ?>"/>
                                </a>
                            </div>
                            
                            <?php } ?>
                            
                            <?php if ($settings->gf_text_three_images_image_3) { 
                            $img_3 = wp_get_attachment_url( $settings->gf_text_three_images_image_3 );
                            ?>
                            
                            <div class="image-wrap image-3">
                                <a href="<?php echo $settings->gf_text_three_images_link_3; ?>">
                                    <img src="<?php echo $img_3; ?>"/>
                                </a>
                            </div>
                            
                            <?php } ?>
                            
                        </div>
                        
                    </div>


                </div>

            </div>
        
        </div>
        
    <?php if ($bg_type=='gf-text-three-images-bg-image' && $url) { 

        if ($settings->gf_text_three_images_overlay_toggle == 'gf_text_three_images_overlay_toggle_yes') {

        ?>

    </div>

    <?php } } ?>

</div>