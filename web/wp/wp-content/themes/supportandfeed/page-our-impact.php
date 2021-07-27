<?php 

    function format_number( int $n ) {
        return number_format( $n, 0, '.', ',' );
    }

?>

<?php get_header() ?>

<img src='<?= wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ?>'>

<!-- <div class='container py-20 md:flex'>

    <div class='md:w-1/2'>
        <h1 class='mb-16'>Our cities</h1>

        <?php 
            $cities = wp_get_nav_menu_items( 'cities' );
        ?>

        <?php foreach ( $cities as $city ): ?>
            <h3 class='my-8'>
                <a class='border-b-4 hover:border-black border-gray-100' href='<?= $city->url ?>'>
                    <?= $city->title ?>
                </a>
            </h3>
        <?php endforeach ?>
    </div>

    <div class='md:w-1/2'>
        <h1 class='mb-16'>Our Numbers</h1>
        
        <div id='numbersSlide'>
            <img id='numbersSlide' src='<?= get_theme_mod( 'sf_our_impact_numbers_slide' )?>'>
        </div>
    </div>

</div> -->

<!-- <img id='ourCommunityImg' src='<?= get_theme_mod( 'sf_our_impact_community_photo' )?>'> -->

<div class='container my-20'>
    <?php the_content() ?>
</div>

<?php get_footer() ?>