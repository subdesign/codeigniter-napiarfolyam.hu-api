<?php

/**
 * napiarfolyam.hu CodeIgniter API 
 * C.2012 Barna Szalai
 */ 

class Napiarfolyam
{
	protected static $_ci;
	protected static $_base_url = 'http://api.napiarfolyam.hu';

	public function __construct()
	{
		self::$_ci = get_instance();

		self::$_ci->load->spark('restclient/2.1.0');
		self::$_ci->rest->initialize(array('server' => self::$_base_url));
	}

	/**
	 * arfolyam metódus
	 * @param  array  $params bemenő paraméterek
	 * @return array          árfolyam adatok
	 */
	public static function arfolyam($params = array())
	{
		if($params)
		{
			// ha query string lett átadva akkor azt használja
			$uri = '?'.(is_array($params) ? http_build_query($params) : $params);
		}
		// ha nincsenek paraméterek, akkor mindent letölt
		else
		{
			$uri = '';
		}

		if ( ! $erate = self::$_ci->rest->get($uri))
		{
			return FALSE;
		}
		else
		{
			return $erate;	
		}								
	}
}