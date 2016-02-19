<?php
/**
 * Filter Content
**/
add_filter( 'the_content', 'fx_toc_filter_content' );

/**
 * Add ID in each heading in content
 * @since 0.1.0
 */
function fx_toc_filter_content( $content ){

	/* Check if shortcode exist */
	if ( has_shortcode( $content, 'toc' ) ) {
		fx_toc_sc_unique_names_reset(); // reset num
		$content = preg_replace_callback("#<h([1-6]).*?>(.*?)</h[1-6]>#i", "fx_toc_heading_anchor", $content );
	}
	return $content;
}

/**
 * Helper: Get anchor text for the heading.
 * @since 0.1.0
 */
function fx_toc_heading_anchor($match) {

	$name = fx_toc_sc_get_unique_name( $match[2] );
	return '<span id="' . sanitize_title( $name ) . '">' . $match[0] . '</span>';
}


