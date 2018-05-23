<?php 


if ($settings->gf_icon_bg_toggle == 'gf_icon_bg_toggle_color') {
    $bg_type = 'gf-icon-bg-color';
} else {
    $bg_type = 'gf-icon-bg-image';
}
?>




<div class="gf-row gf-icon <?php echo $bg_type; ?>">
    
    <?php 
    
    $url = wp_get_attachment_url( $settings->gf_icon_bg_image );
    
    if ($bg_type=='gf-icon-bg-image' && $url) { 
        
        if ($settings->gf_icon_overlay_toggle == 'gf_icon_overlay_toggle_yes') {
    
    ?>
    
    <div class="overlay">

        <?php } } ?>
            
        <div class="gf-row-icon-wrap">

            <div class="container">
                
                <div class="row">


                    <div class="col-xs-12">
                        
                        
                        <div class="row">
                            
                            <div class="col-xs-12 col-sm-4">
                                
                                <div class="gf-icon-container gf-icon-1-container">
                                    
                                    <div class="gf-icon-title">
                                        
                                        <?php if ($settings->gf_icon_1_title) { ?>
                                        
                                        <h4><?php echo $settings->gf_icon_1_title; ?></h4>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-icon-image">
                                        
                                        <?php 
                                        
                                        $icon_1 = wp_get_attachment_url( $settings->gf_icon_1_image );
                                        if ($icon_1) { ?>
                                        
                                        <img src="<?php echo $icon_1; ?>" />
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-icon-legend">
                                        
                                        <?php if ($settings->gf_icon_1_legend) { ?>
                                        
                                            <?php echo $settings->gf_icon_1_legend; ?>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                            <div class="col-xs-12 col-sm-4">
                                
                                <div class="gf-icon-container gf-icon-2-container">
                                    
                                    <div class="gf-icon-title">
                                        
                                        <?php if ($settings->gf_icon_2_title) { ?>
                                        
                                        <h4><?php echo $settings->gf_icon_2_title; ?></h4>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-icon-image">
                                        
                                        <?php 
                                        
                                        $icon_2 = wp_get_attachment_url( $settings->gf_icon_2_image );
                                        if ($icon_2) { ?>
                                        
                                        <img src="<?php echo $icon_2; ?>" />
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-icon-legend">
                                        
                                        <?php if ($settings->gf_icon_2_legend) { ?>
                                        
                                            <?php echo $settings->gf_icon_2_legend; ?>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                            <div class="col-xs-12 col-sm-4">
                                
                                <div class="gf-icon-container gf-icon-3-container">
                                    
                                    <div class="gf-icon-title">
                                        
                                        <?php if ($settings->gf_icon_3_title) { ?>
                                        
                                        <h4><?php echo $settings->gf_icon_3_title; ?></h4>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-icon-image">
                                        
                                        <?php 
                                        
                                        $icon_3 = wp_get_attachment_url( $settings->gf_icon_3_image );
                                        if ($icon_3) { ?>
                                        
                                        <img src="<?php echo $icon_3; ?>" />
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-icon-legend">
                                        
                                        <?php if ($settings->gf_icon_3_legend) { ?>
                                        
                                            <?php echo $settings->gf_icon_3_legend; ?>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <?php if ($settings->gf_icon_separator_toggle == 'gf_icon_separator_toggle_yes') { ?>
                        
                        <div class="row">
                            
                            <div class="col-xs-12">
                                <div class="gf-icon-hr">
                                    <hr>
                                </div>
                            </div>
                            
                        </div>
                        
                        <?php } ?>
                        
                    </div>


                </div>

            </div>
        
        </div>
        
    <?php if ($bg_type=='gf-icon-bg-image' && $url) { 

        if ($settings->gf_icon_overlay_toggle == 'gf_icon_overlay_toggle_yes') {

        ?>

    </div>

    <?php } } ?>

</div>