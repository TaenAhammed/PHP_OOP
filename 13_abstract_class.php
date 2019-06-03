<?php
// Abstract class

abstract class Student
{
    protected $name;
    protected $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function details()
    {
        echo ("{$this->name} is {$this->age} years old. <br/>");
    }

    public function teacherName()
    {
        echo ("Taen is his teacher. <br/>");
    }

    abstract function hobby();
}

class Boy extends Student
{
    public function describe()
    {
        return parent::details() . "And he's a school student. <br/>";
    }

    public function hobby()
    {
        return "And he likes to read story books. <br/>";
    }
}

$boy = new Boy("Tamim", 9);
echo ($boy->describe());
echo ($boy->hobby());
$boy->teacherName();
