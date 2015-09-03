<?php
/**
 * Base Plugin
 *
 * A plugin that contains custom functionality I use often.
 *
 * @package   Base_Plugin
 * @author    Big William <hello@bigwilliam.com>
 * @license   MIT
 * @link      http://bigwilliam.com/
 * @copyright 2014 Big William
 *
 * Plugin Name: Base Plugin
 * Plugin URI:  http://bigwilliam.com/
 * Description: A plugin with features for this website.
 * Version:     1.0.0
 * Author:      BigWilliam
 * Author URI:  http://bigwilliam.com/
 * License:     MIT
 * License URI: http://opensource.org/licenses/MIT
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

$this_dir = plugin_dir_path( __FILE__ );

/*
 = Load Global Functions. Turn these on and off as you need
 ----------------------------------------------------------*/
require_once( $this_dir . 'inc/utilities.php' ); // debug functions
require_once( $this_dir . 'inc/login.php' );     // custom login page
require_once( $this_dir . 'inc/menu.php' );      // menu changes and custom links
// require_once( $this_dir . 'inc/scripts.php' );   // custom scripts and styles

