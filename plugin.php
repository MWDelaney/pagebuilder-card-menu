<?php
/**
 * Plugin Name: Page Builder Card Menu Module
 * Plugin URI:
 * Description:
 * Version: 1.0
 * Author: Michael W. Delaney
 */
define( 'FL_MODULE_CARD_MENU_DIR', plugin_dir_path( __FILE__ ) );
define( 'FL_MODULE_CARD_MENU_URL', plugins_url( '/', __FILE__ ) );

/**
 * Custom modules
 */
function fl_load_module_cardmenu() {
	if ( class_exists( 'FLBuilder' ) ) {
			require_once 'card-menu/card-menu.php';
	    //require_once 'basic-example/basic-example.php';
	    //require_once 'example/example.php';
	}
}
add_action( 'init', 'fl_load_module_cardmenu' );
