<?php
/**
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simplyBasic
 * @since 0.0.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('template-parts/headers/the-head'); ?>
  <body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div class="site" id="page">
      <!-- <a href="#content" class="skip-link screen-reader-text"><?php // _e( 'Skip to content', 'simplyBasic' ); ?></a> -->
      <?php get_template_part('template-parts/headers/the-header'); ?>
      <div class="site-content" id="content">
