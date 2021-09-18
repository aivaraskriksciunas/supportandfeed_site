<?php get_header(); ?>

<div id='recipe-post-type' class='container my-20 md:w-2/3'>

    <h1 class='mb-8' id='page-title'><?= the_title() ?></h1>

    <div class='text-justify'>
        <?= the_content() ?>
    </div>

</div>

<?php get_footer(); ?>