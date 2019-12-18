<?php
/*
Plugin Name: Bottom Admin Bar
Plugin URI: https://github.com/modshrink/bottom-admin-bar
Description: While you are logged in to WordPress, this plugin will move to the bottom the admin bar that is displayed on the web site.
Version: 1.3
Author: modshrink
Author URI: http://www.modshrink.com/
Text Domain: bottom-admin-bar
Domain Path: /languages
License: GPL2

Copyright 2014  modshrink  (email : hello@modshrink.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as 
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
$BottomAdminBar = new BottomAdminBar();

class BottomAdminBar {
	public function __construct() {
		add_action( 'after_setup_theme', array( &$this, 'show_toolbar_check' ) );
		add_action( 'plugins_loaded', array( &$this, 'myplugin_init' ) );
		add_action( 'wp_enqueue_scripts', array( &$this, 'admin_bar_script_init' ), 11 );
		add_action( 'get_header', array( &$this, 'remove_admin_bar_css' ) );
		add_action( 'wp_head', array( &$this, 'my_admin_bar_bump_cb' ) );
		add_action( 'wp_footer', array( &$this, 'keyboard_shortcut' ), 21 );
	}

	/**
	 * Checking the 'Show Toolbar when viewing site' check box.
	 */
	public function show_toolbar_check() {
		get_currentuserinfo();
		if( 'true' !== get_user_meta( get_current_user_id(), 'show_admin_bar_front', 1 ) ) return;
	}

	/**
	 * Load plugin textdomain
	 */
	public function myplugin_init() {
		load_plugin_textdomain( 'bottom-admin-bar', false, dirname( plugin_basename( __FILE__ ) ) ); 
	}

	/**
	 * Override default admin bar CSS.
	 */
	public function admin_bar_script_init() {
		if ( is_user_logged_in() ) {
			wp_register_style( 'adminBarStyleSheet', plugins_url( 'css/view.css', __FILE__ ) );
			wp_enqueue_style( 'adminBarStyleSheet' );
			wp_enqueue_script( 'jquery' );
		}
	}

	/**
	* Remove default admin bar inline CSS
	*/
	public function remove_admin_bar_css() {
		remove_action( 'wp_head', '_admin_bar_bump_cb' );
	}

	/**
	* Rewrite admin bar inline CSS
	*/
	public function my_admin_bar_bump_cb() {
		$output = '<style type="text/css" media="screen">';
		$output .= <<< EOM
html { padding-bottom: 32px !important; }
* html body { padding-bottom: 32px !important; }
@media screen and ( max-width: 782px ) {
html { padding-bottom: 46px !important; }
* html body { padding-bottom: 46px !important; }
}
html.spaceClear { padding-bottom: 0 !important; }
html.spaceClear body { padding-bottom: 0 !important;}
EOM;

		// Delete Twenty Sixteen head spacing
		if( get_option('template') === 'twentysixteen' ) {
			$output .= <<< EOM
.admin-bar:before {
	top: 0 !important;
}
EOM;
		}

		$output .= '</style>';
		if ( is_user_logged_in() ) echo $output;
	}

	/**
	* Add keyboard shortcut
	*/
	public function keyboard_shortcut() {
		$output = <<< EOM
<script type="text/javascript">
jQuery( document ).ready( function( $ ){
	$( 'body' ).keydown(function( event ){
		if( event.shiftKey === true && event.which === 65 ){
			$( '#wpadminbar' ).slideToggle( 'fast' );
			$( 'html' ).toggleClass( 'spaceClear' );
		}
	});
});
</script>
EOM;
		if ( is_user_logged_in() ) echo $output;
	}
}
