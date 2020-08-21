<?php

require_once 'Api\AuthRepository.php';
require_once 'lib\BaseController.php';
require_once 'Controller\LoginAction.php';
require_once 'Helper\Route.php';
require_once 'Model\LoginChekcer.php';

$l = new LoginAction(new Route);
$email = 'attackerbeater@gmail.com';
$pass = 'abc123';
echo $l->execute($email, $pass, new LoginChekcer);



