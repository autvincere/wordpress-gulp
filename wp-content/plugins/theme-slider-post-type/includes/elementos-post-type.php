<?php
/*
post-type slider
Author URI: http://www.trendingchile.cl/
Author: Eduardo Palma López
Author URI: http://health-check-team.example.com
Text Domain: health-check
Domain Path: /languages
*/

if ( ! function_exists('slider_post_type') ) {

// Register Custom Post Type
function slider_post_type() {

$labels = array(
'name'                  => _x( 'slider', 'Post Type General Name', 'sliders_productos' ),
'singular_name'         => _x( 'slider', 'Post Type Singular Name', 'sliders_productos' ),
'menu_name'             => __( 'slider', 'sliders_productos' ),
'name_admin_bar'        => __( 'slider', 'sliders_productos' ),
'archives'              => __( 'Archivo', 'sliders_productos' ),
'attributes'            => __( 'Atributos', 'sliders_productos' ),
'parent_item_colon'     => __( 'Item superior', 'sliders_productos' ),
'all_items'             => __( 'Todos los items', 'sliders_productos' ),
'add_new_item'          => __( 'Agregar un nuevo item', 'sliders_productos' ),
'add_new'               => __( 'Agregar nuevo', 'sliders_productos' ),
'new_item'              => __( 'Nuevo', 'sliders_productos' ),
'edit_item'             => __( 'Editar', 'sliders_productos' ),
'update_item'           => __( 'Actualizar', 'sliders_productos' ),
'view_item'             => __( 'Ver', 'sliders_productos' ),
'view_items'            => __( 'Ver items', 'sliders_productos' ),
'search_items'          => __( 'Buscar', 'sliders_productos' ),
'not_found'             => __( 'No encontrado', 'sliders_productos' ),
'not_found_in_trash'    => __( 'No hay nada en la papelera', 'sliders_productos' ),
'featured_image'        => __( 'Imagen destacada', 'sliders_productos' ),
'set_featured_image'    => __( 'Definir imagen destacada', 'sliders_productos' ),
'remove_featured_image' => __( 'Eliminar imagen destacada', 'sliders_productos' ),
'use_featured_image'    => __( 'Usar como imagen destacada', 'sliders_productos' ),
'insert_into_item'      => __( 'Insertar', 'sliders_productos' ),
'uploaded_to_this_item' => __( 'Atualizar este producto', 'sliders_productos' ),
'items_list'            => __( 'listado', 'sliders_productos' ),
'items_list_navigation' => __( 'Navegación', 'sliders_productos' ),
'filter_items_list'     => __( 'Filtrar', 'sliders_productos' ),
);
$args = array(
'label'                 => __( 'slider', 'sliders_productos' ),
'description'           => __( 'slider publicados', 'sliders_productos' ),
'labels'                => $labels,
'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
'hierarchical'          => false,
'public'                => true,
'show_ui'               => true,
'show_in_menu'          => true,
'menu_position'         => 5,
'menu_icon'             => 'dashicons-images-alt',
'show_in_admin_bar'     => true,
'show_in_nav_menus'     => true,
'can_export'            => true,
'has_archive'           => true,		
'exclude_from_search'   => false,
'publicly_queryable'    => true,
'capability_type'       => 'page',
);
register_post_type( 'slider', $args );

}
add_action( 'init', 'slider_post_type', 0 );

}