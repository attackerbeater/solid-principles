<?php 

declare(strict_types=1);
 
class StatusChain extends AbstractChain
{
    public function check(User $user): bool
    {
        if ($user->isActive()) {
            return parent::check($user);
        }
 
        throw new Exception('Invalid status.');
    }
}