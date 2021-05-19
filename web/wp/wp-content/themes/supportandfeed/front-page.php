<?php get_header() ?>

<?php 
    // Include main slideshow
    require_once "template-parts/front-page/slideshow.php" 
?>

<div class='w-full bg-yellow-500 flex' id='our-mission-section'>
    <div class='px-32 py-20 w-2/3'>
        <p class='text-4xl leading-normal'>
            <span class='font-bold'>SUPPORT+FEED</span> positively impacts the climate crisis and combats food insecurity by providing plant based meals prepared by local restaurants and education on its benefits to underserved communities.
        </p>
    </div>
</div>

<?php the_content() ?>

<?php get_footer() ?>