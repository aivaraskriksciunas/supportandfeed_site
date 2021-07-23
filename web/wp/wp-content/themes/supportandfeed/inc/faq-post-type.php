<?php

function sf_register_faq_post_type()
{
    register_post_type( 'sf-faq', [
        'label' => 'FAQ',
        'description' => 'Add and edit FAQ questions that will show up on various pages',
        'public' => false,
        'show_ui' => true,
        'supports' => [
            'title',
            'editor',
        ]
    ] );

    $FAQ_LOCATIONS = [
        'volunteers' => 'Volunteers',
    ];

    register_taxonomy( 'sf-faq-sections', 'sf-faq', [
        'labels' => [ 
            'name' => 'FAQ Locations',
            'singular_name' => 'FAQ Location',
        ],
        'description' => 'Locations for FAQ labels',
        'public' => false,
        'capabilities' => [
            // Prevent users from editing terms
            'manage_terms' => null,
            'edit_terms' => null,
            'delete_terms' => null,
        ],
        'show_in_rest' => true,
        'show_ui' => true,
        'hierarchical' => true,
    ] );

    // Insert default FAQ locations into the db
    foreach ( $FAQ_LOCATIONS as $slug => $label ) {
        wp_insert_term( $label, 'sf-faq-sections', [
            'slug' => $slug
        ]);
    }
}

function sf_custom_faq_taxonomy_filter() {

	global $typenow; // this variable stores the current custom post type

	if( $typenow == 'sf-faq' ) {
		$taxonomy = 'sf-faq-sections';

        $current_taxonomy = isset( $_GET[$taxonomy] ) ? $_GET[$taxonomy] : '';
        $taxonomy_object = get_taxonomy( $taxonomy );
        $taxonomy_name = strtolower( $taxonomy_object->labels->name );
        $taxonomy_terms = get_terms( $taxonomy );

        if(count($taxonomy_terms) > 0) {
            echo "<select name='$taxonomy' id='$taxonomy' class='postform'>";
            echo "<option value=''>All $taxonomy_name</option>";
            foreach ($taxonomy_terms as $single_term) {
                echo '<option value='. $single_term->slug, $current_taxonomy == $single_term->slug ? ' selected="selected"' : '','>' . $single_term->name .' (' . $single_term->count .')</option>'; 
            }
            echo "</select>";
        }
	}
}
 
add_action( 'restrict_manage_posts', 'sf_custom_faq_taxonomy_filter' );
add_action( 'init', 'sf_register_faq_post_type' );