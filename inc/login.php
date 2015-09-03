<?php
/**
 * Admin Login Functions
 *
 * Functions for customizing the wp login page
 *
 * @package   Base_Plugin
 * @author    Big William <hello@bigwilliam.com>
 * @license   MIT
 * @link      http://bigwilliam.com/
 * @copyright 2014 Big William
 */



/* ================================
   Add a Custom Logo and Links     
   ================================ */

// Set the logo URL here
$logo_url = get_bloginfo( 'template_directory' ) . '/assets/img/logo.png';
$headers = @get_headers($logo_url);

// Check if the logo file exists
if ( strpos($headers[0],'200') != false ) :

  function bw_login_logo() { 
  ?>
    <style type="text/css">
        body.login div#login h1 a {
        	background-image: url(<?php echo $logo_url; ?>);
          background-size: 100%;
          width: 145px;
        }
        .login form .input, .login input[type="text"] {
          background: #fff;
        }
    </style>
  <?php 
  } 
  add_action( 'login_enqueue_scripts', 'bw_login_logo' );

endif;


// Add logo link
function bw_login_logo_url() {
    return get_bloginfo( 'url' );
} add_filter( 'login_headerurl', 'bw_login_logo_url' );

// Add logo link title
function bw_login_logo_url_title() {
    return get_bloginfo( 'name' );
} add_filter( 'login_headertitle', 'bw_login_logo_url_title' );
