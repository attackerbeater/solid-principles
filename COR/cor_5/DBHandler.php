<?php 

class DBHandler
{	
	private $db;

	public function __construct(
		DBHandlerInterface $db
	){
		$this->db = $db;
	}

	public function execute()
	{
		$instance = Mysql::getInstance();
		echo $instance->connect();

		// return $this->db->connect(); 
	}
}

