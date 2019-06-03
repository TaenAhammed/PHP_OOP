<?php
class Person
{
    private $name;
    private $age;
    private $id;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
        echo ("Username is: {$this->name} and age is: {$this->age}. <br/>");
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function __destruct()
    {
        if (!empty($this->id)) {
            echo ("Saving person. <br/>");
        }
    }
}

$person = new Person('Taen Ahammed', 20);
$person->setId(5);
unset($person);
