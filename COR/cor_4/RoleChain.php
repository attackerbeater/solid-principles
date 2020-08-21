<?php 

declare(strict_types=1);
 
class RoleChain extends AbstractChain
{
    private $validRoles = [
        'STUDENT',
        'LECTURER',
        'ADMIN',
    ];
    
    public function check(User $user): bool
    {   
        $roles = $this->validRoles;
        if(is_array($roles) && !empty($roles) && count($roles) > 0){
           foreach ($roles as $validRole) {
               if ($user->getRole() === $validRole) {
                   return parent::check($user);
               }
           }           
        }
        
        throw new Exception('Invalid role.');
    }
}