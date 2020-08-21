<?php 
// Singleton to connect db.
// model
class ConnectDb {
  	// Hold the class instance.
  	private static $instance = null;
  	private $conn;
  
  	private $host = 'localhost';
  	private $user = 'root';
  	private $pass = '';
  	private $name = 'splosh';
   
  	// The db connection is established in the private constructor.
  	private function __construct()
  	{
    	$this->conn = new PDO(
    		"mysql:host={$this->host};
    		dbname={$this->name}", 
    		$this->user,
    		$this->pass,
    		array(
    			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"
    		)
    	);
  	}
  
  	public static function getInstance()
  	{
    	if(!self::$instance)
    	{
      		self::$instance = new ConnectDb();
    	}
   
    	return self::$instance;
  	}
  
  	public function getConnection()
  	{
    	return $this->conn;
  	}
}

// model
class StoreModel
{
	private $data = [];

	public function getStore()
	{	
		// get database connection
		$instance = ConnectDb::getInstance();
		$conn = $instance->getConnection();		

		$stmt = $conn->query("SELECT * FROM store");
		while ($row = $stmt->fetch()) {
		    $this->data[] = $row;
		}

		if(!empty($this->data)) {			
			return $this->data;		
		}

		return $this->data = [];
	} 
}

class indexController 
{	
	protected $store;
	public function __construct(
		StoreModel $store
	)
	{
		$this->store = $store;
	}

	public function execute()
	{	
		echo '<pre/>';
		$store = $this->store->getStore();
		print_r($store);
	} 
}


$obj = new indexController(new StoreModel);
$obj->execute();	


// $instance = ConnectDb::getInstance();
// $conn = $instance->getConnection();
// var_dump($conn);

// $instance = ConnectDb::getInstance();
// $conn = $instance->getConnection();
// var_dump($conn);

