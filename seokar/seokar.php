<?php
/**
 * Plugin Name: Seokar
 * Plugin URI: http://sajjadakbari.ir/
 * Description: A comprehensive SEO plugin for WordPress.
 * Version: 1.0.0
 * Author: Sajjad Akbari
 * Author URI: http://sajjadakbari.ir/
 * Text Domain: seokar
 * Domain Path: /languages
 * License: GPL2
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die;
}

/**
 * Currently plugin version.
 */
define('SEOKAR_VERSION', '1.0.0');

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-seokar-activator.php
 */
function activate_seokar() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-seokar-activator.php';
    Seokar_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-seokar-deactivator.php
 */
function deactivate_seokar() {
    require_once plugin_dir_path(__FILE__) . 'includes/class-seokar-deactivator.php';
    Seokar_Deactivator::deactivate();
}

register_activation_hook(__FILE__, 'activate_seokar');
register_deactivation_hook(__FILE__, 'deactivate_seokar');

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path(__FILE__) . 'includes/class-seokar.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 */
function run_seokar() {
    $plugin = new Seokar();
    $plugin->run();
}
run_seokar();
