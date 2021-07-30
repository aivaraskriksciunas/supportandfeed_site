<?php get_header( args:[ 'body-class' => 'bg-gray-100' ]) ?>

<div class='lg:flex'>
    <div class='lg:w-1/2 px-10 md:px-20 py-20'>
        <h1 class='uppercase text-8xl mb-16'><?= the_title() ?></h1>

        <p class='mb-20'><?= get_post_meta( get_the_ID(), 'page_subtitle', true ) ?></p>

        <a target='_blank' href='https://docs.google.com/forms/d/1TLlDbew2YUd7R8ViUoPql9G-IYAS2SxgrhbOypvTnR0/prefill' class='button'>Volunteer</a>
    </div>

    <div class='lg:w-1/2'>
        <img src='<?= wp_get_attachment_image_url( get_post_thumbnail_id(), 'full' ) ?>'>
    </div>

</div>

<div class='container py-20'>

<?php 
    // Retrieve a list of FAQ questions for this section
    $q = new WP_Query([
        'post_type' => 'sf-faq',
        'tax_query' => [
            'taxonomy' => 'sf-faq-sections',
            'terms' => 'volunteer'
        ]
    ]);
?>

<?php if ( $q->have_posts() ): ?>

<h1 class='text-center mb-20'>Frequently asked questions</h1>

<div class='md:w-2/3 lg:w-1/2 mx-auto'>
<?php
    while ( $q->have_posts() )
    {
        $q->the_post();
        ?>
            <div class='faq-container mb-8'>
                <div class='faq-question'>
                    <?= get_the_title() ?>
                </div>
                <div class='faq-paragraph pt-4'>
                    <?= get_the_content() ?>
                </div>
            </div>
        <?php
    }

    wp_reset_postdata();
?>
</div>

<?php endif ?>

</div>

<img src='<?= get_theme_mod( 'sf_volunteer_community_photo' ) ?>' class='w-full'>

<?php get_footer() ?>