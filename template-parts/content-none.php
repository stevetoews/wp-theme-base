<?php

/**
 * Template part for displaying a message when no content is found.
 *
 * @package WP_Theme_Base
 */
?>

<section class="py-16 text-center">
	<h2 class="text-2xl font-semibold mb-4">
		<?php esc_html_e( 'Nothing Found', 'wp-theme-base' ); ?>
	</h2>
	<p class="text-gray-500">
		<?php esc_html_e( 'It looks like nothing was found at this location.', 'wp-theme-base' ); ?>
	</p>
</section>
