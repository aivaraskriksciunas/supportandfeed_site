<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aivaras Kriksciunas">

    <?php wp_head() ?>
</head>
<body id='error-page'>
    
    <div class='min-h-screen w-full flex items-stretch justify-center p-10 bg-black'>
        <div id='bg-image' class='w-full flex items-center justify-center' style='background-image: url("<?= sf_get_asset( 'images/error-page-bg.jpg' ); ?>")'>
            <div class='w-full sm:w-1/2 md:w-1/3 lg:w-1/3 p-10 bg-black text-white text-center'>
                <h1 class='uppercase text-8xl text-center shadow-2xl'>page not found</h1>

                <a href='/' class='text-xs font-light mt-4 inline-block text-gray-200 hover:underline'>Back to homepage</a>
            </div>
        </div>
    </div>
    
<?php wp_footer(); ?>
</body>
</html>