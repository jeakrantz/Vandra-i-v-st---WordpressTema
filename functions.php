<?php

// Meny
add_action('init', 'register_my_menus');

function register_my_menus()
{
    register_nav_menus(array(
        'myTopnav' => 'Huvudmeny',
        'foot-nav-left' => 'Footer-meny Vänster',
        'foot-nav-right' => 'Footer-meny Höger'
    ));
}

//Logga
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
) );

//Storlek bilder

add_image_size('news-thumbnail', 1000, 700, array('center', 'center'));
add_image_size('hero-img', 1024, 700, array('center', 'center'));

//Utvald bild

add_theme_support('post-thumbnails');

//Header-bild
$header_args = array(
    'default-image' => get_template_directory_uri() . '/images/christian-widell-vrT3Z9UKFEg-unsplash.jpg', 
    'width' => 1920, 
    'height' => 1000, 
    'uploads' => true 
);

add_theme_support('custom-header', $header_args);

// Widget area
add_action('widgets_init', 'start_widget_init');

function start_widget_init(){
    register_sidebar(array(
        'name' => 'Puff på startsidan', 
        'id' => 'puff-front-page', 
        'before_sidebar' => '<div class="puff-img yellow">',
        'after_sidebar' => '</div>',
        'before_widget' => ' ',
        'after_widget' => ' ',
        'before_title' => '<div><h2>',
        'after_title' => '</h2></div>'
    ));

    register_sidebar(array(
        'name' => 'Sök-ruta', 
        'id' => 'search-bar',
        'before_sidebar' => ' ',
        'after_sidebar' => ' ',
        'before_widget' => ' ',
        'after_widget' => ' '
    ));

    register_sidebar(array(
        'name' => 'Sociala medier', 
        'id' => 'socialmedia',
        'before_sidebar' => ' ',
        'after_sidebar' => ' ',
        'before_widget' => ' ',
        'after_widget' => ' '
    ));
}

add_filter( 'excerpt_length', function($length) {
    return 20;
});