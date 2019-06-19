<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       http://www.codexwp.com/about
 * @since      1.0.0
 *
 * @package    Cwp_Dosr
 * @subpackage Cwp_Dosr/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Cwp_Dosr
 * @subpackage Cwp_Dosr/public
 * @author     Codex WP <info@codexwp.com>
 */
class Cwp_Dosr_Public
{

    /**
     * The ID of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $plugin_name The ID of this plugin.
     */
    private $plugin_name;

    /**
     * The version of this plugin.
     *
     * @since    1.0.0
     * @access   private
     * @var      string $version The current version of this plugin.
     */
    private $version;

    /**
     * Initialize the class and set its properties.
     *
     * @since    1.0.0
     * @param      string $plugin_name The name of the plugin.
     * @param      string $version The version of this plugin.
     */
    public function __construct($plugin_name, $version)
    {

        $this->plugin_name = $plugin_name;
        $this->version = $version;
        $this->common_function();

    }

    /**
     * Register the stylesheets for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_styles()
    {

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
        wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__) . 'css/cwp-dosr-public.css', array(), $this->version, 'all');

    }

    /**
     * Register the JavaScript for the public-facing side of the site.
     *
     * @since    1.0.0
     */
    public function enqueue_scripts()
    {

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
        wp_enqueue_script('jquery', plugin_dir_url(__FILE__) . 'js/jquery-1.11.1.min.js', array('jquery'), $this->version, false);
        wp_enqueue_script('bootstrap', plugin_dir_url(__FILE__) . 'js/bootstrap.min.js', array('jquery'), $this->version, false);
        wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__) . 'js/cwp-dosr-public.js', array('jquery'), $this->version, false);

    }

    public function common_function()
    {
        add_shortcode('cwp-dosr-form', array($this, 'create_form_shortcode'));
    }

    public function create_form_shortcode()
    {
		/*
        include_once(ABSPATH.WPINC.'/pluggable.php');
        if(is_user_logged_in()) {
            
        }
        echo '<strong>Please login first to view the form</strong>';
		*/
		if($this->new_submit_form()){$sub='ok';}
		ob_start();
        require plugin_dir_path(__FILE__) . 'partials/public-dosr-form-display.php';
        return ob_get_clean();
    }

    public function new_submit_form()
    {
        if(isset($_POST['dosr']) && $_POST['dosr']=='submit') {
            //add_action('init', array($this, 'cwp_send_email'),9999);
            $this->cwp_send_email();
            $value = wp_json_encode($_POST);
            $created = date("Y-m-d h:i:s");
            global $wpdb;
            $table_name = $wpdb->prefix . "cwp_dosr";
            $sql = "INSERT INTO $table_name (value,created) values ('$value','$created')";
            $result = $wpdb->get_results($sql);
            return true;
        }
    }

    public function cwp_send_email(){
        $to = get_option('cwp-dosr-rec-email');
        if($to=='')
            return;
        ob_start();
        $post = $_POST;
        include(plugin_dir_path(__FILE__).'partials/email-template.php');
        $body = ob_get_contents();
        ob_end_clean();
        $subject = "Daily Operation Summary Report";
        $headers = array('Content-Type: text/html; charset=UTF-8');
        wp_mail($to,$subject,$body,$headers);
    }


}