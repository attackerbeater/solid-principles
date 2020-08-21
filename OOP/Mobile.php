<?php 

class Mobile 
{
	private $mobileInterface;

	public function __construct(
		MobileInterface $mobileInterface
	)
	{
		$this->mobileInterface = $mobileInterface;
	}

	public function getModel()
	{
		return $this->mobileInterface->getModel();
	}
}

