<!-- Entry point to the plugin/widget -->

<!-- The system looks for this stuff in your plugin -->
<?php
/*
Plugin Name: Youtube Subs
Plugin URI: https://wordpress.org/plugins/health-check/
Description: Display Youtube sub button and count
Version: 0.1.0
Author: Richard R
Author URI: http://health-check-team.example.com
*/

// Exit if accessed directly
if(!defined('ABSPATH')) {
    exit;
}

// includes one file to another
// Load scripts
require_once(plugin_dir_path(__FILE__) . '/includes/youtubesubs-scripts.php');