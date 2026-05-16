<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Remove default sizes we don't use to keep media library clean
remove_image_size( 'medium_large' );
remove_image_size( '1536x1536' );
remove_image_size( '2048x2048' );

// Register project-specific sizes here as needed
// add_image_size( 'card-thumbnail', 600, 400, true );
