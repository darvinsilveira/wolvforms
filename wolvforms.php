<?php
/**
 * Plugin Name: WolvForms
 * Description: TODO
 * Author: Envolve Labs
 * Author URI: http://envolvelabs.com.br
 * Text Domain: wolvforms
 * Domain Path: /languages
 * Version: 1.0.0
 *
 * @package WolvForms
 */

defined( 'ABSPATH' ) || exit;

// Include the main WolvForms class.
if ( ! class_exists( 'WolvForms' ) ) {
	include_once dirname( __FILE__ ) . '/includes/class-wolvforms.php';
}

/**
 * Main instance of WolvForms.
 *
 * Returns the main instance of WOLV to prevent the need to use globals.
 *
 * @return WolvForms
 */
function wolv() {
	return WolvForms::instance();
}

wolv();
