<?php

require_once( 'admin/FrontPageSettings.php' );
require_once( 'admin/StatsSettings.php' );
require_once( 'admin/GeneralSettings.php' );

class SF_AdminMenuItems {

    const PAGE_ID = 'sf-options';

    private SF_AdminFrontPage $frontPageSettings;
    private SF_AdminStatsPage $statsPageSettings;
    private SF_GeneralSettingsPage $generalSettingsPage;

    public function register() {
        $this->frontPageSettings = new SF_AdminFrontPage();
        $this->statsPageSettings = new SF_AdminStatsPage();
        $this->generalSettingsPage = new SF_GeneralSettingsPage();

        add_action( 'admin_menu', [ $this, 'create_menu' ] );
        add_action( 'admin_init', [ $this, 'register_settings' ] );
    }

    /**
     * Registers settings
     *
     * @return void
     */
    public function register_settings() {
        $this->generalSettingsPage->register_settings();
        $this->frontPageSettings->register_settings();
        $this->statsPageSettings->register_settings();
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

        $this->generalSettingsPage->register_menu_item( self::PAGE_ID );
        $this->frontPageSettings->register_menu_item( self::PAGE_ID );
        $this->statsPageSettings->register_menu_item( self::PAGE_ID );

    }

}

$admin_option = new SF_AdminMenuItems();
$admin_option->register();

