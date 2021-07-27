<?php 

    function format_number( int $n ) {
        return number_format( $n, 0, '.', ',' );
    }

?>

<?php get_header() ?>

<div id='cover' class='w-full py-32'>

    <div class='container lg:w-2/3'>
        <div id='cover-quote'>
            "Access to nourishing plant based food is a <span class='text-black'>human right</span>"
        </div>

        <div id='cover-author'>
            Maggie Baird
        </div>
    </div>
</div>

<div id='about-paragraph' class='flex justify-center py-20'>
    <div class='lg:w-2/3'>
        Support + Feed started in Los Angeles and it has expanded to New York City, Washington D.C. and Philadelphia.  It’s focus is to have a footprint in cities across the country that are most impacted by food insecurity and climate change. 
    </div>
</div>

<img id='ourCommunityImg' src='<?= get_theme_mod( 'sf_our_impact_community_photo' )?>'>

<div class='bg-black'>
    <div id='quotes' class='container lg:w-2/3 py-16 '>
        <h1 class='text-white uppercase text-center'>Community quotes</h1>

        <div class='quote' id='quote-1'>
            “Shepherd’s Table seeks to provide meals of the highest quality: prepared by professional chefs with fresh and organic produce. When we receive a meal from Support + Feed, we can be confident we’re serving something delicious and sustainable that’s good for people and good for the environment!” 
            <div class='quote-author'>Shepherd’s Table</div>
        </div>

        <div class='quote' id='quote-2'>
            “Support + Feed gave Housing Up families a unique opportunity to be introduced to the healthy, sustainable, and delicious world of plant-based meals. Through their meal donation program we now have dozens of children who see plant-based food as enjoyable and will undoubtedly grow up including plant-based meals in their regular diet.” 
            <div class='quote-author'>Dillon Ficca - Housing Up</div>   
        </div>
    </div>
</div>

<?php get_footer() ?>