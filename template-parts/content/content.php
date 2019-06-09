<?php
/**
 * Template part for displaying post content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simplyBasic
 * @since 0.0.0
 */
?>

<div class="container-fluid">
  <h1><?php the_title(); ?></h1>
  <div class="container limit-width">
    <?php the_content(); ?>
  </div>
</div>
