<?php
/**
 * flexbox_theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package flexbox_theme
 */

if ( ! function_exists( 'flexbox_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function flexbox_theme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on flexbox_theme, use a find and replace
	 * to change 'flexbox_theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'flexbox_theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'flexbox_theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	// add_theme_support( 'post-formats', array(
	// 	'aside',
	// 	'image',
	// 	'video',
	// 	'quote',
	// 	'link',
	// ) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'flexbox_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // flexbox_theme_setup
add_action( 'after_setup_theme', 'flexbox_theme_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function _flexbox_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_flexbox_theme_content_width', 640 );
}
add_action( 'after_setup_theme', '_flexbox_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function flexbox_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'flexbox_theme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'flexbox_theme_widgets_init' );

/**
 * Enqueue styles.
 */
if ( !function_exists( 'flexbox_theme_styles' ) ) :

	function flexbox_theme_styles() {

		// Enqueue our Google Fonts
		wp_enqueue_style( 'googlefonts',
			'https://fonts.googleapis.com/css?family=Roboto'
		);

		// Enqueue our stylesheet
		$handle = 'flexbox_theme_styles';
		$src =  get_template_directory_uri() . '/assets/dist/css/app.css';
		$deps = '';
		$ver = filemtime( get_template_directory() . '/assets/dist/css/app.css');
		$media = '';
		wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	}

add_action( 'wp_enqueue_scripts', 'flexbox_theme_styles' );

endif;



/*******************************************************************************
* Make YouTube and Vimeo oembed elements responsive. Add Foundation's .flex-video
* class wrapper around any oembeds
*******************************************************************************/

function flexbox_theme_oembed_flex_wrapper( $html, $url, $attr, $post_ID ) {
	if ( strpos($url, 'youtube') || strpos($url, 'youtu.be') || strpos($url, 'vimeo') ) {
		return '<div class="flex-video widescreen">' . $html . '</div>';
	}
	return $html;
}
add_filter( 'embed_oembed_html', 'flexbox_theme_oembed_flex_wrapper', 10, 4 );

/*******************************************************************************
* Custom login styles for the theme. Sass file is located in ./assets/login.scss
* and is spit out to ./assets/dist/css/login.css by gulp. Functions are here so
* that you can move it wherever works best for your project.
*******************************************************************************/

// Load the CSS
add_action( 'login_enqueue_scripts', 'flexbox_theme_login_css' );

function flexbox_theme_login_css() {
	wp_enqueue_style( 'flexbox_theme_login_css', get_template_directory_uri() .
	'/assets/dist/css/login.css', false );
}

// Change header link to our site instead of wordpress.org
add_filter( 'login_headerurl', 'flexbox_theme_remove_logo_link' );

function flexbox_theme_remove_logo_link() {
	return get_bloginfo( 'url' );
}

// Change logo title in from WordPress to our site name
add_filter( 'login_headertitle', 'flexbox_theme_change_login_logo_title' );

function flexbox_theme_change_login_logo_title() {
	return get_bloginfo( 'name' );
}
