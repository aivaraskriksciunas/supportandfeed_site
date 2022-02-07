<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Aivaras Kriksciunas">
    <meta name="title" content="Support and Feed">
    <meta name="description" content="Support and Feed takes action for a global shift to an equitable, plant-based food system to combat food insecurity and the climate crisis.">
    <link rel="preload" as="font" href="<?= sf_get_asset( 'dist/fonts/Druk-Bold.otf' ) ?>" type="application/x-font-opentype" crossorigin="anonymous">
    <link rel="preload" as="font" href="<?= sf_get_asset( 'dist/fonts/Druk-BoldItalic.otf' ) ?>" type="application/x-font-opentype" crossorigin="anonymous">

    <?php wp_head() ?>
</head>
<body>

<?php 
function sf_banner() {
    $banner_text = explode( "\n", get_option( 'banner_text' ) );

    $banner_text = array_filter( $banner_text, function( $val ) {
        return trim( $val ) !== '';
    });

    if ( count( $banner_text ) == 0 ) return;
    ?>
    
    <div id='banner' style='background-color: #e47b00; line-height: 1.05;' class='bg-orange uppercase text-center text-white text-base font-bold h-12 flex items-center justify-center'>
        
        <?php foreach ( $banner_text as $t ): ?>
            <div><?= $t ?></div>
        <?php endforeach; ?>

    </div>

    <?php 
}
?>


<?php if ( is_front_page() ) { sf_banner(); } ?>

<?php 
    $slug = get_post_field( 'post_name', get_post() );
?>

<?php get_template_part( 'template-parts/navbar/navbar' ) ?>

<div id='p-<?= $slug ?>' class='page <?php if ( key_exists( 'body-class', $args ) ) { echo $args['body-class']; } ?>'>