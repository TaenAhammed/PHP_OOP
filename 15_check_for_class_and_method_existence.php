<?php

include("./15_student.php");

if (class_exists("Student")) {
    $st = new Student;

    if (method_exists($st, "describe")) {
        $st->describe();
    } else {
        echo ("Method doesn't exist. <br/>");
    }
} else {
    echo ("Class doesn't exist. <br/>");
}
