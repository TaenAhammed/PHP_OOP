<?php
// Polymorphism
// When we start to extend classes, and add functionality to them which wasn't there previously, and even override existing methods (functions), this is called polymorphism.

// The basis of polymorphism is Inheritance and overridden methods.

class User
{
    protected $userName;
    protected $userId;

    public function __construct($userName, $userId)
    {
        $this->userName = $userName;
        $this->userId = $userId;
    }

    public function userInfo()
    {
        echo ("UserName is: {$this->userName} and UserId is: {$this->userId} <br/>");
    }
}

class Admin extends User
{
    public $level;

    public function userInfo()
    {
        echo ("UserName is: {$this->userName} and UserId is: {$this->userId} and level is: {$this->level} <br/>");
    }
}

$userName = "Taen Ahammed";
$userId = 10;

$user = new User($userName, $userId);
$user->userInfo();


$level = "Administrator";

$admin = new Admin("Admin", 1);
$admin->level = $level;
$admin->userInfo();

if ($admin instanceof User) {
    echo ("admin is inherited form user.");
}
