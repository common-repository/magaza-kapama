<?php
/*
Plugin Name: Magaza Kapama
Plugin URI: http://dev.4gendesign.com/magaza-kapama
Description: Woocommerce Magaza Kapama / Woocommerce Store Closing.
Version: 2.0.0
Author: Ozibal
Author URI: http://dev.4gendesign.com
Text Domain: magaza-kapama
Domain Path: /languages
Licence : GPL2
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2016 4gendesign.
*/

if ( !function_exists( 'add_action' ) ) {
	echo 'Opppss!!!';
	exit;
}

$plugin		= plugin_basename(__FILE__);
$plugindir	= dirname(__FILE__) . DIRECTORY_SEPARATOR;

define( 'MAGAZAKAPAMA_PLUGIN_DIR', untrailingslashit( dirname( __FILE__ ) ) );
define( 'MAGAZAKAPAMA_DOWNLOAD_SERVICE', 'http://dev.4gendesign.com/magaza-kapama' );

require_once MAGAZAKAPAMA_PLUGIN_DIR. '/magazakapama-class.php';

add_action ( 'admin_menu', 'magazakapama_menu');
function magazakapama_menu(){
	
	add_submenu_page( 'woocommerce', __( 'Magaza Kapama', 'magaza-kapama' ), __( 'Magaza Kapama', 'magaza-kapama' ), 'manage_options', 'magaza-kapama/magazakapama-setting.php' );
	
}

add_filter( "plugin_action_links_$plugin", 'magazakapama_pluginaddsettingslink' );
function magazakapama_pluginaddsettingslink( $links ) {
    $settings_link = '<a href="admin.php?page=magaza-kapama/magazakapama-setting.php">' . __( 'Ayarlar', 'magaza-kapama' ) . '</a>';
    array_push( $links, $settings_link );
  	return $links;
}

add_action( 'admin_init', 'magazakapama_setting');
function magazakapama_setting() {

	register_setting( 'magazakapama-hub', 'magazakapama_options' );	

}
add_action( 'plugins_loaded', 'magazakapama_languagesload' );
function magazakapama_languagesload() {
	
	load_plugin_textdomain( 'magaza-kapama', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}


class magazakapama {
	
	private $magazakapama;
	
	public function __construct() {
		
		$this->magazakapama = new magazakapamaget;
		
		add_action( 'init', array( $this, 'magazakapama_styles' ) );
		
		if(!get_option( 'magazakapama_options' ) OR get_option( 'magazakapama_options' ) == '') {
			$magazakapama_options[] = array(
										array('','01','00','01','00'),
										array('','01','00','01','00'),
										array('','01','00','01','00'),
										array('','01','00','01','00'),
										array('','01','00','01','00'),
										array('','01','00','01','00'),
										array('','01','00','01','00'),
			);
			$magazakapama_options[] = __('Mağazamız [tstamp] saatleri arasında hizmet vermektedir.', 'magaza-kapama' );
			$magazakapama_options[] = 'Europe/Istanbul';
			update_option( 'magazakapama_options', array($magazakapama_options));
		}
	}

	public function magazakapama_styles(){
			wp_enqueue_style( 'magazakapama_style', plugins_url( $plugindir."magazakapama-style.css", __FILE__ ), array(), '1.0' );
	}
	
}

$magazakapama = new magazakapama;
?>
