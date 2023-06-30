<?php

/*
Plugin Name: Mekatron Filter Words
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: Filtering Specific Words
Version: 1.0
Author: Muhammmad Reza Heidary
Author URI: https://mekatronik.ir/
License: MIT
*/

// Security check for users with different access levels
defined('ABSPATH') || exit;

$mekatron_array_filter_in = array("این", "آن", "در");
$mekatron_array_filter_out = array("[این]", "{آن}", "(در)");


function mekatron_filter_words($words) {
    global $mekatron_array_filter_in;
    global $mekatron_array_filter_out;
    $words = str_replace($mekatron_array_filter_in,$mekatron_array_filter_out, $words);
    return $words;
}

add_filter('the_content', 'mekatron_filter_words');