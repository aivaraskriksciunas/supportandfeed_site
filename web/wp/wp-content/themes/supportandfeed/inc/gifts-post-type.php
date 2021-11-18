<?php 

function sf_register_gifts_post_type() 
{
    register_post_type( 'sf-gift', [
        'label' => 'Gift ideas',
        'description' => 'List of all sustainable gift ideas',
        'public' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'supports' => [
            'title',
            'editor',
            'thumbnail'
        ]
    ] );
}

add_action( 'init', 'sf_register_gifts_post_type' );