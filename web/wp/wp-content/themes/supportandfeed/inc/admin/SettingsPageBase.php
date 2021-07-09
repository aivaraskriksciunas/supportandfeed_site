<?php 

abstract class SF_SettingsPageBase {

    const SETTINGS_GROUP = 'sf_options';
    protected string $PAGE_ID;

    /**
     * Registers settings
     *
     * @return void
     */
    public abstract function register_settings();

    /**
     * Register the page so that it shows up on the admin menu
     *
     * @param string $base_page_id
     * @return void
     */
    public abstract function register_menu_item( string $base_page_id );

    /**
     * Helper that first pushes the option to the database before registering setting
     *
     * @param string $id
     * @param string $settings_group
     * @param array $args
     * @return void
     */
    protected function register_setting( string $id, array $args )
    {
        // First, save the setting to the database
        if ( !get_option( $id ) ) 
            add_option( $id, $args['default'] ?? '' );

        // Register setting
        register_setting( self::SETTINGS_GROUP, $id, $args );
    }

    /**
     * Helper for creating simple text input
     *
     * @param string $id
     * @param string $title
     * @param string $option_id
     * @param string $section_id
     * @return void
     */
    protected function create_text_input( string $id, string $title, string $option_id, string $section_id, string $type = 'text' ) {

        // Register the field
        add_settings_field( $id, $title, function() use ( $option_id, $type ) {
            ?>
                <input type='<?= $type ?>' name='<?= $option_id ?>' value='<?= get_option( $option_id ) ?>'>
            <?php
        }, $this->PAGE_ID, $section_id );
    }
}