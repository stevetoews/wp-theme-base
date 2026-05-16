<?php

get_header();
?>

<main id="main-content" class="container mx-auto px-4 py-16 text-center">

	<h1 class="text-6xl font-bold text-gray-300 mb-4">404</h1>
	<h2 class="text-2xl font-semibold mb-4"><?php esc_html_e( 'Page not found', 'wp-theme-base' ); ?></h2>
	<p class="text-gray-500 mb-8"><?php esc_html_e( 'The page you are looking for does not exist.', 'wp-theme-base' ); ?></p>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="inline-block px-6 py-3 bg-gray-900 text-white rounded hover:bg-gray-700 transition-colors">
		<?php esc_html_e( 'Go home', 'wp-theme-base' ); ?>
	</a>

</main>

<?php
get_footer();
