<?php

class UserData
{
    private $userName;
    private $userId;

    public function __construct($userName, $userId)
    {
        $this->userName = $userName;
        $this->userId = $userId;
        echo ("UserName is: {$userName} and UserId is: {$userId}. <br/>");
    }

    public function __destruct()
    {
        unset($this->userName);
        unset($this->userId);
        echo ("userName and userId is destroyed.");
    }
}

$user = new UserData("Taen Ahammed", 3);
