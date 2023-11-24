<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


function theme_enqueue_styles()
{
    wp_enqueue_style('blankslate', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array(), 
    filemtime(get_stylesheet_directory() . '/theme.css'));
}



   function enqueue_custom_styles() {
    wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/theme.css');
    }
    add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

    function montheme_support() {
      register_nav_menu('header', 'En tête de la page ');
      register_nav_menu('footer', 'En bas de page ');
    }
    add_action('after_setup_theme','montheme_support');



    function add_extra_item_to_nav_menu( $items, $args ) {
      if (is_user_logged_in()) {
        $items .= '<li><a href="http://localhost:8888/Planty3/wordpress/wp-admin/index.php">Admin</a></li>';
      }
      return $items;
    }
    add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );

   