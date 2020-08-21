<?php 

interface AuthRepository 
{
	public function check($email, $pass);
}

