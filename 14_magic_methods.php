<?php

/*Magic Methods
__construct()
__destruct()
__get($property)
__set($property, $value)
__call($method, $arg_array)
*/

class Student
{
    public $name;

    public function describe()
    {
        echo ("I'm a student. <br/>");
    }

    public function __get($pm)
    {
        echo ("{$pm} property doesn't exist. <br/>");
    }

    public function __set($pm, $value)
    {
        echo ("We set {$pm} -> {$value} which wasn't exist. <br/>");
    }

    public function __call($mt, $arr)
    {
        echo ("There is no {$mt}() method and arguments are: " . implode(", ", $arr));
    }
}

$st = new Student;
$st->describe();
$st->age;
$st->roll = 20;
$st->getInfo("Taen", 20, "Software Engineer");
