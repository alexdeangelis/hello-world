<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    PublishFox_Events
 * @subpackage PublishFox_Events/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    PublishFox_Events
 * @subpackage PublishFox_Events/public
 * @author     Your Name <email@example.com>
 */
class PublishFox_Events_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $publishfox_events    The ID of this plugin.
	 */
	private $publishfox_events;

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
	 * @param      string    $publishfox_events       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $publishfox_events, $version ) {

		$this->publishfox_events = $publishfox_events;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in PublishFox_Events_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The PublishFox_Events_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->publishfox_events, plugin_dir_url( __FILE__ ) . 'css/publishfox-events-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in PublishFox_Events_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The PublishFox_Events_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->publishfox_events, plugin_dir_url( __FILE__ ) . 'js/publishfox-events-public.js', array( 'jquery' ), $this->version, false );

	}

}
