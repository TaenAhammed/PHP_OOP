<?php

// Group use declarations
use language\{Js, Php, Python};

include("classes/python.php");
include("classes/php.php");
include("classes/javascript.php");

new Js();
new Php();
new Python();
