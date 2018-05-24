<?php 


if ($settings->gf_graphs_demographics_bg_toggle == 'gf_graphs_demographics_bg_toggle_color') {
    $bg_type = 'gf-graphs-demographics-bg-color';
} else {
    $bg_type = 'gf-graphs-demographics-bg-image';
}
?>




<div class="gf-row gf-graphs-demographics <?php echo $bg_type; ?>">
    
    <?php 
    
    $url = wp_get_attachment_url( $settings->gf_graphs_demographics_bg_image );
    
    if ($bg_type=='gf-graphs-demographics-bg-image' && $url) { 
        
        if ($settings->gf_graphs_demographics_overlay_toggle == 'gf_graphs_demographics_overlay_toggle_yes') {
    
    ?>
    
    <div class="overlay">

        <?php } } ?>
            
        <div class="gf-row-graphs-demographics-wrap">

            <div class="container">
                
                <div class="row">


                    <div class="col-xs-12">
                        
                        
                        <div class="row">
                            
                            <div class="col-xs-12 col-sm-4">
                                
                                <div class="gf-graphs-demographics-container gf-graphs-demographics-1-container">
                                    
                                    <div class="gf-graphs-demographics-title">
                                        
                                        <?php if ($settings->gf_graphs_demographics_1_title) { ?>
                                        
                                        <h4><?php echo $settings->gf_graphs_demographics_1_title; ?></h4>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-graphs-demographics-shortcode">
                                        
                                        <?php echo $settings->gf_graphs_demographics_1_shortcode; ?>
                                        
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                            <div class="col-xs-12 col-sm-4">
                                
                                <div class="gf-graphs-demographics-container gf-graphs-demographics-2-container">
                                    
                                    <div class="gf-graphs-demographics-title">
                                        
                                        <?php if ($settings->gf_graphs_demographics_2_title) { ?>
                                        
                                        <h4><?php echo $settings->gf_graphs_demographics_2_title; ?></h4>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-graphs-demographics-shortcode">
                                        
                                        <?php echo $settings->gf_graphs_demographics_2_shortcode; ?>
                                        
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                            <div class="col-xs-12 col-sm-4">
                                
                                <div class="gf-graphs-demographics-container gf-graphs-demographics-3-container">
                                    
                                    <div class="gf-graphs-demographics-title">
                                        
                                        <?php if ($settings->gf_graphs_demographics_3_title) { ?>
                                        
                                        <h4><?php echo $settings->gf_graphs_demographics_3_title; ?></h4>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-graphs-demographics-shortcode">
                                        
                                        <?php echo $settings->gf_graphs_demographics_3_shortcode; ?>
                                        
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <?php if ($settings->gf_graphs_demographics_separator_toggle == 'gf_graphs_demographics_separator_toggle_yes') { ?>
                        
                        <div class="row">
                            
                            <div class="col-xs-12">
                                <div class="gf-graphs-demographics-hr">
                                    <hr>
                                </div>
                            </div>
                            
                        </div>
                        
                        <?php } ?>
                        
                    </div>


                </div>

            </div>
        
        </div>
        
    <?php if ($bg_type=='gf-graphs-demographics-bg-image' && $url) { 

        if ($settings->gf_graphs_demographics_overlay_toggle == 'gf_graphs_demographics_overlay_toggle_yes') {

        ?>

    </div>

    <?php } } ?>

</div>