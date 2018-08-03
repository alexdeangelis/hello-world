<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 *
 * @wordpress-plugin
 * Plugin Name:       GF Books Plugin
 * Plugin URI:        http://goodmanfox.com
 * Description:       This plugin sets up a Books custom post type and uses the Advanced Custom Fields plugin to create fields for the new Books custom post type.
 * Version:           2.0.2
 * Author:            Goodman Fox
 * Author URI:        http://goodmanfox.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gf-books-plugin
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
define( 'GF_BOOKS_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gf-books-plugin-activator.php
 */
function activate_gf_books_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gf-books-plugin-activator.php';
	GF_Books_Plugin_Activator::activate();
}



//This is what the plugin does...
    
    
    //Register the book custom post type
    function register_book_post_type() {
 
        $labels = array(
            'name'               => 'Books',
            'singular_name'      => 'Book',
            'add_new'            => 'Add New',
            'add_new_item'       => 'Add New Book',
            'edit_item'          => 'Edit Book',
            'new_item'           => 'New Book',
            'all_items'          => 'All Books',
            'view_item'          => 'View Book',
            'search_items'       => 'Search Books',
            'not_found'          =>  'No books found',
            'not_found_in_trash' => 'No books found in Trash',
            'parent_item_colon'  => '',
            'menu_name'          => 'Books'
        );

        $args = array(
            'labels'             => $labels,
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'book' ),
            'capability_type'    => 'post',
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => null,
            'menu_icon'          => 'dashicons-book-alt',
            'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' )
        );

        register_post_type( 'book', $args );

    }
    add_action( 'init', 'register_book_post_type' );


    
    //If ACF is active, set up these fields in the book custom post type
    if( class_exists('acf') ) {
    
    
        if( function_exists('acf_add_local_field_group') ):
        
            include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
        
            //If Advanced Buy Links extension is installed, do this...
            if ( is_plugin_active( 'gf-books-advanced-buy-links/gf-books-advanced-buy-links.php' ) ) {

                require_once plugin_dir_path( __FILE__ ) . 'includes/acf-fields-original-buy-links-removed.php';

            } 
            //Otherwise, do this...
            else {

                require_once plugin_dir_path( __FILE__ ) . 'includes/acf-fields-original-buy-links-included.php';

            }

        endif;
            
    } 
    //If advanced custom fields does not exist, do this...
    else {
        //Show this message...
        function acf_admin_notice__error() {
            $class = 'notice notice-error';
            $message = __( 'To get the most out of the GF Books Plugin, please install Advanced Custom Fields.', 'sample-text-domain' );

            printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
        }
        add_action( 'admin_notices', 'acf_admin_notice__error' );

    }




//Create the Field Reference sub menu & text within
require_once plugin_dir_path( __FILE__ ) . 'includes/gf-books-field-reference.php';


//Create the Settings sub menu & text within
require_once plugin_dir_path( __FILE__ ) . 'includes/gf-books-settings.php';


/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gf-books-plugin-deactivator.php
 */
function deactivate_gf_books_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gf-books-plugin-deactivator.php';
	GF_Books_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gf_books_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_gf_books_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gf-books-plugin.php';



/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gf_books_plugin() {

	$plugin = new GF_Books_Plugin();
	$plugin->run();

}
run_gf_books_plugin();


require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/5ae06e3de39eaa15b7e367d8/',
    __FILE__,
    'gf-books-plugin',
    1
);
// $MyUpdateChecker->license = "aKernlLicenseKey";  <---- Optional!