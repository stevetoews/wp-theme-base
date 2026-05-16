<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class( 'bg-white text-gray-900 antialiased' ); ?>>
<?php wp_body_open(); ?>

<a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-white focus:text-black focus:underline">
	<?php esc_html_e( 'Skip to content', 'wp-theme-base' ); ?>
</a>

<header class="border-b border-gray-200 bg-white" role="banner">
	<div class="container mx-auto flex items-center justify-between px-4 py-4">

		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="text-xl font-bold" rel="home">
			<?php bloginfo( 'name' ); ?>
		</a>

		<?php
		wp_nav_menu( [
			'theme_location' => 'primary',
			'container'      => 'nav',
			'container_attr' => [
				'aria-label' => __( 'Primary navigation', 'wp-theme-base' ),
			],
			'menu_class'     => 'flex gap-6 text-sm font-medium',
			'fallback_cb'    => false,
		] );
		?>

	</div>
</header>
