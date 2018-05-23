<?php 


if ($settings->gf_text_link_bg_toggle == 'gf_text_link_bg_toggle_color') {
    $bg_type = 'gf-text-link-bg-color';
} else {
    $bg_type = 'gf-text-link-bg-image';
}
?>




<div class="gf-row gf-text-image gf-text-link <?php echo $bg_type; ?>">
    
    <?php 
    
    $url = wp_get_attachment_url( $settings->gf_text_link_bg_image );
    
    if ($bg_type=='gf-text-link-bg-image' && $url) { 
        
        if ($settings->gf_text_link_overlay_toggle == 'gf_text_link_overlay_toggle_yes') {
    
    ?>
    
    <div class="overlay">

        <?php } } ?>
            
        <div class="gf-row-wrap-text-link">

            <div class="container">
                
                <?php if ($settings->gf_text_link_title) { ?>

                <div class="row">
                    
                    <div class="col-xs-12">
                        
                        <h2 class="heading"><?php echo $settings->gf_text_link_title; ?></h2>
                        
                    </div>
                    
                </div>
                
                <?php } ?>
                
                <div class="row">


                    <div class="col-xs-12 col-sm-6">

                        <?php if ($settings->gf_text_link_editor) { ?>
                            <div class="main-text-wrap">
                                <?php echo $settings->gf_text_link_editor; ?>
                            </div>
                        <?php } ?>

                    </div>
                    
                    <div class="col-xs-12 col-sm-6">
                        
                        <?php if ($settings->gf_text_link_url && $settings->gf_text_link_url_text) { ?>
                        
                        <div class="link-wrap">
                            
                            <a href="<?php echo $settings->gf_text_link_url; ?>"><?php echo $settings->gf_text_link_url_text; ?></a>
                            
                        </div>
                        
                        <?php } ?>
                        
                    </div>


                </div>

            </div>
        
        </div>
        
    <?php if ($bg_type=='gf-text-link-bg-image' && $url) { 

        if ($settings->gf_text_link_overlay_toggle == 'gf_text_link_overlay_toggle_yes') {

        ?>

    </div>

    <?php } } ?>

</div>