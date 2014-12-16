<?php
/*
Plugin Name: WC Autoship Free Shipping
Plugin URI: http://wooautoship.com
Description: Set free shipping for autoship orders
Version: 1.0
Author: Patterns in the Cloud
Author URI: http://patternsinthecloud.com
License: Single-site
*/

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if ( is_plugin_active( 'woocommerce-autoship/woocommerce-autoship.php' ) ) {
	
	function wc_autoship_free_shipping_install() {

	}
	register_activation_hook( __FILE__, 'wc_autoship_free_shipping_install' );
	
	function wc_autoship_free_shipping_deactivate() {
	
	}
	register_deactivation_hook( __FILE__, 'wc_autoship_free_shipping_deactivate' );
	
	function wc_autoship_free_shipping_uninstall() {

	}
	register_uninstall_hook( __FILE__, 'wc_autoship_free_shipping_uninstall' );
	
	function wc_autoship_free_shipping_valid_shipping_ids() {
		return array( 'free_shipping' );
	}
	add_filter( 'wc_autoship_valid_shipping_method_ids', 'wc_autoship_free_shipping_valid_shipping_ids' );
}
