<?php
/**
 * This is the template for meta data in <head>
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simplyBasic
 * @since 0.0.0
 */
?>

<?php
  $meta = [
    "application-name"  => "Simply Basic",
    "author"            => "By Law 4 Law",
    "description"       => "A WordPress Theme to designed to let you build sites from the ground up without the tedium.",
    "keywords"          => "simple, basic, scaffolding, framework, custom",
    "viewport"          => "width=device-width, initial-scale=1"
  ];

  $og = [
    "image"       => get_bloginfo('stylesheet_directory') . "/screenshot.png",
    "description" => "A WordPress Theme to designed to let you build sites from the ground up without the tedium.",
    "title"       => "This site has been built on Simply Basic"
  ];
?>

<meta charset="<?php bloginfo('charset') ?? 'UTF-8'; ?>" />

<?php
  foreach ($meta as $name => $content) echo "<meta name=\"$name\" content=\"$content\" />";
  foreach ($og as $property => $content) echo "<meta property=\"og:$property\" content=\"$content\" />";
?>
