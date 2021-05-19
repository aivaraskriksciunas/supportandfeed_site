
<?php if( has_nav_menu( 'navbar' ) ): ?>

    <nav id='main-navbar' class='bg-black w-full text-white'>
        <div class='container flex'>

            <div class='w-full py-4'>
                <?php if ( has_custom_logo() ): ?>
                    
                    <?php 
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    ?>

                    <a href='<?php echo get_home_url() ?>'>
                        <img id='navbar-logo-img' src='<?php echo esc_url( $logo_url[0] ) ?>' alt='Support and feed logo'>
                    </a>

                <?php endif ?>
            </div>
            
            <div class='self-end'>
                <?php wp_nav_menu([
                    'location' => 'navbar',
                    'menu_class' => 'flex',
                ]); ?>
            </div>

        </div>
    </nav>

<?php endif ?>
