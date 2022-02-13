<?php
add_action('after_setup_theme', 'sora_setup');
function sora_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'header-text' => array('site-title', 'site-description'),
    ));
}

add_action('wp_enqueue_scripts', 'sora_enqueue_scripts');
function sora_enqueue_scripts()
{
    wp_enqueue_style(
        'sora-style',
        get_template_directory_uri() . '/style.css',
    );
}