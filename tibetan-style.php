<?php
/*
Plugin Name: Tibetan Style
Plugin URI:  https://www.tibetitw.com/wordpress-plugin/tibetan-style/
Description: This plugin allows you to easily use "Noto Sans Tibetan" on your WordPress website, "Noto Sans Tibetan" is used as the default font to display Tibetan.
Version:     3.0.1
Author:      Bumpa G. Rebkong
Author URI:  https://www.tibetitw.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// WordPress Custom Font @ Admin Embed
function admin_custom_font() {

    // Only on Windows
    if(preg_match("/(Win|WIN|Windows|win|winNT).*?([\d.]+)/",$_SERVER['HTTP_USER_AGENT'])){

	    wp_register_style( 'tibetan-win-style', plugin_dir_url(__FILE__) . 'css/index-win.css', false, '' );
	    wp_enqueue_style( 'tibetan-win-style');
    }

    // Loading Google Fonts
    wp_enqueue_style('tibetan-fonts', '//fonts.googleapis.com/earlyaccess/notosanstibetan.css', false );

    wp_register_style( 'tibetan-style', plugin_dir_url(__FILE__) . 'css/base-style.css', false, '' );
    wp_enqueue_style( 'tibetan-style' );
    
}
add_action( 'wp_enqueue_scripts', 'admin_custom_font' );
add_action( 'enqueue_embed_scripts', 'admin_custom_font' );

// WordPress Custom Font @ Admin Login Editor
function admin_editor_font() {

    // Only on Windows
    if(preg_match("/(Win|WIN|Windows|win|winNT).*?([\d.]+)/",$_SERVER['HTTP_USER_AGENT'])){

	    wp_register_style( 'tibetan-win-style', plugin_dir_url(__FILE__) . 'css/index-win.css', false, '' );
	    wp_enqueue_style( 'tibetan-win-style');
    }

    // Loading Google Fonts
    wp_enqueue_style('tibetan-fonts', '//fonts.googleapis.com/earlyaccess/notosanstibetan.css', false );

    wp_register_style( 'tibetan-editor-style', plugin_dir_url(__FILE__) . 'css/editor-style.css', false, '' );
    wp_enqueue_style( 'tibetan-editor-style' );

}
add_action( 'login_enqueue_scripts', 'admin_editor_font' );
add_action( 'admin_enqueue_scripts', 'admin_editor_font' );