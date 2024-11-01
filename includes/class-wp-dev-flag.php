<?php
/**
 * WP Dev Flag class
 *
 * The main class that initializes the plugin and its components.
 *
 * @package Wp_Dev_Flag
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Wp_Dev_Flag class
 */
class Wp_Dev_Flag {

    /**
     * The settings instance.
     *
     * @var Wp_Dev_Flag_Settings
     */
    private $settings;

    /**
     * The core instance.
     *
     * @var Wp_Dev_Flag_Core
     */
    private $core;

    /**
     * Constructor
     *
     * Sets up the necessary action hooks for initializing the plugin.
     */
    public function __construct() {

        // Load plugin text domain
        add_action( 'init', array( $this, 'load_plugin_textdomain' ) );

        // Load plugin settings
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-dev-flag-settings.php';
        $this->settings = new Wp_Dev_Flag_Settings();

        // Load plugin core functionality
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-wp-dev-flag-core.php';
        $this->core = new Wp_Dev_Flag_Core();

        // Set default options
        $this->set_default_options();

    }

    /**
     * Load the plugin text domain for translation.
     *
     * @since    1.0.0
     */
    public function load_plugin_textdomain() {

        load_plugin_textdomain(
            'wp-dev-flag-plugin',
            false,
            dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
        );

    }

    /**
     * Set default options for the plugin.
     *
     * @since    1.0.0
     */
    private function set_default_options() {

        $default_options = array(
            'wp_dev_flag_display_options' => array(
                'show_flag'        => 1,
                'horizontal'       => 'left',
                'vertical'         => 'top',
                'bg_colour'        => '#aa0000',
                'text_colour'      => '#ffffff',
                'message'          => 'Development Site',
                'show_in_admin'    => 1,
                'show_on_frontend' => 1,
            ),
            'wp_dev_flag_link_options'    => array(
                'url'             => '',
                'open_in_new_tab' => 1,
            ),
            'wp_dev_flag_trigger_options' => array(
                'update_environment' => '',
                'dev_environment'    => ''              
            ),
        );

        foreach ( $default_options as $option_name => $default_values ) {
            $stored_values = get_option( $option_name );

            if ( ! $stored_values ) {
                update_option( $option_name, $default_values );
            }
        }

    }

}
