<?php

/**
 * Dr.Rana's Medical Hall
 *
 * @package medical
 */

/**
 * Set the theme version number as a global variable
 */
 add_theme_support( 'title-tag' );


function custom_scripts_method()
{

    /*  CSS  */
    wp_enqueue_style('astratheme-style', get_template_directory_uri() . '/astratheme-style.css');
    wp_enqueue_style('root-style', get_template_directory_uri() . '/style.css');
}

add_action('wp_enqueue_scripts', 'custom_scripts_method');


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init()
{

    register_sidebar(array(
        'name' => 'Blog sidebar',
        'id' => 'partner-slide',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'arphabet_widgets_init');

function get_ploads_directory_path()
{

    $upload_dir = wp_upload_dir();

    return trailingslashit($upload_dir['basedir']);
}

add_theme_support( 'post-thumbnails' );