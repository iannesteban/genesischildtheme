<?php
/**
 * Single Post
 *
 * @package      GenesisChildTheme
 * @author       Iann Esteban
 * @since        1.0.0
 * @license      GPL-2.0+
**/

// Entry category in header
add_action( 'genesis_entry_header', 'ie_entry_category', 8 );
add_action( 'genesis_entry_header', 'ie_entry_author', 12 );
add_action( 'genesis_entry_header', 'ie_entry_header_share', 13 );

/**
 * Entry header share
 *
 */
function ie_entry_header_share() {
	do_action( 'ie_entry_header_share' );
}

/**
 * After Entry
 *
 */
function ie_single_after_entry() {
	echo '<div class="after-entry">';

	// Breadcrumbs
	genesis_do_breadcrumbs();

	// Publish date
	echo '<p class="publish-date">Published on ' . get_the_date( 'F j, Y' ) . '</p>';

	// Sharing
	do_action( 'ie_entry_footer_share' );

	// Author Box
	genesis_do_author_box_single();
}
add_action( 'genesis_after_entry', 'ie_single_after_entry', 8 );
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
remove_action( 'genesis_after_entry', 'genesis_do_author_box_single', 8 );

genesis();
