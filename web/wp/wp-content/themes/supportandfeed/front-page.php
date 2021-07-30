<?php get_header() ?>

<div id='front-page'>

<?php 
    // Include main slideshow
    require_once "template-parts/front-page/slideshow.php";
?>

<div class='w-full bg-white md:flex px-12 md:px-32 py-20 items-center justify-center' id='our-mission-section'
    style='background-image: url("<?= sf_get_asset( 'images/park-bg.png' ) ?>")'>
    <div class='md:w-2/3 mb-6 md:mb-0 md:text-left md:pr-8 text-center'>
        <h1 class='mb-10 italic uppercase text-center'>Our mission</h1>
        <p class='px-4 md:px-8 leading-loose font-medium text-center'>
            <?= get_option( 'our_mission_text' ) ?>
        </p>
    </div>
</div>


<div class='text-image-section w-full bg-black md:flex'>
    
    <img src='<?= get_theme_mod( 'sf_plant_based_img' ) ?>' class='md:hidden'>

    <div class='md:w-1/2 px-24 py-16 text-white'>
        <h1 class='section-header text-druk-bold mb-16'>
            Why Plant Based Matters
        </h1>

        <div class='section-content mb-16 text-justify'>
            <?= get_option( 'plant_based_text' ) ?>
        </div>
    </div>

    <div id='plantBasedImg' class='hidden md:block section-image md:w-1/2' 
        style="background-image: url('<?= get_theme_mod( 'sf_plant_based_img' ) ?>')">
    </div>
    
</div>

<div class='text-image-section w-full bg-blue-500 text-white md:flex'>
    <div id='donateNowImg' class='hidden md:block section-image md:w-1/2' style="background-image: url('<?= get_theme_mod( 'sf_donate_now_img' ) ?>')">
    </div>

    <img src='<?= get_theme_mod( 'sf_donate_now_img' ) ?>' class='md:hidden'>

    <div class='md:w-1/2 px-16 md:px-24 py-16 flex flex-col justify-items-start'>
        <h1 class='section-header uppercase text-druk-bold mb-16'>
            DONATE NOW!
        </h1>

        <div class='section-content mb-16 md:text-justify flex-1'>
            <?= get_option( 'donate_now_text' ) ?>
        </div>

        <div class='mb-8'>
            <a href='<?= get_permalink( get_page_by_path( 'donate' ) )?>'class='button bg-black text-white py-3 px-10 text-xl inline-block'>
                Donate
            </a>
        </div>

        <div class='section-content font-light mb-2 text-xs text-light-blue-400'>
            All donations to our Covid-19 Crisis Response General Fund are tax deductible to the extent of the law.
        </div>
        <div class='section-content font-light text-xs text-light-blue-400'>
            Fiscal sponsorship is provided by In the Family Way, a 501(c)(3) public charity.
        </div>
        
    </div>
</div>

</div>

<?php get_footer() ?>