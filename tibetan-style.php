<?php
/*
Plugin Name: Tibetan Style
Plugin URI:  https://www.tibetitw.com/wordpress-plugin/tibetan-style/
Description: This plugin is for the problem that WordPress default Tibetan font is too small on Windows. When the user does not install any Tibetan font, "Jomolhari" is used as the default font to display Tibetan on Windows.
Version:     2.2.5
Author:      Bumpa G. Rebkong
Author URI:  https://www.tibetitw.com/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// WordPress Custom Font @ Admin Embed
function admin_custom_font() {

    // Only on Windows
    if(preg_match("/(Win|WIN|Windows|win|winNT).*?([\d.]+)/",$_SERVER['HTTP_USER_AGENT'])){

        // Loading Google Fonts
        wp_enqueue_style('tibetan-google-fonts', 'https://fonts.googleapis.com/css?family=Jomolhari&display=swap&subset=tibetan', false );

	    wp_register_style( 'tibetan-win-style', plugin_dir_url(__FILE__) . 'css/index-win.css', false, '' );
	    wp_enqueue_style( 'tibetan-win-style');
    }

    wp_register_style( 'tibetan-style', plugin_dir_url(__FILE__) . 'css/base-style.css', false, '' );
    wp_enqueue_style( 'tibetan-style' );
    
}
add_action( 'wp_enqueue_scripts', 'admin_custom_font' );
add_action( 'enqueue_embed_scripts', 'admin_custom_font' );

// WordPress Custom Font @ Admin Login Editor
function admin_editor_font() {

    // Only on Windows
    if(preg_match("/(Win|WIN|Windows|win|winNT).*?([\d.]+)/",$_SERVER['HTTP_USER_AGENT'])){

        // Loading Google Fonts
        wp_enqueue_style('tibetan-google-fonts', 'https://fonts.googleapis.com/css?family=Jomolhari&display=swap&subset=tibetan', false );

	    wp_register_style( 'tibetan-win-style', plugin_dir_url(__FILE__) . 'css/index-win.css', false, '' );
	    wp_enqueue_style( 'tibetan-win-style');
    }

    wp_register_style( 'tibetan-editor-style', plugin_dir_url(__FILE__) . 'css/editor-style.css', false, '' );
    wp_enqueue_style( 'tibetan-editor-style' );

}
add_action( 'login_enqueue_scripts', 'admin_editor_font' );
add_action( 'admin_enqueue_scripts', 'admin_editor_font' );