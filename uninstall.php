<?php
/*
 * 	Remove plugin settings from the database when plugin is uninstalled
 */ 

	// check to make sure plugin is really being uninstalled
	if ( !defined( 'WP_UNINSTALL_PLUGIN' ) ) { 
		exit (); // if not, stop right now
		}

	// otherwise let's remove settings from the options table
	delete_option('bufferbuttonforwordpress');
?>