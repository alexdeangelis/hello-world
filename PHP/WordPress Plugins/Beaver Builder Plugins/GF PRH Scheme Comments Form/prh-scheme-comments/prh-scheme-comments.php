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
 * Plugin Name:       GF PRH The Scheme: Comment Field Label Updater & IP Address Remover
 * Plugin URI:        http://example.com/prh-scheme-comments-uri/
 * Description:       This plugin is specifically for The Scheme website when using a Beaver Builder Theme. It replaces the comments.php file used in the active theme in order to rename the comment form title & fields. It also stops the IP address being stored. Tested on Beaver Builder Theme; Version: 1.6.5.1
 * Version:           1.1.1
 * Author:            Goodman Fox
 * Author URI:        https://goodmanfox.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       prh-scheme-comments
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
define( 'PRH_SCHEME_COMMENTS_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-prh-scheme-comments-activator.php
 */
function activate_prh_scheme_comments() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-prh-scheme-comments-activator.php';
	PRH_Scheme_Comments_Activator::activate();
}



//Changes the file used for comments
add_filter( 'comments_template', function ( $template ) {
    //return '/absolute/path/to/your/comments.php';
    return plugin_dir_path( __FILE__ ) . 'includes/new-comments.php';
});





//Stops the IP address from being stored on the database when a comment is submitted
function wpb_remove_commentsip( $comment_author_ip ) {
  return '';
}
add_filter( 'pre_comment_user_ip', 'wpb_remove_commentsip' );




/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-prh-scheme-comments-deactivator.php
 */
function deactivate_prh_scheme_comments() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-prh-scheme-comments-deactivator.php';
	PRH_Scheme_Comments_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_prh_scheme_comments' );
register_deactivation_hook( __FILE__, 'deactivate_prh_scheme_comments' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-prh-scheme-comments.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_prh_scheme_comments() {

	$plugin = new PRH_Scheme_Comments();
	$plugin->run();

}
run_prh_scheme_comments();


require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/5b1fa1b6d9fe405c71436c9a/',
    __FILE__,
    'prh-scheme-comments',
    1
);