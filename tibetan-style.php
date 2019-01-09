<?php
/*
Plugin Name: Tibetan Style
Plugin URI: https://github.com/bumpagyal/tibetan-style
Description: This plugin solves the default Windows Tibetan font is too small problem. Unified use of "Noto Sans Tibetan" font.
Author: tibetitw.com
Version: 1.1.2
Author URI: http://www.tibetitw.com/
*/

function load_custom_admin_styles() {
    wp_register_style( 'tibetan-style', plugins_url('', __FILE__) . '/notosanstibetan.css', false, '1.1.2' );
    wp_enqueue_style( 'tibetan-style' );
    $custom_inline_style = '*,#wpadminbar *,.editor-post-title__block .editor-post-title__input,.wp-block-heading h1,.wp-block-heading h2,.wp-block-heading h3,.wp-block-heading h4,.wp-block-heading h5,.wp-block-heading h6,.block-editor *{font-family:"Noto Sans Tibetan","Helvetica Neue",Helvetica,Arial,sans-serif;}';
    wp_add_inline_style( 'tibetan-style', $custom_inline_style );
}
add_action( 'admin_enqueue_scripts', 'load_custom_admin_styles' );
add_action( 'login_enqueue_scripts', 'load_custom_admin_styles' );

// Add editor styles
function tibetan_add_editor_styles() {
    add_editor_style( plugins_url('', __FILE__) . '/tibetan-editor-style.css' );
    $font_url = plugins_url('', __FILE__) . '/notosanstibetan.css';
    add_editor_style( str_replace( ',', '%2C', $font_url ) );
}
add_action( 'init', 'tibetan_add_editor_styles' );

function load_custom_styles() {
    wp_register_style( 'tibetan-style-page', plugins_url('', __FILE__) . '/notosanstibetan.css', false, '1.1.2' );
    wp_enqueue_style( 'tibetan-style-page' );
    $custom_inline_style = '#wpadminbar *,pre.wp-block-verse{font-family:"Noto Sans Tibetan","Helvetica Neue",Helvetica,Arial,sans-serif;}';
    wp_add_inline_style( 'tibetan-style-page', $custom_inline_style );
}
add_action( 'wp_enqueue_scripts', 'load_custom_styles' );