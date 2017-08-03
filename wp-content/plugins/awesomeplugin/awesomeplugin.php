<?php
/*
    Plugin Name: Name Of The Plugin
    Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
    Description: A brief description of the Plugin.
    Version: The Plugin's Version Number, e.g.: 1.0
    Author: Name Of The Plugin Author
    Author URI: http://URI_Of_The_Plugin_Author
    License: A "Slug" license name e.g. GPL2
    .
    Any other notes about the plugin go here
    
*/
// Clean up wp_head
// Remove Really simple discovery link
remove_action('wp_head', 'rsd_link');
// Remove Windows Live Writer link
remove_action('wp_head', 'wlwmanifest_link');
// Remove the version number
remove_action('wp_head', 'wp_generator');

// Remove curly quotes
remove_filter('the_content', 'wptexturize');
remove_filter('comment_text', 'wptexturize');
 
// Allow HTML in user profiles
remove_filter('pre_user_description', 'wp_filter_kses')


