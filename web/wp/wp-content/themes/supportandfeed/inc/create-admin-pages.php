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
            icon_url:'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMy4wLjEsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FscXVlXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgMTAwMCAxMDAwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMDAwIDEwMDA7IiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQoJLnN0MHtmaWxsOiNGRkZGRkY7fQ0KPC9zdHlsZT4NCjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik0zMzMuNTgsMzkuMDZjMCwwLTcyLjEzLTQwLjk0LTE1Mi4wNS0zOC45OVMzNi4zNyw4OC43LDI5LjQ4LDk1LjU5Yy0xMS43LDExLjctMzcuMDQsOTkuNDItMjcuMjksMTQyLjMxDQoJczY3Ljk3LDE0Ny42NywxMzAuNjEsMjA4LjU5YzYwLjc1LDU5LjA4LDE0Mi4xNSwxMjkuNTQsMjAwLjc5LDE3My41QzM4OS44NCw2NjIuMTUsNDM0Ljk1LDY5Niw0MzQuOTUsNjk2cy0xNi4xNiwxNC4wNC0yMy4zOSwxNy41NA0KCWMtMTMuNDEsNi41LTc3Ljk4LDMuOS05OS40Mi0xLjk1Yy02Ljc4LTEuODUtMzYuMDItMS4zOS01Mi42MywzLjljLTIyLjcsNy4yMy0xNTIuOTUsMTIzLjA4LTE2MS44LDEzNi40Ng0KCWMtMTYuNzIsMjUuMy0xLjk1LDI1LjM0LDguMDMsMjMuMjZMMjc3LjI4LDc1Ni4zYzE3LjA0LTEuMTksMjEuMzcsNC4yLDE5LjI3LDE3LjY4TDExNy4yLDkxMC40Mw0KCWMtOS4zMSwxOC42Mi0wLjI1LDIzLjM1LDE3LjU0LDIxLjQ0bDE4Ny4xNC0xMzYuNDZjMTguMzctMS40NSwyMy4zNCw1LjE4LDE1LjYsMTkuNDljMCwwLTE3Ny4zOSwxMjQuNzYtMTgxLjI5LDEzMi41Ng0KCWMtMy45LDcuOCwwLjcxLDIzLjY0LDE3LjU0LDIxLjQ0bDE4Ny4xNC0xMjguNjZjMTguMTktMi4xNywyNC42MiwzLjUxLDE1LjYsMTkuNDlMMjA4LjgyLDk3Ni43MWMtMTMuMSwxNS45Ny03LDIyLjY4LDE1LjYsMjEuNDQNCglsMTg1LjE5LTEwNS4yN2MxNS42LTkuNzUsMjEuNDQtNzYuMDMsMjEuNDQtODUuNzdjMC41MS0xNi4xOSw3LjI2LTMwLjYsMjEuNDQtNDIuODlsMzcuMDQtMjUuMzRsMjkuMjQsMjcuMjkNCgljMCwwLDExLjcyLDguMjUsNS44NSwyOS4yNGMtNi4xNiwyMi4wMS0xLjMsNDcuMTEsMCw0Ni43OWMwLDAsMjEuNDUsNTguNDcsNjYuMjgsODUuNzdjNDIuOTUsMjYuMTYsODUuMTUsNTQuMjEsMTI4LjY2LDYwLjQzDQoJYzQyLjg1LDYuMTMsNjQuMzMsMTMuNjUsODcuNzItMy45YzIzLjM5LTE3LjU0LDEuOTUtODcuNzIsMS45NS04Ny43MnMtMzEuMTktODMuODItODkuNjctMTI2Ljcxcy04NS43Ny0zNy4wNC04NS43Ny0zNy4wNA0KCXMtNDEuNjUsMC45OC01Mi42My0xLjk1Yy0xMy44My0zLjY5LTM4LjYxLTE3LjYzLTM4Ljk5LTIzLjM5Yy0wLjM2LTUuNSwyMTUuODItMTI1LjQ2LDMwNC4xMS0yMDYuNjQNCgljODkuNDItODIuMjIsMTQ0LjI2LTE2My43NSwxNTAuMS0yMTYuMzhjNy4zMS0zOC42OSw5LjY2LTExMS4xMy01NC41OC0xNzEuNTVDODkwLjMzLDY0Ljc0LDgxOC45OCw0MSw3MTcuNjEsNTguNTUNCglTNTMyLjQyLDE2Ny43Miw1MzIuNDIsMTY3LjcyYy04LjcsNy42NS0xMC43MiwxNi4wMi0zLjksMjUuMzRsNTYuNTMsNzIuMTNjOC41LDkuMDQsMjEuODMsMTEuMTYsMzguOTksNy44DQoJYzAsMCw1Ny42NC01MC40MywxMTYuOTYtNjQuMzNjNTkuMzEtMTMuODksNjQuMDktNy4xNCw4My44MiwxNS42YzE5LDIxLjg5LDAsOTkuNDIsMCw5OS40Mg0KCWMtNjMuOTcsNzguNDItMTQyLjA0LDE1OS4zNi0yMjguMDgsMjQxLjcybC0xMDkuMTcsOTMuNTdjLTEyLjE0LDYuMjEtMjg2Ljg1LTMyNC44OC0zMDkuOTUtMzY0LjU0DQoJYy0yMy4wMi0zOS41MS0zOC4wOC0xMTQuMjUtMTcuNTQtMTM4LjQxYzE4LjUzLTE0LjQxLDM3LjA4LTE5LjYxLDYyLjM4LTkuNzVjMjMuNjcsOS4yMywxMDYuMjMsNzQuNzYsMTU5Ljg1LDEzNC41MQ0KCWM0NC4wNiw0OS4wOSwxMDEuMzcsMTE1LjAxLDEwNS4yNywxMjIuODFjMy45LDcuOCwxOS4zOSwxOS4xLDM3LjA0LDE1LjZsNzAuMTgtNDIuODljMTEuOTQtOC4zNSwxMS45OS0xOC4zNiw1Ljg1LTI5LjI0DQoJQzUyNy43OSwyMzMuMTQsNDI1LjIsMTAzLjM5LDMzMy41OCwzOS4wNnoiLz4NCjwvc3ZnPg0K',
            position:62
        );

        $this->generalSettingsPage->register_menu_item( self::PAGE_ID );
        $this->frontPageSettings->register_menu_item( self::PAGE_ID );
        $this->statsPageSettings->register_menu_item( self::PAGE_ID );

    }

}

$admin_option = new SF_AdminMenuItems();
$admin_option->register();

