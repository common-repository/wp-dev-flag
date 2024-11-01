<?php
/**
 * Plugin Name:     WP Dev Flag
 * Plugin URI:      https://poodleplugins.com/
 * Description:     Shows a floating badge on the front end, to visually distinguish your development site from production.
 * Version:         2.0.0
 * Author:          Poodle Plugins
 * Author URI:      https://poodleplugins.com
 * License:         GPL-3.0+
 * License URI:     https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain:     wp-dev-flag
 * Domain Path:     /languages
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Load plugin translations
 */
function wp_dev_flag_load_textdomain() {
    load_plugin_textdomain(
        'wp-dev-flag',
        false,
        dirname( plugin_basename( __FILE__ ) ) . '/languages/'
    );
}
add_action( 'plugins_loaded', 'wp_dev_flag_load_textdomain' );

if ( ! function_exists( 'get_plugin_data' ) ) {
    require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

$plugin_data = get_plugin_data( __FILE__ );
define( 'WP_DEV_FLAG_VERSION', $plugin_data['Version'] );

// Include the necessary files
require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-dev-flag.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-dev-flag-core.php';
require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-dev-flag-settings.php';

// Create an instance of the main plugin class
$wp_dev_flag = new Wp_Dev_Flag();