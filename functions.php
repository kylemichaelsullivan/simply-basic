<?php
/**
 * Simply Basic functions and definitions
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

/* Register Navigation Menus */
if( ! function_exists( 'register_custom_nav_menus' ) ) {
  function register_custom_nav_menus() {
  	register_nav_menus( array(
  		'menu-1' => 'Main Navigation',
  		'footer' => 'Footer Menu',
  	) );
  }
  add_action( 'after_setup_theme', 'register_custom_nav_menus' );
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
      'custom-logo' =>  $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => [ 'site-title', 'site-description' ],
        ),
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

/* Add phone_link() */
if( ! function_exists( 'phone_link' ) ) {
  function phone_link($input) {
    $tel = preg_replace("/[^\d]/", "", $input);
    $output = 'tel:+1-' . substr($tel, 0, 3) . '-' . substr($tel, 3, 3) . '-' . substr($tel, 6, 4);
    if( strlen($tel) > 10 ) $output .= ";" . substr($tel, 10);
    return $output;
  }
}

/* Add get_phone_link() */
if( ! function_exists( 'get_phone_link' ) ) {
  function get_phone_link($input) {
    return phone_link($input);
  }
}

/* Add the_phone_link() */
if( ! function_exists( 'the_phone_link' ) ) {
  function the_phone_link($input) {
    echo "<a href=\"" . phone_link($input) . "\">" . phone_link($input) . "</a>";
  }
}
