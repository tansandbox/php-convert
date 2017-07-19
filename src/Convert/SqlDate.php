<?php 

namespace TanSandbox\Convert;

class Date
{
	public $config = array(
		/* MySql Only date */
		'SQL_DATE_FORMAT' => 'Y-m-d',
		/* MySql Date with time */
		'SQL_DATETIME_FORMAT' => 'Y-m-d H:i:s',
		/* MySql Only time */
		'SQL_TIME_FORMAT' => 'H:i:s',

		/* Client Only date */
		'CLIENT_DATE_FORMAT' => 'd-m-Y',
		/* Client Date with time */
		'CLIENT_DATETIME_FORMAT' => 'd-m-Y H:i:s',
		/* Client Only time */
		'CLIENT_TIME_FORMAT' => 'H:i:s' 
	) ;

	public static function sqlDate($date)
    {
        $obj = new \DateTime($date);
		return $obj->format($config['SQL_DATE_FORMAT']) ;
    }
	public static function sqlTime($date)
    {
        $obj = new \DateTime($date);
		return $obj->format($config['SQL_TIME_FORMAT']) ;
    }
	public static function sqlDateTime($date)
    {
        $obj = new \DateTime($date);
		return $obj->format($config['SQL_DATETIME_FORMAT']) ;
    }

	public static function clientDate($date)
    {
        $obj = new \DateTime($date);
		return $obj->format($config['CLIENT_DATE_FORMAT']) ;
    }
	public static function clientTime($date)
    {
        $obj = new \DateTime($date);
		return $obj->format($config['CLIENT_TIME_FORMAT']) ;
    }
	public static function clientDateTime($date)
    {
        $obj = new \DateTime($date);
		return $obj->format($config['CLIENT_DATETIME_FORMAT']) ;
    }
}