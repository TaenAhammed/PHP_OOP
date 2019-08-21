<?php
// Working with php ArrayObject

$arr = ['HTML', 'CSS', 'JavaScript', 'PHP'];
$coderSkill = new ArrayObject($arr);
$coderSkill->append("Go");

$iterator = $coderSkill->getIterator();

while ($iterator->valid()) {
    echo $iterator->current() . '<br/>';
    $iterator->next();
}
