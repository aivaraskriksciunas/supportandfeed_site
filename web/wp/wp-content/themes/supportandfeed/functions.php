<?php 

// TODO: customize title 

function load_assets() {

    $assets_dir = get_stylesheet_directory_uri() . '/assets/dist/';

    // Load core scripts and styles
    wp_enqueue_script( 'main', $assets_dir . 'app.bundle.js', deps:[ 'jquery' ], ver:'1.0.0', in_footer:true );
    wp_enqueue_style( 'main', $assets_dir . 'app.css', ver:'1.0.0' );
    
    // Load front page specific files 
    if ( is_front_page() )
    {
        wp_enqueue_script( 'front-page', $assets_dir . 'frontPage.bundle.js', deps:[ 'jquery' ], ver:'1.0.0', in_footer:true );
        wp_enqueue_style( 'front-page', $assets_dir . 'frontPage.css', ver:'1.0.0' );
    }
}

function theme_supports() {

    // Register supports
    add_theme_support( 'title-tag' );    
    add_theme_support( 'menus' );
    add_theme_support( 'custom-logo', [
        'height' => 100
    ] );
    add_theme_support( 'post-thumbnails' );

    // Register nav menus
    register_nav_menus([
        'navbar' => 'Navbar'
    ]);
}

add_action( 'after_setup_theme', 'theme_supports' );
add_action( 'wp_enqueue_scripts', 'load_assets' );

require_once 'inc/customizer.php';
require_once 'inc/register-blocks.php';
require_once 'inc/create-admin-pages.php';
require_once 'inc/sponsors-post-type.php';