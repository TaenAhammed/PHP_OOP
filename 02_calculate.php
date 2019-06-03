<?php

class Calculate
{
    private $n1;
    private $n2;

    function __construct($a, $b)
    {
        $this->n1 = $a;
        $this->n2 = $b;
    }

    public function add()
    {
        echo ("Summation: " . ($this->n1 + $this->n2) . "<br/>");
    }

    public function sub()
    {
        echo ("Subtraction: " . ($this->n1 - $this->n2) . "<br/>");
    }

    public function mul()
    {
        echo ("Multiplication: " . ($this->n1 * $this->n2) . "<br/>");
    }

    public function div()
    {
        echo ("Division: " . ($this->n1 / $this->n2) . "<br/>");
    }
}
