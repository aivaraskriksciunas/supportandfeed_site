<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aivaras Kriksciunas">

    <?php wp_head() ?>
</head>
<body>

<div id='section-thank-you' class='px-6 py-2'>

    <div class='flex items-center justify-center md:justify-end mb-20'>
        <img class='h-8 mr-8' src='<?= sf_get_asset( 'pledge/sf-logo-white.png' ) ?>'>
        <img class='h-8' src='<?= sf_get_asset( 'pledge/wicked-kitchen-white.png' ) ?>'>
    </div>

    <div id='thank-you' class='text-center uppercase font-gobold'>Thank you!</div>
    <div id='for-taking-pledge' class='text-center text-4xl md:text-5xl mb-16 leading-snug uppercase font-gobold'>
        For taking the <span class='text-primary'>plant-based pledge</span>
    </div>

    <div id='links' class='lg:flex justify-center font-gobold uppercase'>
        <a href='#we-got-you'>
            <div class='relative'>
                <div class='text'>"We got you" recipes</div>
                <div class='fill'>"We got you" recipes</div>
            </div>
        </a>
        <a href='#bracelet'>
            <div class='relative'>
                <div class='text py-2 px-4'>Change starts here bracelet</div>
                <div class='fill py-2 px-4'>Change starts here bracelet</div>
            </div>
        </a>
        <a href='#resources'>
            <div class='relative'>
                <div class='text'>101 resources</div>
                <div class='fill'>101 resources</div>
            </div>
        </a>
    </div>

</div>

<div id='section-images' class='flex'>
    <div id='hand'>
        <img src='<?= sf_get_asset( 'pledge/pledge-hand.png' ) ?>'>
    </div>

    <div id='stats' class=''>
        <!-- <img src='<?= sf_get_asset( 'pledge/stats.png' ) ?>'> -->
    </div>

</div>

<!-- <div id='diagonal-box'></div> -->
<div id='we-got-you' class='pb-16 pt-32 text-black'>
    <div class='container'>
        <div class='text-6xl font-gobold uppercase mb-6'>"We got you"</div>
        <div class='text-2xl text-center md:text-left md:w-1/2 lg:w-1/3 mb-12 font-semibold'>Here are a few quick and simple, but crazy good recipes to get you started!</div>
    
        <div class='md:flex'>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Q6YAGJnHk34" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe class='md:mx-8 my-8 md:my-0' width="100%" height="315" src="https://www.youtube.com/embed/jSXA2LYQud4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/0ZqBCF6dXyA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>

</div>

<div id='maggie-quote' class='py-24'>
    <div class='container'>
        <div class='flex items-center'>
            <div id='maggie' class='mr-10'>
                <img src='<?= sf_get_asset( 'pledge/maggie.png' ) ?>'>
            </div>
            <div id='quote' class='text-8xl font-gobold'>
                "Maggie quote"
            </div>
        </div>
    </div>
</div>

<div id='bracelet' class='bg-pink py-20 text-white text-center'>
    <div class='container'>
        <h1 class='font-gobold uppercase'>Change starts here bracelet</h1>
    </div>
</div>

<div id='plant-based' class='py-24'>
    <div class='container'>
        <div class='flex items-center'>
            <div id='quote' class='text-8xl font-gobold'>
                Benefit of eating plant based food
            </div>
            <div id='maggie' class='mr-10'>
                <img src='<?= sf_get_asset( 'pledge/plant-based.png' ) ?>'>
            </div>
        </div>
    </div>
</div>

<div id='resources' class='bg-blue-500 py-20 text-white text-center'>
    <div class='container'>
        <h1 class='font-gobold uppercase'>101 resources</h1>
    </div>
</div>

<div id='footer' class='py-24'>
    <div class='container md:w-2/3'>
        <div id='quote' class='text-4xl md:text-6xl text-center uppercase'>
            ACCESS TO NOURISHING FOOD IS A <span class='text-primary'>HUMAN RIGHT</span>
        </div>

        <img class='m-auto mb-20' src='<?= sf_get_asset( 'pledge/AlbaParis-SnF-SF-Concert-5.png' ) ?>'>
                
        <div id='disclaimer' class='text-sm font-light text-center text-gray-400'>SUPPORT + FEED is a federally recognized 501c3 public charity. EIN: 85-4223098</div>
    
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>