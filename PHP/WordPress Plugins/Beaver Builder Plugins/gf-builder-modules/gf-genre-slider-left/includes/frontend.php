<?php 


if ($settings->gf_genre_slider_left_bg_toggle == 'gf_genre_slider_left_bg_toggle_color') {
    $bg_type = 'gf-genre-slider-left-bg-color';
} else {
    $bg_type = 'gf-genre-slider-left-bg-image';
}
?>




<div class="gf-row gf-genre-slider-left <?php echo $bg_type; ?>">
    
    <?php 
    
    $url = wp_get_attachment_url( $settings->gf_genre_slider_left_bg_image );
    
    if ($bg_type=='gf-genre-slider-left-bg-image' && $url) { 
        
        if ($settings->gf_genre_slider_left_overlay_toggle == 'gf_genre_slider_left_overlay_toggle_yes') {
    
    ?>
    
    <div class="overlay">

        <?php } } ?>
            
        <div class="gf-row-genre-slider-left-wrap">

            <div class="container">

                <div class="row">


                    <div class="col-xs-12 col-sm-6 col-sm-push-6">

                        <?php if ($settings->gf_genre_slider_left_title) { ?>
                            <h2 class="heading"><?php echo $settings->gf_genre_slider_left_title; ?></h2>
                        <?php } ?>

                        <?php if ($settings->gf_genre_slider_left_editor) { ?>
                            <div class="main-text-wrap">
                                <?php echo $settings->gf_genre_slider_left_editor; ?>
                            </div>
                        <?php } ?>
                        
                        <?php 
                        
                        $sm_img = wp_get_attachment_url( $settings->gf_genre_slider_left_small_image );
                        
                        if ($sm_img) {
                        
                        ?>
                        
                        <div class="small-image-wrap">
                            
                            <img src="<?php echo $sm_img; ?>"/>
                            
                        </div>
                            
                        <?php } ?>

                    </div>

                    <div class="col-xs-12 col-sm-6 col-sm-pull-6">
                        
                        
                        <div class="owl-carousel owl-theme owl-genre-left">
                            
                            <?php $slides = $settings->gf_genre_slider_left_slide_repeater;
                            
                            
                            foreach($slides as $slide) {
                                
                                if ($slide->gf_genre_slider_left_slide_repeat_image_src) {
                                
                                ?>
                            
                                <?php if ($slide->gf_genre_slider_left_slide_repeat_link) { ?>
                                <a href="<?php echo $slide->gf_genre_slider_left_slide_repeat_link; ?>">
                                    <div class="item">
                                        <img src="<?php echo $slide->gf_genre_slider_left_slide_repeat_image_src; ?>"/>
                                    </div>
                                </a>
                            
                                <?php } else { ?>
                            
                                <div class="item">
                                    <img src="<?php echo $slide->gf_genre_slider_left_slide_repeat_image_src; ?>"/>
                                </div>
                            
                                <?php }
                                }
                            }
                            
                            ?>
                            
                            
                        </div>
                        
                        
                    </div>


                </div>

            </div>
        
        </div>
        
    <?php if ($bg_type=='gf-genre-slider-left-bg-image' && $url) { 

        if ($settings->gf_genre_slider_left_overlay_toggle == 'gf_genre_slider_left_overlay_toggle_yes') {

        ?>

    </div>

    <?php } } ?>

</div>

<script>
    jQuery(document).ready(function() {
        jQuery('.owl-genre-left').owlCarousel({
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:1
                }
            }
            
        })
    });

</script>