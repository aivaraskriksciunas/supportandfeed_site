<?php get_header() ?>

<div id='front-page'>

<div id='main-popup' class='popup-container' style='display: none'>
    <div class='popup fixed w-full sm:w-2/3 lg:w-1/2 py-12 px-12' style='background-image: url(<?= sf_get_asset( 'pledge/pledge-hand.png' ) ?>)'>

        <div id='text' class='text-right'>
            <div id='popup-close-btn' class='flex justify-end'>
                <svg xmlns="http://www.w3.org/2000/svg" height="36px" viewBox="0 0 24 24" width="36px" fill="#fff">
                    <path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                </svg>
            </div>

            <div id='pledge-text' class='text-druk-bold italic uppercase'>
                Pledge
            </div>
            <div id='pledge-subtitle' class='text-druk-bold italic uppercase mb-10'>
                <span class='text-blue-500'>to eat </span><span class='text-primary'>plant based</span>
            </div>

            <a href='sms://+13236227171' id='signup' class='border border-gray-200 hover:bg-white hover:text-black px-8 py-4'>
                Sign up
            </a>
        </div>
    </div>
</div>

<?php 
    // Include main slideshow
    require_once "template-parts/front-page/slideshow.php";
?>

<div class='w-full bg-white md:flex px-10 md:px-32 py-20 items-center justify-center' id='our-mission-section'
    style='background-image: url("<?= sf_get_asset( 'images/park-bg.png' ) ?>")'>
    <div id='our-mission-box' class='lg:w-3/4 mb-6 pt-20 pb-10 px-5 md:mb-0 md:text-left md:pr-8 text-center'>
        <h1 class='mb-10 uppercase text-center text-7xl'>Our mission</h1>
        <p class='px-4 md:px-8 font-light text-center'>
            <?= get_option( 'our_mission_text' ) ?>
        </p>
    </div>
</div>

<div class='text-image-section w-full bg-black md:flex'>
    
    <img src='<?= get_theme_mod( 'sf_plant_based_img' ) ?>' class='md:hidden'>

    <div class='md:w-1/2 px-10 md:px-24 py-16 text-white'>
        <h1 class='section-header text-druk-bold mb-16'>
            Why Plant-Based Matters
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

    <div class='md:w-1/2 px-10 md:px-24 py-16 flex flex-col justify-items-start'>
        <h1 class='section-header uppercase text-druk-bold mb-16'>
            DONATE NOW!
        </h1>

        <div class='section-content mb-16 md:text-justify flex-1'>
            <?= get_option( 'donate_now_text' ) ?>
        </div>

        <div class='mb-8'>
            <a href='<?= get_permalink( get_page_by_path( 'donate' ) )?>'class='button button-secondary'>
                Donate
            </a>
        </div>

        <div class='section-content font-light mb-2 text-xs text-light-blue-400'>
            SUPPORT + FEED is a federally recognized 501c3 Public Charity. EIN: 85-4223098
        </div>
        
    </div>
</div>

</div>

<?php get_footer() ?>