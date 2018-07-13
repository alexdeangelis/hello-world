<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @wordpress-plugin
 * Plugin Name:       GF Books Plugin: Book Series Extension
 * Plugin URI:        http://goodmanfox.com
 * Description:       This plugin sets up a Book Series custom post type & creates a Book Series relationship field within the single book post. Needs the GF Books Plugin to work correctly.
 * Version:           1.0.6
 * Author:            Goodman Fox
 * Author URI:        http://goodmanfox.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gf-books-book-series
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'GF_BOOKS_BOOK_SERIES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gf-books-book-series-activator.php
 */
function activate_gf_books_book_series() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gf-books-book-series-activator.php';
	GF_Books_Book_Series_Activator::activate();
}




//This is what the plugin does...

//If the GF Books Plugin is active
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if( is_plugin_active( 'gf-books-plugin/gf-books-plugin.php' ) || is_plugin_active( 'gf-books-sk-plugin/gf-books-sk-plugin.php' )) {




        //Register the book series custom post type
        function register_book_series_post_type() {

            $labels = array(
                'name'               => 'Book Series',
                'singular_name'      => 'Book Series',
                'add_new'            => 'Add New',
                'add_new_item'       => 'Add New Book Series',
                'edit_item'          => 'Edit Book Series',
                'new_item'           => 'New Book Series',
                'all_items'          => 'All Book Series',
                'view_item'          => 'View Book Series',
                'search_items'       => 'Search Book Series',
                'not_found'          =>  'No book series found',
                'not_found_in_trash' => 'No book series found in Trash',
                'parent_item_colon'  => '',
                'menu_name'          => 'Book Series'
            );

            $args = array(
                'labels'             => $labels,
                'public'             => true,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => 'book-series' ),
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'menu_icon'          => 'dashicons-networking',
                'supports'           => array( 'title', 'editor', 'thumbnail' )
            );

            register_post_type( 'book-series', $args );

        }
        add_action( 'init', 'register_book_series_post_type' );



    //If ACF is active, add the Book Series relationship field to the book post
    
    if( class_exists('acf') ) {

        if( function_exists('acf_add_local_field_group') ):

        acf_add_local_field_group(array(
            'key' => 'group_5b0eb3e5a1eb3',
            'title' => 'Book Series Selector',
            'fields' => array(
                array(
                    'key' => 'field_5b0eb3f27936a',
                    'label' => 'Book Series',
                    'name' => 'gfbp_book_series',
                    'type' => 'relationship',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'post_type' => array(
                        0 => 'book-series',
                    ),
                    'taxonomy' => array(
                    ),
                    'filters' => array(
                        0 => 'search',
                        1 => 'post_type',
                        2 => 'taxonomy',
                    ),
                    'elements' => '',
                    'min' => '',
                    'max' => '',
                    'return_format' => 'object',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'book',
                    ),
                ),
            ),
            'menu_order' => 999,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => 1,
            'description' => '',
        ));

        endif;


    }





}
//If the GF Books Plugin is not active, do this...
else {

    function acf_gf_books_book_series_admin_notice__error() {
        $class = 'notice notice-error';
        $message = __( 'The Books Series Extension will not work without the GF Books Plugin.', 'sample-text-domain' );

        printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
    }
    add_action( 'admin_notices', 'acf_gf_books_book_series_admin_notice__error' );

}




    
    
    



/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gf-books-book-series-deactivator.php
 */
function deactivate_gf_books_book_series() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gf-books-book-series-deactivator.php';
	GF_Books_Book_Series_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gf_books_book_series' );
register_deactivation_hook( __FILE__, 'deactivate_gf_books_book_series' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gf-books-book-series.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gf_books_book_series() {

	$plugin = new GF_Books_Book_Series();
	$plugin->run();

}
run_gf_books_book_series();



require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/5b0eba5534ed2b2808acafe9/',
    __FILE__,
    'gf-books-book-series',
    1
);