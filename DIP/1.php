<?php 
// Dependency Inversion Principles 
// avoid tightly coupled architecture

interface DBHandlerInterface 
{
	public function connect();
	public function disconnect();
}

// low level class
class MySQL implements DBHandlerInterface
{
	public function connect()
	{
		return 'connect to MySQL Database';
	}

	public function disconnect()
	{
		return 'Disconnecting MySQL Database';
	}
}

// low level class
class Oracle implements DBHandlerInterface
{
	public function connect()
	{
		return 'connect to Oracle Database';
	}

	public function disconnect()
	{
		return 'Disconnecting Oracle Database';
	}
}

// low level class
class Postgre implements DBHandlerInterface
{
	public function connect()
	{
		return 'connect to Postgre Database';
	}

	public function disconnect()
	{
		return 'Disconnecting Postgre Database';
	}
}

// High level Component
class DBHandler 
{
	private $db;

	public function __construct(
		DBHandlerInterface $db
	)
	{
		$this->db = $db;
	} 

	public function execute(){
		return $this->db->connect();
	}	
}

$dbh = new DBHandler(new MySQL);
echo $dbh->execute();
echo '<br/>';

$dbh = new DBHandler(new Postgre); 
echo $dbh->execute();
echo '<br/>';


$dbh = new DBHandler(new Oracle); 
echo $dbh->execute();
echo '<br/>';