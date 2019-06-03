<?php

class Person
{
    public $name = "Taen";
    public $age = 20;

    private $email = "taenahammed7@gmail.com";
    protected $password = 12345;

    public function iterateInsideClass()
    {
        foreach ($this as $key => $value) {
            echo ("Key: {$key} => Value: {$value} <br/>");
        }
    }
}

$person = new Person;

foreach ($person as $key => $value) {
    echo ("Key: {$key} => Value: {$value} <br/>");
}

echo ("Iteration inside class: <br/>");
$person->iterateInsideClass();
