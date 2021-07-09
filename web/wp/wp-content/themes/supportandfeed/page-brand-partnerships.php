<?php 
    $coverUrl = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' );

    add_filter( 'sf_footer_credits', function( $val ) {
        return [ ...$val, 'Some icons on this page provided by <a target="_blank" class="underline" href="https://icons8.com">Icons8</a>'];
    } );
?>

<?php get_header() ?>

<div id='p-brand-partnerships'>

<div id='pageCover' class='flex items-center container' style='background-image: url(<?= $coverUrl ?>)'>
    <div class='my-20 flex flex-col items-center'>
        <div>
            <h1 class='bg-black text-white inline-block p-1 mb-8 text-8xl'>
                <?php the_title() ?>
            </h1>
        </div>

        <div class='md:w-2/3'>
            <div class='text-center bg-white font-light text-lg py-2 px-4'>
                <?= get_post_meta( get_the_ID(), 'page_subtitle', true ); ?>
            </div>
        </div>
    </div>
</div>

<div class='py-32 text-center container'>

    <h1 class='mb-8 text-7xl'>Get your brand involved!</h1>
    <div class='mb-16'>Our most successful partnerships involve different avenues. </div>

    <div class='flex justify-center md:w-2/3 mb-32 justify-self-center mx-auto'>

        <?php 
            $icon_url = get_stylesheet_directory_uri() . '/assets/icons';
        ?>

        <div class='w-1/3 partnership-feature'>
            <img src='<?= $icon_url . '/sandwich-with-fried-egg.png'?>'>
            Give
        </div>
        <div class='w-1/3 partnership-feature'>
            <img src='<?= $icon_url . '/handshake.png'?>'>
            Engage
        </div>
        <div class='w-1/3 partnership-feature'>
            <img src='<?= $icon_url . '/microphone.png'?>'>
            Amplify
        </div>
    
    </div>

    <?php the_content() ?>

</div>
</div>

<?php get_footer() ?>