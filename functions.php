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

/**
 * Meta Boxes
 */
require( trailingslashit( get_template_directory() ) . 'includes/meta-boxes.php' );


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


/**
 * Enqueue and register frontend script and styles
 */
function enqueue_djillanoise_scripts_styles() {
    wp_enqueue_style( 'djillanoise', get_stylesheet_uri() );
    wp_enqueue_script( 'frontend', get_template_directory_uri() . '/assets/js/theme.js', array('jquery'), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_djillanoise_scripts_styles' );

/**
 * Register Events Custom Post Type
 */
if( ! function_exists( 'event_create_post_type' ) ) {
	function event_create_post_type() {
		$labels = array(
			'name' => 'Events',
			'singular_name' => 'Event',
			'add_new' => 'Add event',
			'all_items' => 'All events',
			'add_new_item' => 'Add event',
			'edit_item' => 'Edit event',
			'new_item' => 'New event',
			'view_item' => 'View event',
			'search_items' => 'Search events',
			'not_found' => 'No events found',
			'not_found_in_trash' => 'No events found in trash',
			'parent_item_colon' => 'Parent event'
		);
		$args = array(
			'labels' => $labels,
			'public' => true,
			'has_archive' => true,
			'publicly_queryable' => true,
			'query_var' => true,
			'rewrite' => true,
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array(
				'title',
				'revisions'
			),
			'menu_position' => 5,
			'exclude_from_search' => false,
			// 'register_meta_box_cb' => 'event_add_post_type_metabox'
		);
		register_post_type( 'event', $args );
	}
	add_action( 'init', 'event_create_post_type' );
}

// Change displayed format and returnd value
// Defaults to yy-mm-dd
// Not recommended but it's possible
add_filter( 'ot_type_date_picker_date_format', 'dj_modify_date_picker_date_format', 10, 2 );
function dj_modify_date_picker_date_format( $format, $field_id ) {
    if( 'event_date_picker' == $field_id ) {
        return 'M dd D';
    }
}

add_filter( 'mc4wp_debug_log_level', function() { return 'debug'; } );

?>
