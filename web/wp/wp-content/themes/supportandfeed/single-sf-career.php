<?php get_header(); ?>

<div id='recipe-post-type' class='container mt-10 mb-20 md:w-2/3'>

    <div class='mb-8'>
        <a class='text-xs uppercase text-gray-700 hover:text-gray-500 rounded-sm mb-6 inline-block' href='<?= get_permalink( get_page_by_path( 'careers' ) ) ?>'>Back to all positions</a>
        <h1 id='page-title'><?= the_title() ?></h1>
    </div>

    <div class='text-justify'>
        <?= the_content() ?>
    </div>

</div>

<?php get_footer(); ?>