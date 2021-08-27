
<h1>General Website Settings</h1>

<form method='post' action='options.php'>

    <?php settings_fields( $this->PAGE_ID ) ?>

    <?php do_settings_sections( $this->PAGE_ID ) ?>

    <?php submit_button( 'Save changes' ) ?>
</form>



