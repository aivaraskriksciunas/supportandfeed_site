
<h1>S+F Statistics</h1>
<p>Statistics will be shown on the 'Our Impact' page</p>

<form method='post' action='options.php'>

    <?php settings_fields( self::SETTINGS_GROUP ) ?>

    <?php do_settings_sections( $this->PAGE_ID ) ?>

    <?php submit_button( 'Save changes' ) ?>
</form>



