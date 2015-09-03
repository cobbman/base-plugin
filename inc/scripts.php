<?php
/**
 * Scripts
 *
 * Enqueue custom scripts and styles. Keeps them outside the themes to avoid losing changes on theme upgrades. Also good for quick changes. Especially if the theme styles are made in LESS or SCSS.
 *
 * @package   Base_Plugin
 * @author    Big William <hello@bigwilliam.com>
 * @license   MIT
 * @link      http://bigwilliam.com/
 * @copyright 2014 BigWilliam Development
 */

function bw_added_scripts() {
  wp_enqueue_script( 'bw-added-scripts', plugins_url( '/assets/js/custom.js', __FILE__ ) , array(), '1.0', true );
  wp_enqueue_style(  'bw-added-styles',  plugins_url( '/assets/css/custom.css', __FILE__ ), false, '1.0');
}
add_action('wp_enqueue_scripts', 'bw_added_scripts', 100);