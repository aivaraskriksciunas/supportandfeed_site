
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

    <nav id='mainNavbar' class='bg-black w-full main-navbar text-white hidden md:block'>
        <div class='container flex'>

            <div class='py-4 mr-auto'>
                <?php show_logo() ?>
            </div>
            
            <div class='self-end'>
                <ul id='menu-navbar' class='flex'>
                    <?php 
                        $menu_locations = get_nav_menu_locations();
                        $items = wp_get_nav_menu_items( $menu_locations['navbar'] );
                        

                        foreach ( $items as $item ):
                            if ( $item->menu_item_parent != 0 ) continue;

                            ?>

                            <li class='menu-item'>
                                <div class='bubble-fill-link'>
                                    <a href='<?= $item->url ?>'>
                                        <div class='relative'>
                                            <div class='text'><?= $item->title ?></div>
                                            <div class='fill'><?= $item->title ?></div>
                                        </div>
                                    </a>
                                </div>

                                <?php 
                                    // Display all subitems for this item
                                    $subitems = array_filter( $items, function( $i ) use ( $item ) {
                                        return $i->menu_item_parent == $item->db_id;
                                    } );

                                    if ( count( $subitems ) > 0 ):

                                        // Start subitem menu
                                        ?><ul class='sub-menu'><?php
                                        
                                        foreach ( $subitems as $subitem ):
                                            ?>
                                                <li class='submenu-item'>
                                                    <a href='<?= $subitem->url ?>'>
                                                        <?= $subitem->title ?>
                                                    </a>
                                                </li>
                                            <?php
                                        endforeach;

                                        ?></ul><?php
                                    endif;
                                ?>
                            </li>

                            <?php


                        endforeach

                    ?>
                </ul>

                <!-- <?php wp_nav_menu([
                    'menu' => 'navbar',
                    'menu_class' => 'flex',
                ]); ?> -->
            </div>

        </div>
    </nav>

    <nav id='mobileNavbar' class='bg-black w-full main-navbar text-white md:hidden'>
        <div class='container flex items-center'>
            <div class='w-full py-4'>
                <?php show_logo() ?>
            </div>

            <div id='menu-expand-btn' class='flex-1 p-2 rounded-full hover:bg-white text-white hover:text-black' >
                <div class='w-10 h-10 flex items-center justify-center'>
                    <span class='icon-bars text-3xl'></span>
                </div>    
            </div>
        </div>
    </nav>

    <div id='menu-mobile-full' class='hidden fixed top-0 bg-black text-white w-full h-screen z-10 overflow-y-scroll'>
        
        <div class='mx-12 my-20'>
            <div id='menu-close-btn' class='flex justify-end'>
                <svg xmlns="http://www.w3.org/2000/svg" height="48px" viewBox="0 0 24 24" width="48px" fill="#fff">
                    <path d="M0 0h24v24H0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
                </svg>
            </div>
            <?php wp_nav_menu([
                'menu' => 'navbar',
                'menu_class' => '',
            ]); ?>
        </div>
    </div>

<?php endif ?>
