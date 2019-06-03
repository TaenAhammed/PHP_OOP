<?php

class Python
{
    protected $fromInsidePhp;
    public function __construct(Php $obj)
    {
        $this->fromInsidePhp = $obj;
        $this->fromInsidePhp->framework()->cms();
    }
}
