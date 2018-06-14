<?php 


if ($settings->gf_video_bg_toggle == 'gf_video_bg_toggle_color') {
    $bg_type = 'gf-video-bg-color';
} else {
    $bg_type = 'gf-video-bg-image';
}
?>




<div class="gf-row gf-video <?php echo $bg_type; ?>">
    
    <?php 
    
    $url = wp_get_attachment_url( $settings->gf_video_bg_image );
    
    if ($bg_type=='gf-video-bg-image' && $url) { 
        
        if ($settings->gf_video_overlay_toggle == 'gf_video_overlay_toggle_yes') {
    
    ?>
    
    <div class="overlay">

        <?php } } ?>
            
        <div class="gf-row-video-wrap">

            <div class="container">
                
                <div class="row">


                    <div class="col-xs-12 col-sm-10 col-sm-push-1 col-md-8 col-md-push-2">

                        <?php if ($settings->gf_video_type_toggle == 'gf_video_type_toggle_youtube' && $settings->gf_video_type_youtube) { ?>
                        
                        <div class='embed-container'>
                            <iframe src='<?php echo $settings->gf_video_type_youtube; ?>' frameborder='0' allowfullscreen></iframe>
                        </div>
                    
                        <?php } ?>
                        
                        
                        <?php if ($settings->gf_video_type_toggle == 'gf_video_type_toggle_library' && $settings->gf_video_type_library) { 
                        
                        $video = wp_get_attachment_url( $settings->gf_video_type_library );
                        ?>
                        
                            
                        <video controls>

                            <source src="<?php echo $video; ?>" type="video/mp4">

                        </video>
                            
                        
                        <?php } ?>
                        
                        
                    </div>


                </div>

            </div>
        
        </div>
        
    <?php if ($bg_type=='gf-video-bg-image' && $url) { 

        if ($settings->gf_video_overlay_toggle == 'gf_video_overlay_toggle_yes') {

        ?>

    </div>

    <?php } } ?>

</div>