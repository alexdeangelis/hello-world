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
 * @since             1.0.0
 * @package           prh_atm_plugin
 *
 * @wordpress-plugin
 * Plugin Name:       PRH Adobe Tag Manager Plugin
 * Plugin URI:        http://goodmanfox.com/
 * Description:       This is a plugin to add the Adobe Tag Manager code to a PRH website.
 * Version:           1.5.0
 * Author:            Goodman Fox
 * Author URI:        http://goodmanfox.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       prh-atm-plugin
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
define( 'PRH_ATM_PLUGIN_VERSION', '0.0.1' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-prh-atm-plugin-activator.php
 */
function activate_prh_atm_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-prh-atm-plugin-activator.php';
	PRH_ATM_Plugin_Activator::activate();
}


//Add Adobe Tag Manager Setting on the Settings -> General Page


/* Admin init */
add_action( 'admin_init', 'my_settings_init' );
 
/* Settings Init */
function my_settings_init(){
 
    /* Register Settings */
    register_setting(
        'general',             // Options group
        'atm-option',      // Option name/database
        'my_settings_sanitize' // sanitize callback function
    );
 
    /* Create settings section */
    /*add_settings_section(
        'my-section-id',                   // Section ID
        'Adobe Tag Manager',  // Section title
        'my_settings_section_description', // Section callback function
        'general'                          // Settings page slug
    );*/
 
    /* Create settings field */
    add_settings_field(
        'atm-field-id',       // Field ID
        'Adobe Tag Manager',       // Field title 
        'my_settings_field_callback', // Field callback function
        'general'//,                    // Settings page slug
        //'my-section-id'               // Section ID
    );
}
 
/* Sanitize Callback Function */
function my_settings_sanitize( $input ){
    return isset( $input ) ? true : false;
}
 
/* Setting Section Description */
function my_settings_section_description(){
    //echo wpautop( "This aren't the Settings you're looking for. Move along." );
}
 
/* Settings Field Callback */
function my_settings_field_callback(){
    
    $checked = get_option( 'atm-option' );
    //If atm-option is set as false, change it to 0. This way the checkbox is defaulted on not ticked.
    if ($checked == false) $checked = '0';
    
    ?>
    <label for="droid-identification">
        <input id="droid-identification" type="checkbox" value="1" name="atm-option" <?php checked( $checked ); ?>> Select to turn on the production code for Adobe Tag Manager
    </label>
    <?php
    
    //var_dump( get_option( 'my-option-name' ) );
}



if ( get_option( 'atm-option' ) == 1 ) {
    
    add_action( 'wp_head', 'atm_script_header_production' );
    function atm_script_header_production() {
        print "<!-- ATM Production Script --> \n";
        print "<script type='text/javascript' src='https://assets.adobedtm.com/728c4c54f9d7c89d573d84820d40aaef5cb67c98/satelliteLib-26267774f1eecea71ea9e50d9337d164a04c3086.js'></script> \n";
        print "<!-- End: ATM Production Script --> \n";
    }
    
} else {
    
    //Add the ATM Staging script to wp_head

    add_action( 'wp_head', 'atm_script_header_staging' );
    function atm_script_header_staging() {
        print "<!-- ATM Staging Script --> \n";
        print "<script type='text/javascript' src='https://assets.adobedtm.com/728c4c54f9d7c89d573d84820d40aaef5cb67c98/satelliteLib-26267774f1eecea71ea9e50d9337d164a04c3086-staging.js?ver=1.0.0'></script> \n";
        print "<!-- End: ATM Staging Script --> \n";
    }
    
}



/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-prh-atm-plugin-deactivator.php
 */
function deactivate_prh_atm_plugin() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-prh-atm-plugin-deactivator.php';
	PRH_ATM_Plugin_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_prh_atm_plugin' );
register_deactivation_hook( __FILE__, 'deactivate_prh_atm_plugin' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-prh-atm-plugin.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_prh_atm_plugin() {

	$plugin = new PRH_ATM_Plugin();
	$plugin->run();

}
run_prh_atm_plugin();


require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
   'https://kernl.us/api/v1/updates/5ab13c584304ee0558fc19f1/',
   __FILE__,
   'prh-atm-plugin',
   1
);