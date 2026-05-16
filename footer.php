<footer class="border-t border-gray-200 bg-gray-50 mt-12" role="contentinfo">
	<div class="container mx-auto px-4 py-8">

		<div class="flex flex-col items-center gap-4 sm:flex-row sm:justify-between">

			<p class="text-sm text-gray-500">
				&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?>
				<?php bloginfo( 'name' ); ?>
			</p>

			<?php
			wp_nav_menu( [
				'theme_location' => 'footer',
				'container'      => 'nav',
				'container_attr' => [
					'aria-label' => __( 'Footer navigation', 'wp-theme-base' ),
				],
				'menu_class'     => 'flex flex-wrap gap-4 text-sm text-gray-500',
				'fallback_cb'    => false,
			] );
			?>

		</div>

	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
