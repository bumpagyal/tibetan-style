<?php
/*
Plugin Name: Tibetan Style
Plugin URI: https://github.com/bumpagyal/tibetan-style
Description: This plugin solves the default Windows Tibetan font is too small problem. Unified use of "Noto Sans Tibetan" font.
Author: tibetitw.com
Version: 1.2.3
Author URI: https://www.tibetitw.com/
*/

function load_plugin_scripts() {
    wp_register_style( 'tibetan-style', plugins_url('/tibetan-style.css', __FILE__), false, '1.2.3' );
    wp_enqueue_style( 'tibetan-style' );
}
function load_plugin_admin_scripts() {
    wp_register_style( 'tibetan-editor-style', plugins_url('/tibetan-editor-style.css', __FILE__), false, '1.2.3' );
    wp_enqueue_style( 'tibetan-editor-style' );
}
function tibetan_add_google_fonts() {
	wp_enqueue_style( 'tibetan-google-fonts', '//fonts.googleapis.com/earlyaccess/notosanstibetan.css', false ); 
}

add_action( 'wp_enqueue_scripts', 'load_plugin_scripts' );
add_action( 'admin_enqueue_scripts', 'load_plugin_admin_scripts' );
add_action( 'login_enqueue_scripts', 'load_plugin_admin_scripts' );

add_action( 'wp_enqueue_scripts', 'tibetan_add_google_fonts' );
add_action( 'admin_enqueue_scripts', 'tibetan_add_google_fonts' );
add_action( 'login_enqueue_scripts', 'tibetan_add_google_fonts' );