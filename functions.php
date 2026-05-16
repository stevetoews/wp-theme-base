<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'THEME_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'THEME_DIR', get_template_directory() );
define( 'THEME_URI', get_template_directory_uri() );

require_once THEME_DIR . '/inc/enqueue.php';
require_once THEME_DIR . '/inc/setup.php';
require_once THEME_DIR . '/inc/image-sizes.php';
