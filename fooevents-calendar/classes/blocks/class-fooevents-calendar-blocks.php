<?php
/**
 * Main plugin class.
 *
 * @link https://www.fooevents.com
 * @package woocommerce-events
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;}

/**
 * Main plugin class.
 */
class FooEvents_Calendar_Blocks {

	/**
	 * Global utility object
	 *
	 * @var array $util contains configuration and global functions
	 */
	private $util;

	/**
	 * Global configuration object
	 *
	 * @var array $config contains paths and other configurations
	 */
	private $config;

	/**
	 * Blocks array
	 *
	 * @var array $blocks contains all the FooEvents block objects.
	 */
	public $blocks;

	/**
	 * On plugin load
	 */
	public function __construct() {

		$this->util   = new FooEvents_Calendar_Util();
		$this->config = $this->util->config;

		require_once $this->config->classPath . 'blocks/class-fooevents-calendar-blocks-calendar.php';
		$this->blocks['calendar'] = new FooEvents_Calendar_Blocks_Calendar( $this->util );
	}
}
