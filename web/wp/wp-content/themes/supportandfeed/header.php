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

<?php 
    $slug = get_post_field( 'post_name', get_post() );
?>

<div id='p-<?= $slug ?>' class='<?= $args['body-class'] ?>'>
    <?php get_template_part( 'template-parts/navbar/navbar' ) ?>