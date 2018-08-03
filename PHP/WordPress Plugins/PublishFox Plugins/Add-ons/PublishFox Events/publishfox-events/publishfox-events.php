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
 * @package           PublishFox_Events
 *
 * @wordpress-plugin
 * Plugin Name:       PublishFox Events
 * Plugin URI:        http://publishfox.co.uk/
 * Description:       This PublishFox Add-on turns on the Events custom post type & enables fields depending on which PublishFox core plugin is installed.
 * Version:           1.0.0
 * Author:            PublishFox
 * Author URI:        http://publishfox.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       publishfox-events
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
define( 'PUBLISHFOX_EVENTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-publishfox-events-activator.php
 */
function activate_publishfox_events() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-events-activator.php';
	PublishFox_Events_Activator::activate();
}


//Register the 'Events' custom post type
require_once plugin_dir_path( __FILE__ ) . 'includes/_custom_post_types/events.php';

//Get the field logic
require_once plugin_dir_path( __FILE__ ) . 'includes/_field_logic/field-logic.php';

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-publishfox-events-deactivator.php
 */
function deactivate_publishfox_events() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-events-deactivator.php';
	PublishFox_Events_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_publishfox_events' );
register_deactivation_hook( __FILE__, 'deactivate_publishfox_events' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-events.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_publishfox_events() {

	$plugin = new PublishFox_Events();
	$plugin->run();

}
run_publishfox_events();
