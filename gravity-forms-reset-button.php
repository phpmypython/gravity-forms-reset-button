<?php
/*
Plugin Name: Gravity Forms Reset Button Add-On
Description: Adds a reset button capability to gravity forms
Version: 1.0
Author: Able Engine & William Wilkerson
Author URI: http://www.ableengine.com
Instructions:
To enable the reset button you only need to add a class of add-reset-button to the gravity form.

*/

if (isset($GLOBALS['pagenow']) && $GLOBALS['pagenow'] == 'wp-login.php') {
	return;
}

add_action('init', 'gf_add_reset_enqueue_scripts');

function gf_add_reset_enqueue_scripts()
{
	$plugin_url = plugins_url(basename(dirname(__FILE__)));
	wp_enqueue_script('_gf_add_reset', $plugin_url . '/gravity-forms-reset-button.js', array('jquery'), '1.0');
}

