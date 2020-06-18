<?php

add_action('wp_enqueue_scripts', 'my_script');

function my_script()
{

    wp_enqueue_style('libs', get_stylesheet_directory_uri() . '/css/libs.min.css');
    wp_enqueue_style('main', get_stylesheet_directory_uri() . '/css/main.css', array(), time());
    wp_enqueue_style('media', get_stylesheet_directory_uri() . '/css/media.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('main-js', get_stylesheet_directory_uri(), '/js/main.js', 'jquery');
}

register_nav_menus(
    array(
        'head_menu' => 'Меню вверху сайта',
        'footermenu' => 'Меню в футере сайта'
    )
);

add_theme_support('post-thumbnails');

add_image_size('mysize', 790, 300, true);

function calend()
{
    register_sidebar(array(
        'name' => 'календарь',
        'id' => 'calendar'
    ));
}

add_action('widgets_init', 'calend');

