<?php
//-------------------------------------------
//Funcion carga de menus
//-------------------------------------------
function theme_register_menus(){
register_nav_menus(
array(
'menu-principal' => __('Menú principal','theme')

)
);
}
add_action('init','theme_register_menus');
