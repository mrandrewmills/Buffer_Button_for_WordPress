<?php
/**
 * @package buffer_button_for_WordPress
 * @version 0.02
 */
/*
Plugin Name: Buffer Button for WordPress
Plugin URI: http://mrandrewmills.com/buffer-button-for-wordpress
Description: create and manage buttons that empower readers to share your content with their Buffer accounts.
Author: Andrew Mills
Version: 0.02
Author URI: http://mrandrewmills.com/
Text Domain: buffer-button-for-wordpress
Domain Path: /languages
*/

/* The action hook and corresponding function to create a submenu item under Media Library */
add_action( 'admin_menu', 'my_plugin_menu' );

function my_plugin_menu() {
	add_media_page( 'Buffer Button', 'Buffer Button', 'manage_options', 'buffer-button-options', 'show_buffer_button_options');
}

/* Creates the page of settings and options for the plugin */
function show_buffer_button_options() {
	/* make sure only admins can see this page */
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo '<div class="wrap">';
	echo '<div id="icon-upload" class="icon32"><br></div>';
	echo '<h2>Buffer Buttons for WordPress</h2>';
	echo '<p>Style:</p>';
	echo '<p>Tweet text:</p>';
	echo '<p>URL:</p>';
	echo '<p>Twitter Username to mention:</p>';
	echo '<p>Picture URL:</p>';

	/* end of the wrap div */
	echo '</div>';
}

function init() {

}

function buffer_button_output() {

	// to do: dynamically generated output, based on settings for a given form.

}

/* CHANGELOG
0.1 initial working concept
*/
?>