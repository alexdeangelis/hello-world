<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    PublishFox_Competitions
 * @subpackage PublishFox_Competitions/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    PublishFox_Competitions
 * @subpackage PublishFox_Competitions/admin
 * @author     Your Name <email@example.com>
 */
class PublishFox_Competitions_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $publishfox_competitions    The ID of this plugin.
	 */
	private $publishfox_competitions;

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
	 * @param      string    $publishfox_competitions       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $publishfox_competitions, $version ) {

		$this->publishfox_competitions = $publishfox_competitions;
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
		 * defined in PublishFox_Competitions_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The PublishFox_Competitions_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->publishfox_competitions, plugin_dir_url( __FILE__ ) . 'css/publishfox-competitions-admin.css', array(), $this->version, 'all' );

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
		 * defined in PublishFox_Competitions_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The PublishFox_Competitions_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->publishfox_competitions, plugin_dir_url( __FILE__ ) . 'js/publishfox-competitions-admin.js', array( 'jquery' ), $this->version, false );

	}

}
