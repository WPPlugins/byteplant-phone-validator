<?php
/**
 * The Byteplant phone validator start file. Here we do initialize the plugin.
 *
 * Plugin Name: Byteplant Phone Validator
 * Version: 2.0
 * Description: Phone validation plugin. Works with Contact Form 7 and WooCommerce. For other 3rd party forms: add class='bppvp-phone' to all input fields you want to validate.
 * Author: support@byteplant.com
 * Text Domain: byteplant-phone-validator
 * Domain Path: /languages
 *
 * @package Plugins
 **/

require_once( dirname( __FILE__ ) . '/src/functions.php' );
require_once( dirname( __FILE__ ) . '/src/class-bppv-plugin.php' );
add_action( 'after_setup_theme', 'bppv_load', 11 );

/**
 * Initialize the plugin
 *
 * @return void
 */
function bppv_load() {

	$plugin = BPPV_Plugin::get_instance();
	$plugin->plugin_setup();
}
