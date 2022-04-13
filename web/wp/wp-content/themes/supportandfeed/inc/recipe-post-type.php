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
            'thumbnail',
            'custom-fields',
        ]
    ] );
}

function sf_recipe_post_register_meta() {
    register_post_meta( 'sf-recipe', 'recipe_author', [
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
    ] );

    register_post_meta( 'sf-recipe', 'cook_time', [
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
    ] );

    register_post_meta( 'sf-recipe', 'prep_time', [
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
    ] );

    register_post_meta( 'sf-recipe', 'yields', [
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
    ] );

    register_post_meta( 'sf-recipe', 'optionals', [
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
    ] );

    // Specify the category of the recipe (mains, apetizers, sides, desserts, ...)
    register_post_meta( 'sf-recipe', 'category', [
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
    ] );

    // Specify the what time of day this meal is for (breakfast, lunch)
    register_post_meta( 'sf-recipe', 'meal_type', [
        'show_in_rest' => true,
        'single' => true,
        'type' => 'string',
    ] );

}

add_action( 'init', 'sf_register_recipe_post_type' );
add_action( 'init', 'sf_recipe_post_register_meta' );