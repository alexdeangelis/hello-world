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
 * @since             0.5.2
 * @package           GF PRH Team Member CPT & Fields
 *
 * @wordpress-plugin
 * Plugin Name:       GF PRH Team Member CPT & Fields
 * Plugin URI:        http://goodmanfox.com
 * Description:       This plugin creates a Team Members custom post type & creates fields for the Team Members CPT. This plugin does not need Advanced Custom Fields for full functionality.
 * Version:           0.5.2
 * Author:            Goodman Fox
 * Author URI:        http://goodmanfox.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       prh-team-member
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
define( 'PRH_TEAM_MEMBER_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-prh-team-member-activator.php
 */
function activate_prh_team_member() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-prh-team-member-activator.php';
	PRH_Team_Member_Activator::activate();
}





//This is what the plugin does...


    
//Register the team member custom post type
function register_team_member_post_type() {

    $labels = array(
        'name'               => 'Team Members',
        'singular_name'      => 'Team Member',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Team Member',
        'edit_item'          => 'Edit Team Member',
        'new_item'           => 'New Team Member',
        'all_items'          => 'All Team Members',
        'view_item'          => 'View Team Member',
        'search_items'       => 'Search Team Members',
        'not_found'          =>  'No team members found',
        'not_found_in_trash' => 'No team members found in Trash',
        'parent_item_colon'  => '',
        'menu_name'          => 'Team Members'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'team-member' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'menu_icon'          => 'dashicons-groups',
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
    );

    register_post_type( 'team-member', $args );
    

}
add_action( 'init', 'register_team_member_post_type' );




////////PUBLISHING HOUSE TAXONOMY////////


// Labels for the Publishing House Taxonomy
$publishing_house_labels = array(
    'name'                       => _x( 'Publishing Houses', 'publishing_house', 'textdomain' ),
    'singular_name'              => _x( 'Publishing House', 'publishing_house', 'textdomain' ),
    'search_items'               => __( 'Search Publishing Houses', 'textdomain' ),
    'popular_items'              => __( 'Popular Publishing Houses', 'textdomain' ),
    'all_items'                  => __( 'All Publishing Houses', 'textdomain' ),
    'parent_item'                => __( 'Parent Publishing House', 'textdomain' ),
    'parent_item_colon'          => __( 'Parent Publishing House:', 'textdomain' ),
    'edit_item'                  => __( 'Edit Publishing House', 'textdomain' ),
    'update_item'                => __( 'Update Publishing House', 'textdomain' ),
    'add_new_item'               => __( 'Add New Publishing House', 'textdomain' ),
    'new_item_name'              => __( 'New Publishing House', 'textdomain' ),
    'separate_items_with_commas' => __( 'Separate publishing houses with commas', 'textdomain' ),
    'add_or_remove_items'        => __( 'Add or remove publishing houses', 'textdomain' ),
    'choose_from_most_used'      => __( 'Choose from the most used publishing houses', 'textdomain' ),
    'not_found'                  => __( 'No publishing houses found.', 'textdomain' ),
    'menu_name'                  => __( 'Publishing Houses', 'textdomain' ),
);


//Create the Publishing House Here
register_taxonomy( 'publishing_house', array('team-member'), array(
    'hierarchical' => true, 
    'labels' => $publishing_house_labels,
    'show_admin_column' => true,
    'public' => true,
    'rewrite' => false,
    )
);

register_taxonomy_for_object_type( 'publishing_house', 'team-member' ); // Better be safe than sorry




//Custom Meta Box Functionality

//ADD JOB TITLE METABOX

add_action( 'add_meta_boxes', 'job_title_box' );
function job_title_box() {
    add_meta_box( 
        'job_title_box', //The unique ID for the meta box - it does not have to match the function name
        __( 'Job Title', 'myplugin_textdomain' ), //The title of the meta box - visible to users
        'job_title_box_content', //The function which will display the contents of the box
        'team-member', //The post type the meta box belongs to
        'side', //The placement of the meta box
        'default' //The priority of the meta box - determines “how high” it is placed
    );
    
    function job_title_box_content( $post ) {
        wp_nonce_field( plugin_basename( __FILE__ ), 'job_title_box_content_nonce' );
        echo '<label for="job_title"></label>';
        echo '<input type="text" id="job_title" name="job_title" placeholder="Enter a job title" value="'. esc_attr( get_post_meta( $post->ID, 'job_title', true ) ) .'" />';
    }
    
}


add_action( 'save_post', 'job_title_box_save' );
function job_title_box_save( $post_id ) {

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
    return;

    if ( !wp_verify_nonce( $_POST['job_title_box_content_nonce'], plugin_basename( __FILE__ ) ) )
    return;

    if ( 'page' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
    return;
    } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
    return;
    }
    $job_title = $_POST['job_title'];
    update_post_meta( $post_id, 'job_title', $job_title );
    
}


//ADD EMAIL METABOX

add_action( 'add_meta_boxes', 'email_box' );
function email_box() {
    add_meta_box( 
        'email_box', //The unique ID for the meta box - it does not have to match the function name
        __( 'Email', 'myplugin_textdomain' ), //The title of the meta box - visible to users
        'email_box_content', //The function which will display the contents of the box
        'team-member', //The post type the meta box belongs to
        'side', //The placement of the meta box
        'default' //The priority of the meta box - determines “how high” it is placed
    );
    
    function email_box_content( $post ) {
        wp_nonce_field( plugin_basename( __FILE__ ), 'email_box_content_nonce' );
        echo '<label for="email"></label>';
        echo '<input type="text" id="email" name="email" placeholder="Enter an email" value="'. esc_attr( get_post_meta( $post->ID, 'email', true ) ) .'" />';
    }
    
}


add_action( 'save_post', 'email_box_save' );
function email_box_save( $post_id ) {

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
    return;

    if ( !wp_verify_nonce( $_POST['email_box_content_nonce'], plugin_basename( __FILE__ ) ) )
    return;

    if ( 'page' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
    return;
    } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
    return;
    }
    $email = $_POST['email'];
    update_post_meta( $post_id, 'email', $email );
    
}


//ADD PHONE NUMBER METABOX

add_action( 'add_meta_boxes', 'phone_number_box' );
function phone_number_box() {
    add_meta_box( 
        'phone_number_box', //The unique ID for the meta box - it does not have to match the function name
        __( 'Phone Number', 'myplugin_textdomain' ), //The title of the meta box - visible to users
        'phone_number_box_content', //The function which will display the contents of the box
        'team-member', //The post type the meta box belongs to
        'side', //The placement of the meta box
        'default' //The priority of the meta box - determines “how high” it is placed
    );
    
    function phone_number_box_content( $post ) {
        wp_nonce_field( plugin_basename( __FILE__ ), 'phone_number_box_content_nonce' );
        echo '<label for="phone_number"></label>';
        echo '<input type="text" id="phone_number" name="phone_number" placeholder="Enter a phone number" value="'. esc_attr( get_post_meta( $post->ID, 'phone_number', true ) ) .'" />';
    }
    
}


add_action( 'save_post', 'phone_number_box_save' );
function phone_number_box_save( $post_id ) {

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
    return;

    if ( !wp_verify_nonce( $_POST['phone_number_box_content_nonce'], plugin_basename( __FILE__ ) ) )
    return;

    if ( 'page' == $_POST['post_type'] ) {
    if ( !current_user_can( 'edit_page', $post_id ) )
    return;
    } else {
    if ( !current_user_can( 'edit_post', $post_id ) )
    return;
    }
    $phone_number = $_POST['phone_number'];
    update_post_meta( $post_id, 'phone_number', $phone_number );
    
}





/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-prh-team-member-deactivator.php
 */
function deactivate_prh_team_member() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-prh-team-member-deactivator.php';
	PRH_Team_Member_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_prh_team_member' );
register_deactivation_hook( __FILE__, 'deactivate_prh_team_member' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-prh-team-member.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_prh_team_member() {

	$plugin = new PRH_Team_Member();
	$plugin->run();

}
run_prh_team_member();



require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/5afeb39c2b52b32c82ee5b0c/',
    __FILE__,
    'prh-team-member',
    1
);