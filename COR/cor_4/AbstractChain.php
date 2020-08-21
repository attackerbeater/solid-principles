<?php 
declare(strict_types=1);
 
abstract class AbstractChain
{
    /** @var self */
    private $next;
 
    public function linkNext(self $next): self
    {   
        $this->next = $next;
    
        return $next;
    }
 
    public function check(User $user): bool
    {
        return $this->next ? $this->next->check($user) : true;
    }
}
