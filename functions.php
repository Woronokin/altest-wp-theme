<?php

add_action('wp_enqueue_scripts', 'head_altheme');

function head_altheme()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('jquery');
}

// Включение миниатюр записей и страниц
add_theme_support('post-thumbnails');

// Регистрация миниатюры кастомного размера
add_image_size('post_thumb', 400, 400, ['center', 'center']);

// Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter('get_the_archive_title', function ($title) {
    return preg_replace('~^[^:]+: ~', '', $title);
});

// Удаляет "Рубрика: ", "Метка: " и т.д. из статьи
add_filter('the_tags', function ($the_tags) {
    return preg_replace('~^[^:]+: ~', '', $the_tags);
});

// Подключение файла с данными по ACF
require_once 'functions-acf.php';

?>