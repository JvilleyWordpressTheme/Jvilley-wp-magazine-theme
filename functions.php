<?php
/**
 * Jvilles-WP-Magazine-Themes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage jvilley-wp-magazine
 * @since 1.0
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function jvilley_setup() {
  /*
	 * Make theme available for translation.
	 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
	 * If you're building a theme based on Twenty Seventeen, use a find and replace
	 * to change 'twentyseventeen' to the name of your theme in all the template files.
	 */
  load_theme_textdomain( 'jvilley' );
}
add_action( 'after_setup_theme', 'jvilley_setup' );

/**
 * Enqueue styles.
 */
function jvilley_css() {
  wp_enqueue_style( 'bootstrap_css', get_stylesheet_directory() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'fontawesome_css', get_stylesheet_directory() . '/assets/css/font-awesome2.min.css' );
  wp_enqueue_style( 'animate_css', get_stylesheet_directory() . '/assets/css/animate.css' );
  wp_enqueue_style( 'fonts', get_stylesheet_directory() . '/assets/css/font.css' );
  wp_enqueue_style( 'li_scroller_css', get_stylesheet_directory() . '/assets/css/li-scroller.css' );
  wp_enqueue_style( 'slick_css', get_stylesheet_directory() . '/assets/css/slick.css' );
  wp_enqueue_style( 'jquery_fancybox_css', get_stylesheet_directory() . '/assets/css/jquery.fancybox.css' );
  wp_enqueue_style( 'theme_css', get_stylesheet_directory() . '/assets/css/theme.css' );
  wp_enqueue_style( 'style_css', get_stylesheet_directory() . '/assets/css/style.css' );
}
add_action( 'wp_enqueue_scripts', 'jvilley_css' );

/**
 * Enqueue scripts.
 */
function jvilley_js() {

  // Called in header
  wp_enqueue_script( 'skel_min_js', get_stylesheet_directory() . '/assets/js/skel.min.js' );
  wp_enqueue_script( 'util_js', get_stylesheet_directory() . '/assets/js/util.js', array( 'jquery' ) );
  wp_enqueue_script( 'respond_min_js', get_stylesheet_directory() . '/assets/js/respond.min.js' );
  wp_enqueue_script( 'wow_min_js', get_stylesheet_directory() . '/assets/js/wow.min.js' );
  wp_enqueue_script( 'main_js', get_stylesheet_directory() . '/assets/js/main.js', array( 'jquery' ) );

  // Called from the footer
  wp_enqueue_script( 'bootstrap_min_js', get_stylesheet_directory() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'slick_min_js', get_stylesheet_directory() . '/assets/js/slick.min.js', '', '', true );
  wp_enqueue_script( 'jquery_li_scroller_js', get_stylesheet_directory() . '/assets/js/jquery.li-scroller.1.0.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'jquery_newsticker_js', get_stylesheet_directory() . '/assets/js/jquery.newsTicker.min.js', array( 'jquery' ), '', true );
  wp_enqueue_script( 'jquery_fancybox_js', get_stylesheet_directory() . '/assets/js/jquery.fancybox.pack.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'jvilley_js' );
