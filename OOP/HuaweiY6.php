<?php 

// https://gadgets.ndtv.com/huawei-y6-2018-4708
// model

class HuaweiY6 implements MobileInterface
{	
	// general
	public $model = 'Y6 2018';
	public $display = '5.70-inch (720x1440)';
	public $rearCamera = '13MP';
	public $BatteryCapacity;
	public $ram;
	public $os;
	public $frontCamera;
	public $storage;
	public $brand; 
	public $releaseDate;
	public $formFactor;
	public $dimmension;
	public $weight;
	public $colours; 

	// display
	public $screensize;
	public $touchscreen;
	public $resolution;

	// hardware
	public $processor;
	public $processorMake;
	public $internalStorage;

	public function getModel()
	{
		return $this->model;
	}

	public function getDisplay()
	{
		return $this->display;
	} 

	public function getRearCamera()
	{
		return $this->rearCamera;
	}  
}