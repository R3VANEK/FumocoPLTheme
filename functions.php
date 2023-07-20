<?php

$version = wp_get_theme()->get('Version');

function fumocoPLTheme_register_styles(){
    wp_enqueue_style('fumocoPLTheme-style', get_template_directory_uri() . "/src/main.css", array(), $version, 'all');
}

function fumocoPLTheme_register_scripts(){
    wp_enqueue_script('fumocoPLTemplate-jquery', get_template_directory_uri() . "/src/main.js", array(), $version, true);
}


add_action('wp_enqueue_scripts', 'fumocoPLTheme_register_styles');
add_action('wp_enqueue_scripts', 'fumocoPLTheme_register_scripts');

?>