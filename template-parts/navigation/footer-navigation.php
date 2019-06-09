<?php
/**
 * This is the template for the footer navigation section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simplyBasic
 * @since 0.0.0
 */
?>

<?php if( has_nav_menu( 'footer' ) ) { ?>
  <nav class="footer-navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'simplyBasic' ); ?>">
    <?php wp_nav_menu(
      array(
        'theme_location' => 'footer',
        'menu_class'     => 'footer-menu',
        'depth'          => 1
      )
    ); ?>
  </nav>
<?php }
