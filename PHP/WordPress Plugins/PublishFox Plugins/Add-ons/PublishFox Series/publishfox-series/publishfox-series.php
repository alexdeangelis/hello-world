<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://publishfox.co.uk/
 * @since             1.0.0
 * @package           PublishFox_Series
 *
 * @wordpress-plugin
 * Plugin Name:       PublishFox Series
 * Plugin URI:        http://publishfox.co.uk/
 * Description:       This PublishFox Add-on turns on the series custom post type & enables fields depending on which PublishFox core plugin is installed.
 * Version:           1.0.0
 * Author:            PublishFox
 * Author URI:        http://publishfox.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       publishfox-series
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
define( 'PUBLISHFOX_SERIES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-publishfox-series-activator.php
 */
function activate_publishfox_series() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-series-activator.php';
	PublishFox_Series_Activator::activate();
}

//Register the 'Series' custom post type
require_once plugin_dir_path( __FILE__ ) . 'includes/_custom_post_types/series.php';

//Creates the book relationship fields within the books custom post type
require_once plugin_dir_path( __FILE__ ) . 'includes/_acf_fields/series/book-relationship.php';

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-publishfox-series-deactivator.php
 */
function deactivate_publishfox_series() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-series-deactivator.php';
	PublishFox_Series_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_publishfox_series' );
register_deactivation_hook( __FILE__, 'deactivate_publishfox_series' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-series.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_publishfox_series() {

	$plugin = new PublishFox_Series();
	$plugin->run();

}
run_publishfox_series();
