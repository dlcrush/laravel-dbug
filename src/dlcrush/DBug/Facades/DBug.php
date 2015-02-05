<?php namespace dlcrush\DBug\Facades;

	use Illuminate\Support\Facades\Facade;
	
	/**
	 * dBug Facade
	 *
	 * dBug Facade
	 *
	 * @author David Crush
	 * @version v0.1.0
	 */
	class DBug extends Facade
	{
		/**
		 * Gets the name of the Facade for access
		 * 
		 * @return string DBug
		 */
		protected static function getFacadeAccessor() { 
            return 'DBug';
        }
    }
?>