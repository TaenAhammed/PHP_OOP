<?php
class User
{
    protected $age;

    public function __construct($age)
    {
        $this->age = $age;
    }

    public function userInfo()
    {
        echo ("Age is: {$this->age} (inside parent class) <br/>");
    }
}

class Admin extends User
{
    public function userInfo()
    {
        echo ("Age is: {$this->age} (inside child class) <br/>");
    }
}

$user = new User(20);
$user->userInfo();

$admin = new Admin(30);
$admin->userInfo();

$user->age = 40;
