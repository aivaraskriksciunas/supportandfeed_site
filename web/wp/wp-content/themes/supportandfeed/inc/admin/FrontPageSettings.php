<?php 

require_once( 'SettingsPageBase.php' );

class SF_AdminFrontPage extends SF_SettingsPageBase {

    protected string $PAGE_ID = 'sf-front-page';
    
    public function register_settings() {

        $this->register_setting( 'banner_text', [ 
            'type' => 'string',
            'default' => '' 
        ] );

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

        $this->add_settings_fields();
    }

    
    private function add_settings_fields() {

        $front_page_section_id = 'sf-front-page-settings';

        // Register settings sections
        add_settings_section(
            $front_page_section_id,
            'Front page options',
            [ $this, 'render_front_page_options_section' ],
            $this->PAGE_ID
        );
        
        // Add settings fields for front page section

        add_settings_field( 'front-page-banner-text', 'Optional banner text (separate messages into their own lines)', function() {
            wp_editor( get_option( 'banner_text' ), 'banner_text', [
                'textarea_name' => 'banner_text',
                'textarea_rows' => 4,
                'media_buttons' => false
            ] );
        }, $this->PAGE_ID, $front_page_section_id );

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

    }

    public function register_menu_item( string $base_page_id )
    {
        add_submenu_page(
            $base_page_id,
            'Front Page Settings Page',
            'Front Page',
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

}

