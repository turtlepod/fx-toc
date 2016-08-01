<?php
/**
 * Plugin Name: f(x) TOC
 * Plugin URI: http://genbumedia.com/plugins/fx-toc/
 * Description: Simple Table Of Contents Plugin. Just add [toc] shortcode in content to display.
 * Version: 1.1.0
 * Author: David Chandra Purnama
 * Author URI: http://shellcreeper.com/
 * License: GPLv2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: fx-toc
 * Domain Path: /languages/
 *
 * @author David Chandra Purnama <david@genbumedia.com>
 * @copyright Copyright (c) 2016, Genbu Media
 *
 * Credit Note: This plugin is based on WP TOC Plugin
 * by Brendon Boshell http://infinity-infinity.com/
 * With several improvement such as support for paginated content, etc.
**/

/* Do not access this file directly */
if ( ! defined( 'WPINC' ) ) { die; }


/* Constants
------------------------------------------ */

/* Plugin Version. */
define( 'FX_TOC_VERSION', '1.1.0' );

/* Path to plugin directory. */
define( 'FX_TOC_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );

/* Plugin URL. */
define( 'FX_TOC_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );


/* Plugins Loaded
------------------------------------------ */

/* Plugins Loaded */
add_action( 'plugins_loaded', 'fx_toc_plugins_loaded' );

/**
 * Load Plugin
 * @since 0.1.0
 */
function fx_toc_plugins_loaded(){

	/* Load Text Domain (Language Translation) */
	load_plugin_textdomain( 'fx-toc', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

	/* Plugin Action Link */
	add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'fx_toc_plugin_action_links' );
}


/**
 * Add Action Link For Support
 * @since 1.1.0
 */
function fx_toc_plugin_action_links( $links ){

	/* Get current user info */
	if( function_exists( 'wp_get_current_user' ) ){
		$current_user = wp_get_current_user();
	}
	else{
		global $current_user;
		get_currentuserinfo();
	}

	/* Build support url */
	$support_url = add_query_arg(
		array(
			'about'      => urlencode( 'f(x) TOC (v.' . FX_TOC_VERSION . ')' ),
			'sp_name'    => urlencode( $current_user->display_name ),
			'sp_email'   => urlencode( $current_user->user_email ),
			'sp_website' => urlencode( home_url() ),
		),
		'http://genbumedia.com/contact/'
	);

	/* Add support link */
	$links[] = '<a target="_blank" href="' . esc_url( $support_url ) . '">' . __( 'Get Support', 'fx-toc' ) . '</a>';
	return $links;
}


/* Init
------------------------------------------ */

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
