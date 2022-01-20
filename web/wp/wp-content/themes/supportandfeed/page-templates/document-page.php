<?php

/* 
    Template Name: Document page template
*/

?>

<?php get_header() ?>

<div class='bg-black box-border py-10' style='background-image: url(<?= sf_get_asset( 'images/bg3.png' ) ?>); background-size: 80px 80px;'>

    <div class='container md:w-2/3'>
        <div class='bg-white p-10' style='box-shadow: 6px 6px 0 rgba( 100, 100, 100, 0.5 )'>
            <h1 class='mb-8'><?= the_title() ?></h1>

            <?php the_content() ?>
        </div>
    </div>

</div>



<?php get_footer() ?>