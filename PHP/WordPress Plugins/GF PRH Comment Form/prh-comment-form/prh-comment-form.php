<?php

/**
 * Plugin Name: GF PRH Advanced Comment Form
 * Description: Easily customize and optimize the standard comment form & also removes the IP address from the commenter. Builds on the Advanced Comment Form created by Thomas Maier - http://webgilde.com/. That plugin can be found here: https://wordpress.org/plugins/comment-form/
 * Version: 1.1.0
 * Plugin URI: https://goodmanfox.com/
 * Author: Goodman Fox
 * Author URI: https://www.goodmanfox.com/
 * License: GPL v2 or later
 *

  This program is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  (at your option) any later version.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 */
//avoid direct calls to this file
if (!function_exists('add_action')) {
    header('Status: 403 Forbidden');
    header('HTTP/1.1 403 Forbidden');
    exit();
}

define('CFVERSION', '1.2.0');
define('CFDIR', basename(dirname(__FILE__)));
define('CFPATH', plugin_dir_path(__FILE__));

/**
 * load classes
 */
if (!class_exists('Comment_Form_Main')) {
    require_once( plugin_dir_path(__FILE__) . 'inc/comment_form_main.php' );
}

if (is_admin() && (!defined('DOING_AJAX') || !DOING_AJAX )) {
    if (!class_exists('Comment_Form_Admin')) {
        require_once( plugin_dir_path(__FILE__) . 'admin/comment_form_admin.php' );
    }
    $cf_admin = new Comment_Form_Admin();
} elseif (!is_admin() && (!defined('DOING_AJAX') || !DOING_AJAX )) {
    if (!class_exists('Comment_Form_Frontend')) {
        require_once( plugin_dir_path(__FILE__) . 'frontend/comment_form_frontend.php' );
    }
    $cf_frontend = new Comment_Form_Frontend();
}

//Stop the IP address of commenters from being stored
function wpb_remove_commentsip( $comment_author_ip ) {
  return '';
}
add_filter( 'pre_comment_user_ip', 'wpb_remove_commentsip' );


//Change the name of the commenter here...
function wpb_remove_commentsauthor( $comment_author_author ) {
    
    $comment_form_settings = get_option('commentform_settings');
    
    //If the Name Field Setting 'Store first character' is selected, do this... 
    if ($comment_form_settings['name_first_character']) {
        //Gets the first character summitted in the name field
        return mb_substr($comment_author_author, 0, 1, 'utf-8');
    } else {
        //Otherwise return empty, which will default to anonymous
        return '';
    }
    
}
add_filter( 'pre_comment_author_name', 'wpb_remove_commentsauthor' );


require 'plugin_update_check.php';
$MyUpdateChecker = new PluginUpdateChecker_2_0 (
    'https://kernl.us/api/v1/updates/5b0fb659046d9c18d423485d/',
    __FILE__,
    'prh-comment-form',
    1
);