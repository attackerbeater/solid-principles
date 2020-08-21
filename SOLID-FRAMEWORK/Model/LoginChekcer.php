<?php 

// OCP
class LoginChekcer implements AuthRepository
{
	protected $success;

	public function check($email, $pass)
	{
		// code here
		if($email == 'attackerbeater@gmail.com' &&
		   $pass == 'abc123'
		){	
			return $this->success = true;
		}
	}

	public function isValid()
	{
		return $this->success;
	}
}
