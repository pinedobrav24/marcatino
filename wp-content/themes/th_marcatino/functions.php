<?php

// configuraciones adicionales

function tm_setup()
{
    //imagen destacada
    add_theme_support('post-thumbnails');

    //titulos para SEO
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'tm_setup');
//agregando menus

function tm_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'marcatino'),
        'menu-top' => __('Menu top', 'marcatino'),
        'redes-sociales' => __('Redes Sociales', 'marcatino')
    ));
}

add_action('init', 'tm_menus');

//agregando archivos (hojas de estilos y js)

function tm_scripts_styles()
{
    //archivos css
    wp_enqueue_style('normalize', get_stylesheet_uri(), array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css', array(), '6.0.0');


    //archivos js
}

add_action('wp_enqueue_scripts', 'tm_scripts_styles');
