<?php

// controller
class MobileController
{
	private $mobileFactory;
	private $productFactory;

	public function __construct(
		MobileFactory $mobileFactory,
		ProductFactory $productFactory
	)
	{
		$this->mobileFactory = $mobileFactory;
		$this->productFactory = $productFactory;
	}

	public function execute() 
	{		

		// var_dump($this->mobileFactory);
		// $collections = $this->mobileFactory->create();

		// echo '<pre/>';
		// var_dump($collections);
		// echo $collections->getModel();

		echo '<br/>';
		$product = $this->productFactory->create();
		echo $product->getModel();
		echo '<br/>';
		echo $product->getDisplay();
		echo '<br/>';
		echo $product->getRearCamera();
		
	}	
}
