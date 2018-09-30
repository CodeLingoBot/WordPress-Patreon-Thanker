<?php

function load_mw_patreon_thanks_public( $content ) {
	$mwpt_category = get_option( 'mwpt_category' );

	$cats = get_the_category(); // returns array of category objs
	if ( ! empty( $cats ) ) {
		for ( $i=0; $i < sizeof( $cats ); $i++ ) {
			if ( esc_html( $cats[$i]->cat_ID ) == $mwpt_category ) {
				// mw_patreon_thanks_pub();
				$newcontent = 'testing ';
				return $newcontent . $content;
			} else {
				return $content;
			}
		}
	}
}
add_filter( 'the_content', 'load_mw_patreon_thanks_public', 100 );

function mw_patreon_thanks_pub() {
	wp_enqueue_style( 'mwpt-public', plugin_dir_url( __FILE__ ) . '/partials/style.css?' . time() );
	wp_enqueue_script( 'mwpt-public', plugin_dir_url( __FILE__ ) . '/partials/script.js?' . time() );

	include_once( 'partials/public.php' );
}
