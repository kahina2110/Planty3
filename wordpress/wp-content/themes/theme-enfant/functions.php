<?php

// Enregistrer et inclure les feuilles de style
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function enqueue_custom_styles() {
  wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/theme.css');
  }
  add_action('wp_enqueue_scripts', 'enqueue_custom_styles');
function theme_enqueue_styles()
{
    // Inclure la feuille de style principale du thème parent 
    wp_enqueue_style('blankslate', get_template_directory_uri() . '/style.css');

    // Inclure la feuille de style personnalisée avec une version basée sur le temps de modification du fichier
    wp_enqueue_style(
        'theme-style',
        get_stylesheet_directory_uri() . '/theme.css',
        array(),
        filemtime(get_stylesheet_directory() . '/theme.css')
    );
}


// fonction qui permet d'enregistrer les menus de navigation dans l'interface wp
function montheme_support() {
    register_nav_menu('header', 'En tête de la page');
    register_nav_menu('footer', 'En bas de page');
}
add_action('after_setup_theme', 'montheme_support'); //hook action apres que le theme soit initalisée

// Ajouter un élément supplémentaire dans la navbar pour les users connectés
function add_extra_item_to_nav_menu( $items, $args ) {
    if (is_user_logged_in()) {
        $items .= '<li><a href="http://localhost:8888/Planty3/wordpress/wp-admin/index.php">Admin</a></li>';
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 ); //hook filtre pour  Ajouter un élément supplémentaire dans la navbar pour les users connectés
