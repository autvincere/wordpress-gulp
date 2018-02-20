<?php
/*
Archivo de Customizer
Author: Eduardo Palma López
Author URI: http://www.trendingchile.cl/
* Description: este archivo maneja la personalizacion del panel del home
* Summary (no period for file headers)
* @package millaman-tema-base

* @since 1.0
*/

function theme_customize_register($wp_customize) {
//------------------------------------------
//Subir Logo Header
//------------------------------------------
$wp_customize->add_section(
    'millaman_header', 
    array(
        'title'=>__('Cabecera','millaman'),
        'description'=>__('Opciones de la cabecera','millaman'),
        'priority'=> 35
    ));

$wp_customize->add_setting('logo', array(
    'default' => '',
    'sanitize_callback' => 'esc_url_raw'
));

$wp_customize->add_control( 
    new WP_Customize_Image_Control( $wp_customize, 'logo', array(
        'label' => __('Subir logo','millaman'),
        'section' => 'millaman_header',
        'settings' => 'logo'

    )));
}
add_action('customize_register','theme_customize_register');
?>