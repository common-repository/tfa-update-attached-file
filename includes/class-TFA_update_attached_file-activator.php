<?php

/**
 * Fired during plugin activation
 *
 * @link      https://www.tfawebdesign.com
 * @since      1.0.0
 *
 * @package    TFA_update_attached_file
 * @subpackage TFA_update_attached_file/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    TFA_update_attached_file
 * @subpackage TFA_update_attached_file/includes
 * @author    Jeremiah Stillings @jeremiah01292
 */
class TFA_update_attached_file_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() 
	{
		include "updateme.php";
	}

}
