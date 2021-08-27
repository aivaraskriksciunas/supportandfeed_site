
<?php 

    function display_footer_social_link( string $id, string $icon )
    {
        if ( !get_option( $id ) ) return;
        ?>
            <a href='<?= get_option( $id ) ?>' target='_blank' class='font-semibold rounded-full flex items-center justify-center w-12 h-12 mr-6 text-white hover:bg-white hover:text-black'>
                <span class="text-2xl <?= $icon ?>"></span>
            </a>
        <?php
    }
?>

<!-- Close page identifying div -->
</div>

<div id='footer' class='bg-black text-white py-16'>
    <div class='container'>
        <?php 
            $logo_id = get_theme_mod( 'custom_logo' );

            if ( $logo_id ):
        ?>
            <div id='footer-top-section' class='md:flex items-center'>
                <img id='footer-logo' class='md:w-64 md:mr-8 w-64' src='<?= wp_get_attachment_image_src( $logo_id, 'full' )[0] ?>'>

                <div id='footer-signup' class='mt-8 md:mt-0 flex-1 flex justify-center'>
                    <div id='footer-signup-constraint' class='md:px-4'>
                        <div class=' text-white'>A newsletter with impact, sign up:</div>
                        <div class='flex mt-4' id='signup-field-container'>

                            <?php
                                if ( function_exists( 'smlsubform' ) ) {
                                    $args = array(
                                        'prepend' => '', 
                                        'showname' => true,
                                        'emailholder' => 'Enter your email', 
                                        'showsubmit' => true, 
                                        'submittxt' => 'Subscribe', 
                                        'jsthanks' => true,
                                        'thankyou' => 'Thank you for subscribing to our mailing list'
                                        );
                                    echo smlsubform($args);
                                }
                            ?>

                        </div>
                    </div>
                </div>

                <div class='hidden lg:flex'>
                    <?php display_footer_social_link( 'facebook_link', 'icon-facebook' ) ?>
                    <?php display_footer_social_link( 'instagram_link','icon-instagram' ) ?>
                    <?php display_footer_social_link( 'linkedin_link', 'icon-linkedin2' ) ?>
                    <?php display_footer_social_link( 'twitter_link', 'icon-twitter' ) ?>
                    <?php display_footer_social_link( 'tiktok_link', 'icon-tiktok' ) ?>
                </div>
            </div>

            <div class='mt-8 flex lg:hidden'>
                <?php display_footer_social_link( 'facebook_link', 'icon-facebook' ) ?>
                <?php display_footer_social_link( 'instagram_link','icon-instagram' ) ?>
                <?php display_footer_social_link( 'linkedin_link', 'icon-linkedin2' ) ?>
                <?php display_footer_social_link( 'twitter_link', 'icon-twitter' ) ?>
                <?php display_footer_social_link( 'tiktok_link', 'icon-tiktok' ) ?>
            </div>
        <?php endif ?>
    </div>
    <div class='container mt-12'>
        <div class='md:flex'>
            <div id='footer-menus-container' class='md:w-1/2 lg:w-1/4'>
                <?php wp_nav_menu([
                    'menu' => 'footer',
                ]); ?>
            </div>

            <div class='md:w-1/2 lg:w-1/4 mt-5 md:mt-0'>
                <div class='text-base text-gray-300'>Enquiries:</div>
                <div class='text-sm mt-2 text-gray-400'>
                    General: 
                    <a href='mailto: <?= get_option( 'general_email' ) ?>' class='font-light text-gray-100'><?= get_option( 'general_email' ) ?></a>
                </div>
                <div class='text-sm mt-2 text-gray-400'>
                    Press: 
                    <a href='mailto: <?= get_option( 'press_email' ) ?>' class='font-light text-gray-100'><?= get_option( 'press_email' ) ?></a>
                </div>
            </div>
        </div>

        <div class='text-xs font-light text-gray-600 italic my-8'>
            <?= join( ' | ', apply_filters( 'sf_footer_credits', [ '© Support and Feed, ' . date( 'Y' ) ])); ?>
        </div>

        <div class='text-xs font-light text-gray-500 text-justify'><?= get_option( 'disclaimer_text' ) ?></div>
    </div>

    
    
</div>

<?php wp_footer(); ?>

</body>
</html>