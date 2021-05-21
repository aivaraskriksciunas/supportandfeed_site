<?php get_header() ?>

<?php 
    // Include main slideshow
    require_once "template-parts/front-page/slideshow.php";

    function display_social_link( string $id, string $link_text, string $icon )
    {
        if ( !get_option( $id ) ) return;
        ?>
            <a href='<?= get_option( $id ) ?>' target='_blank' class='flex items-center mb-4 font-semibold hover:text-light-blue-900'>
                <span class="dashicons <?= $icon ?> mr-5"></span>
                <span class=''><?= $link_text ?></span>
            </a>
        <?php
    }
?>

<div class='w-full bg-yellow-500 flex' id='our-mission-section'>
    <div class='px-32 py-20 w-2/3'>
        <p class='text-4xl leading-normal'>
            <?= get_option( 'our_mission_text' ) ?>
        </p>
    </div>
</div>

<div class='text-image-section w-full bg-black flex'>
    <div id='donateNowImg' class='section-image md:w-1/2' style="background-image: url('<?= get_theme_mod( 'sf_donate_now_img' ) ?>')">
    </div>

    <div class='md:w-1/2 px-24 text-white py-16 flex flex-col justify-items-start'>
        <h1 class='section-header uppercase text-druk-bold mb-16'>
            DONATE NOW!
        </h1>

        <div class='section-content mb-16 text-justify flex-1'>
            Donations help support free meal deliveries to organizations in need  by allocating resources among participating restaurants and with our operating expenses. 
        </div>
        <div class='section-content font-light mb-2 text-xs text-gray-400'>
            All donations to our Covid-19 Crisis Response General Fund are tax deductible to the extent of the law.
        </div>
        <div class='section-content font-light mb-4 text-xs text-gray-400'>
            Fiscal sponsorship is provided by In the Family Way, a 501(c)(3) public charity.
        </div>
        
        <div>
            <div class='button bg-white text-black py-3 px-8 inline-block text-sm'>
                Donate
            </div>
        </div>
    </div>
</div>

<div class='text-image-section w-full bg-primary flex'>
    
    <div class='md:w-1/2 px-24 py-16'>
        <h1 class='section-header text-druk-bold mb-16'>
            Why Plant Based Matters
        </h1>

        <div class='section-content mb-16 text-justify'>
            Description here
        </div>
    </div>

    <div id='plantBasedImg' class='section-image md:w-1/2' 
        style="background-image: url('<?= get_theme_mod( 'sf_plant_based_img' ) ?>')">
    </div>
</div>

<div id='contacts-section' class='w-full bg-light-blue-500 py-24'>
    <div class='container flex'>
        <div class='md:w-1/2'>
            <h1 class='mb-12'>Join Our Community</h1>

            <label>Email:</label>
            <div id='email-field-container' class='flex mt-4 items-stretch'>
                <input type='email' class='md:mr-4 flex-1' placeholder='Enter your email here'/>
                <button type='button'>Subscribe</button>
            </div>
        </div>

        <div class='md:w-1/2 pl-24'>
            <h1 class='mb-12'>Contact Us</h1>

            <?php display_social_link( 'facebook_link', 'Facebook', 'dashicons-facebook-alt' ) ?>
            <?php display_social_link( 'instagram_link', 'Instagram', 'dashicons-instagram' ) ?>
            <?php display_social_link( 'linkedin_link', 'Linkedin', 'dashicons-linkedin' ) ?>
            <?php display_social_link( 'twitter_link', 'Twitter', 'dashicons-twitter' ) ?>

        </div>
    </div>
</div>

<!-- <?php the_content() ?> -->

<?php get_footer() ?>