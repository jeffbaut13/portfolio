<?php

/**
 * Plugin Name: Ligthbox courses
 * Plugin URI: 
 * Description: show in ligthbox the images of products.
 * Version: 1.0
 * Author: Medicart
 * Author URI:
 */


require __DIR__ . '/includes/section.php';

function css_ligth_box(){
    wp_register_style('estilos-jquery', plugin_dir_url(__FILE__).'/includes/estilos.css', false, '1.0.');
    wp_enqueue_style( 'estilos-jquery' );
}
add_action( 'wp_enqueue_scripts', 'css_ligth_box', 10 );


add_action( 'wp_enqueue_scripts', 'js_ligh_box' );
function js_ligh_box() {

    wp_enqueue_script(
        'mi-plugin-script',
        plugins_url( '/lightbox/js/lightbox.min.js', __FILE__ ),
        array( 'jquery' ),
        '1.0',
        true
    );

}