<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://github.com/jue-fiddler
 * @since             1.0.0
 * @package           Image_Removal
 *
 * @wordpress-plugin
 * Plugin Name:       URL Image Removal
 * Plugin URI:        https://https://github.com/jue-fiddler/url-image-removal
 * Description:       This is a description of the plugin.
 * Version:           1.0.0
 * Author:            Jue
 * Author URI:        https://https://github.com/jue-fiddler/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       image-removal
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
define( 'IMAGE_REMOVAL_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-image-removal-activator.php
 */
function activate_image_removal() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-image-removal-activator.php';
	Image_Removal_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-image-removal-deactivator.php
 */
function deactivate_image_removal() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-image-removal-deactivator.php';
	Image_Removal_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_image_removal' );
register_deactivation_hook( __FILE__, 'deactivate_image_removal' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-image-removal.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_image_removal() {

	$plugin = new Image_Removal();
	$plugin->run();

}
run_image_removal();
