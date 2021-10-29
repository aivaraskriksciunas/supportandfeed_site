<?php get_header(); ?>

<div id='recipe-post-type' class='container mt-10 mb-20 md:w-2/3'>

    <a class='text-xs uppercase text-gray-700 hover:text-gray-500 rounded-sm mb-6 inline-block' href='<?= get_permalink( get_page_by_path( 'recipes' ) ) ?>'>Back to recipes</a>

    <h1 class='mb-2' id='page-title'><?= the_title() ?></h1>
    <div class='mb-8 font-light text-gray-600 italic text-sm'>Posted on <?= get_the_date( 'F jS, Y' ) ?></div>

    <div class='text-justify'>
        <?= the_content() ?>
    </div>

</div>

<?php get_footer(); ?>