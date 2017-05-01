<?php

function init_mytheme(){
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('post-formats', ['aside', 'image', 'video']);
    
    register_nav_menu('header', 'Header Navigation');
    register_nav_menu('footer', 'Footer Navigation');
}

function init_frontend(){
    wp_enqueue_style('mytheme', get_template_directory_uri().'/css/mytheme.css', [], null, 'all');
    wp_enqueue_script('mytheme', get_template_directory_uri().'/js/mytheme.js', [], null, true);
}

add_action('after_setup_theme', 'init_mytheme');
add_action('wp_enqueue_scripts', 'init_frontend');

?>