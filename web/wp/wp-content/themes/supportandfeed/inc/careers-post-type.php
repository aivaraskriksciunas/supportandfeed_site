<?php 

function sf_register_career_post_type() 
{
    register_post_type( 'sf-career', [
        'label' => 'Careers',
        'description' => 'List of available positions',
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

add_action( 'init', 'sf_register_career_post_type' );