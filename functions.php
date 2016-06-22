<?php

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'includes/option-tree/ot-loader.php' );

add_filter( 'ot_show_new_layout', '__return_false' );
//add_filter( 'ot_show_pages', '__return_false' );

function change_ot_header_logo_link() {
    return '';
}
add_filter( 'ot_header_logo_link', 'change_ot_header_logo_link' );

function change_ot_header_version_text() {
    return 'DJIlanoise Theme';
}
add_filter( 'ot_header_version_text', 'change_ot_header_version_text' );

/**
 * Theme Options
 */
require( trailingslashit( get_template_directory() ) . 'includes/theme-options.php' );


if ( ! function_exists( 'djillanoise_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 */
function djillanoise_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 */
	load_theme_textdomain( 'djillanoise', get_template_directory() . '/languages' );

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
	set_post_thumbnail_size( 1200, 9999 );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'djillanoise' ),
		'footer'  => __( 'Footer Menu', 'djillanoise' ),
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

}
endif; // djillanoise_theme_setup
add_action( 'after_setup_theme', 'djillanoise_theme_setup' );

?>
