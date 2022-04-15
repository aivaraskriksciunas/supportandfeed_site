<?php get_header(); ?>

<?php 

    const ALLOWED_CATEGORIES = [ 'appetizers', 'mains', 'desserts', 'drinks', 'sides' ];

    function sf_custom_recipe_excerpt( $excerpt ) {
        return wp_trim_words( $excerpt, 20 );
    }

    add_filter( 'get_the_excerpt', 'sf_custom_recipe_excerpt' );

    // Get the current page
    $page = isset( $_GET['paged'] ) && is_numeric( $_GET['paged'] ) ? $_GET['paged'] : 1;

    $query_args = [
        'post_type' => 'sf-recipe',
        'posts_per_page' => 8,
        'paged' => $page,
        'orderby' => 'date',
        'order' => 'DESC',
    ];

    if ( isset( $_GET['category'] ) ) {
        $query_args['meta_query'] = [
            [ 'key' => 'category', 'value' => htmlspecialchars( $_GET['category'] ) ]
        ];
    }

    // Query all posts
    $query = new WP_Query( $query_args );
?>

<?php if ( isset( $_GET['category'] ) && in_array( $_GET['category'], ALLOWED_CATEGORIES ) ): ?>

    <div class='relative'>
        <div id='recipe-list-identifier'>
            <?php $cat_name = strtoupper( $_GET['category'] ); ?>
            <div id='recipe-letter'><?= $cat_name[0] ?></div>
            <div id='recipe-category'><?= $cat_name ?></div>
        </div>
    </div>

<?php endif ?>

<div class='px-4 py-20'>
    <div id='recipe-post-list' class='container py-20'>
        <div class='text-4xl font-gobold font-bold uppercase pl-2 mb-8 '>Recipes: </div>

        <div class='sm:flex flex-wrap'>

            <?php if ( $query->have_posts() ): ?>

                <?php while ( $query->have_posts() ): ?>
                    <?php 
                        $query->the_post(); 
                        $thumbnail = get_the_post_thumbnail_url( size:'medium_large' );
                    ?>
                    
                    <a class='px-2 w-full sm:w-1/2 lg:w-1/4 mb-6' href='<?= get_post_permalink() ?>'>
                        <div class='recipe-container w-full'>
                            <div class='h-64 overflow-hidden'>
                                <?php if ( $thumbnail ): ?>
                                    <div class='recipe-featured-image h-64 bg-gray-300' 
                                        style='background-image: url("<?= $thumbnail ?>")'>
                                    </div>
                                <?php else: ?>
                                    <div class='recipe-featured-image h-64' 
                                        style='background-image: url( <?= sf_get_asset( 'images/missingbg.png' ) ?> ); background-repeat: repeat; background-size: 80px 80px'>
                                    </div>
                                <?php endif ?>
                            </div>

                            <div class='recipe-content px-3 py-4'>
                                <div class='recipe-title text-2xl font-bold mb-4'>
                                    <?= the_title() ?>
                                </div>
                                <div class='text-sm text-gray-600 font-light'>
                                    <?= get_the_excerpt() ?>
                                </div>
                            </div>
                        </div>
                    </a>
                <?php endwhile ?>

            <?php else: ?>
                <p>No recipes found</p>
            <?php endif ?>
        </div>

        <div class='pagination'>
            <?php echo paginate_links([
                'total' => $query->max_num_pages,
                'next_text' => 'Next',
                'prev_text' => 'Prev',
            ]) ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>