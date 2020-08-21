<?php 

//generated
class MobileFactory extends AbstractMobileFactory
{
	protected $mobile;

	public function __construct(
		Mobile $mobile
	)
	{
		$this->mobile = $mobile;
	}

	public function create()
	{
		return $this->mobile; 
	}
}