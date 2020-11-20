<?php
add_action( 'wp_enqueue_scripts', 'dttl_register_style');
function dttl_register_style() {
    $cssUrl = get_template_directory_uri() . '/assets/css';
    wp_register_style('dttl_fontawesome-all', $cssUrl . '/fontawesome-all.min.css', array(), '1.0');
    wp_enqueue_style('dttl_fontawesome-all');
    wp_register_style('dttl_main', $cssUrl . '/main.css', array(), '1.0');
    wp_enqueue_style('dttl_main');
}
?>