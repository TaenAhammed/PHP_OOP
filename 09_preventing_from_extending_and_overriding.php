<?php

// Parent class / Super class
/*final*/ class User
{
    protected $userName;
    protected $userId;

    public function __construct($userName, $userId)
    {
        $this->userName = $userName;
        $this->userId = $userId;
    }

    public /*final*/ function userInfo()
    {
        echo ("UserName is: {$this->userName} and UserId is: {$this->userId} <br/>");
    }
}

// Child class / sub class
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
