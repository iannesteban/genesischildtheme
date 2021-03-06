<?php
/**
 * Site Footer
 *
 * @package      GenesisChildTheme
 * @author       Iann Esteban
 * @since        1.0.0
 * @license      GPL-2.0+
**/

/**
 * Site Footer
 *
 */
function ie_site_footer() {
	echo '<div class="footer-left">';
		echo '<p class="copyright">Copyright &copy; ' . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) . '®. All Rights Reserved.</p>';
		echo '<p class="footer-links"><a href="' . home_url( 'privacy-policy' ) . '">Privacy Policy</a> <a href="' . home_url( 'terms' ) . '">Terms</a></p>';
		echo '<p class="cafemedia">An Elite Cafemedia Food Publisher</p>';
	echo '</div>';
	echo '<a class="backtotop" href="#main-content">Back to top' . ie_icon( array( 'icon' => 'arrow-up' ) ) . '</a>';
}
add_action( 'genesis_footer', 'ie_site_footer' );
remove_action( 'genesis_footer', 'genesis_do_footer' );
