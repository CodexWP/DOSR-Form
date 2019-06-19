<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.codexwp.com/about
 * @since             1.0.0
 * @package           Cwp_Dosr
 *
 * @wordpress-plugin
 * Plugin Name:       CWP DOSR
 * Plugin URI:        http://www.codexwp.com/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Codex WP
 * Author URI:        http://www.codexwp.com/about
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       cwp-dosr
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PLUGIN_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-cwp-dosr-activator.php
 */
global $phpmailer;
if ( ! is_object( $phpmailer ) || ! is_a( $phpmailer, 'PHPMailer' ) ) {
    require_once ABSPATH . WPINC . '/class-phpmailer.php';
    $phpmailer = new PHPMailer( true );
}

function registerTable(){
    global $wpdb;
    $db_name = DB_NAME;
    $table_name = $wpdb->prefix . "cwp_dosr";
    $sql = "DROP TABLE $table_name";
    $wpdb->get_results($sql);
    //Table exists checking
    $sql = "SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = '$db_name' AND  TABLE_NAME = '$table_name'";
    $result = $wpdb->get_results($sql);
    if(!$result){
        $sql = "CREATE TABLE $table_name ( 
                    id int(11) NOT NULL AUTO_INCREMENT, 
                    value varchar(10000) NOT NULL,
                    created DATETIME NOT NULL,
                    updated DATETIME default CURRENT_TIMESTAMP,
                    PRIMARY KEY(id) 
                  );";
        $wpdb->get_results($sql);
    }
}

function activate_cwp_dosr() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cwp-dosr-activator.php';
	Cwp_Dosr_Activator::activate();
    registerTable();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-cwp-dosr-deactivator.php
 */
function deactivate_cwp_dosr() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-cwp-dosr-deactivator.php';
	Cwp_Dosr_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_cwp_dosr' );
register_deactivation_hook( __FILE__, 'deactivate_cwp_dosr' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-cwp-dosr.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_cwp_dosr() {

	$plugin = new Cwp_Dosr();
	$plugin->run();

}
run_cwp_dosr();

