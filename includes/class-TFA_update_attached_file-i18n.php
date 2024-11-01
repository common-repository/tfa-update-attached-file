<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link      https://www.tfawebdesign.com
 * @since      1.0.0
 *
 * @package    TFA_update_attached_file
 * @subpackage TFA_update_attached_file/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    TFA_update_attached_file
 * @subpackage TFA_update_attached_file/includes
 * @author    Jeremiah Stillings @jeremiah01292
 */
class TFA_update_attached_file_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'TFA_update_attached_file',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
