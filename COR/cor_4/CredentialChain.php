<?php 

declare(strict_types=1);
 
class CredentialChain extends AbstractChain
{
    private $validCredentials = [
        
        ['username' => 'admin', 'password' => 'admin123'],
        ['username' => 'hello', 'password' => '123123'],
        ['username' => 'inanzzz', 'password' => '321321'],
        ['username' => 'inanzzz', 'password' => '123123']
    ];
 
    public function check(User $user): bool
    {
        foreach ($this->validCredentials as $validCredential) {
            if (
                $user->getUsername() === $validCredential['username'] &&
                $user->getPassword() === $validCredential['password']
            ) {
                return parent::check($user);
            }
        }
 
        throw new Exception('Invalid credentials.');
    }
}

