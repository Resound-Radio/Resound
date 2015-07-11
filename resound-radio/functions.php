<?php
/**
 * Resound Radio functions and definitions
 *
 * @package Resound Radio
 */

if ( ! function_exists( 'resound_radio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function resound_radio_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Resound Radio, use a find and replace
	 * to change 'resound-radio' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'resound-radio', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'resound-radio' ),
        'social' => esc_html__( 'Social Media', 'resound-radio' )
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
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
    
}
endif; // resound_radio_setup
add_action( 'after_setup_theme', 'resound_radio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function resound_radio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'resound_radio_content_width', 960 );
}
add_action( 'after_setup_theme', 'resound_radio_content_width', 0 );

/**
 * Enqueue scripts and styles.
 */
function resound_radio_scripts() {
	wp_enqueue_style( 'resound-radio-style', get_stylesheet_uri() );
    
    // Include Genericons for easy, lazy icons for things
    wp_enqueue_style("genericons", get_template_directory_uri() . "/genericons/genericons.css");
    
    // And now we need our Google font includes:
    wp_enqueue_style("resound-radio-google-fonts", "//fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,400italic");
    
    // JQuery is good:
    wp_enqueue_script("jquery", "//code.jquery.com/jquery-1.11.3.min.js", "1.11.3", true);

    // Skip this because I can do better in jQuery
	//wp_enqueue_script( 'resound-radio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'resound-radio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'resound_radio_scripts' );

/**
 * Register a logo image uploader
 */
function resound_radio_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'resound_radio_logo_section', array(
        'title' => __('Logo', 'resound-radio'),
        'priority' => 30,
        'description' => 'Upload a logo to be displayed in the site header') );
    $wp_customize->add_setting( 'resound_radio_logo');
    $wp_customize->add_control( new WP_Customize_Image_Control ($wp_customize, 'resound_radio_logo', array(
        'label' => __('Logo', 'resound-radio'),
        'section' => 'resound_radio_logo_section',
        'settings' => 'resound_radio_logo')
    ));
    
}
add_action( 'customize_register', 'resound_radio_theme_customizer');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
