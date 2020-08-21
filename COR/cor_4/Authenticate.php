<?php 

declare(strict_types=1);
 
class Authenticate
{
    private $chain;
 
    public function __construct(
    	AbstractChain $chain
    )
    {
        $this->chain = $chain;
    }
 
    public function login(User $user): bool
    {
        return $this->chain->check($user);
    }
}