<?php get_header(); ?>

<div class='flex min-h-screen'>

    <div class='w-1/2' id='donateImg' style="background-image: url(<?= get_theme_mod( 'sf_donate_cover_photo' ) ?>)">
    </div>

    <div class='w-1/2 '>
        <div class="plg-donate" data-widget-id="FHRLMdJM57DxKa-Ey1ZsdQ"></div> 
    </div>

</div>

<script src="https://hello.pledge.to/assets/widget.js" id="plg-widget" async="async"></script>

<?php get_footer(); ?>