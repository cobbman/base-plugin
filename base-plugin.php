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
 * Version:     1.1.0
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


/*========================================================================*
  Comment these out if you don't need them
 *========================================================================*/


/**
 *
 * UTILITIES:
 *
 * bigwilliam_debug()
 * bw_default_media_links()
 *
 */
require_once( $this_dir . 'inc/utilities.php' );


/**
 *
 * LOGIN: -- requires custom config per site
 *
 * bw_login_logo()
 * bw_login_logo_url() 
 * bw_login_logo_url_title()
 *
 */
require_once( $this_dir . 'inc/login.php' );


/**
 *
 * MENU: -- requires custom config per site
 *
 * bw_remove_menu_items()
 * bw_custom_menu_names()
 * bw_change_admin_bar()
 * bw_replace_footer_text() 
 *
 */
require_once( $this_dir . 'inc/menu.php' );


/**
 *
 * SCRIPTS: -- turn this on if you want to add custom js or css to the site, outside the theme files
 *
 * bw_added_scripts()
 *
 */
require_once( $this_dir . 'inc/scripts.php' );
