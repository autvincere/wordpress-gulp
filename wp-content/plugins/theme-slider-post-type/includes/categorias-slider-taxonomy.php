<?php
/*
Taxonomy post-type slider
Author URI: http://www.trendingchile.cl/
Author: Eduardo Palma López
Author URI: http://health-check-team.example.com
Text Domain: health-check
Domain Path: /languages
*/
if ( ! function_exists( 'slider-taxonomy' ) ) {

// Register Custom Taxonomy
function slider_taxonomy() {

$labels = array(
'name'                       => _x( 'categorias', 'Taxonomy General Name', 'theme' ),
'singular_name'              => _x('categorias', 'Taxonomy Singular Name', 'theme' ),
'menu_name'                  => __('categorias', 'theme' ),
'all_items'                  => __( 'ver todos', 'theme' ),
'parent_item'                => __( 'superior', 'theme' ),
'parent_item_colon'          => __( 'slider superior', 'theme' ),
'new_item_name'              => __( 'Nuevo nombre del pan', 'theme' ),
'add_new_item'               => __( 'Agregar categoria', 'theme' ),
'edit_item'                  => __( 'editar slider', 'theme' ),
'update_item'                => __( 'Actualizar slider', 'theme' ),
'view_item'                  => __( 'Ver slider', 'theme' ),
'separate_items_with_commas' => __( 'separar sliders con coma', 'theme' ),
'add_or_remove_items'        => __( 'agregar o remover sliders', 'theme' ),
'choose_from_most_used'      => __( 'Mostrar los mas usados', 'theme' ),
'popular_items'              => __( 'sliders populares', 'theme' ),
'search_items'               => __( 'Buscar sliders', 'theme' ),
'not_found'                  => __( 'No encontrado', 'theme' ),
'no_terms'                   => __( 'No hay sliders', 'theme' ),
'items_list'                 => __( 'lista de sliders', 'theme' ),
'items_list_navigation'      => __( 'Items list navigation', 'theme' ),
);
$args = array(
'labels'                     => $labels,
'hierarchical'               => true,
'public'                     => true,
'show_ui'                    => true,
'show_admin_column'          => true,
'show_in_nav_menus'          => true,
'show_tagcloud'              => false,
);
register_taxonomy( 'categorias', array( 'slider' ), $args );

}
add_action( 'init', 'slider_taxonomy', 0 );

}