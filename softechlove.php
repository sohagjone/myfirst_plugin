<?php 
/**
 * Plugin Name:       SoftechLove
 * Description:       My First Plugin.
 * Plugin URI:        http://softechlove.epizy.com/ 
 * Author:            Md. Al Mamun Sohag  
 * Author URI:        http://softechlove.epizy.com/ 
 * Version:           1.10.3
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 */

// https://www.youtube.com/watch?v=CY8Y6Zxl4rE&list=PLu-53K60L1JR3DJqrtmPTdZluw-TaQ9-S&index=8

if(!defined('ABSPATH'))
{
	exit;
}

require_once __DIR__ .'/vendor/autoload.php';

final class SoftechLove
{
	const version = '1.10.3';

	private function __construct()
	{
		$this->define_constants();

		register_activation_hook(__FILE__, [$this, 'activate']);

		add_action('plugins_loaded', [$this, 'init_plugin']);
	}

	public static function init()
	{
		static $instance = false;

		if(!$instance)
		{
			$instance = new self();
		}

		return $instance;
	}
	public function define_constants()
	{
		define('SOFTECHLOVE_VERSION', self::version);
		define('SOFTECHLOVE_FILE', __FILE__);
		define('SOFTECHLOVE_PATH', __DIR__);
		define('SOFTECHLOVE_URL', plugins_url('', SOFTECHLOVE_FILE));
		define('SOFTECHLOVE_ASSETS', SOFTECHLOVE_URL . '/assets');
	}
	public function init_plugin()
	{
		if(is_admin())
		{
			new Softechlove\Sohagjone\Admin();
		}
		else
		{
			new Softechlove\Sohagjone\Frontend();
		}
	}

	public function activate()
	{
		$installed = get_option('softechlove_installed');

		if(!$installed)
		{
			update_option('softechlove_installed', time());
		}

		update_option('softechlove_version', SOFTECHLOVE_VERSION );

	}

}

function softechlove()
{
	return SoftechLove::init();
}

softechlove();
