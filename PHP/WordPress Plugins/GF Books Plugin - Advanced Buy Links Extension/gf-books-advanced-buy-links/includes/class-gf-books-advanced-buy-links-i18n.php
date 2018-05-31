<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    gf_books_advanced_buy_links
 * @subpackage gf_books_advanced_buy_links/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    gf_books_advanced_buy_links
 * @subpackage gf_books_advanced_buy_links/includes
 * @author     Your Name <email@example.com>
 */
class gf_books_advanced_buy_links_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'gf-books-advanced-buy-links',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
