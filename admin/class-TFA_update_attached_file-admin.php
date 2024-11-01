<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link      https://www.tfawebdesign.com
 * @since      1.0.0
 *
 * @package    TFA_update_attached_file
 * @subpackage TFA_update_attached_file/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    TFA_update_attached_file
 * @subpackage TFA_update_attached_file/admin
 * @author    Jeremiah Stillings @jeremiah01292
 */
class TFA_update_attached_file_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $TFA_update_attached_file    The ID of this plugin.
	 */
	private $TFA_update_attached_file;

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
	 * @param      string    $TFA_update_attached_file       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $TFA_update_attached_file, $version ) {

		$this->TFA_update_attached_file = $TFA_update_attached_file;
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
		 * defined in TFA_update_attached_file_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The TFA_update_attached_file_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->TFA_update_attached_file, plugin_dir_url( __FILE__ ) . 'css/TFA_update_attached_file-admin.css', array(), $this->version, 'all' );

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
		 * defined in TFA_update_attached_file_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The TFA_update_attached_file_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->TFA_update_attached_file, plugin_dir_url( __FILE__ ) . 'js/TFA_update_attached_file-admin.js', array( 'jquery' ), $this->version, false );

	}

}
