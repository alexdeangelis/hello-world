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
 * @package           PublishFox_Author
 *
 * @wordpress-plugin
 * Plugin Name:       PublishFox Author
 * Plugin URI:        http://publishfox.co.uk/
 * Description:       This PublishFox Add-on turns on the Author custom post type & enables fields depending on which PublishFox core plugin is installed.
 * Version:           1.0.0
 * Author:            PublishFox
 * Author URI:        http://publishfox.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       publishfox-author
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
define( 'PUBLISHFOX_AUTHOR_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-publishfox-author-activator.php
 */
function activate_publishfox_author() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-author-activator.php';
	PublishFox_Author_Activator::activate();
}


//Register the 'Authors' custom post type
require_once plugin_dir_path( __FILE__ ) . 'includes/_custom_post_types/authors.php';



/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-publishfox-author-deactivator.php
 */
function deactivate_publishfox_author() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-author-deactivator.php';
	PublishFox_Author_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_publishfox_author' );
register_deactivation_hook( __FILE__, 'deactivate_publishfox_author' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-publishfox-author.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_publishfox_author() {

	$plugin = new PublishFox_Author();
	$plugin->run();

}
run_publishfox_author();
