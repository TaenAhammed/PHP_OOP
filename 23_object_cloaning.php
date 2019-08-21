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
}

$go = new Language;
$go->setCategory("Object Oriented Programming");
$go->setFramework("Revel");

// $js = $go;
// copy by value
// shallow clone
$js = clone $go;

$js->setCategory("Functional");
$js->setFramework("EXPRESS");

$go->getCategory();
$go->getFramework();

$js->getCategory();
$js->getFramework();
