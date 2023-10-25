<?php

function meal_theme_support()
{
    load_theme_textdomain( 'meal', get_template_directory_uri() . '/languages' );
    add_theme_support('automatic-feed-links');
    add_theme_support('post-thumbnails');
    add_theme_support('html5',array(
        'section',
        'gallery',
        'aside',
        'quote',
        'image',
        'video'
    ));
}
add_action('after_setup_theme', 'meal_theme_support');




function meal_theme_assets(){
// Style
wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', null , time(), 'all');
wp_enqueue_style('asos', get_template_directory_uri().'/assets/css/asos.css', null , time(), 'all');
wp_enqueue_style('bootstrap-date-picker', get_template_directory_uri().'/assets/css/bootstrap-datepicker.css', null , time(), 'all');
wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.css', null , time(), 'all');
wp_enqueue_style('timepicker', get_template_directory_uri().'/assets/css/jquery.timepicker.css', null , time(), 'all');
wp_enqueue_style('magnific-popup', get_template_directory_uri().'/assets/css/magnific-popup.css', null , time(), 'all');
wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', null , time(), 'all');
wp_enqueue_style('portfolio', get_template_directory_uri().'/assets/css/portfolio.css', null , time(), 'all');
wp_enqueue_style('meal-style', get_template_directory_uri().'/assets/css/style.css', null , time(), 'all');
wp_enqueue_style('flaticon', get_template_directory_uri().'/assets/fonts/flaticon/font/flaticon.css', null , time(), 'all');
wp_enqueue_style('style', get_stylesheet_uri());

// scripts

wp_enqueue_script( 'aos', get_template_directory_uri() .'/assets/js/aos.js', array('jquery'), time(), true );
wp_enqueue_script( 'bootstrap-date-picker', get_template_directory_uri() .'/assets/js/bootstrap-datepicker.js', array('jquery'), time(), true );
wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array('jquery'), time(), true );
wp_enqueue_script( 'imagesloaded', get_template_directory_uri() .'/assets/js/imagesloaded.js', array('jquery'), time(), true );
wp_enqueue_script( 'isotope', get_template_directory_uri() .'/assets/js/isotope.pkgd.min.js', array('jquery'), time(), true );
wp_enqueue_script( 'magnific-popup', get_template_directory_uri() .'/assets/js/jquery.magnific-popup.min.js', array('jquery'), time(), true );
wp_enqueue_script( 'stellar', get_template_directory_uri() .'/assets/js/jquery.stellar.min.js', array('jquery'), time(), true );
wp_enqueue_script( 'timepicker', get_template_directory_uri() .'/assets/js/jquery.timepicker.min.js', array('jquery'), time(), true );
wp_enqueue_script( 'waypoints', get_template_directory_uri() .'/assets/js/jquery.waypoints.min.js', array('jquery'), time(), true );
wp_enqueue_script( 'magnific-popup-options', get_template_directory_uri() .'/assets/js/magnific-popup-options.js', array('jquery'), time(), true );
wp_enqueue_script( 'owl.carousel', get_template_directory_uri() .'/assets/js/owl.carousel.min.js', array('jquery'), time(), true );
wp_enqueue_script( 'popper', get_template_directory_uri() .'/assets/js/popper.min.js', array('jquery'), time(), true );
wp_enqueue_script( 'portfolio', get_template_directory_uri() .'/assets/js/portfolio.js', array('jquery'), time(), true );
wp_enqueue_script( 'main', get_template_directory_uri() .'/assets/js/main.js', array('jquery'), time(), true );

}
add_action('wp_enqueue_scripts', 'meal_theme_assets');
