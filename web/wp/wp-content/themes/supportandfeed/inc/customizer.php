<?php 

const HOMEPAGE_SLIDER_ID = 'sf_homepage_slider';
const HOMEPAGE_IMAGES_ID = 'sf_images_section';
const OUR_IMPACT_IMAGES_ID = 'sf_our_impact_section';
const DONATE_IMAGES_ID = 'sf_donate_page_section';

// Register options used for customizing
function sf_register_front_page_slideshow_options( WP_Customize_Manager $wp_customizer ) {
    
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

function sf_register_front_page_image_options( WP_Customize_Manager $wp_customizer ) {
    
    $wp_customizer->add_section( HOMEPAGE_IMAGES_ID, [
        'title' => 'Homepage Images',
        'description' => 'Customize images shown on the front page',
        'active_callback' => 'is_front_page'
    ] );

    // Add photo field
    $wp_customizer->add_setting( 'sf_our_mission_img' );
    $wp_customizer->add_control( new WP_Customize_Image_Control(
        $wp_customizer,
        'sf_our_mission_img', 
        [
            'label' => 'Our mission image',
            'setting' => 'sf_our_mission_img',
            'section' => HOMEPAGE_IMAGES_ID,
        ]
    ) );

    $wp_customizer->selective_refresh->add_partial( 'sf_our_mission_img', [
        'selector' => '#ourMissionImg',
    ]);

    // Add photo field
    $wp_customizer->add_setting( 'sf_donate_now_img' );
    $wp_customizer->add_control( new WP_Customize_Image_Control(
        $wp_customizer,
        'sf_donate_now_img', 
        [
            'label' => 'Donate now image',
            'setting' => 'sf_donate_now_img',
            'section' => HOMEPAGE_IMAGES_ID,
        ]
    ) );

    $wp_customizer->selective_refresh->add_partial( 'sf_donate_now_img', [
        'selector' => '#donateNowImg',
        'container_inclusive' => true,
    ]);

    // Add photo field
    $wp_customizer->add_setting( 'sf_plant_based_img' );
    $wp_customizer->add_control( new WP_Customize_Image_Control(
        $wp_customizer,
        'sf_plant_based_img', 
        [
            'label' => '"Plant based matters" image',
            'setting' => 'sf_plant_based_img',
            'section' => HOMEPAGE_IMAGES_ID,
        ]
    ) );

    $wp_customizer->selective_refresh->add_partial( 'sf_plant_based_img', [
        'selector' => '#plantBasedImg',
        'container_inclusive' => true
    ]);
}

function sf_register_our_impact_page_options( WP_Customize_Manager $wp_customizer ) 
{
    // Register slider section
    $wp_customizer->add_section( OUR_IMPACT_IMAGES_ID, [
        'title' => 'Page options',
        'description' => 'Customize the page',
        'active_callback' => function () {
            return is_page( 'our-impact' );
        }
    ] );

    // Add photo field
    $wp_customizer->add_setting( 'sf_our_impact_numbers_slide' );
    $wp_customizer->add_control( new WP_Customize_Image_Control(
        $wp_customizer,
        'sf_our_impact_numbers_slide', 
        [
            'label' => 'Numbers slide',
            'setting' => 'sf_our_impact_numbers_slide',
            'section' => OUR_IMPACT_IMAGES_ID,
        ]
    ) );

    // Add photo field
    $wp_customizer->add_setting( 'sf_our_impact_community_photo' );
    $wp_customizer->add_control( new WP_Customize_Image_Control(
        $wp_customizer,
        'sf_our_impact_community_photo', 
        [
            'label' => 'Community photo',
            'setting' => 'sf_our_impact_community_photo',
            'section' => OUR_IMPACT_IMAGES_ID,
        ]
    ) );

    $wp_customizer->selective_refresh->add_partial( 'sf_our_impact_community_photo', [
        'selector' => '#ourCommunityImg',
    ]);
    $wp_customizer->selective_refresh->add_partial( 'sf_our_impact_numbers_slide', [
        'selector' => '#numbersSlide',
    ]);
}

function sf_register_donate_page_settings( WP_Customize_Manager $wp_customizer ) 
{
    // Register slider section
    $wp_customizer->add_section( DONATE_IMAGES_ID, [
        'title' => 'Page options',
        'description' => 'Customize the page',
        'active_callback' => function () {
            return is_page( 'donate' );
        }
    ] );

    // Add photo field
    $wp_customizer->add_setting( 'sf_donate_cover_photo' );
    $wp_customizer->add_control( new WP_Customize_Image_Control(
        $wp_customizer,
        'sf_donate_cover_photo', 
        [
            'label' => 'Donate cover photo',
            'setting' => 'sf_donate_cover_photo',
            'section' => DONATE_IMAGES_ID,
        ]
    ) );

    $wp_customizer->selective_refresh->add_partial( 'sf_donate_cover_photo', [
        'selector' => '#donateImg',
    ]);
}

// Register front page specific options
add_action( 'customize_register', 'sf_register_front_page_slideshow_options' );
add_action( 'customize_register', 'sf_register_front_page_image_options' );
add_action( 'customize_register', 'sf_register_our_impact_page_options' );
add_action( 'customize_register', 'sf_register_donate_page_settings' );
