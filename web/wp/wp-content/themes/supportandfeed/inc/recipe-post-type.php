<?php 

function sf_register_recipe_post_type() 
{
    register_post_type( 'sf-recipe', [
        'label' => 'Recipes',
        'description' => 'List of all recipe posts',
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

add_action( 'init', 'sf_register_recipe_post_type' );