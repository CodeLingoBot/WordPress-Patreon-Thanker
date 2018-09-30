<?php

function load_mw_patreon_thanks_public() {
	$mwpt_category = get_option( 'mwpt_category' );

	$current_page_categories = get_the_category();
	if ( ! empty( $categories ) ) {
		for ( $i=0; $i < sizeof( $current_page_categories ); $i++ ) {
			if ( esc_html( $categories[$i]->name ) == $mwpt_category ) {
				mw_patreon_thanks_pub();
			}
		}
	}
}

function mw_patreon_thanks_pub() {
	wp_enqueue_style( 'mwpt-public', plugin_dir_url( __FILE__ ) . '/partials/style.css?' . time() );
	wp_enqueue_script( 'mwpt-public', plugin_dir_url( __FILE__ ) . '/partials/script.js?' . time() );

	include_once( 'partials/public.php' );
}
