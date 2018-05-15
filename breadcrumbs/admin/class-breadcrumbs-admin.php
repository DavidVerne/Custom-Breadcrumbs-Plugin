<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    breadcrumbs
 * @subpackage breadcrumbs/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    breadcrumbs
 * @subpackage breadcrumbs/admin
 * @author     David Verne <email@example.com>
 */
class breadcrumbs_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $breadcrumbs    The ID of this plugin.
	 */
	private $breadcrumbs;

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
	 * @param      string    $breadcrumbs       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $breadcrumbs, $version ) {

		$this->breadcrumbs = $breadcrumbs;
		$this->version = $version;

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
		 * defined in breadcrumbs_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The breadcrumbs_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->breadcrumbs, plugin_dir_url( __FILE__ ) . 'css/breadcrumbs-admin.css', array(), $this->version, 'all' );

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
		 * defined in breadcrumbs_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The breadcrumbs_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->breadcrumbs, plugin_dir_url( __FILE__ ) . 'js/breadcrumbs-admin.js', array( 'jquery' ), $this->version, false );

	}

}
