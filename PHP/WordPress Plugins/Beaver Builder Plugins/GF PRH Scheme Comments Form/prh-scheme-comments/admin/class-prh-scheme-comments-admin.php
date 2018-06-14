<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    PRH_Scheme_Comments
 * @subpackage PRH_Scheme_Comments/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    PRH_Scheme_Comments
 * @subpackage PRH_Scheme_Comments/admin
 * @author     Your Name <email@example.com>
 */
class PRH_Scheme_Comments_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $prh_scheme_comments    The ID of this plugin.
	 */
	private $prh_scheme_comments;

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
	 * @param      string    $prh_scheme_comments       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $prh_scheme_comments, $version ) {

		$this->prh_scheme_comments = $prh_scheme_comments;
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
		 * defined in PRH_Scheme_Comments_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The PRH_Scheme_Comments_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->prh_scheme_comments, plugin_dir_url( __FILE__ ) . 'css/prh-scheme-comments-admin.css', array(), $this->version, 'all' );

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
		 * defined in PRH_Scheme_Comments_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The PRH_Scheme_Comments_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->prh_scheme_comments, plugin_dir_url( __FILE__ ) . 'js/prh-scheme-comments-admin.js', array( 'jquery' ), $this->version, false );

	}

}
