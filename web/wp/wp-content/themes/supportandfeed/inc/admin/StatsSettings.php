<?php 

require_once( 'SettingsPageBase.php' );

class SF_AdminStatsPage extends SF_SettingsPageBase {

    protected string $PAGE_ID = 'sf-stats';

    public function register_settings()
    {
        /**
         * Register the individual settings
         */
        $this->register_setting( 'meals_served', [
            'type' => 'number',
            'default' => '1000000'
        ] );

        /**
         * Add them to the page
         */

        $impact_numbers_section_id = 'sf-impact-numbers';

        add_settings_section( 
            $impact_numbers_section_id, 
            'Our Impact numbers',
            [ $this, 'render_impact_numbers_section' ], 
            $this->PAGE_ID
        );

        $this->create_text_input( 'sf-meals-given', 'Meals Given', 'meals_served', $impact_numbers_section_id, 'number' );
    }


    public function register_menu_item( string $base_page_id )
    {
        add_submenu_page(
            $base_page_id,
            'Statistics',
            'Statistics',
            'manage_options',
            $this->PAGE_ID,
            [ $this, 'render_stats_page' ],
        );
    }

    public function render_impact_numbers_section() {
        echo 'Specify numbers that will show up on the Our Impact page. Enter only valid numbers, do not apply any formatting.';
    }

    public function render_stats_page() {
        require( 'templates/stats-page.php' );
    }
}

