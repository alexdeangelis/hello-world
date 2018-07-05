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
 * Plugin Name:       GF Books Plugin: Sophie Kinsella Edition
 * Plugin URI:        http://goodmanfox.com
 * Description:       This plugin sets up a Books custom post type and uses the Advanced Custom Fields plugin to create fields for the new Books custom post type. Specific to the Sophie Kinsella website.
 * Version:           1.0.0
 * Author:            Goodman Fox
 * Author URI:        http://goodmanfox.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gf-books-sk-plugin
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
define( 'GF_BOOKS_SK_PLUGIN_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gf-books-sk-plugin-activator.php
 */
function activate_gf_books_sk_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gf-books-sk-plugin-activator.php';
	GF_Books_SK_Plugin_Activator::activate();
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
        
            
        acf_add_local_field_group(array(
            'key' => 'group_5ae04962b7861',
            'title' => 'Book Information Fields',
            'fields' => array(
                array(
                    'key' => 'field_5ae05d00c46e1',
                    'label' => 'Featured Book?',
                    'name' => 'gfbp_featured_book',
                    'type' => 'checkbox',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'Yes' => 'Yes',
                    ),
                    'allow_custom' => 0,
                    'save_custom' => 0,
                    'default_value' => array(
                    ),
                    'layout' => 'vertical',
                    'toggle' => 0,
                    'return_format' => 'value',
                ),
                array(
                    'key' => 'field_5aeaf4d4f6d67',
                    'label' => 'Coming Soon?',
                    'name' => 'gfbp_coming_soon',
                    'type' => 'checkbox',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'choices' => array(
                        'Yes' => 'Yes',
                    ),
                    'allow_custom' => 0,
                    'save_custom' => 0,
                    'default_value' => array(
                    ),
                    'layout' => 'vertical',
                    'toggle' => 0,
                    'return_format' => 'value',
                ),
                array(
                    'key' => 'field_5aeaf4ebf6d68',
                    'label' => 'Release Date',
                    'name' => 'gfbp_release_date',
                    'type' => 'date_time_picker',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'field_5aeaf4d4f6d67',
                                'operator' => '==',
                                'value' => 'Yes',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'display_format' => 'd/m/Y g:i a',
                    'return_format' => 'Y-m-d H:i:s',
                    'first_day' => 1,
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
            'menu_order' => 0,
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
    //If advanced custom fields does not exist, do this...
    else {
        //Show this message...
        function acf_admin_notice__error() {
            $class = 'notice notice-error';
            $message = __( 'To get the most out of the GF Books SK Plugin, please install Advanced Custom Fields.', 'sample-text-domain' );

            printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
        }
        add_action( 'admin_notices', 'acf_admin_notice__error' );

    }




//Create the Field Reference sub menu & text within
require_once plugin_dir_path( __FILE__ ) . 'includes/gf-books-field-reference.php';





/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gf-books-sk-plugin-deactivator.php
 */
function deactivate_gf_books_sk_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gf-books-sk-plugin-deactivator.php';
	GF_Books_SK_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gf_books_sk_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_gf_books_sk_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gf-books-sk-plugin.php';



/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gf_books_sk_plugin() {

	$plugin = new GF_Books_SK_Plugin();
	$plugin->run();

}
run_gf_books_sk_plugin();

