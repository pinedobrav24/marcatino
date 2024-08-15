<?php
/*
    Plugin Name: Marcatino - Post Types
    Plugin URI: http://twitter.com/marcatino
    Description: Añade Post Types al sitio Marcatino
    Version: 1.0.0
    Author: Yuri Pinedo Bravo
    Author URI: http://twitter.com/marcatino
    Text Domain: marcatino
*/

if (!defined('ABSPATH')) die();

// Registrar Custom Post Type
function tm_servicios_post_type()
{

    $labels = array(
        'name'                  => _x('Servicios', 'Post Type General Name', 'marcatino'),
        'singular_name'         => _x('Servicio', 'Post Type Singular Name', 'marcatino'),
        'menu_name'             => __('Servicios', 'marcatino'),
        'name_admin_bar'        => __('Servicio', 'marcatino'),
        'archives'              => __('Archivo', 'marcatino'),
        'attributes'            => __('Atributos', 'marcatino'),
        'parent_item_colon'     => __('Servicio Padre', 'marcatino'),
        'all_items'             => __('Todos Los Servicios', 'marcatino'),
        'add_new_item'          => __('Agregar Servicio', 'marcatino'),
        'add_new'               => __('Agregar Servicio', 'marcatino'),
        'new_item'              => __('Nuevo Servicio', 'marcatino'),
        'edit_item'             => __('Editar Servicio', 'marcatino'),
        'update_item'           => __('Actualizar Servicio', 'marcatino'),
        'view_item'             => __('Ver Servicio', 'marcatino'),
        'view_items'            => __('Ver Servicios', 'marcatino'),
        'search_items'          => __('Buscar Servicio', 'marcatino'),
        'not_found'             => __('No Encontrado', 'marcatino'),
        'not_found_in_trash'    => __('No Encontrado en Papelera', 'marcatino'),
        'featured_image'        => __('Imagen Destacada', 'marcatino'),
        'set_featured_image'    => __('Guardar Imagen destacada', 'marcatino'),
        'remove_featured_image' => __('Eliminar Imagen destacada', 'marcatino'),
        'use_featured_image'    => __('Utilizar como Imagen Destacada', 'marcatino'),
        'insert_into_item'      => __('Insertar en Servicio', 'marcatino'),
        'uploaded_to_this_item' => __('Agregado en Servicio', 'marcatino'),
        'items_list'            => __('Lista de Servicios', 'marcatino'),
        'items_list_navigation' => __('Navegación de Servicios', 'marcatino'),
        'filter_items_list'     => __('Filtrar Servicios', 'marcatino'),
    );
    $args = array(
        'label'                 => __('Servicio', 'marcatino'),
        'description'           => __('Servicios para el Sitio Web', 'marcatino'),
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => true, // true = posts , false = paginas
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-clipboard',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type('tm_servicios', $args);
}
add_action('init', 'tm_servicios_post_type', 0);
