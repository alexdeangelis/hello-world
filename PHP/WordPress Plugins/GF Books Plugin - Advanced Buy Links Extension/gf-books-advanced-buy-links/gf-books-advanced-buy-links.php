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
 * Plugin Name:       GF Books Plugin: Advanced Buy Links Extension
 * Plugin URI:        http://goodmanfox.com
 * Description:       This plugin replaces the basic Buy Links fields in the GF Books Plugin with a more advanced Buy Links section with more fields & options. Needs the GF Books Plugin to work correctly.
 * Version:           1.0.1
 * Author:            Goodman Fox
 * Author URI:        http://goodmanfox.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       gf-books-advanced-buy-links
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
define( 'gf_books_advanced_buy_links_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-gf-books-advanced-buy-links-activator.php
 */
function activate_gf_books_advanced_buy_links() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gf-books-advanced-buy-links-activator.php';
	gf_books_advanced_buy_links_Activator::activate();
}


//If ACF is active, set up these fields in the book custom post type
if( class_exists('acf') ) {


    if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5b0ec3fd46462',
        'title' => 'Advanced Buy Links',
        'fields' => array(
            array(
                'key' => 'field_5b0ec4093fa0e',
                'label' => 'Region',
                'name' => 'gfbp_abl_region',
                'type' => 'repeater',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'collapsed' => '',
                'min' => 0,
                'max' => 0,
                'layout' => 'block',
                'button_label' => '',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5b0fc522bc13e',
                        'label' => 'Region Name',
                        'name' => 'gfbp_abl_region_name',
                        'type' => 'text',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => '',
                        'placeholder' => '',
                        'prepend' => '',
                        'append' => '',
                        'maxlength' => '',
                    ),
                    array(
                        'key' => 'field_5b0ec6b93fa0f',
                        'label' => 'Region Book Cover',
                        'name' => 'gfbp_abl_region_book_cover',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'array',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'min_width' => '',
                        'min_height' => '',
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                    array(
                        'key' => 'field_5b0ec8393fa10',
                        'label' => 'Region Book Type',
                        'name' => 'gfbp_abl_region_book_type',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'collapsed' => '',
                        'min' => 0,
                        'max' => 0,
                        'layout' => 'block',
                        'button_label' => '',
                        'sub_fields' => array(
                            array(
                                'key' => 'field_5b0ec8533fa11',
                                'label' => 'Type Name',
                                'name' => 'gfbp_abl_type_name',
                                'type' => 'text',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'maxlength' => '',
                            ),
                            array(
                                'key' => 'field_5b0fc582bc13f',
                                'label' => 'Type Links',
                                'name' => 'gfbp_abl_type_links',
                                'type' => 'repeater',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'collapsed' => '',
                                'min' => 0,
                                'max' => 0,
                                'layout' => 'table',
                                'button_label' => '',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'field_5b0fc5c0bc140',
                                        'label' => 'Retailer',
                                        'name' => 'gfbp_abl_retailer',
                                        'type' => 'text',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                        'prepend' => '',
                                        'append' => '',
                                        'maxlength' => '',
                                    ),
                                    array(
                                        'key' => 'field_5b0fc5cabc141',
                                        'label' => 'URL',
                                        'name' => 'gfbp_abl_url',
                                        'type' => 'url',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'default_value' => '',
                                        'placeholder' => '',
                                    ),
                                    array(
                                        'key' => 'field_5b0fc5f3bc142',
                                        'label' => 'Retailer Logo',
                                        'name' => 'gfbp_abl_retailer_logo',
                                        'type' => 'image',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'return_format' => 'array',
                                        'preview_size' => 'medium',
                                        'library' => 'all',
                                        'min_width' => '',
                                        'min_height' => '',
                                        'min_size' => '',
                                        'max_width' => '',
                                        'max_height' => '',
                                        'max_size' => '',
                                        'mime_types' => '',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
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

    function acf_abl_admin_notice__error() {
        $class = 'notice notice-error';
        $message = __( 'To get the most out of the Advanced Buy Links Extension Plugin, please install both Advanced Custom Fields & the GF Books Plugin.', 'sample-text-domain' );

        printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
    }
    add_action( 'admin_notices', 'acf_abl_admin_notice__error' );

}









/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-gf-books-advanced-buy-links-deactivator.php
 */
function deactivate_gf_books_advanced_buy_links() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-gf-books-advanced-buy-links-deactivator.php';
	gf_books_advanced_buy_links_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_gf_books_advanced_buy_links' );
register_deactivation_hook( __FILE__, 'deactivate_gf_books_advanced_buy_links' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-gf-books-advanced-buy-links.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_gf_books_advanced_buy_links() {

	$plugin = new gf_books_advanced_buy_links();
	$plugin->run();

}
run_gf_books_advanced_buy_links();



require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/5b0ff406e47ae1316aafe75a/',
    __FILE__,
    'gf-books-advanced-buy-links',
    1
);