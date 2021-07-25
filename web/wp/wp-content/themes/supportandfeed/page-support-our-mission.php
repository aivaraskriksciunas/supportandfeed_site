<?php get_header( args:[ 'body-class' => 'bg-gray-100' ]) ?>

<div class='lg:flex'>
    <div class='lg:w-1/2 px-20 py-20'>
        <h1 class='uppercase text-8xl mb-16'><?= the_title() ?></h1>

        <p class='mb-20'><?= get_post_meta( get_the_ID(), 'page_subtitle', true ) ?></p>

        <a target='_blank' href='https://docs.google.com/forms/d/1MF1B5JkLa6gzp-3BJFBpPJw-vX3SV9GwuqtrLi5a9N4/prefill' class='button'>Volunteer</a>
    </div>

    <div class='lg:w-1/2'>
        <img src='http://localhost:8000/app/uploads/2021/07/sfphoto6.jpg'>
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

    


</div>

<?php the_content() ?>

<?php get_footer() ?>