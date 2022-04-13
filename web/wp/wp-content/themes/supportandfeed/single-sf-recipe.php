<?php get_header(); ?>

<?php 

    function show_recipe_meta_field( string $title, string $field_name ) {

        $val = get_post_meta( get_the_ID(), $field_name );

        if ( !$val || $val == '' ) return;
        
        ?>
            <div class='w-full md:w-1/2 text-xl md:text-2xl uppercase p-2 md:p-4'>
                <span class='font-bold'><?= $title ?>:</span>
                <?= htmlentities( $val[0] ) ?>
            </div>
        <?php 
    }

?>

<div id='recipe-post-type'>

    <?php 
        $thumbnail = get_the_post_thumbnail_url( size:'large' );
    ?>

    <div class='recipe-header' style='background-image: url("<?= $thumbnail ?>")'>
        <div class='recipe-title-container' >
            <div class='recipe-title'>
                <?php the_title() ?>
            </div>

            <div class='recipe-author'>
                <?php 
                    $val = get_post_meta( get_the_ID(), 'recipe_author' );

                    if ( !$val || $val == '' ) return;
                    echo $val[0];
                ?>
            </div>
        </div>
    </div>

    <div class='container mb-20'>

        <div class='border border-blue-500 flex flex-wrap p-4 mb-8'>
            <?php show_recipe_meta_field( 'Cook Time', 'cook_time' ) ?>
            <?php show_recipe_meta_field( 'Yields', 'yields' ) ?>
            <?php show_recipe_meta_field( 'Prep Time', 'prep_time' ) ?>
            <?php show_recipe_meta_field( 'Optionals', 'optionals' ) ?>
        </div>

        <div class='text-justify'>
            <?= the_content() ?>
        </div>

    </div>

</div>

<?php get_footer(); ?>