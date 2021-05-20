
<h1>S+F Front Page Settings</h1>

<form method='post' action='options.php'>

    <?php settings_fields( self::SETTINGS_GROUP ) ?>

    <?php do_settings_sections( self::FRONT_PAGE_ID ) ?>

    <?php submit_button( 'Save changes' ) ?>
</form>



