<?php 

    function format_number( int $n ) {
        return number_format( $n, 0, '.', ',' );
    }

?>

<?php get_header() ?>

<?php sf_page_cover() ?>

<div class='container py-20 md:flex'>

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
        
        <div class='statistic mb-8'>
            <div class='colored-container' id='cc1'>
                <div class='number mb-5'><?= format_number( get_option( 'meals_served' )); ?></div>
                <div class='number-subtitle'>Meals served</div>
            </div>
        </div>

        <div class='statistic text-right'>
            <div class='colored-container' id='cc2'>
                <div class='number mb-5'><?= format_number( get_option( 'meals_served' )); ?></div>
                <div class='number-subtitle'>Something else served</div>
            </div>
        </div>
    </div>

</div>

<img id='ourCommunityImg' src='<?= get_theme_mod( 'sf_our_impact_community_photo' )?>'>

<div class='container my-20'>
    <?php the_content() ?>
</div>

<?php get_footer() ?>