<?php 

require_once 'MobileInterface.php';
require_once 'Mobile.php';
require_once 'AbstractMobileFactory.php';
require_once 'MobileFactory.php';
require_once 'HuaweiY6.php';
require_once 'AbstractModel.php';
require_once 'MobileController.php';
require_once 'Product.php';
require_once 'ProductFactory.php';


$index = new MobileController(
	new MobileFactory(
		new Mobile(
			new HuaweiY6
		)
	),
	new ProductFactory(
		new Product
	)	
);

// echo '<pre/>';
$index->execute();
