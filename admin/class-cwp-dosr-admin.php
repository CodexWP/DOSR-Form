<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://www.codexwp.com/about
 * @since      1.0.0
 *
 * @package    Cwp_Dosr
 * @subpackage Cwp_Dosr/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Cwp_Dosr
 * @subpackage Cwp_Dosr/admin
 * @author     Codex WP <info@codexwp.com>
 */
class Cwp_Dosr_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->hooks();

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cwp_Dosr_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cwp_Dosr_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

        wp_enqueue_style('bootstrap-iso', plugin_dir_url(__FILE__) . 'css/bootstrap-iso.css', array(), $this->version, 'all');
        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/cwp-dosr-admin.css', array(), $this->version, 'all');

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Cwp_Dosr_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Cwp_Dosr_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
        wp_enqueue_script('bootstrap', plugin_dir_url(__FILE__) . 'js/bootstrap.min.js', array('jquery'), $this->version, false);
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/cwp-dosr-admin.js', array( 'jquery' ), $this->version, false );

	}

	public function hooks()
    {
        add_action( 'admin_menu', array( $this, 'create_dosr_menu_page' ), 60 );
    }

    public function create_dosr_menu_page() {
        add_menu_page( "DOSR Submissions", "DOSR", "manage_options", "cwp-dosr", array($this,'dosr_submissions_page'), "", 50 );
        add_submenu_page( 'cwp-dosr', 'DOSR Settings', 'Settings', 'manage_options', 'cwp-dosr-settings', array($this,'dosr_settings_page'), "", 50);
    }

    public function dosr_submissions_page()
    {

        if(!isset($_GET['action']))
        {
            include_once(plugin_dir_path(__FILE__) . '/partials/admin-dosr-submissions.php');
        }
        else {
            $p = $_GET['action'];
            if ($p == 'view') {
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    $id = $_GET['id'];
                    global $wpdb;
                    $table_name = $wpdb->prefix . "cwp_dosr";
                    $results = $wpdb->get_results("SELECT * FROM $table_name WHERE id=$id");
                    $result = $results[0]->value;
                    $post = json_decode(stripslashes($result), true);
                    include_once(plugin_dir_path(__FILE__) . '/partials/admin-dosr-view.php');
                }
            } else if ($p == 'edit') {
                if (isset($_GET['id']) && is_numeric($_GET['id'])) {
                    global $wpdb;
                    $table_name = $wpdb->prefix . "cwp_dosr";
                    $id = $_GET['id'];

                    if (isset($_POST['dosr']) && $_POST['dosr'] == 'submit') {
                        $value = wp_json_encode($_POST);
                        $sql = "UPDATE $table_name SET value='$value' WHERE id=$id";
                        $wpdb->get_results($sql);
                        $up = 'ok';
                    }

                    $results = $wpdb->get_results("SELECT * FROM $table_name WHERE id=$id");
                    $result = $results[0]->value;
                    $post = json_decode(stripslashes($result), true);
                    include_once(plugin_dir_path(__FILE__) . '/partials/admin-dosr-edit.php');
                }
            }else {
                include_once(plugin_dir_path(__FILE__) . '/partials/admin-dosr-submissions.php');
            }
        }
    }



    public function dosr_settings_page() {
        include_once( plugin_dir_path( __FILE__ ) . '/partials/admin-dosr-settings.php' );
    }

}
