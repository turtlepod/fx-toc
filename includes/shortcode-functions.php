<?php
/**
 * Shortcode Utility Functions
 *
 * @since 0.1.0
 **/


/**
 * Open Nested Level: Get opening level tag
 *
 * @since 0.1.0
 */
function fx_toc_sc_open_level( $new, $cur, $first, $type ) {
	$levels = $new - $cur;
	$out    = '';
	for ( $i = $cur; $i < $new; $i++ ) {
		$level = absint( $i - $first + 2 );
		$type  = tag_escape( $type );
		if ( ( $level % 2 ) == 0 ) {
			$out .= "<{$type} class='toc-even level-{$level}'>\n";
		} else {
			$out .= "<{$type} class='toc-odd level-{$level}'>\n";
		}
	}
	return $out;
}

/**
 * Close Nested Level: Get closing level tag
 *
 * @since 0.1.0
 */
function fx_toc_sc_close_level( $new, $cur, $first, $type ) {
	$out  = '';
	$type = tag_escape( $type );
	for ( $i = $cur; $i > $new; $i-- ) {
		$out .= "</{$type}>\n";
	}
	return $out;
}


/**
 * Get Unique Name of the heading tag
 * this is needed so each internal anchor link can link
 * properly even each heading have the same name.
 *
 * @since 0.1.0
 */
function fx_toc_sc_get_unique_name( $heading ) {

	/* globalize used name array */
	global $fx_toc_used_names;

	/* Slug like. */
	$n = sanitize_title( $heading );

	/* if uniqe name found, add unique id. */
	if ( isset( $fx_toc_used_names[ $n ] ) ) {
		$fx_toc_used_names[ $n ]++;

		/* use underscore, to make sure it's unique */
		$n                      .= '_' . $fx_toc_used_names[ $n ];
		$fx_toc_used_names[ $n ] = 0;
	}

	/* if no used name found, display normal anchor */
	else {
		$fx_toc_used_names[ $n ] = 0;
	}

	/* return the output */
	return $n;
}

/**
 * Reset Unique Name
 *
 * @since 0.1.0
 */
function fx_toc_sc_unique_names_reset() {
	global $fx_toc_used_names;
	$fx_toc_used_names = array();
	return true;
}
