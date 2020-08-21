<?php 
declare(strict_types=1);
 
require_once 'AbstractChain.php';
require_once 'CredentialChain.php';
require_once 'UsernameChain.php';
require_once 'StatusChain.php';
require_once 'RoleChain.php';
require_once 'User.php';
require_once 'Authenticate.php';
 
$chain = new CredentialChain();
$chain
    ->linkNext(new StatusChain())
    ->linkNext(new RoleChain())
    ->linkNext(new UsernameChain());

try {
    (new Authenticate($chain))->login(
        new User('admin', 'admin123', 'ADMIN', true)
    );
 
    echo 'Success'.PHP_EOL;
} catch (Exception $e) {
    echo $e->getMessage().PHP_EOL;
}