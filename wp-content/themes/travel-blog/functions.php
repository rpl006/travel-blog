<?php

function site_styles(){
    wp_enqueue_style( 'normalize', get_stylesheet_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'fontAwesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
    wp_enqueue_style('site_style_css', get_stylesheet_uri());
    wp_enqueue_style( 'raleway-font', 'https://fonts.googleapis.com/css?family=Raleway:900');
    wp_enqueue_style( 'libre-baskerville-font', 'https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');

    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'bootstarpJS', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
}

    add_action( 'wp_enqueue_scripts', 'site_styles');



    function site_features(){
        add_theme_support('title-tag');
        register_nav_menu( 'headerMenu', "Main Menu");
        add_theme_support('post-thumbnails');
        add_image_size( 'homePagePost', 750, 490, true );
    }

    add_action( 'after_setup_theme', 'site_features');

    

?>