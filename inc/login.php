<?php
/**
 * Admin Login Functions
 *
 * Functions for customizing the wp-login.php page
 *
 * @package   Base_Plugin
 * @author    Big William <hello@bigwilliam.com>
 * @license   MIT
 * @link      http://bigwilliam.com/
 * @copyright 2014 Big William
 */


/*
 * => Add custom logo image, instead of WordPress Default
 * ---------------------------------------------------------------------------*/

  function bw_login_logo() { 

    $logo_path = get_stylesheet_directory() . '/screenshot.png';

    if ( file_exists( $logo_path ) ) : ?>
      <style type="text/css">
          body.login h1 a {
            background-image: url('<?php echo $logo_path ?>');
            background-size: 100%;
            width: 100%;
          }
          .login form .input, 
          .login input[type="text"] {
            background: #fff;
          }
      </style>
    <?php endif;
  } 
  add_action( 'login_enqueue_scripts', 'bw_login_logo' );



/*
 * => Add custom URL the logo will link to
 * ---------------------------------------------------------------------------*/

function bw_login_logo_url() {
    return get_bloginfo( 'url' );
} add_filter( 'login_headerurl', 'bw_login_logo_url' );

/*
 * => Add custom TITLE the logo link will have
 * ---------------------------------------------------------------------------*/

function bw_login_logo_url_title() {
    return get_bloginfo( 'name' );
} add_filter( 'login_headertitle', 'bw_login_logo_url_title' );
