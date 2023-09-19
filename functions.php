<?php

$version = wp_get_theme()->get('Version');

function fumocoPLTheme_register_styles(){
    wp_enqueue_style('fumocoPLTheme-style', get_template_directory_uri() . "/src/main.css", array(), $version, 'all');
}

function fumocoPLTheme_register_scripts(){
    wp_enqueue_script('fumocoPLTemplate-jquery', get_template_directory_uri() . "/src/main.js", array(), $version, true);
}

function fumocoPLTheme_init() {
	$theme_dir = basename(dirname(__FILE__));
	load_theme_textdomain( 'fumocopltheme', false, $theme_dir );
}



add_action('wp_enqueue_scripts', 'fumocoPLTheme_register_styles');
add_action('wp_enqueue_scripts', 'fumocoPLTheme_register_scripts');
add_action( 'after_setup_theme', 'fumocoPLTheme_init' );
?>