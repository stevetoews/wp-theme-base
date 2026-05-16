<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function theme_setup(): void {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', [
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	] );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/editor.css' );

	load_theme_textdomain( 'wp-theme-base', THEME_DIR . '/languages' );

	register_nav_menus( [
		'primary' => __( 'Primary Navigation', 'wp-theme-base' ),
		'footer'  => __( 'Footer Navigation', 'wp-theme-base' ),
	] );
}
add_action( 'after_setup_theme', 'theme_setup' );
