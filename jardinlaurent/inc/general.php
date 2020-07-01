<?php
/**
 * jardinlaurent functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jardinlaurent
 */

if ( ! function_exists( 'jardinlaurent_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jardinlaurent_setup() {
		load_theme_textdomain( 'jardinlaurent', get_template_directory() . '/languages' );
		add_theme_support( 'automatic-feed-links' );
		add_theme_support( 'title-tag' );
		add_theme_support( 'post-thumbnails' );

		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'jardinlaurent' ),
		) );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
	}
endif;
add_action( 'after_setup_theme', 'jardinlaurent_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jardinlaurent_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'jardinlaurent_content_width', 640 );
}
add_action( 'after_setup_theme', 'jardinlaurent_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jardinlaurent_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jardinlaurent' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jardinlaurent' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'jardinlaurent_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jardinlaurent_scripts() {
	wp_enqueue_style( 'jardinlaurent-style', get_stylesheet_uri() );
	// wp_register_script( 'infinite-scroll', get_template_directory_uri().'/inc/js/jquery.infinitescroll.min.js', 'jquery', '2.0', true );
	wp_enqueue_script( 'jquery-masonry' );
}
add_action( 'wp_enqueue_scripts', 'jardinlaurent_scripts' );
