<?php
/*
Plugin Name: GitHub Theme Updater
Plugin URI: https://github.com/afragen/github-theme-updater/
Original Plugin Name: Theme Updater
Original Plugin URI: https://github.com/UCF/Theme-Updater
Description: Theme updater plugin to pull updates of the GitHub based themes into wordpress. Based upon <a href="https://github.com/WordPress-Phoenix/whitelabel-framework">Whitelabel Framework</a> modifications.
Version: 0.2
Author: Andy Fragen
License: GNU General Public License v2
License URI: http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/

//Load base class and Launch
if( is_admin() ) {
	require_once( 'classes/class-updater.php' );
	GitHub_Theme_Updater::instance();
}	


//REMOVE BELOW WHEN SUBMITTING TO WP REPO
//Load Github Plugin Updater code
if ( is_admin() )
	add_action( 'plugins_loaded', 'gtu_github_plugin_updater' );
	
function gtu_github_plugin_updater() {

	if ( ! function_exists( 'github_plugin_updater_register' ) )
		return false;

	github_plugin_updater_register( array(
		'owner'	=> 'afragen',
		'repo'	=> 'github-theme-updater',
		'slug'	=> 'github-theme-updater/github-theme-updater.php', // defaults to the repo value ('repo/repo.php')
	) );
}
