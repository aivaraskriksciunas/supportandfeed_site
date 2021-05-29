
<?php 

// TODO: add sticky menu

function show_logo() {
    if ( has_custom_logo() ) {
                
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo_url = wp_get_attachment_image_src( $custom_logo_id , 'full' );

        ?>
            <a href='<?php echo get_home_url() ?>'>
                <img class='navbar-logo-img' src='<?php echo esc_url( $logo_url[0] ) ?>' alt='Support and feed logo'>
            </a>
        <?php
    }
} 

?>

<?php if( has_nav_menu( 'navbar' ) ): ?>

    <nav class='bg-black w-full main-navbar text-white hidden md:block'>
        <div class='container flex'>

            <div class='w-full py-4'>
                <?php show_logo() ?>
            </div>
            
            <div class='self-end'>
                <?php wp_nav_menu([
                    'location' => 'navbar',
                    'menu_class' => 'flex',
                ]); ?>
            </div>

        </div>
    </nav>

    <nav class='bg-black w-full main-navbar text-white md:hidden'>
        <div class='container flex items-center'>
            <div class='w-full py-4'>
                <?php show_logo() ?>
            </div>

            <div id='menu-expand-btn' class='flex-1 p-2 rounded-full hover:bg-white text-white hover:text-black'>
                <svg xmlns="http://www.w3.org/2000/svg" height="32px" viewBox="0 0 24 24" width="32px">
                    <path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/>
                </svg>
            </div>
        </div>
    </nav>

    <div id='menu-mobile-full' class='hidden fixed top-0 bg-black text-white w-full h-screen z-10'>
        
        <div class='mx-12 my-20 text-6xl'>
            <div id='menu-close-btn' class='flex justify-end'>
                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="#fff">
                    <path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                </svg>
            </div>
            <?php foreach( wp_get_nav_menu_items( 'navbar' ) as $item ): ?>
                <div class='my-4 text-druk-bold italic'>
                    <a href='<?= $item->url ?>'><?= $item->title ?></a>
                </div>
            <?php endforeach ?>
        </div>
    </div>

<?php endif ?>