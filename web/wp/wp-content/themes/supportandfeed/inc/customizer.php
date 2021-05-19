<?php 

const HOMEPAGE_SLIDER_ID = 'sf_homepage_slider';

// Register options used for customizing
function sf_register_front_page_slideshow_options( WP_Customize_Manager $wp_customizer  ) {

    // Register slider section
    $wp_customizer->add_section( HOMEPAGE_SLIDER_ID, [
        'title' => 'Homepage Slider',
        'description' => 'Customize how the main slideshow will look like',
        'active_callback' => 'is_front_page'
    ] );

    // Create control for setting the slideshow text
    $wp_customizer->add_setting( 'sf_slider_text' );
    $wp_customizer->add_control( 'sf_slider_text', [
        'type' => 'text',
        'setting' => 'sf_slider_text',
        'section' => HOMEPAGE_SLIDER_ID,
        'label' => 'Slider text'
    ] );

    // Add photo field
    $wp_customizer->add_setting( 'sf_slide1' );
    $wp_customizer->add_control( new WP_Customize_Image_Control(
        $wp_customizer,
        'sf_slide1', 
        [
            'label' => 'First slide',
            'setting' => 'sf_slide1',
            'section' => HOMEPAGE_SLIDER_ID,
        ]
    ) );

    // Add photo field
    $wp_customizer->add_setting( 'sf_slide2' );
    $wp_customizer->add_control( new WP_Customize_Image_Control(
        $wp_customizer,
        'sf_slide2', 
        [
            'label' => 'Second slide',
            'setting' => 'sf_slide2',
            'section' => HOMEPAGE_SLIDER_ID,
        ]
    ) );

    // Add photo field
    $wp_customizer->add_setting( 'sf_slide3' );
    $wp_customizer->add_control( new WP_Customize_Image_Control(
        $wp_customizer,
        'sf_slide3', 
        [
            'label' => 'Third slide',
            'setting' => 'sf_slide3',
            'section' => HOMEPAGE_SLIDER_ID,
        ]
    ) );

    // Add photo field
    $wp_customizer->add_setting( 'sf_slide4' );
    $wp_customizer->add_control( new WP_Customize_Image_Control(
        $wp_customizer,
        'sf_slide4', 
        [
            'label' => 'Fourth slide',
            'setting' => 'sf_slide4',
            'section' => HOMEPAGE_SLIDER_ID,
        ]
    ) );
}

// Register front page specific options
if ( is_front_page() ) {
    add_action( 'customize_register', 'sf_register_front_page_slideshow_options' );
}