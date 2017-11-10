<?php
//-------------------------------------------
//Funcion carga de estilos
//-------------------------------------------
function tranbip_load_styles() {    

    wp_register_style(
        'theme_style',
        THEMEROOT .'/style.css',
        //        get_stylesheet_uri(),
        '',
        1.0,
        'all'
    );
    
    wp_enqueue_style('theme_style');
}
add_action('wp_enqueue_scripts','tranbip_load_styles');


//-------------------------------------------
//Funcion carga de scripts
//-------------------------------------------
function tranbip_load_scripts() {

    wp_register_script(
        'flexslider', THEMEROOT . '/assets/js/libs/jquery.flexslider-min.js', array('jquery'),'2.6.3', false);

    wp_register_script(
        'theme-functions',THEMEROOT . '/assets/js/apps.js', array('jquery','flexslider'),'1.0', false);
    

    wp_enqueue_script('flexslider');
    wp_enqueue_script('theme-functions');
//
}

add_action('wp_enqueue_scripts','tranbip_load_scripts');



//Funcion para cargar archivos compatibilidad explorer
function tranbip_js_conditional(){
?>
<!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
<?php  
}
add_action('wp_head','tranbip_js_conditional');
?>