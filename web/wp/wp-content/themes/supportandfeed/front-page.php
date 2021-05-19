<?php get_header() ?>

<?php 
    // Include main slideshow
    require_once "template-parts/front-page/slideshow.php" 
?>

<div class='w-full bg-orange flex' id='our-mission-section'>
    <div class='px-32 py-20 w-2/3'>
        <p class='text-4xl leading-normal'>
            <span class='font-bold'>SUPPORT+FEED</span> positively impacts the climate crisis and combats food insecurity by providing plant based meals prepared by local restaurants and education on its benefits to underserved communities.
        </p>
    </div>
</div>

<div class='text-image-section w-full bg-black flex'>
    <div class='section-image md:w-1/2' style="background-image: url('http://localhost:8000/app/uploads/2021/05/152305734_125543042800832_4870344912468312982_n.jpg')">
    </div>

    <div class='md:w-1/2 px-24 text-white py-16 flex flex-col justify-items-start'>
        <h1 class='section-header uppercase text-druk-bold mb-16'>
            DONATE NOW!
        </h1>

        <div class='section-content mb-16 text-justify flex-1'>
            Donations help support free meal deliveries to organizations in need  by allocating resources among participating restaurants and with our operating expenses. 
        </div>
        <div class='section-content font-light mb-2 text-xs text-gray-400'>
            All donations to our Covid-19 Crisis Response General Fund are tax deductible to the extent of the law.
        </div>
        <div class='section-content font-light mb-4 text-xs text-gray-400'>
            Fiscal sponsorship is provided by In the Family Way, a 501(c)(3) public charity.
        </div>
        
        <div>
            <div class='button bg-white text-black py-3 px-8 inline-block text-sm'>
                Donate
            </div>
        </div>
    </div>
</div>

<div class='text-image-section w-full bg-primary flex'>
    
    <div class='md:w-1/2 px-24 py-16'>
        <h1 class='section-header text-druk-bold mb-16'>
            Why Plant Based Matters
        </h1>

        <div class='section-content mb-16 text-justify'>
            Description here
        </div>
    </div>

    <div class='section-image md:w-1/2' style="background-image: url('http://localhost:8000/app/uploads/2021/05/152855292_248621810153237_4891032650318186239_n.jpg')">
    </div>
</div>

<div id='contacts-section' class='w-full bg-light-blue-500 py-24'>
    <div class='container flex'>
        <div class='md:w-1/2'>
            <h1 class='mb-12'>Join Our Community</h1>

            <label>Email:</label>
            <div id='email-field-container' class='flex mt-4 items-stretch'>
                <input type='email' class='md:mr-4 flex-1' placeholder='Enter your email here'/>
                <button type='button'>Subscribe</button>
            </div>
        </div>

        <div class='md:w-1/2 pl-24'>
            <h1>Contact Us</h1>
        </div>
    </div>
</div>

<!-- <?php the_content() ?> -->

<?php get_footer() ?>