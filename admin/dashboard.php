<?php

function load_mw_patreon_thanks() {
	$page_title = 'Patreon Thanks';
	$menu_title = 'Patreon Thanks';
	$capability = 'edit_pages';
	$menu_slug = 'mw-patreon-thanks';
	$function = 'mw_patreon_thanks_dash';

	add_options_page( $page_title, $menu_title, $capability, $menu_slug, $function );
}
add_action( 'admin_menu', 'load_mw_patreon_thanks' );

function mw_patreon_thanks_dash() {
	wp_enqueue_style( 'mwpt-admin-css', plugin_dir_url( __FILE__ ) . '/partials/style.css' );
	wp_enqueue_script( 'mwpt-admin-js', plugin_dir_url( __FILE__ ) . '/partials/script.js' );

	include_once( 'partials/admin.php' );
}
