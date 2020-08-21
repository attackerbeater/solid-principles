<?php 

class ProductFactory
{

	private $product;

	public function __construct(
		Product $product
	)
	{
		$this->product = $product;
	}

	public function create()
	{
		return $this->product;	
	} 

} 