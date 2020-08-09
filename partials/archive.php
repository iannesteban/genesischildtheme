<?php
/**
 * Archive partial
 *
 * @package      GenesisChildTheme
 * @author       Iann Esteban
 * @since        1.0.0
 * @license      GPL-2.0+
**/

echo '<article class="post-summary">';

	ie_post_summary_image();

	echo '<div class="post-summary__content">';
		ie_entry_category();
		ie_post_summary_title();
	echo '</div>';

echo '</article>';
