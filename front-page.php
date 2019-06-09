<?php
/**
 * The template for the front page
 *
 * @package simplyBasic
 * @since simplyBasic 0.0.0
 */

get_header(); ?>

<?php while( have_posts() ) {
  the_post();
  get_template_part_by_slug();
} ?>

<?php get_footer();
