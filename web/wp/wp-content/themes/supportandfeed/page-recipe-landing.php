<?php get_header(); ?>

<?php $thumbnail = get_the_post_thumbnail_url( size:'large' ); ?>

<?php 

function sf_recipe_category_selection( string $name, string $url ) {
    ?>  
        <div class='recipe-select-button bubble-fill-link'>
            <a href='<?= $url ?>'>
                <div class='relative font-gobold'>
                    <div class='text text-white bg-black'>
                        <div class='recipe-letter'><?= $name[0] ?></div>
                        <div class='recipe-name'><?= $name ?></div>
                    </div>
                    <div class='fill'>
                        <div class='recipe-letter'><?= $name[0] ?></div>
                        <div class='recipe-name'><?= $name ?></div>
                    </div>
                </div>
            </a>
        </div>

    <?php 
}

?>

<div id='recipe-landing' class='min-h-screen' style='background-image: url("<?= $thumbnail ?>")'>
    <div id='recipe-landing-content' class='w-full text-center md:text-left'>
        <span class='bg-black text-primary uppercase text-5xl md:text-6xl leading-relaxed md:leading-relaxed font-gobold'>
            We make it easy. We make it tasty.<br/>
            We make it plant-based.
        </span>

        <div class='flex justify-center w-full mt-16 flex-wrap'>
            <?php $recipe_list_url = sf_get_link_by_slug( 'recipes' ) ?>
            <?php sf_recipe_category_selection( 'Appetizers', add_query_arg( 'category', 'appetizers', $recipe_list_url ) ) ?>
            <?php sf_recipe_category_selection( 'Mains', add_query_arg( 'category', 'mains', $recipe_list_url ) ) ?>
            <?php sf_recipe_category_selection( 'Sides', add_query_arg( 'category', 'sides', $recipe_list_url ) ) ?>
            <?php sf_recipe_category_selection( 'Desserts', add_query_arg( 'category', 'desserts', $recipe_list_url ) ) ?>
            <?php sf_recipe_category_selection( 'Drinks', add_query_arg( 'category', 'drinks', $recipe_list_url ) ) ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>