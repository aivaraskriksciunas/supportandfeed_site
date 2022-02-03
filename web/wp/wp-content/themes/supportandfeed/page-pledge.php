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
                <div class='text py-2 px-4'>"Change starts here" bracelet</div>
                <div class='fill py-2 px-4'>"Change starts here" bracelet</div>
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
        <img class='mb-8' width='128px' src='<?= sf_get_asset( 'pledge/wicked-kitchen-black.png' ) ?>'>
        <div class='text-6xl font-gobold uppercase mb-6'>"We got you"</div>
        <div class='text-2xl text-center md:text-left md:w-1/2 lg:w-1/3 mb-12 font-semibold'>Here are a few quick and simple, but crazy good recipes to get you started!</div>
    
        <div class='md:flex mb-10'>
            <iframe width='100%' height='300px' src="https://www.youtube.com/embed/0ZqBCF6dXyA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe class='md:mx-8 my-8 md:my-0' width='100%' height='300px' src="https://www.youtube.com/embed/jSXA2LYQud4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe width='100%' height='300px' src="https://www.youtube.com/embed/Q6YAGJnHk34" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>        
        </div>

        <div class='text-center text-3xl lg:w-2/3 mx-auto mb-16'>
            <div class='font-gobold mb-8'>
                Wicked Kitchen&trade; is on a mission to change the food system by inspiring the world to eat more plants. 
            </div>
            <div class='font-gobold mb-8'>
                it’s all about doing something good for the planet, for the animals, and for yourself!
            </div>
            <div class='font-gobold'>
                hungry for more? 
            </div>
        </div>

        <div class='text-center'>  
            <a class='link font-gobold text-2xl border-gray-800' target='_blank' href='https://citizen-t.com'>Step into the wicked kitchen&trade;</a>
        </div>

    </div>

</div>

<div id='maggie-quote' class='py-24'>
    <div class='container'>
        <div class='md:flex items-center'>
            <div id='maggie' class='mb-8 md:mb-0 md:mr-10 md:w-1/3 text-center flex justify-center'>
                <img class='w-32 md:w-auto' src='<?= sf_get_asset( 'pledge/maggie.png' ) ?>'>
            </div>
            <div id='quote' class='text-center md:text-left text-4xl md:text-5xl font-gobold md:leading-tight md:w-2/3'>
                "plant-based is not the end all solution to climate change, but there is no solution to climate change without plant-based."
            </div>
        </div>
    </div>
</div>

<div id='bracelet' class='bg-pink py-20 text-white text-center'>
    <div class='container'>
        <h1 class='font-gobold uppercase mb-20 text-4xl md:text-6xl md:leading-tight'>"Change starts here" bracelet</h1>
        
        <div class='md:flex justify-around items-center mb-10'>
            <div class='md:w-1/3 mb-10 md:mb-0'>
                <img src='<?= sf_get_asset( 'pledge/bracelet.gif' ) ?>'>
            </div>
            <div class='leading-snug font-gobold md:text-right text-3xl lg:text-4xl md:w-1/2'>made out of billie's deadstock, we show the power of "we" through the pledge bracelet. <br><br>
            Together we can change the world and by wearing this diy bracelet we see in each other a community of optimists that will work towards saving our planet. 
            </div>
        </div>

        <a class='link font-gobold text-4xl border-gray-300' target='_blank' href='https://citizen-t.com'>Link</a>
    
    </div>
</div>

<div id='plant-based' class='py-24'>
    <div class='container'>
        <div class='md:flex items-center'>
            <div id='quote' class='text-center md:text-left text-4xl md:text-5xl font-gobold md:leading-tight md:w-2/3'>
                swapping conventional meat for plant-based meat reduces environmental impacts
            </div>
            <div id='maggie' class='mt-8 md:mt-0 md:mr-10 md:w-1/3 text-center flex justify-center'>
                <img class='w-32 md:w-auto' src='<?= sf_get_asset( 'pledge/plant-based.png' ) ?>'>
            </div>        
        </div>
    </div>
</div>

<div id='resources' class='bg-blue-500 py-20 text-white text-center'>
    <div class='container'>
        <h1 class='font-gobold uppercase mb-12'>101 resources</h1>

        <div class='md:flex justify-around'>
            <a href='https://www.farmsanctuary.org/education/' target='_blank' class='hover-box md:w-1/3 mb-8'>
                <img class='mx-auto mb-4' src='<?= sf_get_asset( 'pledge/resource1.png' ) ?>'>
                <div class='mb-8'>
                    A climate justice community and resource hub centering around people of color and historically excluded voices.
                </div>
                <div class='inline-block link'>Link</div>
            </a>
            <a href='https://www.farmsanctuary.org/education/' target='_blank' class='hover-box md:w-1/3 mb-8'>
                <img class='mx-auto mb-4' src='<?= sf_get_asset( 'pledge/resource2.png' ) ?>'>
                <div class='mb-8'>
                    Fighting the disastrous effects of animal agriculture on animals, the environment, social justice, and public health through rescue, education, and advocacy.
                </div>
                <div class='inline-block link'>Link</div>
            </a>
            <a href='https://www.instagram.com/queerbrownvegan/' target='_blank' class='hover-box md:w-1/3 mb-8'>
                <img class='mx-auto mb-4' src='<?= sf_get_asset( 'pledge/resource3.png' ) ?>'>
                <div class='mb-8'>
                    Environmental educator (un/re) learning environmental justice & sustainability.
                </div>
                <div class='inline-block link'>Link</div>
            </a>
        </div>
    </div>
</div>

<div id='maggie-quote' class=''>
    <div class='container '>
        <div class='md:flex items-center border-b border-gray-400 border-dashed py-24'>
            <div id='maggie' class='mb-8 md:mb-0 md:mr-10 md:w-1/3 text-center flex justify-center'>
                <img class='w-32 md:w-auto' src='<?= sf_get_asset( 'pledge/livestock.png' ) ?>'>
            </div>
            <div id='quote' class='text-center md:text-left text-4xl md:text-5xl font-gobold md:leading-tight md:w-2/3'>
                “75% of agricultural land is used for raising and feeding livestock.”
            </div>
        </div>
    </div>
</div>

<div id='footer' class='py-24'>
    <div class='container md:w-2/3'>
        <div id='quote' class='text-4xl md:text-6xl text-center font-gobold uppercase md:leading-tight'>
            ACCESS TO NOURISHING FOOD IS A <span class='text-primary'>HUMAN RIGHT</span>
        </div>

        <img class='m-auto my-10' src='<?= sf_get_asset( 'pledge/eat-plants.gif' ) ?>'>
                
        <div id='disclaimer' class='text-sm font-light text-center text-white mb-2'>SUPPORT + FEED is a federally recognized 501c3 public charity. EIN: 85-4223098</div>
        <div id='disclaimer' class='text-sm font-light text-center text-white'>
            <a class='underline' href='<?= get_permalink( get_page_by_path( 'privacy-policy' ) ) ?>'>
                Privacy policy
            </a>
        </div>
    
    </div>
</div>

<?php wp_footer(); ?>

</body>
</html>