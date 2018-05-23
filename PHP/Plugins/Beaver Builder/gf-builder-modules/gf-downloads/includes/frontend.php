<?php 


if ($settings->gf_downloads_bg_toggle == 'gf_downloads_bg_toggle_color') {
    $bg_type = 'gf-downloads-bg-color';
} else {
    $bg_type = 'gf-downloads-bg-image';
}
?>




<div class="gf-row gf-downloads <?php echo $bg_type; ?>">
    
    <?php 
    
    $url = wp_get_attachment_url( $settings->gf_downloads_bg_image );
    
    if ($bg_type=='gf-downloads-bg-image' && $url) { 
        
        if ($settings->gf_downloads_overlay_toggle == 'gf_downloads_overlay_toggle_yes') {
    
    ?>
    
    <div class="overlay">

        <?php } } ?>
            
        <div class="gf-row-downloads-wrap">

            <div class="container">

                <div class="row">


                    <div class="col-xs-12 col-sm-6">

                        <?php if ($settings->gf_downloads_title) { ?>
                            <h2 class="heading"><?php echo $settings->gf_downloads_title; ?></h2>
                        <?php } ?>

                        <div class="download-links-container">
                            
                            <?php if ($settings->gf_downloads_link_1_text && $settings->gf_downloads_link_1_url) { ?>
                            
                            <div class="download-link">
                                
                                <p><a href="<?php echo $settings->gf_downloads_link_1_url; ?>"><?php echo $settings->gf_downloads_link_1_text; ?></a></p>
                                
                            </div>
                        
                            <?php } ?>
                            
                            <?php if ($settings->gf_downloads_link_2_text && $settings->gf_downloads_link_2_url) { ?>
                            
                            <div class="download-link">
                                
                                <p><a href="<?php echo $settings->gf_downloads_link_2_url; ?>"><?php echo $settings->gf_downloads_link_2_text; ?></a></p>
                                
                            </div>
                        
                            <?php } ?>
                            
                            <?php if ($settings->gf_downloads_link_3_text && $settings->gf_downloads_link_3_url) { ?>
                            
                            <div class="download-link">
                                
                                <p><a href="<?php echo $settings->gf_downloads_link_3_url; ?>" target="_blank"><?php echo $settings->gf_downloads_link_3_text; ?></a></p>
                                
                            </div>
                        
                            <?php } ?>
                            
                        </div>
                        
                        <?php if ($settings->gf_downloads_sm_image) { 
                        
                        $img_sm = wp_get_attachment_url( $settings->gf_downloads_sm_image );
                        ?>
                        
                        <div class="downloads-image-container">
                            
                            <img src="<?php echo $img_sm; ?>"/>
                            
                        </div>
                        
                        <?php } ?>

                    </div>

                    <div class="col-xs-12 col-sm-6">
                        <?php if ($settings->gf_downloads_image) { ?>
                            <?php                                            
                            $url = wp_get_attachment_url( $settings->gf_downloads_image );
                            ?>

                        <div class="image-wrap">
                            <img src="<?php echo $url; ?>" />
                        </div>
                        
                        <?php } ?>
                        
                        <?php if ($settings->gf_downloads_seperator_toggle == 'gf_downloads_seperator_toggle_yes') { ?>
                        
                        <div class="separator-wrap">
                            <hr>
                        </div>
                        
                        <?php } ?>
                        
                        
                    </div>


                </div>

            </div>
        
        </div>
        
    <?php if ($bg_type=='gf-downloads-bg-image' && $url) { 

        if ($settings->gf_downloads_overlay_toggle == 'gf_downloads_overlay_toggle_yes') {

        ?>

    </div>

    <?php } } ?>

</div>