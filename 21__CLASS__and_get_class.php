<?php

// __CLASS__ magic constant returns current working class.
// get_class() function returns that class where from we make object. 


abstract class Php
{
    public function method1()
    {
        echo ("Base class constant and class name: " . __CLASS__ . "<br/>");
        echo ("Base class function and class name: " . get_class($this) . "<br/>");
    }
}

class ChildPhp extends Php
{
    public function method2()
    {
        echo ("Child class constant and class name: " . __CLASS__ . "<br/>");
        echo ("Child class function and class name: " . get_class($this) . "<br/>");
    }
    public function method3()
    {
        parent::method1();
    }
}

$p = new ChildPhp();
$p->method1();
echo ("<hr/>");
$p->method2();
echo ("<hr/>");
$p->method3();
