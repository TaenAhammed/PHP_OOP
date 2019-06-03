<?php
class Calculation
{
    public function getValue(array $a)
    {
        foreach ($a as $arr) {
            echo ($arr[0] . ": " . $arr[1] * $arr[2] . "<br/>");
        }
    }
}
