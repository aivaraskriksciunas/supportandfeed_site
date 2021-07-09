<?php get_header() ?>

<?php 
    // Include main slideshow
    require_once "template-parts/front-page/slideshow.php";

    function display_social_link( string $id, string $link_text, string $icon )
    {
        if ( !get_option( $id ) ) return;
        ?>
            <a href='<?= get_option( $id ) ?>' target='_blank' class='items-center mb-4 font-semibold hover:text-light-blue-900'>
                <span class="text-4xl <?= $icon ?> mr-10"></span>
            </a>
        <?php
    }
?>

<div id='front-page'>

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

            <?php display_social_link( 'facebook_link', 'Facebook', 'icon-facebook' ) ?>
            <?php display_social_link( 'instagram_link', 'Instagram', 'icon-instagram' ) ?>
            <?php display_social_link( 'linkedin_link', 'Linkedin', 'icon-linkedin2' ) ?>
            <?php display_social_link( 'twitter_link', 'Twitter', 'icon-twitter' ) ?>

        </div>
    </div>
</div>

<div id='sponsors-section' class='bg-white text-black text-center py-20'>
    <div class='container'>
        <h1 class='mb-16'>Our sponsors</h1>

        <?php 
            $loop = new WP_Query([
                'post_type' => 'sf-sponsors'
            ]);

            while ( $loop->have_posts() ) 
            {
                $loop->the_post();
                $logo = get_the_post_thumbnail_url();
                $url  = get_post_meta( get_the_ID(), 'url', single:true );

                // Do not show posts without thumbnail
                if ( !$logo ) continue;

                ?>
                    <a href='<?= $url ?>' class='sponsor-container px-8 py-4 mb-6'>
                        <img alt='<?= get_the_title() ?>' src='<?= $logo ?>'>
                    </a>
                <?php
            }   
        ?>

    </div>
</div>

</div>

<?php get_footer() ?>