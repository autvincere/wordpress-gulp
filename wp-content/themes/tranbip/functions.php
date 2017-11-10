<?php
/*
Archivo de Funciones
Author: Eduardo Palma López
Author URI: http://www.trendingchile.cl/
* Description: este archivo maneja las funcionesdel tema importando distintos archivos
* Summary (no period for file headers)
* @package millaman-tema-base

* @since 1.0
*/


//Definir la ruta al tema
define('THEMEROOT', get_stylesheet_directory_uri() );

//Definir la ruta a la carpeta imagenes
define('IMAGES', THEMEROOT);

//Deshabilitar la edicion de archivos
//define('DISALLOW_FILE_EDIT', true);



// Set content width value based on the theme's design
if ( ! isset( $content_width ) )
    $content_width = 1200;

// Register Theme Features
function millaman_theme_features()  {

    // Add theme support for Automatic Feed Links
    add_theme_support( 'automatic-feed-links' );

    // Add theme support for Post Formats
    add_theme_support( 'post-formats', array( 'image', 'video' ) );

    // Add theme support for Featured Images
    add_theme_support( 'post-thumbnails' );

    // Add theme support for Custom Background
    $background_args = array(
        'default-color'          => '#ffffff',
        'default-image'          => '',
        'default-repeat'         => '',
        'default-position-x'     => '',
        'wp-head-callback'       => '_custom_background_cb',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
    );
    add_theme_support( 'custom-background', $background_args );

    // Add theme support for HTML5 Semantic Markup
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

    // Add theme support for document Title tag
    add_theme_support( 'title-tag' );

    // Add theme support for custom CSS in the TinyMCE visual editor
    add_editor_style( 'editor-style.css' );

    // Add theme support for Translation
    load_theme_textdomain( 'millaman', get_template_directory() . '/language' );
}
add_action( 'after_setup_theme', 'millaman_theme_features' );




//Añadir tamaños de imagenes personalizadas
add_image_size('blog-image-thumb',305,305,true);

//Habilitar la subida de archivos SVG
add_filter('upload_mimes', 'my_upload_mimes');
function my_upload_mimes($mimes = array()) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
//Cierre Habilitar la subida de archivos SVG

require_once('assets/functions/scripts-stylesheets.php');
require_once('assets/functions/menus.php');
require_once('assets/functions/footer-widgets.php');

