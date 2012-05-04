<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */

namespace Zip;

require_once PKGPATH.'fuel-zipencoding'.DS.'vendor'.DS.'Zip.php';

use CI_Zip;

class Zip
{
	private static $_instance = null;
	
	private function __construct() {}
	
	public static function _init()
	{
	}
	
	/**
	 * Initiate Zip instance for singleton method
	 *
	 * @access    public
	 * @param  boolean 
	 * @return static
	 */
	public static function forge()
	{
		if (static::$_instance != null) return static::$_instance;
		
		static::$_instance = new CI_Zip();
		
		return static::$_instance;
	}
	
	/**
	 * Set instance for mock up
	 *
	 * @access    public
	 * @return static
	 */
	public static function instance($pusher)
	{
		return static::$_instance = $pusher;
	}
}

