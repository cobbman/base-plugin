<?php
/**
 * Menu Functions
 *
 * Customize the wp menu. Hide ACF, etc.
 *
 * @package   Base_Plugin
 * @author    Big William <hello@bigwilliam.com>
 * @license   MIT
 * @link      http://bigwilliam.com/
 * @copyright 2014 Big William
 */


/*=============================================================*
 Hide WooCommerce Update Notification
 *=============================================================*/
// remove_action( 'admin_notices', 'woothemes_updater_notice' );



/**
 * Remove Menu Items
 *
 * @since  1.0.0
 * @return void
 */
function bw_remove_menu_items() {

  // provide a list of usernames who can access special admin menu items
  $admins = array( 
    'admin'
  );

  // get the current user
  $current_user = wp_get_current_user();

  // match and remove if needed
  if( !in_array( $current_user->user_login, $admins ) ) {
    remove_menu_page('edit.php?post_type=acf');    // Remove ACF Menu
    remove_menu_page('acf-options');               // Remove ACF Options
    remove_menu_page('wptouch-admin-touchboard');  // WP Touch Mobile Theme Plugin
  }
}
add_action( 'admin_menu', 'bw_remove_menu_items', 999 );


/**
 * Modify names of admin menu items
 *
 * @since  1.0.0
 * @return void
 */
function bw_custom_menu_names() {
  global $menu;
  $menu[5][0] = 'Blog'; // change "posts" to "blog"
}
add_action( 'admin_menu', 'bw_custom_menu_names', 999 );


/**
 * Modify names of admin menu items
 *
 * @since  1.0.0
 * @return void
 */
function pages_above_posts( $menu_order ) {
  return array(
    'index.php',
    'edit.php?post_type=page',
    'edit.php',
    'upload.php',
  );
}
add_filter( 'custom_menu_order', '__return_true' );
add_filter( 'menu_order', 'pages_above_posts' );


/**
 * Change Admin Bar
 *
 * Adds links to WP logo and more
 *
 * @since  1.0.0
 * @return void
 */
function bw_change_admin_bar() {

  // Global
  global $wp_admin_bar;

  // Remove Links
  $wp_admin_bar->remove_menu( 'new-link'        );
  $wp_admin_bar->remove_menu( 'new-media'       );
  $wp_admin_bar->remove_menu( 'new-user'        );
  $wp_admin_bar->remove_menu( 'comments'        );
  $wp_admin_bar->remove_menu( 'about'           );
  $wp_admin_bar->remove_menu( 'wporg'           );
  $wp_admin_bar->remove_menu( 'documentation'   );
  $wp_admin_bar->remove_menu( 'support-forums'  );
  $wp_admin_bar->remove_menu( 'feedback'        );

  // Add site link
  $wp_admin_bar->add_menu( array(
    'parent' => 'wp-logo',
    'id'     => 'bigwilliam-site',
    'title'  => __( 'BigWilliam', 'roots' ),
    'href'   => 'http://bigwilliam.com'
  ) );

  // Add support link
  $wp_admin_bar->add_menu( array(
    'parent' => 'wp-logo',
    'id'     => 'bigwilliam-support',
    'title'  => __( 'BigWilliam Support', 'roots' ),
    'href'   => 'http://bigwilliam.com/contact'
  ) );
}
add_action( 'wp_before_admin_bar_render', 'bw_change_admin_bar' );


/**
 * Replace footer howdy text
 * 
 * @since  1.0.0
 * @return void
 */
function bw_replace_footer_text() {
  printf( 
    '<span id="footer-thankyou">%s <a href="%s" target="_blank">%s</a>.</span>',
     __( 'Website proudly created by', 'roots' ), 
     'http://bigwilliam.com/',
     __( 'Big William', 'roots' ) 
  );
}
add_filter( 'admin_footer_text', 'bw_replace_footer_text' );