<?php 

function sf_register_sponsors_type() 
{
    register_post_type( 'sf-sponsors', [
        'label' => 'Sponsors',
        'description' => 'Here you can edit the list of sponsors that will show up on the front page',
        'public' => false,
        'show_ui' => true,
        'supports' => [
            'title',
            'thumbnail', 
            'custom-fields'
        ]
    ] );
}

add_action( 'init', 'sf_register_sponsors_type' );