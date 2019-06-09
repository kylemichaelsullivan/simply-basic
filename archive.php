<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simplyBasic
 * @since 0.0.0
 */

get_header();
?>

<section id="primary" class="content-area">
	<main id="main" class="site-main">
	<?php if( have_posts() ) { ?>
		<header class="page-header">
			<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
		</header>

		<?php
		// Start the Loop.
		while( have_posts() ) {
			the_post();

			/* Include the Post-Format-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
			 */
			get_template_part('template-parts/content/content', 'excerpt');
		}

		// Previous/next page navigation.
		simplyBasic_the_posts_navigation();

	} else {
		get_template_part('template-parts/content/content', 'none');

	} ?>
	</main>
</section>

<?php
get_footer();
