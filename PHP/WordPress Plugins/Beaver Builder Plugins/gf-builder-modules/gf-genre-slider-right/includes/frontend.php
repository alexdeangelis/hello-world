<?php 


if ($settings->gf_genre_slider_right_bg_toggle == 'gf_genre_slider_right_bg_toggle_color') {
    $bg_type = 'gf-genre-slider-right-bg-color';
} else {
    $bg_type = 'gf-genre-slider-right-bg-image';
}
?>




<div class="gf-row gf-genre-slider-right <?php echo $bg_type; ?>">
    
    <?php 
    
    $url = wp_get_attachment_url( $settings->gf_genre_slider_right_bg_image );
    
    if ($bg_type=='gf-genre-slider-right-bg-image' && $url) { 
        
        if ($settings->gf_genre_slider_right_overlay_toggle == 'gf_genre_slider_right_overlay_toggle_yes') {
    
    ?>
    
    <div class="overlay">

        <?php } } ?>
            
        <div class="gf-row-genre-slider-right-wrap">

            <div class="container">

                <div class="row">


                    <div class="col-xs-12 col-sm-6">

                        <?php if ($settings->gf_genre_slider_right_title) { ?>
                            <h2 class="heading"><?php echo $settings->gf_genre_slider_right_title; ?></h2>
                        <?php } ?>

                        <?php if ($settings->gf_genre_slider_right_editor) { ?>
                            <div class="main-text-wrap">
                                <?php echo $settings->gf_genre_slider_right_editor; ?>
                            </div>
                        <?php } ?>

                    </div>

                    <div class="col-xs-12 col-sm-6">
                        
                        
                        <div class="owl-carousel owl-theme owl-genre">
                            
                            <?php $slides = $settings->gf_genre_slider_right_slide_repeater;
                            
                            
                            foreach($slides as $slide) {
                                
                                if ($slide->gf_genre_slider_right_slide_repeat_image_src) {
                                
                                ?>
                            
                                <?php if ($slide->gf_genre_slider_right_slide_repeat_link) { ?>
                                <a href="<?php echo $slide->gf_genre_slider_right_slide_repeat_link; ?>">
                                    <div class="item">
                                        <img src="<?php echo $slide->gf_genre_slider_right_slide_repeat_image_src; ?>"/>
                                    </div>
                                </a>
                            
                                <?php } else { ?>
                            
                                <div class="item">
                                    <img src="<?php echo $slide->gf_genre_slider_right_slide_repeat_image_src; ?>"/>
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
        
    <?php if ($bg_type=='gf-genre-slider-right-bg-image' && $url) { 

        if ($settings->gf_genre_slider_right_overlay_toggle == 'gf_genre_slider_right_overlay_toggle_yes') {

        ?>

    </div>

    <?php } } ?>

</div>

<script>
    jQuery(document).ready(function() {
        jQuery('.owl-genre').owlCarousel({
            loop:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:true,
            margin:10,
            nav:false,
            responsive:{
                0:{
                    items:2
                }
            }
            
        })
    });

</script>