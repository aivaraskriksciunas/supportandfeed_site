
<?php get_header() ?>

<div class='bg-gray-100'>

    <div class='py-12 md:pb-24 md:pt-20 text-center bg-blue-500 mb-8'>
        <div id='missionStatementBox' class='container px-6'>
            <div id='missionStatementTitle' class='uppercase text-druk-bold mb-4'>our mission</div>    
            <div id='missionStatement' class='md:w-2/3 mx-auto leading-normal'>Support and Feed takes action for a global shift to an equitable, plant-based food system to combat food insecurity and the climate crisis.</div>
        </div>
    </div>

    <?php 
        // Embed the content of 'our founder' page
        $loop = new WP_Query([  
            'post_type' => 'page',
            'posts_per_page' => 1, 
            'pagename' => 'our-founder'
        ]); 

        if ( $loop->have_posts() ): $loop->the_post(); ?>

            <?php $image_url = wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ); ?>

            <div class='md:flex'>
                <div id='founderImage' class='md:absolute md:w-2/3 w-full overflow-hidden z-0'>
                    <img src='<?= $image_url ?>'>
                </div>

                <div id='founderLetter' class='bg-white w-full md:w-2/3 lg:w-1/2 px-12 md:px-20 pt-14 pb-7 md:my-10 ml-auto text-justify'>
                    
                    <h1 class='mb-8'>Hi Friends,</h1>
                    <?php the_content() ?>
                </div>
            </div>

    <?php endif ?>
    <?php wp_reset_postdata() ?>

    

    <?php 
        // Embed the content of 'our team' page
        $loop = new WP_Query([  
            'post_type' => 'page',
            'posts_per_page' => 1, 
            'pagename' => 'our-team'
        ]); 

        if ( $loop->have_posts() ): $loop->the_post(); ?>

            <div class='container pb-5'>
                <?php the_content() ?>
            </div>

    <?php endif ?>
    <?php wp_reset_postdata() ?>
</div>

<?php get_footer() ?>