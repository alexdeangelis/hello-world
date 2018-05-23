<?php 


if ($settings->gf_icon_circle_bg_toggle == 'gf_icon_circle_bg_toggle_color') {
    $bg_type = 'gf-icon-circle-bg-color';
} else {
    $bg_type = 'gf-icon-circle-bg-image';
}
?>




<div class="gf-row gf-icon-circle <?php echo $bg_type; ?>">
    
    <?php 
    
    $url = wp_get_attachment_url( $settings->gf_icon_circle_bg_image );
    
    if ($bg_type=='gf-icon-circle-bg-image' && $url) { 
        
        if ($settings->gf_icon_circle_overlay_toggle == 'gf_icon_circle_overlay_toggle_yes') {
    
    ?>
    
    <div class="overlay">

        <?php } } ?>
            
        <div class="gf-row-icon-circle-wrap">

            <div class="container">
                
                <div class="row">


                    <div class="col-xs-12">
                        
                        
                        <div class="row">
                            
                            <div class="col-xs-12 col-sm-4">
                                
                                <div class="gf-icon-circle-container gf-icon-circle-1-container">
                                    
                                    <div class="gf-circle">
                                        
                                        <?php 
                                        $icon_1 = wp_get_attachment_url( $settings->gf_icon_circle_1_image );

                                        if ($icon_1) {

                                        ?>
                                        
                                        <div class="gf-circle-container">
                                        
                                            <div class="gf-circle-image">

                                                <img src="<?php echo $icon_1; ?>" />

                                            </div>

                                            

                                            <div class="gf-circle-legend">

                                                <?php echo $settings->gf_icon_circle_1_legend; ?>

                                            </div>
                                            
                                        </div>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-circle-title">
                                        <h4>
                                        <?php echo $settings->gf_icon_circle_1_title; ?>
                                        </h4>
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                            <div class="col-xs-12 col-sm-4">
                                
                                <div class="gf-icon-circle-container gf-icon-circle-2-container">
                                    
                                    <div class="gf-circle">
                                        
                                        <?php 
                                        $icon_2 = wp_get_attachment_url( $settings->gf_icon_circle_2_image );

                                        if ($icon_2) {

                                        ?>
                                        
                                        <div class="gf-circle-container">
                                        
                                            <div class="gf-circle-image">

                                                <img src="<?php echo $icon_2; ?>" />

                                            </div>

                                            <div class="gf-circle-legend">

                                                <?php echo $settings->gf_icon_circle_2_legend; ?>

                                            </div>
                                            
                                        </div>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-circle-title">
                                        <h4>
                                        <?php echo $settings->gf_icon_circle_2_title; ?>
                                        </h4>
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                            <div class="col-xs-12 col-sm-4">
                                
                                <div class="gf-icon-circle-container gf-icon-circle-3-container">
                                    
                                    <div class="gf-circle">
                                        
                                        <?php 
                                        $icon_3 = wp_get_attachment_url( $settings->gf_icon_circle_3_image );

                                        if ($icon_3) {

                                        ?>
                                        
                                        <div class="gf-circle-container">
                                        
                                            <div class="gf-circle-image">

                                                <img src="<?php echo $icon_3; ?>" />

                                            </div>

                                            

                                            <div class="gf-circle-legend">

                                                <?php echo $settings->gf_icon_circle_3_legend; ?>

                                            </div>
                                            
                                        </div>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-circle-title">
                                        <h4>
                                        <?php echo $settings->gf_icon_circle_3_title; ?>
                                        </h4>
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                        </div>

                        
                        
                        
                    </div>


                </div>

            </div>
        
        </div>
        
    <?php if ($bg_type=='gf-icon-circle-bg-image' && $url) { 

        if ($settings->gf_icon_circle_overlay_toggle == 'gf_icon_circle_overlay_toggle_yes') {

        ?>

    </div>

    <?php } } ?>

</div>