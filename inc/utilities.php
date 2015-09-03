<?php
/**
 * Utility Functions
 *
 * @package   Base_Plugin
 * @author    Big William <hello@bigwilliam.com>
 * @license   MIT
 * @link      http://bigwilliam.com/
 * @copyright 2014 Big William
 */

/**
 * Debug Function
 *
 * Global function to output debuggin messages to 'wp-content/debug.log'
 *
 * @uses   error_log( $message )
 * @since  1.0.0
 * @return void
 */
if ( ! function_exists( 'bigwilliam_debug' ) ) {
	function bigwilliam_debug( $message ) {
	  if ( WP_DEBUG === true ) {
	    if ( is_array( $message ) || is_object( $message ) ) {
        error_log( print_r( $message, true ) );
	    } else {
        error_log( $message );
	    }
	  }
	}
}

/**
 * image links
 *
 * Don't default to adding a link to the image when user adds images in the WYSIWYG editor
 *
 * @since  1.0.0
 * @return void
 */
if ( ! function_exists( 'bw_imagelink_setup' ) ) {
	function bw_imagelink_setup() {
	  $image_set = get_option( 'image_default_link_type' );
	  if ($image_set !== 'none') {
	    update_option('image_default_link_type', 'none');
	  }
	}
}
add_action('admin_init', 'bw_imagelink_setup', 10);
