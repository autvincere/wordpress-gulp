<?php
//archivo de creacion de widgets footer

function theme_register_somos_footer(){

    register_sidebar( array(
        'name' => __( 'somos', 'theme' ),
        'id' => 'widget-somos',
        'description' => __( 'Esta es la zona donde se explica quienes somos', 'theme' ),
        'before_widget' => '<article class="inline-percent">',
        'after_widget'  => '</article>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ) );
}
add_action('widgets_init','theme_register_somos_footer');
    
    function theme_register_menu_footer(){

        register_sidebar( array(
            'name' => __( 'menu', 'theme' ),
            'id' => 'widget-menu',
            'description' => __( 'Esta es la zona principal para widgets', 'theme' ),
            'before_widget' => '<article class="inline-percent">',
            'after_widget'  => '</article>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
        ) );
    }
add_action('widgets_init','theme_register_menu_footer');
    
function theme_register_ubicacion_footer(){

        register_sidebar( array(
            'name' => __( 'ubicacion', 'theme' ),
            'id' => 'widget-ubicacion',
            'description' => __( 'Esta es la zona de ubicacion', 'theme' ),
            'before_widget'  => '<address class="inline-percent">',
            'after_widget'   => '</address>',
            'before_title'  => '<h3 class="widgettitle">',
            'after_title'   => '</h3>',
            
        ) );
}
add_action('widgets_init','theme_register_ubicacion_footer');

function theme_register_contacto_footer(){

    register_sidebar( array(
        'name' => __( 'contacto', 'theme' ),
        'id' => 'widget-contacto',
        'description' => __( 'Esta es la zona de contacto', 'theme' ),
        'before_widget'  => '<address class="adjust-inline">',
        'after_widget'   => '</address>',
        'before_title'  => '<h3 class="widgettitle">',
        'after_title'   => '</h3>',
    ) );
}
add_action('widgets_init','theme_register_contacto_footer');


?>