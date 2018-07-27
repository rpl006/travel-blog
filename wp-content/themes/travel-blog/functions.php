<?php

function site_styles(){
    wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('site_style_css', get_stylesheet_uri());

    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstarpJS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
}

    add_action( 'wp_enqueue_scripts', 'site_styles');



    function site_features(){
        add_theme_support('title-tag');
        register_nav_menu( 'headerMenu', "Main Menu");
        add_theme_support('post-thumbnails');
    }

    add_action( 'after_setup_theme', 'site_features');

    

?>