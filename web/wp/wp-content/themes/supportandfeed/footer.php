
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
                <img id='footer-logo' class='md:w-64 md:mr-8 w-64' src='<?= wp_get_attachment_image_src( $logo_id, 'full' )[0] ?>'>

                <div id='footer-signup' class='mt-8 md:mt-0 flex-1 flex justify-center'>
                    <div id='footer-signup-constraint' class='md:px-4'>
                        <div class='text-sm text-gray-400'>A newsletter with impact, sign up:</div>
                        <div class='flex mt-2' id='signup-field-container'>
                            <input type='email' class='flex-1 mr-4 p-2 w-full text-sm text-black' placeholder='Enter your email here'/>
                            <button type='button' class='text-sm py-3'>Subscribe</button>
                        </div>
                    </div>
                </div>

                <div class='hidden lg:flex'>
                    <?php display_footer_social_link( 'facebook_link', 'icon-facebook' ) ?>
                    <?php display_footer_social_link( 'instagram_link','icon-instagram' ) ?>
                    <?php display_footer_social_link( 'linkedin_link', 'icon-linkedin2' ) ?>
                    <?php display_footer_social_link( 'twitter_link', 'icon-twitter' ) ?>
                </div>
            </div>

            <div class='mt-8 flex lg:hidden'>
                <?php display_footer_social_link( 'facebook_link', 'icon-facebook' ) ?>
                <?php display_footer_social_link( 'instagram_link','icon-instagram' ) ?>
                <?php display_footer_social_link( 'linkedin_link', 'icon-linkedin2' ) ?>
                <?php display_footer_social_link( 'twitter_link', 'icon-twitter' ) ?>
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

        <div class='text-xs font-light text-gray-600 italic my-8'>
            <?= join( ' | ', apply_filters( 'sf_footer_credits', [ '© Support and Feed, ' . date( 'Y' ) ])); ?>
        </div>

        <div class='text-xs font-light text-gray-500 text-justify'>Our platform and service (collectively, the “Service”) facilitates your purchase of food from third party restaurants and vendors (“Vendors”), which will then be distributed by third party partners (“Distributors”) as donations to nonprofit organizations and other entities (“NPOs”) for ultimate distribution (“Distribution”) to needy individuals. Your transaction for the purchase of food (the “Transaction”) will be made directly with the Vendors, who will then distribute the food you purchased to the Distributors. By using our Service, you agree that we are not responsible for the actions or omissions of third parties (including, without limitation, those of the Vendors, Distributors and NPOs), that we are not liable for any loss of money or any other damages in connection with the Transaction, Distribution, the use or inability to use the Service, and/or that are the result of factors outside of our control (e.g., natural hazards, disasters, and other “acts of God”), that all risk arising out of your use of our Services is assumed by you, and that you waive and release us of all claims resulting from and/or pertaining to any and all of the foregoing, to the maximum extent permitted under the law.</div>
    </div>

    
    
</div>

<?php wp_footer(); ?>

</body>
</html>