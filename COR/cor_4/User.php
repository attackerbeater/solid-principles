<?php 
declare(strict_types=1);
 
class User
{
    private $username;
    private $password;
    private $role;
    private $isActive;
 
    public function __construct(
        string $username,
        string $password, 
        string $role, 
        bool $isActive)
    {
        $this->username = $username;
        $this->password = $password;
        $this->role = $role;
        $this->isActive = $isActive;
    }
 
    public function getUsername(): string
    {
        return $this->username;
    }
 
    public function getPassword(): string
    {
        return $this->password;
    }
 
    public function getRole(): string
    {
        return $this->role;
    }
 
    public function isActive(): bool
    {
        return $this->isActive;
    }
}