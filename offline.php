<?php
/**
 * PWA Offline
 *
 * @package      GenesisChildTheme
 * @author       Iann Esteban
 * @since        1.0.0
 * @license      GPL-2.0+
**/

/**
 * Offline Content
 *
 */
function ie_pwa_offline_content() {
	echo '<h1>Oops, it looks like you\'re offline</h1>';
	if( function_exists( 'wp_service_worker_error_message_placeholder' ) )
		wp_service_worker_error_message_placeholder();

}
add_action( 'genesis_loop', 'ie_pwa_offline_content' );
remove_action( 'genesis_loop', 'ie_archive_loop' );
remove_action( 'genesis_loop', 'genesis_do_loop' );

// Build the page
genesis();
