<?php 
    // Enqueue files specific to this page
    function load_our_founder_page_assets() {
        $assets_dir = get_stylesheet_directory_uri() . '/assets/dist/';

        wp_enqueue_style( 'page-our-founder', $assets_dir . 'page-our-founder.css', ver:'1.0.0' );
    }

    add_action( 'wp_enqueue_scripts', 'load_our_founder_page_assets' );
?>

<?php get_header() ?>

<?php $image_url = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ); ?>

<div class='md:flex bg-gray-200'>
    <div id='founderImage' class='md:absolute w-full md:w-3/4'>
        <img src='<?= $image_url ?>'>
    </div>

    <div id='founderLetter' class='bg-white w-full md:w-1/2 px-12 md:px-20 pt-14 pb-7 md:my-20 ml-auto text-justify'>
        <h1 class='mb-8'><?php the_title() ?></h1>

        <?php the_content() ?>
    </div>
    
</div>


<?php get_footer() ?>