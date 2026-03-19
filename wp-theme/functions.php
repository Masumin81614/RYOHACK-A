<?php
/**
 * わかば個別指導塾 テーマ functions.php
 */

// =============================================
// テーマサポート
// =============================================
function ryohack_a_setup() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'ryohack_a_setup' );

// =============================================
// スタイル・スクリプトの読み込み
// =============================================
function ryohack_a_scripts() {

    // --- Styles ---
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Noto+Sans+JP:wght@100..900&display=swap',
        [],
        null
    );
    wp_enqueue_style(
        'font-awesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css',
        [],
        '7.0.1'
    );
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        [],
        '11'
    );
    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri() . '/css/style.min.css',
        [ 'google-fonts', 'font-awesome', 'swiper-css' ],
        '1.0.1'
    );

    // --- Scripts ---
    wp_enqueue_script(
        'gsap',
        'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/gsap.min.js',
        [],
        '3.14.1',
        true
    );
    wp_enqueue_script(
        'gsap-scrolltrigger',
        'https://cdn.jsdelivr.net/npm/gsap@3.14.1/dist/ScrollTrigger.min.js',
        [ 'gsap' ],
        '3.14.1',
        true
    );
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        [],
        '11',
        true
    );
    wp_enqueue_script(
        'theme-header',
        get_template_directory_uri() . '/js/header.js',
        [],
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'theme-script',
        get_template_directory_uri() . '/js/script.js',
        [ 'gsap', 'gsap-scrolltrigger' ],
        '1.0.0',
        true
    );
    wp_enqueue_script(
        'theme-slider',
        get_template_directory_uri() . '/js/slider.js',
        [ 'swiper-js' ],
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'ryohack_a_scripts' );

// =============================================
// Google Fonts の preconnect を <head> に追加
// =============================================
function ryohack_a_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com" />' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />' . "\n";
}
add_action( 'wp_head', 'ryohack_a_preconnect', 1 );
