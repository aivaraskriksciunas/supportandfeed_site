<?php get_header(); ?>

<?php 

    function sf_custom_gift_excerpt( $excerpt ) {
        return wp_trim_words( $excerpt, 20 );
    }

    add_filter( 'get_the_excerpt', 'sf_custom_gift_excerpt' );

    // Query all posts
    $query = new WP_Query([
        'post_type' => 'sf-gift',
        'orderby' => 'date',
        'order' => 'DESC',
    ]);
?>

<div class='w-full text-center bg-orange py-20' >
    <h1 class='text-8xl uppercase text-white mb-4'>Maggie's Favorite gifts</h1> 
    <p class='text-white text-lg'>Lasagnas, recyclable phone cases, chocolates... These are some of Maggie’s favorite things.</p>
</div>

<div class='bg-gray-100 px-4 py-20'>
    <div id='recipe-post-list' class='bg-white container py-20 md:w-2/3 '>
        <div class='sm:flex flex-wrap'>
            <?php if ( $query->have_posts() ): ?>

                <?php while ( $query->have_posts() ): ?>
                    <?php 
                        $query->the_post(); 
                        $thumbnail = get_the_post_thumbnail_url( size:'medium_large' );
                    ?>
                    
                    <a class='px-2 w-full sm:w-1/2 lg:w-1/3 mb-6' href='<?= get_post_permalink() ?>'>
                        <div class='recipe-container w-full'>
                            <div class='h-64 overflow-hidden'>
                                <div class='recipe-featured-image h-64 bg-gray-300' 
                                    style='background-image: url("<?= $thumbnail ?>")'>
                                </div>
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
                <p>No posts found</p>
            <?php endif ?>
        </div>
    </div>

</div>

<?php get_footer(); ?>