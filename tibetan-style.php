<?php
/*
Plugin Name: Tibetan Style
Plugin URI:  https://github.com/bumpagyal/tibetan-style/
Description: This plugin allows you to easily use Tibetan Google Fonts on your WordPress website, "Jomolhari" is used as the default font to display Tibetan, Solved the problem that "Microsoft Himalaya" font is too small on Windows.
Version:     3.1.0
Author:      Bumpa G. Rebkong
Author URI:  https://www.tibetitw.com/
License:     GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

// Direct Access Forbidden
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if( ! function_exists( 'tibs_add_google_fonts' ) ):
    // Google Font
    function tibs_add_google_fonts() {
        wp_enqueue_style( 'google-fonts-bo', 'https://fonts.googleapis.com/css2?family=Jomolhari&display=swap', false, '' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'tibs_add_google_fonts' );
add_action( 'enqueue_embed_scripts', 'tibs_add_google_fonts' );
add_action( 'login_enqueue_scripts', 'tibs_add_google_fonts' );
add_action( 'admin_enqueue_scripts', 'tibs_add_google_fonts' );

// WordPress Custom Font @ Admin Embed
if( ! function_exists( 'tibs_admin_custom_font' ) ):
    function tibs_admin_custom_font() {
        // Only on Windows
        if(preg_match("/(Win|WIN|Windows|win|winNT).*?([\d.]+)/",$_SERVER['HTTP_USER_AGENT'])){
            wp_register_style( 'tibs-win-style', plugin_dir_url(__FILE__) . 'css/index-win.css', false, '' );
            wp_enqueue_style( 'tibs-win-style');
        }
        wp_register_style( 'tibs-style', plugin_dir_url(__FILE__) . 'css/base-style.css', false, '' );
        wp_enqueue_style( 'tibs-style' );
    }
endif;
add_action( 'wp_enqueue_scripts', 'tibs_admin_custom_font' );
add_action( 'enqueue_embed_scripts', 'tibs_admin_custom_font' );

// WordPress Custom Font @ Admin Login Editor
if( ! function_exists( 'tibs_admin_editor_font' ) ):
function tibs_admin_editor_font() {
    // Only on Windows
    if(preg_match("/(Win|WIN|Windows|win|winNT).*?([\d.]+)/",$_SERVER['HTTP_USER_AGENT'])){
        wp_register_style( 'tibs-win-style', plugin_dir_url(__FILE__) . 'css/index-win.css', false, '' );
        wp_enqueue_style( 'tibs-win-style');
    }
    wp_register_style( 'tibs-editor-style', plugin_dir_url(__FILE__) . 'css/editor-style.css', false, '' );
    wp_enqueue_style( 'tibs-editor-style' );
}
endif;
add_action( 'login_enqueue_scripts', 'tibs_admin_editor_font' );
add_action( 'admin_enqueue_scripts', 'tibs_admin_editor_font' );