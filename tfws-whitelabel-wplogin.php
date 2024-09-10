<?php

namespace TFWebSolutions\WhiteLabelWPLogin;

use WP;

/**
 * Plugin Name:         TFWS - White Label WP Login
 * Plugin URI:          https://tfwebsolutions.com/
 * Description:         An open-source, white label Wordpress login page customization plugin.
 * Version:             1.0.0
 * Requires at least:   5.2
 * Requires PHP:        7.2
 * Author:              TF Web Solutions
 * Author URI:          https://tfwebsolutions.com/
 * License:             GPL v3
 * License URI:         https://www.gnu.org/licenses/gpl-3.0
 */


 // Prevent file from being accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

// Load Dependencies
require_once plugin_dir_path( __FILE__ ) . 'include/styles.php';
require_once plugin_dir_path( __FILE__ ) . 'include/customizer.php';

// Add Filters and Actions
add_filter( 'login_headertext', __NAMESPACE__ . '\\replace_site_name' );
add_filter( 'login_headerurl', __NAMESPACE__ . '\\logo_link_home' );
add_action( 'admin_menu', __NAMESPACE__ . '\\add_admin_link' );

/**
 * Replace logo title with site name
 *
 * @return string
 */
function replace_site_name() {
	return get_bloginfo( 'name' );
}

/**
 * Link login page logo back to home
 *
 * @return string
 */
function logo_link_home() {
	return home_url();
}

/**
 * Create Admin Appearances menu item for plugin
 */
function add_admin_link() {
    $login_url = wp_login_url();

	$login_url = add_query_arg(
		array(
			'autofocus[section]' => 'tfws-whitelabel-wplogin',
			'url'                => urlencode( $login_url ),
		),
		admin_url( 'customize.php' )
	);

	add_submenu_page(
		'themes.php',
		'White Label WP Login',
		'White Label WP Login',
		'manage_options',
		$url
	);
}