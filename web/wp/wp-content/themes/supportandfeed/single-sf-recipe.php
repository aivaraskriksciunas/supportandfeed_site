<?php 

    $thumbnail = get_post_meta( get_the_ID(), 'recipe_image', true );
    if ( !$thumbnail ) {
        $thumbnail = get_the_post_thumbnail_url( size:'full' );
    }
    
    function show_recipe_meta_field( string $title, string $field_name ) {

        $val = get_post_meta( get_the_ID(), $field_name );

        if ( count( $val ) == 0 || !$val[0] || $val[0] == '' ) return;
        
        ?>
            <div class='recipe-meta-field w-full md:w-1/2 text-xl md:text-2xl uppercase p-2 md:p-4'>
                <span class='font-bold'><?= $title ?>:</span>
                <?= htmlentities( $val[0] ) ?>
            </div>
        <?php 
    }

    function add_social_preview_meta() {
        ?>
            <meta name='og:title' content='<?= the_title( echo:false ) ?>'>
            <meta name='og:image' content='<?= get_the_post_thumbnail_url( size:'post-thumbnail' ) ?>'>
            <meta name='twitter:image' content='<?= get_the_post_thumbnail_url( size:'post-thumbnail' ) ?>'>
        <?php 
    }

    add_action( 'wp_head', 'add_social_preview_meta' );

?>

<?php get_header(); ?>

<div id='recipe-post-type'>

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

        <div id='social-media-links'>
            <?php 
                $url_encoded = urlencode( "https://{$_SERVER['HTTP_HOST']}/{$_SERVER['REQUEST_URI']}" );
                $twitter = urlencode( get_the_title() ) . "%0A%0A" . $url_encoded;
            ?>
            <a href='https://www.facebook.com/sharer/sharer.php?u=<?= $url_encoded ?>&amp;src=sdkpreparse' target='_blank' class='font-semibold rounded-full flex items-center justify-center w-8 h-8 mr-3 text-gray-700 hover:text-black'>
                <span class="text-xl icon-facebook"></span>
            </a>
            <a href='https://twitter.com/intent/tweet?text=<?= $twitter ?>' target='_blank' class='font-semibold rounded-full flex items-center justify-center w-8 h-8 mr-3 text-gray-700 hover:text-black'>
                <span class="text-xl icon-twitter"></span>
            </a>
            <a href='mailto:?subject=<?= get_the_title() ?>&body=<?= $url_encoded ?>' target='_blank' class='font-semibold rounded-full flex items-center justify-center w-8 h-8 mr-3 text-gray-700 hover:text-black'>
                <span class="text-xl icon-mail"></span>
            </a>
            <a href="http://pinterest.com/pin/create/button/?url=<?= $url_encoded ?>&media=<?= urlencode( $thumbnail ) ?>"  class='font-semibold rounded-full flex items-center justify-center w-8 h-8 mr-3 text-gray-700 hover:text-black'>
                <span class="text-xl icon-pinterest"></span>
            </a>

        </div>

        <div id='recipe-info' class='border border-blue-500 flex flex-wrap p-4 mb-8'>
            <?php show_recipe_meta_field( 'Cook Time', 'cook_time' ) ?>
            <?php show_recipe_meta_field( 'Yields', 'yields' ) ?>
            <?php show_recipe_meta_field( 'Prep Time', 'prep_time' ) ?>
            <?php show_recipe_meta_field( 'Optionals', 'optionals' ) ?>
        </div>

        <div class=''>
            <?= the_content() ?>
        </div>

        <div class='flex justify-end'>
            <a id='download-recipe-button' onclick='window.print()'>
                <div class='flex'>
                    <i class='icon-file-pdf'></i>
                    <div class='pl-2'>Download recipe</div>
                </div>
            </a>
        </div>

        <div id='back-to-recipes-button' class='flex justify-end mt-4'>
            <a class='text-2xl text-primary font-gobold' href='<?= sf_get_link_by_slug( 'recipe-landing' ) ?>'>
                Back to recipes
            </a>
        </div>

    </div>

</div>

<?php get_footer(); ?>