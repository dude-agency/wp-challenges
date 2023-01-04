<?php
/*
Plugin Name: Break Everything
Version: 1.0
Plugin URI: http://www.dudeagency.io/   
Description: Simple plugin to breake everything
Author: Osvaldo Gonzalez
Author URI: http://www.dudeagency.io
*/


/**
 * 
 * 
 * 
 *  THIS IS A PLUGIN TO BREAK EVERYTHING
 * 
 * 
 */

define('DISALLOW_FILE_EDIT', true); // disables the plugin and theme editor
define('DISALLOW_FILE_MODS', true); // disables plugin and theme updates and installation

function mu_hide_plugins_network( $plugins ) {
    
    return $plugins = []; //hides the list of plugins
}

add_filter( 'all_plugins', 'mu_hide_plugins_network' );
