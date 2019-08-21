<?php
class Language
{
    private $category;
    private $framework;

    public function setCategory($value)
    {
        $this->category = $value;
    }
    public function setFramework($value)
    {
        $this->framework = $value;
    }
    public function getCategory()
    {
        echo $this->category . "<br/>";
    }
    public function getFramework()
    {
        echo $this->framework . "<br/>";
    }
    // deeply clone by overloading __clone magic method.
    public function __clone()
    {
        $lang = new Language;
        $lang->setCategory($this->category);
        $lang->setFramework($this->framework);
    }
}

$go = new Language;
$go->setCategory("Object Oriented Programming");
$go->setFramework("Revel");

// $js = $go;
// shallow clone
// copy by value
$js = clone $go;

$js->setCategory("Functional");
$js->setFramework("EXPRESS");

$go->getCategory();
$go->getFramework();

$js->getCategory();
$js->getFramework();
