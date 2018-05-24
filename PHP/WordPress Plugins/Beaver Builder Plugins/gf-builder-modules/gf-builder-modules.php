<?php

/**
 * Plugin Name: GF Builder Modules
 * Plugin URI: https://www.goodmanfox.com
 * Description: Custom modules for the Beaver Builder Plugin.
 * Version: 0.7.15
 * Author: Goodman Fox
 * Author URI: https://www.goodmanfox.com
 */
define( 'MY_MODULES_DIR', plugin_dir_path( __FILE__ ) );
define( 'MY_MODULES_URL', plugins_url( '/', __FILE__ ) );
function my_load_module_examples() {
    if ( class_exists( 'FLBuilder' ) ) {
        require_once 'gf-text-image-left-text/gf-text-image-left-text.php';
        require_once 'gf-text-image-right-text/gf-text-image-right-text.php';
        require_once 'gf-quote/gf-quote.php';
        require_once 'gf-text-link/gf-text-link.php';
        require_once 'gf-video/gf-video.php';
        require_once 'gf-icon-circle/gf-icon-circle.php';
        require_once 'gf-icon/gf-icon.php';
        require_once 'gf-downloads/gf-downloads.php';
        require_once 'gf-genre-slider-right/gf-genre-slider-right.php';
        require_once 'gf-genre-slider-left/gf-genre-slider-left.php';
        require_once 'gf-text-three-images/gf-text-three-images.php';
        require_once 'gf-graphs-demographics/gf-graphs-demographics.php';
        require_once 'gf-graphs-retailers/gf-graphs-retailers.php';
        require_once 'gf-header-flag/gf-header-flag.php';
        require_once 'gf-team-carousel/gf-team-carousel.php';
    }
}
add_action( 'init', 'my_load_module_examples' );


require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/5afeeba05baedd614eff70ad/',
    __FILE__,
    'gf-builder-modules',
    1
);