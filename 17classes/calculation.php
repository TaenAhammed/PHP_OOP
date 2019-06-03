<?php
class Calculation
{
    private $num1;
    private $num2;
    private $result;

    public function getValue($a, $b)
    {
        $this->num1 = $a;
        $this->num2 = $b;
        return $this;
    }

    public function getResult()
    {
        $this->result = $this->num1 + $this->num2;
        return $this->result;
    }
}
