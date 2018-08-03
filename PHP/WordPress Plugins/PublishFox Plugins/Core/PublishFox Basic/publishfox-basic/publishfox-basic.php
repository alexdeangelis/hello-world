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
 * @package           PublishFox_Basic
 *
 * @wordpress-plugin
 * Plugin Name:       PublishFox Basic
 * Plugin URI:        http://example.com/publishfox-basic-uri/
 * Description:       PublishFox Basic creates the Layouts custom post type.
 * Version:           1.0.0
 * Author:            PublishFox
 * Author URI:        http://publishfox.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       publishfox-basic
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
define( 'PUBLISHFOX_BASIC_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-publishfox-basic-activator.php
 */
function activate_publishfox_basic() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-basic-activator.php';
	PublishFox_Basic_Activator::activate();
}



//Register the 'Layout' custom post type
require_once plugin_dir_path( __FILE__ ) . 'includes/_custom_post_types/layout.php';

//Creates a 'Home Page' page & sets it up as the Front Page
require_once plugin_dir_path( __FILE__ ) . 'includes/_pages/page-home-page.php';
register_activation_hook(__FILE__, 'add_home_page_page');

//Creates a 'Home Page Layout' post in the Layouts custom post type on plugin activation.
require_once plugin_dir_path( __FILE__ ) . 'includes/_layouts/layout-home-page-layout.php';
register_activation_hook(__FILE__, 'add_home_page_layout');


//Get the flexible field logic 
require_once plugin_dir_path( __FILE__ ) . 'includes/_field_logic/field-logic.php';





















/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-publishfox-basic-deactivator.php
 */
function deactivate_publishfox_basic() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-basic-deactivator.php';
	PublishFox_Basic_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_publishfox_basic' );
register_deactivation_hook( __FILE__, 'deactivate_publishfox_basic' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-basic.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_publishfox_basic() {

	$plugin = new PublishFox_Basic();
	$plugin->run();

}
run_publishfox_basic();
