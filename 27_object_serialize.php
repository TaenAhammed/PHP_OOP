<?php
class Programming
{
    public $html;
    public $css;
    private $JavaScript;
    protected $php;

    public function __construct()
    {
        $this->html = "I know HTML";
        $this->css = "I know CSS";
        $this->JavaScript = "I'm a JavaScript Developer";
        $this->php = "I'm a php programmer";
    }
}

$programmer = new Programming();
$ser = serialize($programmer);
echo $ser;
file_put_contents("./27programmer.txt", $ser);

$getContent = file_get_contents('./27programmer.txt');
$unSer = unserialize($getContent);

echo ("<pre>");
print_r($unSer);
echo ("</pre>");
