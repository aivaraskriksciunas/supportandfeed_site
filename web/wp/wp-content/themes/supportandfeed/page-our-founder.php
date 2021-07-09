
<?php get_header() ?>

<?php $image_url = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ); ?>

<div id='p-our-founder'>

<div class='md:flex bg-gray-200'>
    <div id='founderImage' class='md:absolute md:w-2/3 w-full overflow-hidden z-0'>
        <img src='<?= $image_url ?>'>
    </div>

    <div id='founderLetter' class='bg-white w-full md:w-2/3 lg:w-1/2 px-12 md:px-20 pt-14 pb-7 md:my-20 ml-auto text-justify'>
        <h1 class='mb-8'><?php the_title() ?></h1>

        <?php the_content() ?>
    </div>
    
</div>

</div>

<?php get_footer() ?>