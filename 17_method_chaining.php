<?php
spl_autoload_register(function ($className) {
    include("./17classes/{$className}.php");
});

$cal = new Calculation;
echo ($cal->getValue(5, 5)->getResult());
