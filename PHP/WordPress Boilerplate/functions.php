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