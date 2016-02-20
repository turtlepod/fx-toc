<?php
/**
 * Plugin Name: f(x) TOC
 * Plugin URI: http://genbumedia.com/plugins/fx-toc/
 * Description: Simple Table Of Contents Plugin. Just add [toc] shortcode in content to display.
 * Version: 1.0.0
 * Author: David Chandra Purnama
 * Author URI: http://shellcreeper.com/
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: fx-toc
 * Domain Path: /languages
**/

/**
 * Note: This plugin is based on WP TOC Plugin
 * by Brendon Boshell http://infinity-infinity.com/
 * With several improvement such as paginated content, etc.
**/

/* Plugin Version. */
define( 'FX_TOC_VERSION', '1.0.0' );

/* Path to plugin directory. */
define( 'FX_TOC_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );

/* Plugin URL. */
define( 'FX_TOC_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );

/* Plugins Loaded */
add_action( 'plugins_loaded', 'fx_toc_plugins_loaded' );

function fx_toc_plugins_loaded(){
	load_plugin_textdomain( 'fx-toc', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}

/* Load it on init */
add_action( 'init', 'fx_toc_load' );

/**
 * Do stuff.
 * @since 0.1.0
 */
function fx_toc_load(){

	/* Load Shortcode Functions  */
	require_once( FX_TOC_PATH . 'includes/shortcode-functions.php' );
	require_once( FX_TOC_PATH . 'includes/shortcode.php' );

	/* Filter Content */
	require_once( FX_TOC_PATH . 'includes/filter-content.php' );
}
