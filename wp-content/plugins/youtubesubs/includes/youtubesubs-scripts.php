<?php
// Add Scripts

function yts_add_scripts(){
    // Add Main CSS
    // https://developer.wordpress.org/reference/functions/wp_enqueue_style/
    wp_enqueue_style('yts-main-style', plugins_url() . '/youtubesubs/css/style.css');
    // Add Main JS
    wp_enqueue_script('yts-main-script', plugins_url() . '/youtubesubs/js/main.js');

    // Add google script
    wp_register_script('google', 'https://apis.google.com/js/platform.js');
    wp_enqueue_script('google');
}

// Hook to hook it to wordpress
// when wordpress hits this hook, it would know to add this function
add_action('wp_enqueue_scripts', 'yts_add_scripts');