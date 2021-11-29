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

<?php if ( is_front_page() ): ?>

    <div id='banner' style='background-color: #eb1e4b; line-height: 1.05;' class='uppercase text-center text-white text-base font-bold h-12 flex items-center justify-center'>
        <div>Text Us  323-622-7171</div>
        <div>30 Days of Gratitude and Giving Back Nov. 29 - Dec 31st.</div>
    </div>

<?php endif ?>

<?php 
    $slug = get_post_field( 'post_name', get_post() );
?>

<div id='p-<?= $slug ?>' class='<?= $args['body-class'] ?>'>
    <?php get_template_part( 'template-parts/navbar/navbar' ) ?>