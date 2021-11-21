<?php get_header(); ?>

<div id='recipe-post-type' class='container mt-10 mb-20 md:w-2/3'>

    <?php 
        $thumbnail = get_the_post_thumbnail_url( size:'large' );
    ?>

    <div class='md:flex mb-8 items-end'>
        <div class='mb-8 md:mb-0 md:w-2/3'>
            <a class='text-xs uppercase text-gray-700 hover:text-gray-500 rounded-sm mb-6 inline-block' href='<?= get_permalink( get_page_by_path( 'recipes' ) ) ?>'>Back to recipes</a>
            <h1 id='page-title'><?= the_title() ?></h1>
        </div>
        <div class='md:w-1/2 md:pl-4'>
            <img class='z-0' src='<?= $thumbnail ?>'>
        </div>
    </div>

    <div class='text-justify'>
        <?= the_content() ?>
    </div>

</div>

<?php get_footer(); ?>