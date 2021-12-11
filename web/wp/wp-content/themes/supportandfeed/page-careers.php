<?php get_header(); ?>

<?php 
    // Query all posts
    $query = new WP_Query([
        'post_type' => 'sf-career',
        'orderby' => 'date',
        'order' => 'DESC',
    ]);
?>

<div class='w-full text-center bg-gray-200 py-20' >
    <h1 class='text-8xl uppercase mb-4'>Work with us</h1> 
    <!-- <p class='text-white text-lg'></p> -->
</div>

<div class='px-4 py-20'>
    <div id='' class='md:w-2/3 mx-auto'>
        <h2 class='mb-10 '>Available positions</h2>

        <?php if ( $query->have_posts() ): ?>
            <?php while ( $query->have_posts() ): ?>
                <?php 
                    $query->the_post(); 
                    $thumbnail = get_the_post_thumbnail_url( size:'medium_large' );
                ?>
                    <a class='w-full mb-6 block bg-gray-100 hover:bg-gray-200 p-4' href='<?= get_post_permalink() ?>'>
                        <?= the_title() ?>
                    </a>
            <?php endwhile ?>

        <?php else: ?>
            <p>There are no available positions at the moment</p>
        <?php endif ?>
    </div>

</div>

<?php get_footer(); ?>