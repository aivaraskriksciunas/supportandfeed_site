<?php 

// TODO: customize title 
// TODO: load stylesheets depending on the environment

const CURRENT_VERSION = '1.8.3';

function load_assets() {

    $assets_dir = get_stylesheet_directory_uri() . '/assets/dist/';

    // Load core scripts and styles
    wp_enqueue_script( 'main', $assets_dir . 'app.bundle.js', deps:[ 'jquery' ], ver:CURRENT_VERSION, in_footer:true );
    wp_enqueue_style( 'main', $assets_dir . 'app.css', ver:CURRENT_VERSION );

    // Load front page specific files 
    if ( is_front_page() )
    {
        wp_enqueue_script( 'front-page', $assets_dir . 'frontPage.bundle.js', deps:[ 'jquery' ], ver:CURRENT_VERSION, in_footer:true );
    }
    if ( is_page( 'pledge' ) )
    {
        // Load styles related to the pledge page
        wp_enqueue_script( 'pledge', $assets_dir . 'pledge.bundle.js', deps:[ 'jquery' ], ver: CURRENT_VERSION, in_footer:true );
        wp_enqueue_style( 'pledge', $assets_dir . 'pledge.css', ver:CURRENT_VERSION );
    }
}

function theme_supports() {

    // Register supports
    add_theme_support( 'title-tag' );    
    add_theme_support( 'menus' );
    add_theme_support( 'custom-logo', [
        'flex-height' => true,
        'flex-width' => true,
    ] );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'widgets' );

    // Register nav menus
    register_nav_menus([
        'navbar' => 'Navbar',
        'footer' => 'Footer menu',
        'cities' => 'City list',
    ]);
}

// Register custom meta info for posts
function create_metadata_for_posts() {

    register_post_meta( 'page', 'page_subtitle', [
        'single' => true,
        'type' => 'string',
        'show_in_rest' => true
    ]);
}

add_action( 'after_setup_theme', 'theme_supports' );
add_action( 'wp_enqueue_scripts', 'load_assets' );
add_action( 'init', 'create_metadata_for_posts' );

require_once 'inc/customizer.php';
require_once 'inc/register-blocks.php';
require_once 'inc/create-admin-pages.php';
require_once 'inc/sponsors-post-type.php';
require_once 'inc/faq-post-type.php';
require_once 'inc/recipe-post-type.php';
require_once 'inc/gifts-post-type.php';
require_once 'inc/careers-post-type.php';

/*
 * Helper functions
 */

/**
 * Helper function to generate page heading
 *
 * @return void
 */
function sf_page_cover() 
{
    $coverUrl = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' );
    $pageSubtitle = get_post_meta( get_the_ID(), 'page_subtitle', true );

    ?>
    <div id='pageCover' class='flex items-center bg-yellow-200' style='background-image: url(<?= $coverUrl ?>)'>
        <div class='my-20 flex flex-col container'>
            <div>
                <h1 class='text-black inline-block p-1 mb-8 text-8xl'>
                    <?php the_title() ?>
                </h1>
            </div>

            <div class='md:w-2/3'>
                <?php if ( $pageSubtitle ): ?>
                    <div class='<?php if ( $coverUrl ): ?> bg-white px-4 <?php endif ?> font-light text-lg py-2 '>
                        <?= $pageSubtitle ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </div>
    <?php
}

/**
 * Retrieves url of asset placed in assets folder
 *
 * @param string $asset location of asset in assets folder
 * @return string
 */
function sf_get_asset( string $asset ) : string 
{
    $dir = get_stylesheet_directory_uri();
    if ( $asset[0] !== '/' ) $asset = '/' . $asset;

    return $dir . '/assets' . $asset;
}

/**
 * Generates a link for a page given it's slug
 *
 * @param string $slug
 * @return string
 */
function sf_get_link_by_slug( string $slug ) : string 
{
    $post = get_page_by_path( $slug, post_type:'page' );
    return get_page_link( $post );
}