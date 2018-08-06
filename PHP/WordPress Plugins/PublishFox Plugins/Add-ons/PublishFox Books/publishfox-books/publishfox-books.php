<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           PublishFox_Books
 *
 * @wordpress-plugin
 * Plugin Name:       PublishFox Books
 * Plugin URI:        http://publishfox.co.uk/
 * Description:       This PublishFox Add-on turns on the books custom post type & enables fields depending on which PublishFox core plugin is installed.
 * Version:           1.0.0
 * Author:            PublishFox
 * Author URI:        http://publishfox.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       publishfox-books
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
define( 'PUBLISHFOX_BOOKS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-publishfox-books-activator.php
 */
function activate_publishfox_books() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-books-activator.php';
	PublishFox_Books_Activator::activate();
}



//Register the 'Books' custom post type
require_once plugin_dir_path( __FILE__ ) . 'includes/_custom_post_types/books.php';

//Creates the description fields within the books custom post type
require_once plugin_dir_path( __FILE__ ) . 'includes/_acf_fields/books/book-description.php';

//Creates the purchase links fields within the books custom post type
require_once plugin_dir_path( __FILE__ ) . 'includes/_acf_fields/books/purchase-links.php';

//Creates the video fields within the books custom post type
require_once plugin_dir_path( __FILE__ ) . 'includes/_acf_fields/books/video.php';

//Creates the extracts fields within the books custom post type
require_once plugin_dir_path( __FILE__ ) . 'includes/_acf_fields/books/extracts.php';




//This finds whihc plugins are currently active
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

//If the PublishFox Series plugins is active, do this...

if (
    is_plugin_active( 'publishfox-series/publishfox-series.php' ) ) {

    //Creates the series relationship fields within the books custom post type
    require_once plugin_dir_path( __FILE__ ) . 'includes/_acf_fields/books/series-relationship.php';
    
} else {
    
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-publishfox-books-deactivator.php
 */
function deactivate_publishfox_books() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-books-deactivator.php';
	PublishFox_Books_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_publishfox_books' );
register_deactivation_hook( __FILE__, 'deactivate_publishfox_books' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-books.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_publishfox_books() {

	$plugin = new PublishFox_Books();
	$plugin->run();

}
run_publishfox_books();
