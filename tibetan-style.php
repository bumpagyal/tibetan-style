<?php
/*
Plugin Name: Tibetan Style
Plugin URI:  https://www.tibetitw.com/wordpress-plugin/tibetan-style/
Description: This plugin is for the problem that WordPress default Tibetan font is too small on Windows system. When the user does not install any Tibetan font, "Qomolangma-Uchen Sarchen" is used as the default font to display Tibetan, instead of "Microsoft Himalaya" font. If it is an operating system such as a Mac, the default font body of the system will be called.
Version:     1.3.6
Author:      Bumpagyal
Author URI:  https://www.tibetitw.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

function load_plugin_scripts() {
    wp_register_style( 'tibetan-style', plugins_url('css/tibetan-style.css', __FILE__) );
    wp_enqueue_style( 'tibetan-style' );
}
function load_plugin_admin_scripts() {
    wp_register_style( 'tibetan-editor-style', plugins_url('css/tibetan-editor-style.css', __FILE__) );
    wp_enqueue_style( 'tibetan-editor-style' );
}

add_action( 'wp_enqueue_scripts', 'load_plugin_scripts' );
add_action( 'admin_enqueue_scripts', 'load_plugin_admin_scripts' );
add_action( 'login_enqueue_scripts', 'load_plugin_admin_scripts' );
add_action( 'enqueue_embed_scripts', 'load_plugin_scripts' );