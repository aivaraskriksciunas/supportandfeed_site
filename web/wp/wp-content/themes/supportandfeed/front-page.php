<?php get_header() ?>

<div id='front-page'>

<?php 
    // Include main slideshow
    require_once "template-parts/front-page/slideshow.php";
?>

<div class='w-full bg-white md:flex px-12 md:px-32 py-20 items-center justify-center' id='our-mission-section'>
    <div class='md:w-2/3 mb-6 md:mb-0 md:text-left md:pr-8 text-center'>
        <h1 class='mb-10 italic uppercase text-center'>Our mission</h1>
        <p class=' leading-loose text-2xl lg:text-3xl font-medium text-center'>
            <?= get_option( 'our_mission_text' ) ?>
        </p>
    </div>
    <!-- <div class='md:w-1/3' id='ourMissionImg'>
        <img src="<?= get_theme_mod( 'sf_our_mission_img' ) ?>">
    </div> -->
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

<div class='text-image-section w-full bg-blue-500 text-white flex'>
    <div id='donateNowImg' class='section-image md:w-1/2' style="background-image: url('<?= get_theme_mod( 'sf_donate_now_img' ) ?>')">
    </div>

    <div class='md:w-1/2 px-24 py-16 flex flex-col justify-items-start'>
        <h1 class='section-header uppercase text-druk-bold mb-16'>
            DONATE NOW!
        </h1>

        <div class='section-content mb-16 text-justify flex-1'>
            <?= get_option( 'donate_now_text' ) ?>
        </div>

        <div class='mb-8'>
            <button class='button bg-black text-white py-3 px-10 text-xl inline-block'>
                Donate
            </button>
        </div>

        <div class='section-content font-light mb-2 text-xs text-gray-800'>
            All donations to our Covid-19 Crisis Response General Fund are tax deductible to the extent of the law.
        </div>
        <div class='section-content font-light text-xs text-gray-800'>
            Fiscal sponsorship is provided by In the Family Way, a 501(c)(3) public charity.
        </div>
        
    </div>
</div>

</div>

<?php get_footer() ?>