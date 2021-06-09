<?php 


function sf_load_block_scripts() {

    $blocks_dir = get_stylesheet_directory_uri() . '/assets/dist';
    $assets_file = require_once( get_stylesheet_directory() . '/assets/dist/assets.php' );

    $file_info = $assets_file['blocks.bundle.js'];

    // Load main styles (tailwind)
    wp_enqueue_style( 'main', $blocks_dir . '/gutenbergBase.css', ver:'1.0.0' );
    wp_enqueue_style( 'wp-components' );

    wp_enqueue_script(
        'blocks-script',
        $blocks_dir . '/blocks.bundle.js',
        $file_info['dependencies'], 
        ver:$file_info['version'], in_footer:true
    );

    // register_block_type( 'sf/text-block', [
    //     'editor_script' => 'blocks-script'
    // ] );
    register_block_type( 'sf/text-block', array(
        'style' => 'main',
        'editor_style' => 'main',
        'editor_script' => 'blocks-script',
    ) );
}

add_action( 'enqueue_block_editor_assets', 'sf_load_block_scripts' );