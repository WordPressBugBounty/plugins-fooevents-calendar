<?php
/**
 * Utility class.
 *
 * @link https://www.fooevents.com
 * @package woocommerce-events
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Plugin Utility class
 */
class FooEvents_Calendar_Util {

	/**
	 * Global config
	 *
	 * @var object $config plugin directory
	 */
	public $config;

	/**
	 * Global date helpers
	 *
	 * @var object $date date helpers
	 */
	public $date;

	/**
	 * Initialize Utility class.
	 */
	public function __construct() {

		$this->load_config();
		$this->load_date();
	}

	/**
	 * Load global config.
	 */
	public function load_config() {

		$this->config = new stdClass();

		$this->config->pluginDirectory = 'fooevents-calendar';
		$this->config->pluginUrl       = esc_url_raw( trailingslashit( set_url_scheme( plugin_dir_url( __FILE__ ) ) ) );
		$this->config->scriptsPath     = $this->config->pluginUrl . 'js/';
		$this->config->stylesPath      = $this->config->pluginUrl . 'css/';

		$this->config->templatePathTheme = trailingslashit( get_stylesheet_directory() ) . $this->config->pluginDirectory . '/templates/';
		$this->config->path              = trailingslashit( wp_normalize_path( plugin_dir_path( __FILE__ ) ) );
		$this->config->classPath         = $this->config->path . 'classes/';
		$this->config->templatePath      = $this->config->path . 'templates/';
		$this->config->pluginFile        = $this->config->path . 'fooevents-calendar.php';
	}

	/**
	 * Load global date helpers.
	 */
	public function load_date() {

		require_once $this->config->classPath . 'util/class-fooevents-calendar-date.php';
		$this->date = new FooEvents_Calendar_Util_Date();
	}

}
