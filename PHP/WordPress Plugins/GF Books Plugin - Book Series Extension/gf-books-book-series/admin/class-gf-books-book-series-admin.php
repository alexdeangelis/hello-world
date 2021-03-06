<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    GF_Books_Book_Series
 * @subpackage GF_Books_Book_Series/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    GF_Books_Book_Series
 * @subpackage GF_Books_Book_Series/admin
 * @author     Your Name <email@example.com>
 */
class GF_Books_Book_Series_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $gf_books_book_series    The ID of this plugin.
	 */
	private $gf_books_book_series;

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
	 * @param      string    $gf_books_book_series       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $gf_books_book_series, $version ) {

		$this->gf_books_book_series = $gf_books_book_series;
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
		 * defined in GF_Books_Book_Series_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The GF_Books_Book_Series_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->gf_books_book_series, plugin_dir_url( __FILE__ ) . 'css/gf-books-book-series-admin.css', array(), $this->version, 'all' );

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
		 * defined in GF_Books_Book_Series_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The GF_Books_Book_Series_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->gf_books_book_series, plugin_dir_url( __FILE__ ) . 'js/gf-books-book-series-admin.js', array( 'jquery' ), $this->version, false );

	}

}
