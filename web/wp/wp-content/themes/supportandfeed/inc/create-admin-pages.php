<?php

class SF_AdminOptions {

    const SETTINGS_GROUP = 'sf_options';
    const PAGE_ID = 'sf-options';
    const FRONT_PAGE_ID = 'sf-options';

    public function register() {
        add_action( 'admin_menu', [ $this, 'create_menu' ] );
        add_action( 'admin_init', [ $this, 'register_settings' ] );
    }

    /**
     * Registers settings
     *
     * @return void
     */
    public function register_settings() {

        $this->register_setting( 'our_mission_text', [ 
            'type' => 'string',
            'default' => '<b>SUPPORT+FEED</b> positively impacts the climate crisis and combats food insecurity by providing plant based meals prepared by local restaurants and education on its benefits to underserved communities.' 
        ] );

        $this->register_setting( 'facebook_link', [ 
            'type' => 'string',
            'default' => 'https://www.facebook.com/Support-Feed-111164157271588/' 
        ] );

        $this->register_setting( 'instagram_link', [ 
            'type' => 'string',
            'default' => 'https://www.instagram.com/supportandfeed/' 
        ]);

        $this->register_setting( 'linkedin_link', [ 
            'type' => 'string',
            'default' => 'https://www.linkedin.com/company/supportandfeed/' 
        ]);

        $this->register_setting( 'twitter_link', [ 'type' => 'string' ] );

        $this->add_settings_fields();
    }

    /**
     * Creates html fields for created settings
     *
     * @return void
     */
    public function add_settings_fields() {

        $front_page_section_id = 'sf-front-page-settings';
        $social_section_id     = 'sf-social';
        $sponsors_section_id   = 'sf-sponsors';

        // Register settings sections
        add_settings_section(
            $front_page_section_id,
            'Front page options',
            [ $this, 'render_front_page_options_section' ],
            self::FRONT_PAGE_ID
        );

        add_settings_section(
            $social_section_id,
            'Social links',
            [ $this, 'render_social_links_section' ],
            self::FRONT_PAGE_ID
        );
        
        // Add settings fields for front page section

        add_settings_field( 'front-page-our-mission-text', 'Our Mission Text', function() {
            wp_editor( get_option( 'our_mission_text' ), 'our_mission_text', [
                'textarea_name' => 'our_mission_text',
                'textarea_rows' => 5,
                'media_buttons' => false
            ] );
        }, self::FRONT_PAGE_ID, $front_page_section_id );

        // Add settings fields for social links section
        // Register all social links with our helper
        $this->add_social_link( 'social-facebook-link', 'Facebook link', 'facebook_link', $social_section_id );
        $this->add_social_link( 'social-instagram-link', 'Instagram link', 'instagram_link', $social_section_id );
        $this->add_social_link( 'social-linkedin-link', 'Linkedin link', 'linkedin_link', $social_section_id );
        $this->add_social_link( 'social-twitter-link', 'Twitter link', 'twitter_link', $social_section_id );
    }

    /**
     * Register menu entries and pages for administrator dashboard
     *
     * @return void
     */
    public function create_menu() {

        add_menu_page(
            'SF Theme Options',     // Page title
            'S+F Theme',            // Menu text
            'manage_options',       // Required permission
            self::PAGE_ID,             // Slug
            false,                  // Render Callback
            icon_url:'dashicons-admin-generic',
            position:62
        );

        add_submenu_page(
            self::PAGE_ID,
            'Front Page Settings',
            'Front page',
            'manage_options',
            self::FRONT_PAGE_ID,
            [ $this, 'render_front_page' ],
        );

    }

    public function render_front_page() {
        require 'admin/front-page.php';
    }
    
    public function render_front_page_options_section() {
        echo 'Change the text that is shown on the front page';
    }

    public function render_social_links_section() {
        echo 'Specify social network links, or leave empty to prevent it from showing up.';
    }

    /**
     * Helper for generating a social page field
     *
     * @param string $id
     * @param string $title
     * @param string $option_id
     * @param string $social_section_id
     * @return void
     */
    private function add_social_link( string $id, string $title, string $option_id, string $social_section_id ) {

        // Register the field
        add_settings_field( $id, $title, function() use ( $option_id ) {
            ?>
                <input type='text' name='<?= $option_id ?>' value='<?= get_option( $option_id ) ?>'>
            <?php
        }, self::FRONT_PAGE_ID, $social_section_id );
    }

    /**
     * Helper that first pushes the option to the database before registering setting
     *
     * @param string $id
     * @param array $args
     * @return void
     */
    private function register_setting( string $id, array $args )
    {
        // First, save the setting to the database
        if ( !get_option( $id ) ) 
            add_option( $id, $args['default'] ?? '' );

        // Register setting
        register_setting( self::SETTINGS_GROUP, $id, $args );
    }
}

$admin_option = new SF_AdminOptions();
$admin_option->register();

