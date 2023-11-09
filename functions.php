<?php

add_action('wp_enqueue_scripts', 'addStyle');

function addStyle()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('swiper-bundle.min.css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_deregister_script( 'jquery' );
    wp_enqueue_script( 'jquery',get_template_directory_uri() . '/assets/js/jquery.js' );
    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/slick/slick.min.js', array('jquery'),'null',true);
    wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js', array('slick'),'null',true);

}



add_theme_support('title-tag');
add_theme_support('custom-logo');
add_theme_support('post-thumbnails');

add_action('init', 'polylang_strings' );

function polylang_strings() {
    if( ! function_exists( 'pll_register_string' ) ) {
        return;
    }

    pll_register_string(
        'uslugi', // название строки
        'Послуги', // сама строка
        'Главная', // категория для удобства
        false // будут ли тут переносы строк в тексте или нет
    );
}

?>