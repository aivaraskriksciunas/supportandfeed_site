
<h1>S+F Sponsors list</h1>

<form method='post' action='options.php'>

    <?php settings_fields( self::SETTINGS_GROUP ) ?>

    <?php do_settings_sections( self::SPONSORS_PAGE_ID ) ?>

    <?php submit_button( 'Save changes' ) ?>
</form>
