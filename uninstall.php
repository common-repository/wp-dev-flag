<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * This file is responsible for cleaning up any data or options that were created by the plugin.
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
    exit;
}

// Delete the WP Dev Flag options
delete_option( 'wp_dev_flag_trigger_options' );
delete_option( 'wp_dev_flag_display_options' );
delete_option( 'wp_dev_flag_link_options' );
delete_option( 'wp_dev_flag_show_flag' );