<?php
/**
 * Plugin Name: GF Grid Module
 * Plugin URI: https://www.goodmanfox.com
 * Description: A custom grid module for the Beaver Builder Plugin.
 * Author: Goodman Fox
 * Author URI: https://www.goodmanfox.com
 * License: GPL3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
 * Version: 0.0.1
 *
 * GF Grid Module is distributed under the terms of the GNU
 * General Public License as published by the Free Software Foundation,
 * either version 2 of the License, or any later version.
 *
 * GF Grid Module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with GF Grid Module. If not, see <http://www.gnu.org/licenses/>.
 *
 */

// Exit if accessed directly
if (!defined('ABSPATH'))
    exit;

if (!class_exists('GF_Grid_Module')) :

    /**
     * Main GF_Grid_Module Class
     *
     */
    final class GF_Grid_Module {

        /** Singleton *************************************************************/

        private static $instance;

        /**
         * Main GF_Grid_Module Instance
         *
         * Insures that only one instance of GF_Grid_Module exists in memory at any one
         * time. Also prevents needing to define globals all over the place.
         */
        public static function instance() {

            if (!isset(self::$instance) && !(self::$instance instanceof GF_Grid_Module)) {

                self::$instance = new GF_Grid_Module;

                self::$instance->setup_constants();

                self::$instance->includes();

                self::$instance->hooks();

            }
            return self::$instance;
        }

        /**
         * Throw error on object clone
         *
         * The whole idea of the singleton design pattern is that there is a single
         * object therefore, we don't want the object to be cloned.
         */
        public function __clone() {
            // Cloning instances of the class is forbidden
            _doing_it_wrong(__FUNCTION__, __('Cheatin&#8217; huh?', 'gf-grid-module'), '1.5.2');
        }

        /**
         * Disable unserializing of the class
         *
         */
        public function __wakeup() {
            // Unserializing instances of the class is forbidden
            _doing_it_wrong(__FUNCTION__, __('Cheatin&#8217; huh?', 'gf-grid-module'), '1.5.2');
        }

        /**
         * Setup plugin constants
         *
         */
        private function setup_constants() {

            // Plugin version
            if (!defined('GF_VERSION')) {
                define('GF_VERSION', '1.0.0');
            }

            // Plugin Folder Path
            if (!defined('GF_PLUGIN_DIR')) {
                define('GF_PLUGIN_DIR', plugin_dir_path(__FILE__));
            }

            // Plugin Folder URL
            if (!defined('GF_PLUGIN_URL')) {
                define('GF_PLUGIN_URL', plugin_dir_url(__FILE__));
            }

            // Plugin Folder Path
            if (!defined('GF_ADDONS_DIR')) {
                define('GF_ADDONS_DIR', plugin_dir_path(__FILE__) . 'includes/modules/');
            }

            // Plugin Folder Path
            if (!defined('GF_ADDONS_URL')) {
                define('GF_ADDONS_URL', plugin_dir_url(__FILE__) . 'includes/modules/');
            }

            // Admin Folder Path
            if (!defined('GF_ADMIN_DIR')) {
                define('GF_ADMIN_DIR', plugin_dir_path(__FILE__) . 'admin/');
            }

            // Admin Folder URL
            if (!defined('GF_ADMIN_URL')) {
                define('GF_ADMIN_URL', plugin_dir_url(__FILE__) . 'admin/');
            }

            // Plugin Root File
            if (!defined('GF_PLUGIN_FILE')) {
                define('GF_PLUGIN_FILE', __FILE__);
            }

            // Plugin Help Page URL
            if (!defined('GF_PLUGIN_HELP_URL')) {
                define('GF_PLUGIN_HELP_URL', admin_url() . 'admin.php?page=gf_grid_module_documentation');
            }

            $this->setup_debug_constants();
        }

        private function setup_debug_constants() {

            $enable_debug = false;

            $settings = get_option('gf_settings');

            if ($settings && isset($settings['gf_enable_debug']) && $settings['gf_enable_debug'] == "true")
                $enable_debug = true;

            // Enable script debugging
            if (!defined('GF_SCRIPT_DEBUG')) {
                define('GF_SCRIPT_DEBUG', $enable_debug);
            }

            // Minified JS file name suffix
            if (!defined('GF_JS_SUFFIX')) {
                if ($enable_debug)
                    define('GF_JS_SUFFIX', '');
                else
                    define('GF_JS_SUFFIX', '.min');
            }
        }

        /**
         * Include required files
         *
         */
        private function includes() {


            require_once GF_PLUGIN_DIR . 'includes/helper-functions.php';

            if (is_admin()) {
                require_once GF_PLUGIN_DIR . 'admin/admin-init.php';
            }

            /* Load Custom Field Types */
            require_once GF_PLUGIN_DIR . 'includes/fields/gf-number/gf-number.php';
            require_once GF_PLUGIN_DIR . 'includes/fields/gf-toggle-button/gf-toggle-button.php';

        }

        /**
         * Include required files
         *
         */
        public function include_modules() {

            if (!class_exists('FLBuilder')) {
                return;
            }

            /* Load Beaver Builder Addon Elements */

            require_once GF_ADDONS_DIR . 'gf-portfolio/gf-portfolio.php';

        }

        /**
         * Load Plugin Text Domain
         *
         * Looks for the plugin translation files in certain directories and loads
         * them to allow the plugin to be localised
         */
        public function load_plugin_textdomain() {

            $lang_dir = apply_filters('gf_grid_module_lang_dir', trailingslashit(GF_PLUGIN_DIR . 'languages'));

            // Traditional WordPress plugin locale filter
            $locale = apply_filters('plugin_locale', get_locale(), 'gf-grid-module');
            $mofile = sprintf('%1$s-%2$s.mo', 'gf-grid-module', $locale);

            // Setup paths to current locale file
            $mofile_local = $lang_dir . $mofile;

            if (file_exists($mofile_local)) {
                // Look in the /wp-content/plugins/gf-grid-module/languages/ folder
                load_textdomain('gf-grid-module', $mofile_local);
            }
            else {
                // Load the default language files
                load_plugin_textdomain('gf-grid-module', false, $lang_dir);
            }

            return false;
        }

        /**
         * Setup the default hooks and actions
         */
        private function hooks() {

            add_action('plugins_loaded', array(self::$instance, 'load_plugin_textdomain'));

            // fire a little later until post type and taxonomy registrations are complete
            add_action('init', array(self::$instance, 'include_modules'), 11);

            add_action('wp_enqueue_scripts', array($this, 'enqueue_common_scripts'), 10);

            add_action('wp_enqueue_scripts', array($this, 'register_frontend_scripts'), 10);

            add_action('wp_enqueue_scripts', array($this, 'register_frontend_styles'), 10);

            add_action('wp_enqueue_scripts', array($this, 'localize_scripts'), 999999);
        }

        /**
         * Load Frontend Scripts/Styles
         *
         */
        public function enqueue_common_scripts() {

            // Use minified libraries if GF_SCRIPT_DEBUG is turned off
            $suffix = (defined('GF_SCRIPT_DEBUG') && GF_SCRIPT_DEBUG) ? '' : '.min';

            wp_register_style('gf-frontend-styles', GF_PLUGIN_URL . 'assets/css/gf-frontend.css', array(), GF_VERSION);
            wp_enqueue_style('gf-frontend-styles');

            wp_register_style('gf-icomoon-styles', GF_PLUGIN_URL . 'assets/css/icomoon.css', array(), GF_VERSION);
            wp_enqueue_style('gf-icomoon-styles');

            wp_register_script('gf-frontend-scripts', GF_PLUGIN_URL . 'assets/js/gf-frontend' . $suffix . '.js', array('jquery'), GF_VERSION, true);
            wp_enqueue_script('gf-frontend-scripts');

        }


        /**
         * Load Frontend Scripts
         *
         */
        public function register_frontend_scripts() {

            // Use minified libraries if GF_SCRIPT_DEBUG is turned off
            $suffix = (defined('GF_SCRIPT_DEBUG') && GF_SCRIPT_DEBUG) ? '' : '.min';

            wp_register_script('gf-modernizr', GF_PLUGIN_URL . 'assets/js/modernizr-custom' . $suffix . '.js', array(), GF_VERSION, true);

            wp_register_script('jquery-waypoints', GF_PLUGIN_URL . 'assets/js/jquery.waypoints' . $suffix . '.js', array('jquery'), GF_VERSION, true);

            wp_register_script('isotope.pkgd', GF_PLUGIN_URL . 'assets/js/isotope.pkgd' . $suffix . '.js', array('jquery'), GF_VERSION, true);

            wp_register_script('imagesloaded.pkgd', GF_PLUGIN_URL . 'assets/js/imagesloaded.pkgd' . $suffix . '.js', array('jquery'), GF_VERSION, true);

            wp_register_script('jquery-stats', GF_PLUGIN_URL . 'assets/js/jquery.stats' . $suffix . '.js', array('jquery'), GF_VERSION, true);

            wp_register_script('slick', GF_PLUGIN_URL . 'assets/js/slick' . $suffix . '.js', array('jquery'), GF_VERSION, true);

            wp_register_script('jquery-flexslider', GF_PLUGIN_URL . 'assets/js/jquery.flexslider' . $suffix . '.js', array('jquery'), GF_VERSION, true);
        }

        public function localize_scripts() {

            $custom_css = gf_get_option('gf_custom_css', '');

            wp_localize_script('gf-frontend-scripts', 'gf_settings', array('custom_css' => $custom_css));

        }


        /**
         * Load Frontend Styles
         *
         */
        public function register_frontend_styles() {

            wp_register_style('slick', GF_PLUGIN_URL . 'assets/css/slick.css', array(), GF_VERSION);

            wp_register_style('flexslider', GF_PLUGIN_URL . 'assets/css/flexslider.css', array(), GF_VERSION);

        }

    }

endif; // End if class_exists check


/**
 * The main function responsible for returning the one true GF_Grid_Module
 * Instance to functions everywhere.
 *
 * Use this function like you would a global variable, except without needing
 * to declare the global.
 *
 * Example: <?php $gf = GF(); ?>
 */
function GF() {
    return GF_Grid_Module::instance();
}

// Get GF Running
GF();