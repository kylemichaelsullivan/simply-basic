<?php
/**
 * This is the template for the main navbar
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simplyBasic
 * @since 0.0.0
 */
?>

<?php if( has_nav_menu( 'menu-1' ) ) { ?>
  <nav class="main-navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'simplyBasic' ); ?>" id="site-navigation">
    <?php wp_nav_menu(
      array(
        'theme_location' => 'menu-1',
        'menu_class'     => 'main-menu',
        'items_wrap'     => '<ul class="%2$s navbar" id="%1$s">%3$s</ul>',
      )
    ); ?>
  </nav>
<?php } ?>
