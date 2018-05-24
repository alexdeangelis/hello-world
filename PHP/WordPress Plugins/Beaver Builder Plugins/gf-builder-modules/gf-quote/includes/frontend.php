<?php 


if ($settings->gf_quote_bg_toggle == 'gf_quote_bg_toggle_color') {
    $bg_type = 'gf-quote-bg-color';
} else {
    $bg_type = 'gf-quote-bg-image';
}
?>




<div class="gf-row gf-quote <?php echo $bg_type; ?>">
    
    <?php 
    
    $url = wp_get_attachment_url( $settings->gf_quote_bg_image );
    
    if ($bg_type=='gf-quote-bg-image' && $url) { 
        
        if ($settings->gf_quote_overlay_toggle == 'gf_quote_overlay_toggle_yes') {
    
    ?>
    
    <div class="overlay">

        <?php } } ?>
            
        <div class="gf-row-quote-wrap">

            <div class="container">

                <div class="row">

                    <div class="col-xs-12">
                        
                        <?php $quote_img = wp_get_attachment_url( $settings->gf_quote_image ); 
                        
                        if ($quote_img) {
                        ?>
                        
                        <div class="image-container">
                            <img src="<?php echo $quote_img; ?>" />
                        </div>
                        
                        <?php } ?>
                        
                        <div class="quote-container">
                            
                            <?php echo $settings->gf_quote_editor; ?>
                            
                        </div>
                        
                    </div>
                    
                </div>

            </div>
        
        </div>
        
    <?php if ($bg_type=='gf-quote-bg-image' && $url) {

        if ($settings->gf_quote_overlay_toggle == 'gf_quote_overlay_toggle_yes') {

        ?>

    </div>

    <?php } } ?>

</div>