<?php 

interface DBHandlerInterface
{
	public function connect();
	public function disconnect();
}

abstract class DBHandler
{	
	private $db;

	public function __construct(
		DBHandlerInterface $db
	){
		$this->db = $db
	} 
}













