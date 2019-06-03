<?php

class Person
{
    const NAME = "Taen Ahammed";

    public function personName()
    {
        echo ("Person name is: " . Person::NAME . ". <br/>");
        echo ("Person name is: " . self::NAME . ".");
    }
}

$person = new Person;
$person->personName();
