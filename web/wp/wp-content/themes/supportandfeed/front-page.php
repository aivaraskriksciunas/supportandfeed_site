<?php get_header() ?>

<div id='front-page'>

<?php 
    // Include main slideshow
    require_once "template-parts/front-page/slideshow.php";
?>

<div class='w-full bg-yellow-500 md:flex px-12 md:px-32 py-20 items-center' id='our-mission-section'>
    <div class='md:w-2/3 mb-6 md:mb-0 text-justify md:text-left md:pr-8'>
        <p class='leading-snug text-2xl lg:text-4xl font-medium'>
            <?= get_option( 'our_mission_text' ) ?>
        </p>
    </div>
    <div class='md:w-1/3' id='ourMissionImg'>
        <img src="<?= get_theme_mod( 'sf_our_mission_img' ) ?>">
    </div>
</div>


<div class='text-image-section w-full bg-black flex'>
    
    <div class='md:w-1/2 px-24 py-16 text-white'>
        <h1 class='section-header text-druk-bold mb-16'>
            Why Plant Based Matters
        </h1>

        <div class='section-content mb-16 text-justify'>
            <?= get_option( 'plant_based_text' ) ?>
        </div>
    </div>

    <div id='plantBasedImg' class='section-image md:w-1/2' 
        style="background-image: url('<?= get_theme_mod( 'sf_plant_based_img' ) ?>')">
    </div>
</div>

<div class='text-image-section w-full bg-green flex'>
    <div id='donateNowImg' class='section-image md:w-1/2' style="background-image: url('<?= get_theme_mod( 'sf_donate_now_img' ) ?>')">
    </div>

    <div class='md:w-1/2 px-24 py-16 flex flex-col justify-items-start'>
        <h1 class='section-header uppercase text-druk-bold mb-16'>
            DONATE NOW!
        </h1>

        <div class='section-content mb-16 text-justify flex-1'>
            <?= get_option( 'donate_now_text' ) ?>
        </div>
        <div class='section-content font-light mb-2 text-xs text-gray-800'>
            All donations to our Covid-19 Crisis Response General Fund are tax deductible to the extent of the law.
        </div>
        <div class='section-content font-light mb-4 text-xs text-gray-800'>
            Fiscal sponsorship is provided by In the Family Way, a 501(c)(3) public charity.
        </div>
        
        <div>
            <div class='button bg-black text-white py-3 px-8 inline-block text-sm'>
                Donate
            </div>
        </div>
    </div>
</div>

</div>

<?php get_footer() ?>