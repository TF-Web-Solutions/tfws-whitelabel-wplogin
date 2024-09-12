<?php

namespace TFWebSolutions\WhiteLabelWPLogin;

use WP;

/**
 * Plugin Name:         White Label WP Login
 * Plugin URI:          https://tfwebsolutions.com/products-and-tools/tfws-whitelabel-wplogin/
 * Description:         An open-source, white label Wordpress login page customization plugin.
 * Version:             1.1.0
 * Requires at least:   5.2
 * Requires PHP:        7.2
 * Author:              TF Web Solutions
 * Author URI:          https://tfwebsolutions.com/
 * License:             GNU General Public License v3 or later.
 * License URI:         https://www.gnu.org/licenses/gpl-3.0.html
 * Tags: wp-login, custom-login, login, login-customizer, wordpress-login, style-login
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