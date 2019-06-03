<?php

// Interface
interface School
{
    public function mySchool();
}

interface College
{
    public function myCollege();
}

interface University
{
    public function myUniversity();
}

class Teacher implements School, College, University
{
    public function __construct()
    {
        $this->mySchool();
        $this->myCollege();
        $this->myUniversity();
    }

    public function mySchool()
    {
        echo ("I'm a school teacher. <br/>");
    }

    public function myCollege()
    {
        echo ("I'm a college teacher. <br/>");
    }

    public function myUniversity()
    {
        echo ("I'm a university teacher. <br/>");
    }
}

class Student implements School, College, University
{
    public function __construct()
    {
        $this->mySchool();
        $this->myCollege();
        $this->myUniversity();
    }

    public function mySchool()
    {
        echo ("I'm a school student. <br/>");
    }

    public function myCollege()
    {
        echo ("I'm a college student. <br/>");
    }

    public function myUniversity()
    {
        echo ("I'm a university student. <br/>");
    }
}

$teacher = new Teacher();
$teacher = new Student();
