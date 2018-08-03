<?php



////////////// REGISTER CUSTOMIZER SETTINGS HERE //////////////

//Link to the colours register file
//require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/colours/register/colours-register.php';


//Link to the font sizes register file
//require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/font-sizes/register/font-sizes-register.php';


//Link to the colour palette register file
require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/colour-palette/register/colour-palette-register.php';

//Link to the font-family register file
require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/font-family/register/font-family-register.php';



////////////// REGISTER CUSTOMIZER CSS HERE //////////////


//Link to the colours css file
//require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/colours/css/colours-css.php';


//Link to the font sizes css file
//require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/font-sizes/css/font-sizes-css.php';


//Link to the colour palette css file
require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/colour-palette/css/colour-palette-css.php';


//Link to the font family css file
require_once plugin_dir_path( __FILE__ ) . 'customizer-settings/font-family/css/font-family-css.php';





/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
/*function understrap_customize_preview_js() {
	wp_enqueue_script( 
        'understrap_customizer', 
        plugin_dir_path( __FILE__ ) . '/js/customizer.js', 
        array( 
            'customize-preview' 
        ), 
        '20130508', 
        true 
    );
}
add_action( 'customize_preview_init', 'understrap_customize_preview_js' );*/

