
<?php 

// Reads a url from theme mod $key, if it is set, places an img element
function _add_slideshow_image( string $key ) {
    if ( get_theme_mod( $key ) ):
    ?>
        <div class='slideshow-image' src='<?= get_theme_mod( $key ) ?>'></div>
    <?php 
    endif;
}

?>

<div id='main-slideshow' class='overflow-hidden flex items-center'>

    <div id="image-container">
        <?php 
            _add_slideshow_image( 'sf_slide1' );
            _add_slideshow_image( 'sf_slide2' );
            _add_slideshow_image( 'sf_slide3' );
            _add_slideshow_image( 'sf_slide4' );
        ?>
    </div>

    <?php if( get_theme_mod( 'sf_slider_text' ) ): ?>
        <div id='slideshow-text-container' class='container'>
            <div class='lg:w-1/2'>
                <div id='slideshow-text-box'>
                    <span id='slideshow-text'>
                        <?= get_theme_mod( 'sf_slider_text' ) ?>
                    </span>
                </div>
            </div>
        </div>
    <?php endif ?>

</div>