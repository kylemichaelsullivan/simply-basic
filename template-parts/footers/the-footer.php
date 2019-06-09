<?php
/**
 * This is the template for the <footer> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simplyBasic
 * @since 0.0.0
 */
?>

<footer class="site-footer">
	<?php // get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>
	<div class="site-info limit-width">
		<?php $blog_info = get_bloginfo( 'name' ); ?>
		<?php if( ! empty( $blog_info ) ) { ?>
			<a href="<?= esc_url( home_url( '/' ) ); ?>" class="site-name" rel="home"><?php bloginfo( 'name' ); ?></a> &copy;&nbsp;<?= date("Y"); ?>
		<?php }
		if( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
		}

		get_template_part('template-parts/navigation/footer-navigation'); ?>
	</div>
</footer>
