<?php 

class Mysql implements DBHandlerInterface
{
	private static $instance = null;
	protected $con;

	public function __construct()
	{
		$this->con = 'connecto to mysql database';
	}

	public static function getInstance()
	{
	  	if(!self::$instance)
	  	{
	    	self::$instance = new Mysql();
	  	}
	 
	  	return self::$instance;
	}

	public function connect()
	{
		return $this->con;
	}

	public function disconnect()
	{

	}
}