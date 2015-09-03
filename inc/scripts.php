<?php
/**
 * Scripts
 *
 * Enqueue custom scripts. Keeps them outside the themes to avoid losing changes on theme upgrades
 *
 * @package   Base_Plugin
 * @author    Big William <hello@bigwilliam.com>
 * @license   MIT
 * @link      http://bigwilliam.com/
 * @copyright 2014 BigWilliam Development
 */

function base_plugin_scripts() {
  wp_enqueue_style('base_plugin_main',  plugins_url( ) . '/base-plugin/assets/css/custom.css', false, '1.0');
}
add_action('wp_enqueue_scripts', 'base_plugin_scripts', 100);