<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://goodmanfox.com

 * @package           GF PRH Downloads CPT & Fields
 *
 * @wordpress-plugin
 * Plugin Name:       GF PRH Downloads CPT & Fields
 * Plugin URI:        http://goodmanfox.com
 * Description:       This plugin creates a Downloads custom post type & creates fields for the Downloads CPT. This plugin does not need Advanced Custom Fields for full functionality.
 * Version:           0.7.7
 * Author:            Goodman Fox
 * Author URI:        http://goodmanfox.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       prh-downloads
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
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-prh-downloads-activator.php
 */
function activate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-prh-downloads-activator.php';
	Plugin_Name_Activator::activate();
}





//This is what the plugin does...


    
//Register the downloads custom post type
function register_download_post_type() {

    $labels = array(
        'name'               => 'Downloads',
        'singular_name'      => 'Download',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Download',
        'edit_item'          => 'Edit Download',
        'new_item'           => 'New Download',
        'all_items'          => 'All Downloads',
        'view_item'          => 'View Download',
        'search_items'       => 'Search Downloads',
        'not_found'          =>  'No downloads found',
        'not_found_in_trash' => 'No downloads found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Downloads'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'download' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-download',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        //'taxonomies'  => array( 'post_tag' ),
    );

    register_post_type( 'download', $args );
    
    
    
    ////////TYPE TAXONOMY////////
    
    
    // Labels for the Type Taxonomy
    $labels = array(
        'name'                       => _x( 'Type', 'download_type', 'textdomain' ),
        'singular_name'              => _x( 'Type', 'download_type', 'textdomain' ),
        'search_items'               => __( 'Search Types', 'textdomain' ),
        'popular_items'              => __( 'Popular Types', 'textdomain' ),
        'all_items'                  => __( 'All Types', 'textdomain' ),
        'parent_item'                => __( 'Parent Type', 'textdomain' ),
        'parent_item_colon'          => __( 'Parent Type:', 'textdomain' ),
        'edit_item'                  => __( 'Edit Type', 'textdomain' ),
        'update_item'                => __( 'Update Type', 'textdomain' ),
        'add_new_item'               => __( 'Add New Type', 'textdomain' ),
        'new_item_name'              => __( 'New Type Name', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate types with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove types', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used types', 'textdomain' ),
        'not_found'                  => __( 'No types found.', 'textdomain' ),
        'menu_name'                  => __( 'Types', 'textdomain' ),
    );
    
    
    
    
    //Create the Type Taxonomy Here
    register_taxonomy( 'download_type', array('download'), array(
        'hierarchical' => true,
        'show_admin_column' => true,
        'labels' => $labels, 
        'rewrite' => array( 'slug' => 'download_type', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'download_type', 'download' ); // Better be safe than sorry
    
    
    
    
    ////////PRIMARY TAXONOMY////////
    
    
    // Labels for the Primary Taxonomy
    $primary_labels = array(
        'name'                       => _x( 'Primary Category', 'primary', 'textdomain' ),
        'singular_name'              => _x( 'Primary Category', 'primary', 'textdomain' ),
        'search_items'               => __( 'Search Primary Categories', 'textdomain' ),
        'popular_items'              => __( 'Popular Primary Categories', 'textdomain' ),
        'all_items'                  => __( 'All Primary Categories', 'textdomain' ),
        'parent_item'                => __( 'Parent Primary Category', 'textdomain' ),
        'parent_item_colon'          => __( 'Parent Primary Category:', 'textdomain' ),
        'edit_item'                  => __( 'Edit Primary Category', 'textdomain' ),
        'update_item'                => __( 'Update Primary Category', 'textdomain' ),
        'add_new_item'               => __( 'Add New Primary Category', 'textdomain' ),
        'new_item_name'              => __( 'New Type Primary Category', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate primary categories with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove primary categories', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used primary categories', 'textdomain' ),
        'not_found'                  => __( 'No primary categories found.', 'textdomain' ),
        'menu_name'                  => __( 'Primary Categories', 'textdomain' ),
    );
    
    
    //Create the Primary Taxonomy Here
    register_taxonomy( 'primary', array('download'), array(
        'hierarchical' => true, 
        'labels' => $primary_labels,
        'show_admin_column' => true,
        'public' => true,
        //'rewrite' => false,
        'description' => 'Choose one',
        'rewrite' => array( 'slug' => 'primary', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'primary', 'download' ); // Better be safe than sorry
    
    
    ////////SECONDARY TAXONOMY////////
    
    
    // Labels for the Secondard Taxonomy
    $secondary_labels = array(
        'name'                       => _x( 'Secondary Categories', 'secondary', 'textdomain' ),
        'singular_name'              => _x( 'Secondary Category', 'secondary', 'textdomain' ),
        'search_items'               => __( 'Search Secondary Categories', 'textdomain' ),
        'popular_items'              => __( 'Popular Secondary Categories', 'textdomain' ),
        'all_items'                  => __( 'All Secondary Categories', 'textdomain' ),
        'parent_item'                => __( 'Parent Secondary Category', 'textdomain' ),
        'parent_item_colon'          => __( 'Parent Secondary Category:', 'textdomain' ),
        'edit_item'                  => __( 'Edit Secondary Category', 'textdomain' ),
        'update_item'                => __( 'Update Secondary Category', 'textdomain' ),
        'add_new_item'               => __( 'Add New Secondary Category', 'textdomain' ),
        'new_item_name'              => __( 'New Type Secondary Category', 'textdomain' ),
        'separate_items_with_commas' => __( 'Separate secondary categories with commas', 'textdomain' ),
        'add_or_remove_items'        => __( 'Add or remove secondary categories', 'textdomain' ),
        'choose_from_most_used'      => __( 'Choose from the most used secondary categories', 'textdomain' ),
        'not_found'                  => __( 'No secondary categories found.', 'textdomain' ),
        'menu_name'                  => __( 'Secondary Categories', 'textdomain' ),
    );
    
    
    //Create the Secondary Taxonomy Here
    register_taxonomy( 'secondary', array('download'), array(
        'hierarchical' => true, 
        'labels' => $secondary_labels,
        'show_admin_column' => true,
        'public' => true,
        //'rewrite' => false,
        'rewrite' => array( 'slug' => 'secondary', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'secondary', 'download' ); // Better be safe than sorry
    
    
    
    ////////TAG TAXONOMY////////
    
    
    //Create the Tag Taxonomy Here
    register_taxonomy( 'download_tag', array('download'), array(
        'hierarchical' => false, 
        'label' => 'Tags', 
        'singular_label' => 'Tag',
        'public' => true,
        'rewrite' => false,
        //'rewrite' => array( 'slug' => 'dl_tag', 'with_front'=> false )
        )
    );

    register_taxonomy_for_object_type( 'dl_tag', 'download' ); // Better be safe than sorry
    
    
    

}
add_action( 'init', 'register_download_post_type' );




/*add_action( 'admin_menu', 'register_media_selector_settings_page' );

function register_media_selector_settings_page() {
	add_submenu_page( 'options-general.php', 'Media Selector', 'Media Selector', 'manage_options', 'media-selector', 'media_selector_settings_page_callback' );
}*/











//Custom Meta Box Functionality

/*add_action( 'add_meta_boxes', 'product_price_box' );
function product_price_box() {
    add_meta_box( 
        'product_price_box', //The unique ID for the meta box - it does not have to match the function name
        __( 'Product Price', 'myplugin_textdomain' ), //The title of the meta box - visible to users
        'product_price_box_content', //The function which will display the contents of the box
        'download', //The post type the meta box belongs to
        'side', //The placement of the meta box
        'default' //The priority of the meta box - determines “how high” it is placed
    );
    
    function product_price_box_content( $post ) {
        wp_nonce_field( plugin_basename( __FILE__ ), 'product_price_box_content_nonce' );
        echo '<label for="product_price"></label>';
        echo '<input type="text" id="product_price" name="product_price" placeholder="enter a price" value="'. esc_attr( get_post_meta( $post->ID, 'product_price', true ) ) .'" />';
    }
    
}


add_action( 'save_post', 'product_price_box_save' );
function product_price_box_save( $post_id ) {

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
    return;

    if ( !wp_verify_nonce( $_POST['product_price_box_content_nonce'], plugin_basename( __FILE__ ) ) )
    return;

    if ( 'page' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
    return;
    } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
    return;
    }
    $product_price = $_POST['product_price'];
    update_post_meta( $post_id, 'product_price', $product_price );
    
}*/

/*

*
 * Add custom attachment metabox.
 
function add_custom_meta_boxes() {
	add_meta_box( 
		'wp_custom_attachment',
		'PDF File',
		'wp_custom_attachment',
		'download',
		'normal'
	) ;
    
    
}
add_action( 'add_meta_boxes', 'add_custom_meta_boxes' );





*/






/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-prh-downloads-deactivator.php
 */
function deactivate_plugin_name() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-prh-downloads-deactivator.php';
	Plugin_Name_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_plugin_name' );
register_deactivation_hook( __FILE__, 'deactivate_plugin_name' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-prh-downloads.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_plugin_name() {

	$plugin = new Plugin_Name();
	$plugin->run();

}
run_plugin_name();


require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/5afd7ef70252c4167e932b2f/',
    __FILE__,
    'prh-downloads',
    1
);