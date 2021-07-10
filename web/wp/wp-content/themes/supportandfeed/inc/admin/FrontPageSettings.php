<?php 

require_once( 'SettingsPageBase.php' );

class SF_AdminFrontPage extends SF_SettingsPageBase {

    protected string $PAGE_ID = 'sf-options';
    
    public function register_settings() {

        $this->register_setting( 'our_mission_text', [ 
            'type' => 'string',
            'default' => '<b>SUPPORT+FEED</b> positively impacts the climate crisis and combats food insecurity by providing plant based meals prepared by local restaurants and education on its benefits to underserved communities.' 
        ] );

        $this->register_setting( 'donate_now_text', [ 
            'type' => 'string',
            'default' => 'Donations help support free meal deliveries to organizations in need by allocating resources among participating restaurants and with our operating expenses.' 
        ] );

        $this->register_setting( 'plant_based_text', [ 
            'type' => 'string',
            'default' => 'Why plant based matters' 
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

    
    private function add_settings_fields() {

        $front_page_section_id = 'sf-front-page-settings';
        $social_section_id     = 'sf-social';

        // Register settings sections
        add_settings_section(
            $front_page_section_id,
            'Front page options',
            [ $this, 'render_front_page_options_section' ],
            $this->PAGE_ID
        );

        add_settings_section(
            $social_section_id,
            'Social links',
            [ $this, 'render_social_links_section' ],
            $this->PAGE_ID
        );
        
        // Add settings fields for front page section

        add_settings_field( 'front-page-our-mission-text', 'Our Mission Text', function() {
            wp_editor( get_option( 'our_mission_text' ), 'our_mission_text', [
                'textarea_name' => 'our_mission_text',
                'textarea_rows' => 5,
                'media_buttons' => false
            ] );
        }, $this->PAGE_ID, $front_page_section_id );

        add_settings_field( 'front-page-donate-now-text', '"Donate Now!" Paragraph', function() {
            wp_editor( get_option( 'donate_now_text' ), 'donate_now_text', [
                'textarea_name' => 'donate_now_text',
                'textarea_rows' => 5,
                'media_buttons' => false
            ] );
        }, $this->PAGE_ID, $front_page_section_id );

        add_settings_field( 'front-page-plant-based-text', '"Why Plant Based Matters" Paragraph', function() {
            wp_editor( get_option( 'plant_based_text' ), 'plant_based_text', [
                'textarea_name' => 'plant_based_text',
                'textarea_rows' => 5,
                'media_buttons' => false
            ] );
        }, $this->PAGE_ID, $front_page_section_id );

        // Add settings fields for social links section
        // Register all social links with our helper
        $this->add_social_link( 'social-facebook-link', 'Facebook link', 'facebook_link', $social_section_id );
        $this->add_social_link( 'social-instagram-link', 'Instagram link', 'instagram_link', $social_section_id );
        $this->add_social_link( 'social-linkedin-link', 'Linkedin link', 'linkedin_link', $social_section_id );
        $this->add_social_link( 'social-twitter-link', 'Twitter link', 'twitter_link', $social_section_id );
    }

    public function register_menu_item( string $base_page_id )
    {
        add_submenu_page(
            $base_page_id,
            'Front Page Settings',
            'Front page',
            'manage_options',
            $this->PAGE_ID,
            [ $this, 'render_front_page' ],
        );
    }

    public function render_front_page() {
        require 'templates/front-page.php';
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
        }, $this->PAGE_ID, $social_section_id );
    }
}
