<?php

function my_style_load(){
    $theme_uri = get_template_directory_uri();
    wp_register_style('my-theme-style', $theme_uri.'/style.css', false, '0.1');
    wp_enqueue_style('my-theme-style');
}
add_action('wp_enqueue_scripts', 'my_style_load');
