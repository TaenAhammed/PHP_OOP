<?php

trait Php
{
    public $name = "TAEN";
    public function phpCoder()
    {
        echo ("I'm a PHP coder {$this->name}. <br/>");
    }
}

trait JavaScript
{
    public function __construct()
    {
        $this->jsCoder();
    }

    public function jsCoder()
    {
        echo ("I'm a JavaScript coder. <br/>");
    }
}

class coderOne
{
    use Php, JavaScript;
}

$c1 = new coderOne();
$c1->phpCoder();
