<?php 

class ProductCollection
{

	protected $stock = 10;

	public function getStock()
	{
		return $this->stock;
	} 

	public function getStockOriginalValue()
	{
		return 1;
	}  

}


class Storage
{
	protected $data = [
			'storage' => 10
		];


	public function getData()
	{
		return $this->data;
	} 	
}

class PreConditionAndPostCondition
{
	protected $collection;

	protected $torage;

	public function __construct(
		ProductCollection $collection,
		Storage $storage
	){
		$this->collection = $collection;
		$this->storage = $storage;
	} 

	public function getQuote($quote){

		if(!isset($quote) && strlen($quote) !== 12){
			return false;
		}
		return $quote;
	}

	public function getStock() 
	{			
		$data = [];
		// pre-condition
		if(is_int($this->collection->getStock())) {
			$data['stock'] = $this->collection->getStock();
		}		
		
		// post-condition
		if (is_array($data) && 	
			!empty($data) && 
			$data['stock'] == $this->collection->getStockOriginalValue()
		) {
			return $data['stock'] - 1;
		} else {
			return $data = []; 
		}
	}

	// Precondition: target storage should have enough room for the file and download site should be accessible. Postcondition: available storage should decrease by the size of the file.
	public function filedownload()
	{	
		$data = $this->storage->getData();		
		foreach ($data as $key => $value) {

			if($key == 'storage' && $value == 0){
				$data['storage'] = 1;			
			}	

			if(is_int($data['storage']) && $data['storage'] >= 1){
				return $data['storage'];
			}

			return $data['storage'] = [];
		}	
	} 


	public function alterTable()
	{
		/* pre-conditions
			1. check the table version if met the setup_version value from module.xml
			if (version_compare($context->getVersion(), '1.4.0') < 0) {
				
				$orderItemTable = $setup->getTable('sales_order');
				post-conditions	
				2. Checks if column to be added is not existing from target table
				if (!$connection->tableColumnExists($orderItemTable, 'exo_order_id')) {
				    $connection->addColumn($orderItemTable, 'exo_order_id', [
				        'TYPE' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
				        'LENGTH' => 100,
				        'NULLABLE' => true,
				        'COMMENT' => 'EXO Sales Order ID'
				    ]);
				}
			}
		*/
	} 

}

// https://www.quora.com/What-are-some-examples-of-pre-and-postconditions-in-computer-programming
$p = new PreConditionAndPostCondition(
	new ProductCollection,
	new Storage
);

echo '<pre/>';
print_r($p->getStock());

echo '<br/>';
print_r($p->filedownload());

