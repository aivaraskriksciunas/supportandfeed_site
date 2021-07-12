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

}

function sf_register_block_category( $categories ) {
    $category_slugs = wp_list_pluck( $categories, 'slug' );

    $slug = 'sf_blocks';
    if ( in_array( $slug, $category_slugs ) ) return $categories;

    return [
        [
            'slug' => $slug,
            'title' => 'S+F Blocks',
        ],
        ...$categories,
    ];
}


add_filter( 'block_categories', 'sf_register_block_category' );
add_action( 'enqueue_block_editor_assets', 'sf_load_block_scripts' );