<?php

function enqueue_my_scripts() {
  wp_enqueue_script(
    'script',
    get_template_directory_uri() . '/script.js',
    array( 'wp-i18n' ),
    NULL,
    true
  );

  wp_set_script_translations( 'script', 'my-i18n-demo' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_my_scripts' );

function load_theme_textdomain_files() {
  load_theme_textdomain(
    'my-i18n-demo',
    get_template_directory() . '/languages'
  );
}
add_action( 'after_setup_theme', 'load_theme_textdomain_files' );