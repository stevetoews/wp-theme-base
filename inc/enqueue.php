<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function theme_enqueue_assets(): void {
	// Main stylesheet (compiled Tailwind output)
	wp_enqueue_style(
		'theme-main',
		THEME_URI . '/assets/css/main.css',
		[],
		THEME_VERSION
	);

	// Main JS bundle
	$asset_file = THEME_DIR . '/assets/js/main.asset.php';
	$asset      = file_exists( $asset_file ) ? require $asset_file : [ 'dependencies' => [], 'version' => THEME_VERSION ];

	wp_enqueue_script(
		'theme-main',
		THEME_URI . '/assets/js/main.js',
		$asset['dependencies'],
		$asset['version'],
		[ 'strategy' => 'defer', 'in_footer' => true ]
	);
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_assets' );

function theme_block_editor_assets(): void {
	// Editor-specific styles (mirrors frontend Tailwind output)
	wp_enqueue_style(
		'theme-editor',
		THEME_URI . '/assets/css/editor.css',
		[],
		THEME_VERSION
	);
}
add_action( 'enqueue_block_editor_assets', 'theme_block_editor_assets' );

/**
 * Remove unused default WordPress scripts and styles on the frontend.
 * Only strip what we know is safe; never blindly dequeue everything.
 */
function theme_dequeue_unused(): void {
	wp_dequeue_style( 'wp-block-library' );        // Block library CSS — we handle it via Tailwind
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'classic-theme-styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'wp_generator' );    // Hide WP version from source
}
add_action( 'wp_enqueue_scripts', 'theme_dequeue_unused', 100 );
