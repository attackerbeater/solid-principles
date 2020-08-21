<?php 

class LoginAction extends BaseController
{
	protected $route;

	public function __construct(
		Route $route
	)
	{
		$this->route = $route;
	}

	public function execute($email, $pass, AuthRepository $auth)
	{		
		if($email !=='' && $pass !=='') {
			$auth->check($email, $pass);
			if (is_bool($auth->isValid())) {
				return $this->route->redirect('/dashboard');
			}
			return $this->route->redirect('/');		
		} 
	}
}
