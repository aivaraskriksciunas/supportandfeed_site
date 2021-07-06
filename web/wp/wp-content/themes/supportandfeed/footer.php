
<?php 

    function display_footer_social_link( string $id, string $icon )
    {
        if ( !get_option( $id ) ) return;
        ?>
            <a href='<?= get_option( $id ) ?>' target='_blank' class='font-semibold rounded-full flex items-center justify-center w-12 h-12 mr-10 text-white hover:bg-white hover:text-black'>
                <span class="text-2xl <?= $icon ?>"></span>
            </a>
        <?php
    }
?>

<div id='footer' class='bg-black text-white py-16'>
    <div class='container'>
        <?php 
            $logo_id = get_theme_mod( 'custom_logo' );

            if ( $logo_id ):
        ?>
            <div id='footer-top-section' class='md:flex items-center'>
                <img id='footer-logo' class='md:w-64 md:mr-8' src='<?= wp_get_attachment_image_src( $logo_id )[0] ?>'>
                <div class='flex'>
                    <?php display_footer_social_link( 'facebook_link', 'icon-facebook' ) ?>
                    <?php display_footer_social_link( 'instagram_link','icon-instagram' ) ?>
                    <?php display_footer_social_link( 'linkedin_link', 'icon-linkedin2' ) ?>
                    <?php display_footer_social_link( 'twitter_link', 'icon-twitter' ) ?>
                </div>
            </div>
        <?php endif ?>
    </div>
    <div class='container mt-12'>
        <div id='footer-menus-container' class='w-1/4'>
            <?php wp_nav_menu([
                'menu' => 'footer',
                ''
            ]); ?>
        </div>
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>