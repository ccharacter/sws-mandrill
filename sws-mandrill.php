<?php

/**
 * Plugin Name:       SWS Mandrill
 * Plugin URI:        https://ccharacter.com/custom-plugins/sws-mandrill/
 * Description:       Various tweaks that I'll want on most or all of my WordPress sites
 * Version:           1.0
 * Requires at least: 5.2
 * Requires PHP:      5.5
 * Author:            Sharon Stromberg
 * Author URI:        https://ccharacter.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       sws-mandrill
 */

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

require_once plugin_dir_path(__FILE__).'inc/plugin-update-checker/plugin-update-checker.php';
$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
	'https://raw.githubusercontent.com/ccharacter/sws-wp-tweaks/master/plugin.json',
	__FILE__,
	'sws-wp-tweaks'
);


?>
