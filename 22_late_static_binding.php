<?php
// late static binding

class PHP
{
    public static function framework()
    {
        // echo "Laravel is a framework. <br/>";
        // echo self::getClass() . "<br/>";
        echo static::getClass() . "<br/>";
    }
    // public static function getFramework()
    // {
    //     return self::framework();
    // }
    public static function getClass()
    {
        return __CLASS__;
    }
}

class childPHP extends PHP
{
    public static function getClass()
    {
        return __CLASS__;
    }
}

$php = new PHP;
// $php->getFramework();
$php->framework();
$childPhp = new childPHP;
$childPhp->framework();
