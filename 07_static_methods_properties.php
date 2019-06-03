<?php

class User
{
    public static $name;

    public function getUserName()
    {
        echo ("User name is: " . self::$name . ". <br/>");
    }
}

User::$name = "Taen Ahammed";

User::getUserName();
