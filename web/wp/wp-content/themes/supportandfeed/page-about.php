<?php get_header() ?>

<div id='cover' class='px-10 sm:px-20 py-20 flex items-end w-full min-h-screen' 
    style='background-image: url("<?= sf_get_asset( 'images/forest-burning-banner.jpeg' ); ?>")'>
    <div>
        <div id='cover-quote' class='lg:w-2/3'>
            "I don't want your hope. I don't want you to be hopeful. <span class='text-primary'>I want you to <span class="text-yellow-500">panic and act</span> as if the house is on fire.</span>"
        </div>
        <div id='cover-author'>
            - Greta Thunberg
        </div>
    </div>
</div>

<!-- <div id='cover' class='bg-white'>
    <div class="container lg:flex items-center min-h-screen ">
        <div id='cover-title' class='lg:w-1/2 py-20'>
            <div>
                <h1 class=' text-8xl italic uppercase mb-8'><?= the_title() ?></h1>

                <div class='leading-relaxed text-justify'>
                    <?= get_post_meta( get_the_ID(), 'page_subtitle', true ) ?>
                </div>
            </div>
        </div>
        <div class='lg:w-1/2 px-8'>
            <img src='<?= wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ?>'>
        </div>
    </div>
    
</div> -->

<div class='bg-gray-100 w-full inline-block'>
    
    <h1 class='mt-20 mb-10 text-center text-7xl'>
        Why plant based matters
    </h1>

    <div class='container py-10'>
        <div class="bg-white">
            <?php the_content() ?>
        </div>
    </div>
</div>

<?php get_footer() ?>