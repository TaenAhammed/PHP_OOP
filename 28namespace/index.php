<?php
include("classes/python.php");
include("classes/php.php");
include("classes/javascript.php");

use \language\great\Python as py;
use const language\sucks\LOVE;
use \language\functional\Js;
use function language\sucks\identity;

// $python = new \language\great\Python();
$php = new \language\sucks\Php();
$js = new \language\functional\Js();
$py = new py();

echo ("<pre>");
print_r(ANIMALS);
echo ("</pre>");

echo (LOVE);
echo ("<br/>");
echo (language\sucks\LOVE);
echo ("<br/>");

// We don't need to store object into a variable every time.
new Js();
identity();
