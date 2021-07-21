<?php get_header() ?>

<div id='cover' class='bg-white'>
    <div class="container flex items-center min-h-screen ">
        <div id='cover-title' class='w-1/2'>
            <div class=''>
                <h1 class=' text-8xl italic uppercase mb-8'><?= the_title() ?></h1>

                <div class='leading-relaxed '>
                    <span class=''>Support + Feed is a nonprofit 501(c)3 organization dedicated to combating the climate crisis and confronting food insecurity. By uniting with local relief organizations, Support + Feed and its small business we distribute thousands of nutritious plant-based meals each day across the United States.</span>
                </div>
            </div>
        </div>
        <div class='w-1/2 px-8'>
            <img src='http://localhost:8000/app/uploads/2021/07/sfphoto.jpg'>
        </div>
    </div>
    
</div>

<div class='bg-gray-100 inline-block'>
    
    <h1 class='my-10 text-center text-7xl'>
        Why plant based matters
    </h1>

    <div class='container py-10'>
        <div class="bg-white">
            <?php the_content() ?>
        </div>
    </div>
</div>

<?php get_footer() ?>