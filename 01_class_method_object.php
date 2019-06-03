<?php

// Class
class Person
{
    // Properties
    // public $name = "Taen Ahammed";
    public $name;
    private $age;

    // Methods
    public function personName()
    {
        return $this->name;
    }

    public function personAge($value)
    {
        return $this->age = $value;
    }
}

// Object
$person = new Person;
$person->name = 'Taen';

echo ($person->name . "\n");   // -> object operator
echo ($person->personName() . "\n");
echo ($person->personAge(20));
