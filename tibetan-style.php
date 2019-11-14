<?php
/*
Plugin Name: Tibetan Style
Plugin URI:  https://www.tibetitw.com/wordpress-plugin/tibetan-style/
Description: This plugin is for the problem that WordPress default Tibetan font is too small on Windows system. When the user does not install any Tibetan font, Jomolhari is used as the default font to display Tibetan.
Version:     2.0
Author:      Bumpagyal
Author URI:  https://www.tibetitw.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// Google Fonts
function add_google_fonts() {
	wp_register_style('admin-custom-font-files', 'https://fonts.googleapis.com/css?family=Jomolhari&display=swap&subset=tibetan', false );
	wp_enqueue_style('admin-custom-font-files');
}
add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
add_action( 'admin_enqueue_scripts', 'add_google_fonts' );
add_action( 'login_enqueue_scripts', 'add_google_fonts' );
add_action( 'enqueue_embed_scripts', 'add_google_fonts' );

// WordPress Custom Font @ Admin Embed
function admin_custom_font() {
    wp_register_style( 'tibetan-style', plugin_dir_url(__FILE__) . 'css/tibetan-style.css', false, '' );
    wp_enqueue_style( 'tibetan-style' );
}
add_action( 'wp_enqueue_scripts', 'admin_custom_font' );
add_action( 'enqueue_embed_scripts', 'admin_custom_font' );

// WordPress Custom Font @ Admin Login Editor
function admin_editor_font() {
    wp_register_style( 'tibetan-editor-style', plugin_dir_url(__FILE__) . 'css/tibetan-editor-style.css', false, '' );
    wp_enqueue_style( 'tibetan-editor-style' );
}
add_action( 'login_enqueue_scripts', 'admin_editor_font' );
add_action( 'admin_enqueue_scripts', 'admin_editor_font' );