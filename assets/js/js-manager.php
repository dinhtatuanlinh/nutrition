<?php
add_action( 'wp_enqueue_scripts', 'dttl_register_js');
function dttl_register_js(){
    $jsUrl = get_template_directory_uri() . '/assets/js';
    wp_register_script('dttl_breakpoints', $jsUrl . '/breakpoints.min.js', array(), '1.0', true);
    wp_enqueue_script('dttl_breakpoints');
    wp_register_script('dttl_browser', $jsUrl . '/browser.min.js', array(), '1.0', true);
    wp_enqueue_script('dttl_browser');
    wp_register_script('dttl_jquery', $jsUrl . '/jquery.min.js', array(), '1.0', true);
    wp_enqueue_script('dttl_jquery');
    wp_register_script('dttl_main', $jsUrl . '/main.js', array(), '1.0', true);
    wp_enqueue_script('dttl_main');
    wp_register_script('dttl_util', $jsUrl . '/main.js', array(), '1.0', true);
    wp_enqueue_script('dttl_util');
}
?>