<?php
/**
 * Import dummy Content
 *
 *
 * @link https://github.com/thomasgriffin/TGM-Plugin-Activation
 * @package shoppingcart
 */
 function shoppingcart_import_files() {
  return array(
      array(
        'import_file_name'             => esc_html__('Shopping Cart Demo','shoppingcart'),
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/tgm/dummy/shoppingcart.wordpress.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/tgm/dummy/shoppingcart-widgets.wie',
        'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/tgm/dummy/shoppingcart-export.dat',
        'import_notice'                => __( 'Recommended Plugins: WooCommerce, Max Mega Menu, Once Click Demo import, YITH WooCommerce Wishlist and Contact Form 7 Plugins  to look exactly as in our demo. <br> <br> Thanks for being part of us. If you really like our theme, Please help us <a href="https://wordpress.org/support/theme/shoppingcart/reviews/" target="_blank" rel="nofollow">rating</a> our theme.
        ', 'shoppingcart' ),
      ),
    );
  }

add_filter( 'pt-ocdi/import_files', 'shoppingcart_import_files' );

function shoppingcart_after_import_setup($selected_import) {
    // Assign menus to their locations.
    $top_menu = get_term_by( 'name', esc_html__('Top Menu','shoppingcart'), 'nav_menu' );
    $main_menu = get_term_by( 'name', esc_html__('Main menu','shoppingcart'), 'nav_menu' );
    $catlog_nav_menu = get_term_by( 'name', esc_html__('All Products','shoppingcart'), 'nav_menu' );
    $social_icon = get_term_by( 'name', esc_html__('Social Links','shoppingcart'), 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
        'top-menu' => $top_menu->term_id,
        'primary' => $main_menu->term_id,
        'catalog-menu' => $catlog_nav_menu->term_id,
        'social-link' => $social_icon->term_id,
      )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'shoppingcart_after_import_setup' );