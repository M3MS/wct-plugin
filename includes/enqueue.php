
<?php

function wct_enqueue_scripts() {

    wp_register_style( 'wct-styles',  plugin_dir_url( __FILE__ ) . '../assets/dist/main.css' );
    wp_enqueue_style( 'wct-styles' );
    
    wp_enqueue_script( 'main-js', plugin_dir_url( __FILE__ ) . '../assets/dist/main.min.js', 'SCRIPT_VERSION', true );

}
add_action( 'wp_enqueue_scripts', 'wct_enqueue_scripts');