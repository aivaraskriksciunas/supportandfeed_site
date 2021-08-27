
<div id='main-slideshow'>
    <div id='sf-video-container'>
        <video id='sf-video' src='<?= sf_get_asset( 'videos/s+f_website.mov' ) ?>' autoplay muted loop style='opacity: 0'>
        </video>
    </div>
    <div id='sf-text-overlay' class='container flex items-end pb-10 md:pb-20'>
        <div id='sf-text-container'>
            <div id='sf-video-text' class='mb-6'>
                <?= get_theme_mod( 'sf_slider_text' ) ?>
            </div>
            <div id='flex'>
                <a href='<?= sf_get_link_by_slug( 'donate' ) ?>' class='button button-primary mr-4'>Donate</a>
                <a href='<?= sf_get_link_by_slug( 'about' ) ?>' class='button button-secondary'>About us</a>
            </div>
        </div>
    </div>
</div>