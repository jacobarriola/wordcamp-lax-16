<?php

/*
 * Enqueue our styles and scripts
 */
add_action( 'wp_enqueue_scripts', function() {

	// Enqueue our Google Fonts
	wp_enqueue_style( 'googlefonts',
		'https://fonts.googleapis.com/css?family=Pacifico'
	);

	// Enqueue our stylesheet
	$handle = 'flexbox_theme_styles';
	$src    = get_template_directory_uri() . '/assets/dist/css/app.css';
	$deps   = '';
	$ver    = filemtime( get_template_directory() . '/assets/dist/css/app.css' );
	$media  = '';
	wp_enqueue_style( $handle, $src, $deps, $ver, $media );
} );


/*
 * Load our components
 *
 * @TODO use an autoloader, Jacob
 */
require_once __DIR__ . '/components/post-card.php';
require_once __DIR__ . '/components/post-grid.php';
require_once __DIR__ . '/components/hero.php';
require_once __DIR__ . '/components/testimonial.php';
require_once __DIR__ . '/components/logos.php';
