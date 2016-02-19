<?php
/**
 * Plugin Name: f(x) TOC
 * Plugin URI: http://genbu.me/plugins/fx-toc/
 * Description: Simple Table Of Contents Plugin.
 * Version: 0.1.0
 * Author: David Chandra Purnama
 * Author URI: http://shellcreeper.com/
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU 
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume 
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without 
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * @author David Chandra Purnama <david@genbu.me>
 * @copyright Copyright (c) 2015, Genbu Media
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
**/

/* Plugin Version. */
define( 'FX_TOC_VERSION', '0.1.0' );

/* Path to plugin directory. */
define( 'FX_TOC_PATH', trailingslashit( plugin_dir_path( __FILE__ ) ) );

/* Plugin URL. */
define( 'FX_TOC_URL', trailingslashit( plugin_dir_url( __FILE__ ) ) );

/* Load it on init */
add_action( 'init', 'fx_toc_load' );

/**
 * Do Stuff.
 * @since 0.1.0
 */
function fx_toc_load(){

	/* Load Functions  */
	require_once( FX_TOC_PATH . 'includes/functions.php' );

	/* Load Shortcode Functions  */
	require_once( FX_TOC_PATH . 'includes/shortcode.php' );
	require_once( FX_TOC_PATH . 'includes/shortcode-functions.php' );

	/* Filter Content */
	require_once( FX_TOC_PATH . 'includes/filter-content.php' );
}




