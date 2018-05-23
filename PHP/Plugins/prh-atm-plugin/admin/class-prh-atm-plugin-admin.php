<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://goodmanfox.com
 * @since      1.0.0
 *
 * @package    PRH ATM Plugin
 * @subpackage PRH ATM Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    PRH ATM Plugin
 * @subpackage PRH ATM Plugin/admin
 * @author     Goodman Fox
 */
class Plugin_Name_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $prh_team_member    The ID of this plugin.
	 */
	private $prh_team_member;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $prh_team_member       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $prh_team_member, $version ) {

		$this->prh_team_member = $prh_team_member;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->prh_team_member, plugin_dir_url( __FILE__ ) . 'css/prh-atm-plugin-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->prh_team_member, plugin_dir_url( __FILE__ ) . 'js/prh-atm-plugin-admin.js', array( 'jquery' ), $this->version, false );

	}

}
