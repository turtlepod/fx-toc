<?php
/**
 * Content Filters
 * @since 0.1.0
**/

/* filter the content */
add_filter( 'the_content', 'fx_toc_filter_content' );

/**
 * Add ID in each heading in content
 * @since 0.1.0
 */
function fx_toc_filter_content( $content ){

	/* Only in singular and shortcode exist in content */
	if ( !is_admin() && has_shortcode( get_post_field( 'post_content', get_the_ID() ), 'toc' ) ) {
		$content = fx_toc_add_span_to_headings( $content );
	}
	return $content;
}

/**
 * Add span with ID to each heading
 * @since 0.1.0
 */
function fx_toc_add_span_to_headings( $content ){
	fx_toc_sc_unique_names_reset(); // reset num
	$content = preg_replace_callback( "#<h([1-6]).*?>(.*?)</h[1-6]>#i", "fx_toc_heading_anchor", $content );
	return $content;
}

/**
 * Helper: Add span with ID as target for anchor text in each the heading.
 * @since 0.1.0
 */
function fx_toc_heading_anchor( $match ) {
	$name = fx_toc_sc_get_unique_name( $match[2] );
	$heading = absint( $match[1] );
	$text = $match[2];
	return "<h{$heading}>" . '<span id="' . sanitize_title( $name ) . '">' . $text . '</span>' . "</h{$heading}>";
}




