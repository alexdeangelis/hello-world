<?php 


if ($settings->gf_text_image_right_text_bg_toggle == 'gf_text_image_right_text_bg_toggle_color') {
    $bg_type = 'gf-text-image-right-text-bg-color';
} else {
    $bg_type = 'gf-text-image-right-text-bg-image';
}
?>




<div class="gf-row gf-text-image gf-text-image-right-text <?php echo $bg_type; ?>">
    
    <?php 
    
    $url = wp_get_attachment_url( $settings->gf_text_image_right_text_bg_image );
    
    if ($bg_type=='gf-text-image-right-text-bg-image' && $url) { 
        
        if ($settings->gf_text_image_right_text_overlay_toggle == 'gf_text_image_right_text_overlay_toggle_yes') {
    
    ?>
    
    <div class="overlay">

        <?php } } ?>
            
        <div class="gf-row-text-image-right-wrap">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12 col-sm-6 col-sm-push-6">

                        <?php if ($settings->gf_text_image_right_text_subtitle) { ?>
                            <h4 class="sub-heading"><?php echo $settings->gf_text_image_right_text_subtitle; ?></h4>
                        <?php } ?>

                        <?php if ($settings->gf_text_image_right_text_title) { ?>
                            <h2 class="heading"><?php echo $settings->gf_text_image_right_text_title; ?></h2>
                        <?php } ?>

                        <?php if ($settings->gf_text_image_right_text_editor) { ?>
                            <div class="main-text-wrap">
                                <?php echo $settings->gf_text_image_right_text_editor; ?>
                            </div>
                        <?php } ?>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                        <?php if ($settings->gf_text_image_right_text_image) { ?>
                            <?php                                            
                            $url = wp_get_attachment_url( $settings->gf_text_image_right_text_image );
                            ?>

                        <div class="image-wrap">
                            <img src="<?php echo $url; ?>" />
                        </div>

                        <?php } ?>
                        
                        <?php if ($settings->gf_text_image_right_text_seperator_toggle == 'gf_text_image_right_text_seperator_toggle_yes') { ?>
                        
                        <div class="separator-wrap">
                            <hr>
                        </div>
                        
                        <?php } ?>
                        
                    </div>
                    
                </div>

            </div>
        
        </div>
        
    <?php if ($bg_type=='gf-text-image-right-text-bg-image' && $url) { 

        if ($settings->gf_text_image_right_text_overlay_toggle == 'gf_text_image_right_text_overlay_toggle_yes') {

        ?>

    </div>

    <?php } } ?>

</div>