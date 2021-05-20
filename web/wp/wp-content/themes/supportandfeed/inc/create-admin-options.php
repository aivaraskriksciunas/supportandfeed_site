<?php

use function PHPSTORM_META\map;

class SF_AdminOptions {

    const SETTINGS_GROUP = 'sf_options';
    const PAGE_ID = 'sf-options';
    const FRONT_PAGE_ID = 'sf-options';

    public function register() {
        add_action( 'admin_menu', [ $this, 'create_menu' ] );
        add_action( 'admin_init', [ $this, 'register_settings' ] );
    }

    public function register_settings() {

        $front_page_section_id = 'sf-front-page-settings';

        register_setting( self::SETTINGS_GROUP, 'our_mission_text', [
            'type' => 'string',
            'description' => 'The text that is diplayed in Our Mission section',
            'default' => '<b>SUPPORT+FEED</b> positively impacts the climate crisis and combats food insecurity by providing plant based meals prepared by local restaurants and education on its benefits to underserved communities.'
        ]);

        add_settings_section(
            $front_page_section_id,
            'Front page options',
            [ $this, 'render_front_page_options_section' ],
            self::FRONT_PAGE_ID
        );
        
        add_settings_field( 'front-page-our-mission-text', 'Our Mission Text', function() {
            wp_editor( get_option( 'our_mission_text' ), 'our_mission_text', [
                'textarea_name' => 'our_mission_text',
                'textarea_rows' => 5,
                'media_buttons' => false
            ] );
        }, self::FRONT_PAGE_ID, $front_page_section_id );
    }

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

}

$admin_option = new SF_AdminOptions();
$admin_option->register();

