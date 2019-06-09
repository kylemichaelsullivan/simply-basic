<?php
/**
 * Displays header site branding
 *
 * @package simplyBasic
 * @since 0.0.0
 */
?>

<div class="site-branding">
	<?php if( has_custom_logo() ) { ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php }
	$blog_info = get_bloginfo( 'name' );
	if( ! empty( $blog_info ) ) { ?>
		<h1 class="site-title"><a href="<?= esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
	<?php } ?>
</div>
