<?php
/**
 * Plugin Name: S+F QR Code Generator
 * Version: 1.0.0
 * Author: Aivaras Kriksciunas
 */

/**
 * Creates a menu page for this plugin
 *
 * @return void
 */
function sfqrc_create_menu_page() 
{
    $hook = add_menu_page( 
        'QR Code Generator', 
        'QR Codes', 
        'manage_options', 
        'qr-code', 
        'sfqrc_render_template',
        'data:image/svg+xml;base64,PHN2ZyBhcmlhLWhpZGRlbj0idHJ1ZSIgZm9jdXNhYmxlPSJmYWxzZSIgZGF0YS1wcmVmaXg9ImZhcyIgZGF0YS1pY29uPSJxcmNvZGUiIGNsYXNzPSJzdmctaW5saW5lLS1mYSBmYS1xcmNvZGUgZmEtdy0xNCIgcm9sZT0iaW1nIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCA0NDggNTEyIj48cGF0aCBmaWxsPSJjdXJyZW50Q29sb3IiIGQ9Ik0wIDIyNGgxOTJWMzJIMHYxOTJ6TTY0IDk2aDY0djY0SDY0Vjk2em0xOTItNjR2MTkyaDE5MlYzMkgyNTZ6bTEyOCAxMjhoLTY0Vjk2aDY0djY0ek0wIDQ4MGgxOTJWMjg4SDB2MTkyem02NC0xMjhoNjR2NjRINjR2LTY0em0zNTItNjRoMzJ2MTI4aC05NnYtMzJoLTMydjk2aC02NFYyODhoOTZ2MzJoNjR2LTMyem0wIDE2MGgzMnYzMmgtMzJ2LTMyem0tNjQgMGgzMnYzMmgtMzJ2LTMyeiI+PC9wYXRoPjwvc3ZnPg==' 
    );

    add_action( "admin_print_scripts-$hook", 'sfqrc_enqueue_required_scripts' );
    add_action( "admin_print_styles-$hook", 'sfqrc_enqueue_required_styles' );
}

/**
 * Callback to render the template
 *
 * @return void
 */
function sfqrc_render_template() 
{
    
    require( 'qr-code-page.php' );
}

/**
 * Loads required styles for the settings pages
 *
 * @return void
 */
function sfqrc_enqueue_required_scripts()
{
    wp_enqueue_script( 'sfqrc_scripts', plugins_url( 'qr-code-generator/assets/index.js' ), [ 'jquery' ], '1.0.0' );
}

/**
 * Loads required scripts for the settings pages
 *
 * @return void
 */
function sfqrc_enqueue_required_styles()
{
    // Load required styles and scripts
    wp_enqueue_style( 'sfqrc_styles', plugins_url( 'qr-code-generator/assets/styles.css' ), [], '1.0.0', 'all' );
}

add_action( 'admin_menu', 'sfqrc_create_menu_page' );