<?php
// function __autoload($className)
// {
//     include("./16classes/{$className}.php");
// }

spl_autoload_register(function ($className) {
    include("./16classes/{$className}.php");
});

$js = new JavaScript();
$php = new Php();
$py = new Python();
