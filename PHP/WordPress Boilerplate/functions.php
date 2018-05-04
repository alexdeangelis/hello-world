<?php ///Register Menus
function register_menus() {
    register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_menus' );


//Load CSS Stylesheet

function your_scripts() {
    wp_enqueue_style( 'styles', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'your_scripts' );

//Create options settings page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

//Enquing Bootstrap JS in the footer & loading jQuery as a dependency
//For more info, go here: https://digwp.com/2009/06/including-jquery-in-wordpress-the-right-way/
wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), null, true);