<?php
spl_autoload_register(function ($className) {
    include("./18classes/{$className}.php");
});

$cal = new Calculation;
$nums = [
    ["Number one: ", 10, 10],
    ["Number two: ", 20, 20]
];
$cal->getValue($nums);

// new Python(new Php);
$php = new Php();
$py = new Python($php);
