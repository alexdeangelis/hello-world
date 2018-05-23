<?php

// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

class GF_Admin_Ajax {

    // Instance of this class.
    protected $plugin_slug = 'livemesh_bb_addons';
    protected $ajax_data;
    protected $ajax_msg;


    public function __construct() {

        // retrieve all ajax string to localize
        $this->localize_strings();
        $this->init_hooks();

    }

    public function init_hooks() {

        // Register backend ajax action
        add_action('wp_ajax_gf_admin_ajax', array($this, 'gf_admin_ajax'));
        // Load admin ajax js script
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin_scripts'));

    }

    public function ajax_response($success = true, $message = null, $content = null) {

        $response = array(
            'success' => $success,
            'message' => $message,
            'content' => $content
        );

        return $response;

    }

    public function gf_check_nonce() {

        // retrieve nonce
        $nonce = (isset($_POST['nonce'])) ? $_POST['nonce'] : $_GET['nonce'];

        // nonce action for the grid
        $action = 'gf_admin_nonce';

        // check ajax nounce
        if (!wp_verify_nonce($nonce, $action)) {
            // build response
            $response = $this->ajax_response(false, __('Sorry, an error occurred. Please refresh the page.', 'gf-grid-module'));
            // die and send json error response
            wp_send_json($response);
        }

    }

    public function gf_admin_ajax() {

        // check the nonce
        $this->gf_check_nonce();

        // retrieve data
        $this->ajax_data = (isset($_POST)) ? $_POST : $_GET;

        // retrieve function
        $func = $this->ajax_data['func'];

        switch ($func) {
            case 'gf_save_settings':
                $response = $this->save_settings_callback();
                break;
            case 'gf_reset_settings':
                $response = $this->save_settings_callback();
                break;
            default:
                $response = ajax_response(false, __('Sorry, an unknown error occurred...', 'gf-grid-module'), null);
                break;
        }

        // send json response and die
        wp_send_json($response);

    }

    public function save_settings_callback() {

        // retrieve data from jquery
        $setting_data = $this->ajax_data['setting_data'];

        gf_update_options($setting_data);

        $template = false;
        // get new restore global settings panel
        if ($this->ajax_data['reset']) {
            ob_start();
            require_once('views/settings.php');
            $template = ob_get_clean();
        }

        $response = $this->ajax_response(true, $this->ajax_data['reset'], $template);
        return $response;

    }


    public function localize_strings() {
        
        $this->ajax_msg = array(
            'box_icons' => array(
                'before' => '<i class="tg-info-box-icon dashicons dashicons-admin-generic"></i>',
                'success' => '<i class="tg-info-box-icon dashicons dashicons-yes"></i>',
                'error' => '<i class="tg-info-box-icon dashicons dashicons-no-alt"></i>'
            ),
            'box_messages' => array(

                'gf_save_settings' => array(
                    'before' => __('Saving plugin settings', 'gf-grid-module'),
                    'success' => __('Plugin settings Saved', 'gf-grid-module'),
                    'error' => __('Sorry, an error occurs while saving settings...', 'gf-grid-module')
                ),
                'gf_reset_settings' => array(
                    'before' => __('Resetting plugin settings', 'gf-grid-module'),
                    'success' => __('Plugin settings resetted', 'gf-grid-module'),
                    'error' => __('Sorry, an error occurred while resetting settings', 'gf-grid-module')
                ),
            )
        );

    }

    public function admin_nonce() {

        return array(
            'url' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('gf_admin_nonce')
        );

    }

    public function enqueue_admin_scripts() {

        $screen = get_current_screen();

        // enqueue only in grid panel
        if (strpos($screen->id, $this->plugin_slug) !== false) {
            // merge nonce to translatable strings
            $strings = array_merge($this->admin_nonce(), $this->ajax_msg);

            // Use minified libraries if GF_SCRIPT_DEBUG is turned off
            $suffix = (defined('GF_SCRIPT_DEBUG') && GF_SCRIPT_DEBUG) ? '' : '.min';

            // register and localize script for ajax methods
            wp_register_script('gf-admin-ajax-scripts', GF_PLUGIN_URL . 'admin/assets/js/gf-admin-ajax' . $suffix . '.js', array(), GF_VERSION, true);
            wp_enqueue_script('gf-admin-ajax-scripts');

            wp_localize_script('gf-admin-ajax-scripts', 'gf_admin_global_var', $strings);

        }
    }

}

new GF_Admin_Ajax;