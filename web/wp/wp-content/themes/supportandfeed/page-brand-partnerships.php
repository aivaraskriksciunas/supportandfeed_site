<?php 
    $coverUrl = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' );

    add_filter( 'sf_footer_credits', function( $val ) {
        return [ ...$val, 'Some icons on this page provided by <a target="_blank" class="underline" href="https://icons8.com">Icons8</a>'];
    } );
?>

<?php get_header() ?>

<div id='p-brand-partnerships' class='w-full bg-gray-100'>

<div id='pageCover' class='flex items-center container' style='background-image: url(<?= $coverUrl ?>)'>
    <div class='my-20 flex flex-col items-right'>
        <div>
            <h1 class='bg-black text-white inline-block p-1 mb-8 text-8xl'>
                <?php the_title() ?>
            </h1>
        </div>

        <!-- <div class='md:w-2/3'>
            <div class='text-center bg-white font-light text-lg py-2 px-4'>
                <?= get_post_meta( get_the_ID(), 'page_subtitle', true ); ?>
            </div>
        </div> -->
    </div>
</div>

<div class='py-16 text-center container bg-gray-100'>

    <div class='bg-white py-16 px-8'>
    <h1 class='mb-8 text-7xl'>Get your brand involved!</h1>
    <p class='mb-32 lg:w-1/2 mx-auto'>We work cooperatively with our Brand Partners to grow mutually-beneficial fundraising campaigns, media, and experiences that positively impact underserved communities. </p>

    <div class='md:flex justify-center w-3/4 md:w-full lg:w-3/4 mb-40 justify-self-center mx-auto'>

        <?php 
            $icon_url = get_stylesheet_directory_uri() . '/assets/icons';
        ?>

        <div class='md:w-1/3 partnership-feature'>
            <img src='<?= $icon_url . '/sandwich-with-fried-egg.png'?>'>
            <div class='partnership-title'>Donate</div>
            <p>Your gift helps provide planet forward meals and empowering resources to underserved communities.</p>

            <ul class='partnership-list'>
                <li>Corporate Gift</li>
                <li>Percentage of sales</li>
                <li>Matching</li>
                <li>Round up</li>
            </ul>
        </div>
        <div class='md:w-1/3 partnership-feature'>
            <img src='<?= $icon_url . '/handshake.png'?>'>
            <div class='partnership-title'>Mobilize</div>
            <p>Activate  your staff and clients to fundraise and voice the mission. </p>

            <ul class='partnership-list'>
                <li>Staff Volunteer Program</li>
                <li>Staff fundraising</li>
            </ul>
        </div>
        <div class='md:w-1/3 partnership-feature'>
            <img src='<?= $icon_url . '/microphone.png'?>'>
            <div class='partnership-title'>Amplify</div>
            <p>Help us amplify the world issues of climate crisis, food insecurity and the impact of our work.</p>

            <ul class='partnership-list'>
                <li>Gifted social media</li>
                <li>Gifted content</li>
                <li>Activation integration</li>
            </ul>
        </div>
    
    </div>

    <?php the_content() ?>
    </div>
</div>
</div>

<?php get_footer() ?>