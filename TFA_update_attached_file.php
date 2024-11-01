<?php

/**
 * @link              https://www.tfawebdesign.com
 * @since             1.0.0
 * @package           TFA_update_attached_file
 *
 * @wordpress-plugin
 * Plugin Name:       TFA_update_attached_file
 * Plugin URI:        https://www.tfawebdesign.com
 * Description: 	  Strips the year and month from Media attachments. This plug in works best with the https://www.screenfeed.fr/plugin-wp/upload-url-path-enabler/ which does work in 4.9.6
 * Version:           1.0.0
 * Author:            Jeremiah Stillings @jeremiah01292
 * Author URI:        http://www.jeremiahstillings.net
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       TFA_update_attached_file
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'TFA_update_attached_file_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-TFA_update_attached_file-activator.php
 */
function activate_TFA_update_attached_file() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-TFA_update_attached_file-activator.php';
	TFA_update_attached_file_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-TFA_update_attached_file-deactivator.php
 */
function deactivate_TFA_update_attached_file() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-TFA_update_attached_file-deactivator.php';
	TFA_update_attached_file_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_TFA_update_attached_file' );
register_deactivation_hook( __FILE__, 'deactivate_TFA_update_attached_file' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-TFA_update_attached_file.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_TFA_update_attached_file() {

	$plugin = new TFA_update_attached_file();
	$plugin->run();

}
run_TFA_update_attached_file();
