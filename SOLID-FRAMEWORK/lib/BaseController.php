<?php 

abstract class BaseController
{
	abstract public function execute($email, $pass, AuthRepository $auth);
}