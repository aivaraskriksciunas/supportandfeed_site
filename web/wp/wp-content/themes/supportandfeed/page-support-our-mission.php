<?php get_header() ?>

<?php sf_page_cover() ?>

<div class='container'>

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

<div class='md:w-1/2'>
<?php
    while ( $q->have_posts() )
    {
        $q->the_post();
        ?>
            <div><?= get_the_title() ?></div>
            <div><?= get_the_content() ?></div>
        <?php
    }

    wp_reset_postdata();
?>
</div>

    


</div>

<?php the_content() ?>

<?php get_footer() ?>