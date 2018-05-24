<?php 


if ($settings->gf_graphs_retailers_bg_toggle == 'gf_graphs_retailers_bg_toggle_color') {
    $bg_type = 'gf-graphs-retailers-bg-color';
} else {
    $bg_type = 'gf-graphs-retailers-bg-image';
}
?>




<div class="gf-row gf-graphs-retailers <?php echo $bg_type; ?>">
    
    <?php 
    
    $url = wp_get_attachment_url( $settings->gf_graphs_retailers_bg_image );
    
    if ($bg_type=='gf-graphs-retailers-bg-image' && $url) { 
        
        if ($settings->gf_graphs_retailers_overlay_toggle == 'gf_graphs_retailers_overlay_toggle_yes') {
    
    ?>
    
    <div class="overlay">

        <?php } } ?>
            
        <div class="gf-row-graphs-retailers-wrap">

            <div class="container">
                
                <div class="row">


                    <div class="col-xs-12">
                        
                        
                        <div class="row">
                            
                            <div class="col-xs-12">
                                
                                <?php 
                                $sm_img = wp_get_attachment_url( $settings->gf_graphs_retailers_small_image );
                                if ($sm_img) {
                                ?>
                                
                                <div class="small-image-wrap">
                            
                                    <img src="<?php echo $sm_img; ?>"/>

                                </div>
                                
                                <?php } ?>
                                
                                <div class="gf-graphs-retailers-container gf-graphs-retailers-1-container">
                                    
                                    <div class="gf-graphs-retailers-title">
                                        
                                        <?php if ($settings->gf_graphs_retailers_title) { ?>
                                        
                                        <h4><?php echo $settings->gf_graphs_retailers_title; ?></h4>
                                        
                                        <?php } ?>
                                        
                                    </div>
                                    
                                    <div class="gf-graphs-retailers-shortcode">
                                        
                                        <?php echo $settings->gf_graphs_retailers_shortcode; ?>
                                        
                                    </div>
                                
                                </div>
                                
                            </div>
                            
                        </div>
                        
                        <?php if ($settings->gf_graphs_retailers_separator_toggle == 'gf_graphs_retailers_separator_toggle_yes') { ?>
                        
                        <div class="row">
                            
                            <div class="col-xs-12">
                                <div class="gf-graphs-retailers-hr">
                                    <hr>
                                </div>
                            </div>
                            
                        </div>
                        
                        <?php } ?>
                        
                    </div>


                </div>

            </div>
        
        </div>
        
    <?php if ($bg_type=='gf-graphs-retailers-bg-image' && $url) { 

        if ($settings->gf_graphs_retailers_overlay_toggle == 'gf_graphs_retailers_overlay_toggle_yes') {

        ?>

    </div>

    <?php } } ?>

</div>