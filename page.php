<?php
/**
 * The template for displaying pages
 *
 * @package simplyBasic
 * @since simplyBasic 0.0.0
 */

get_header(); ?>

<?php if( have_posts() ) {
  while( have_posts() ) {
    the_post();
    get_template_part_by_slug();
  }
}?>

<?php get_footer();
