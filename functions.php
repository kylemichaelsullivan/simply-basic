<?php
/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package simplyBasic
 * @since 0.0.0
 */
?>

<?php
/* Always sync the version in style.css! */
$version = "0.0.0";

/* Enqueue CDN CSS */
if( ! function_exists( 'enqueue_cdn_styles' ) ) {
  function enqueue_cdn_styles() {
    $cdn_styles = [
      // wp_style_name => url
      'font-awesome-css'  => 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'
    ];

    foreach ($cdn_styles as $handle => $src) {
      wp_enqueue_style($handle, $src);
    }

  }
  add_action('wp_enqueue_scripts', 'enqueue_cdn_styles');
}

/* Enqueue CDN JS */
if( ! function_exists( 'enqueue_cdn_scripts' ) ) {
  function enqueue_cdn_scripts() {
    $cdn_scripts = [
      // wp_script_name => url
    ];

    foreach ($cdn_scripts as $handle => $src) {
      wp_enqueue_script($handle, $src);
    }

  }
  add_action('wp_enqueue_scripts', 'enqueue_cdn_scripts');
}

/* Enqueue Theme Styles */
if( ! function_exists( 'enqueue_theme_styles' ) ) {
  function enqueue_theme_styles() {
    wp_enqueue_style(
      'basic-styles',
      get_template_directory_uri() . '/style.min.css',
      /* keyWord: microtime() to version */
      null, microtime(), 'all'
    );
  }
  add_action('wp_enqueue_scripts', 'enqueue_theme_styles');
}

/* Enqueue Theme Scripts */
if( ! function_exists( 'enqueue_theme_scripts' ) ) {
  function enqueue_theme_scripts() {
    wp_enqueue_script(
      'basic-scripts',
      get_template_directory_uri() . '/scripts.js',
      /* keyWord: microtime() to version */
      array('jquery'), microtime(), true
    );
  }
  add_action('wp_enqueue_scripts', 'enqueue_theme_scripts');
}

/* Add Theme Support */
if( ! function_exists( 'add_theme_support_options' ) ) {
  function add_theme_support_options() {
    $options = [
      'post-thumbnails' => null,
      'title-tag' => null
    ];

    foreach ($options as $option => $key) {
      add_theme_support($option, $key);
    }
  }
  add_action('after_setup_theme', 'add_theme_support_options');
}

/* Add get_template_part_by_slug() */
if( ! function_exists( 'get_template_part_by_slug' ) ) {
  function get_template_part_by_slug($prefix = "content") {
    $slug = get_post_field( 'post_name', get_post() );
    get_template_part('template-parts/content/' . $prefix, $slug);
  }
}
