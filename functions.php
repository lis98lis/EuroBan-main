<?php

add_action('wp_enqueue_scripts', 'addStyle');

function addStyle()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/styles.css');
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery',get_template_directory_uri() . '/assets/js/jquery.js' );
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'),'null',true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('slick'),'null',true);

}

add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

?>