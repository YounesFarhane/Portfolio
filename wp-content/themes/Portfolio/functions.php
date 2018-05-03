<?php
/**
* portfolio functions and definitions
*
* @package Wordpress
* @since portfolio 1.0
*/
/*
// THEME SETUP *********************************************************
*/
if ( ! function_exists( 'portfolio_setup' ) ) :
  /**
  * Sets up theme defaults and registers support for various WordPress features.
  *
  * Note that this function is hooked into the after_setup_theme hook, which runs
  * before the init hook. The init hook is too late for some features, such as indicating
  * support post thumbnails.
  */
  function portfolio_setup() {
    // Show the admin bar.
   show_admin_bar(false);
    /**
    * Make theme available for translation.
    * Translations can be placed in the /languages/ directory.
    */
    load_theme_textdomain( 'portfolio', get_template_directory() . '/languages' );
    /**
    * Add default posts and comments RSS feed links to <head>.
    */
    add_theme_support( 'automatic-feed-links' );
    /**
    * Enable support for post thumbnails and featured images.
    */
    add_theme_support( 'post-thumbnails' );
    add_theme_support('custom-logo');
    /**
    * Add support for two custom navigation menus.
    */
    register_nav_menus( array(
      'Top'   => __( 'Top Menu', 'portfolio' ),
      'primary'   => __( 'Primary Menu', 'portfolio' ),
      'secondary'   => __( 'Secondary Menu', 'portfolio' ),
      'footer'   => __( 'Footer Menu', 'portfolio' ),
    ) );
    /**
    * Enable support for the following post formats:
    * aside, gallery, quote, image, and video
    */
    //  add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
  }
endif; // lcaf_setup
add_action( 'after_setup_theme', 'portfolio_setup' );
/*
// SCRIPTS AND STYLESHEETS *********************************************************
*/
/*  Enqueue
/* ------------------------------------ */
function portfolio_enqueue_styles()
{
  wp_enqueue_style( 'Font', 'https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,900', null, true );
  wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.0.10/css/all.css', null, true);
  wp_enqueue_style( 'main', get_template_directory_uri().'/assets/styles/main.css' );
}
add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_styles' );
function portfolio_enqueue_scripts()
{
  wp_enqueue_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', null, true );
  wp_enqueue_script( 'font-awesome', 'https://use.fontawesome.com/releases/v5.0.10/js/all.js', null, true);
  wp_enqueue_script( 'Scrollreveal', 'https://unpkg.com/scrollreveal/dist/scrollreveal.min.js', null, true );
  wp_enqueue_script( 'app', get_template_directory_uri().'/assets/scripts/app.js', null, true );
}
add_action( 'wp_enqueue_scripts', 'portfolio_enqueue_scripts' );
if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
  wp_enqueue_script( 'comment-reply' );
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
  ));
  
  acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Contact Settings',
		'menu_title'	=> 'Contact',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}

// HIDE SOME METABOXES ON SCREEN OPTIONS
add_filter( 'default_hidden_meta_boxes', 'custom_default_hidden_screen_options', 10, 2 );
function custom_default_hidden_screen_options( $hidden, $screen ) {
  $hide_these = array(
    'postimagediv',
    'tagsdiv-post_tag',
    'categorydiv',
    'postexcerpt',
    'trackbacksdiv',
    'icl_div_config'
  );
  return array_merge( $hidden, $hide_these );
}
// SANITIZE TITLES URL FROM ACCENTS
add_filter('sanitize_file_name', 'remove_accents' );
/*
// ACF DATA FIELDS VERSIONING **************************************************
*/
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
  // update path
  $path = get_stylesheet_directory() . '/acf-json';
  // return
  return $path;
}
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
  // remove original path (optional)
  unset($paths[0]);
  // append path
  $paths[] = get_stylesheet_directory() . '/acf-json';
  // return
  return $paths;
}