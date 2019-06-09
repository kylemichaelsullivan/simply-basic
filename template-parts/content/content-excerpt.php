<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simplyBasic
 * @since 0.0.0
 */
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<header class="entry-header">
		<?php
		if (is_sticky() && is_home() && ! is_paged()) {
			printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'simplyBasic' ) );
		}
		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		?>
	</header>

	<?php simplyBasic_post_thumbnail(); ?>

	<div class="entry-content">
		<?php the_excerpt(); ?>
	</div>

	<footer class="entry-footer">
		<?php simplyBasic_entry_footer(); ?>
	</footer>
</article>
