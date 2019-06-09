<?php
/**
 * This is the template for the <header> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simplyBasic
 * @since 0.0.0
 */
?>

<header class="site-header" id="masthead">
  <div class="container">
    <div class="site-branding-container">
      <?php get_template_part( 'template-parts/headers/site', 'branding' ); ?>
    </div>
    <?php get_template_part('template-parts/navigation/navbar'); ?>
  </div>
</header>
