<?php 

declare(strict_types=1);

class UsernameChain extends AbstractChain
{
    public function check(User $user): bool
    {
        if (null !== $user->getUsername()) {
            return parent::check($user);
        }
 
        throw new Exception('Invalid username.');
    }
}
