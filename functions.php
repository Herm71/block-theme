<?php
if ( ! function_exists( 'fse_tutorial_theme_setup' ) ) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support for post thumbnails.
     */
    function fse_tutorial_theme_setup() {
        /**
         * Add default posts and comments RSS feed links to <head>.
         */
        add_theme_support( 'automatic-feed-links' );
 
        /**
         * Enable support for post thumbnails and featured images.
         */
        add_theme_support( 'post-thumbnails' );
 
        add_theme_support( 'editor-styles' );
 
        add_theme_support( 'wp-block-styles' );
    }
endif;
add_action( 'after_setup_theme', 'fse_tutorial_theme_setup' );
 
/**
 * Enqueue theme scripts and styles.
 */
function fse_tutorial_theme_scripts() {
    wp_enqueue_style( 'fse-tutorial-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'fse_tutorial_theme_scripts' );

/**
 * Enqueue Google Roboto font.
 */
function ucsc_add_google_fonts() {
 
wp_enqueue_style( 'ucsc-google-roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900', false ); 
}
 
add_action( 'wp_enqueue_scripts', 'ucsc_add_google_fonts' );