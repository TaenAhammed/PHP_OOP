<?php
$arr = ['HTML', 'CSS', 'JavaScript', 'PHP'];
$ai = new ArrayIterator($arr);
// echo $ai->current() . "<br/>";
// $ai->next();
// echo $ai->current();

// foreach ($ai as $value) {
//     echo $value . "<br/>";
// }

// $limit = new LimitIterator($ai, 0, 2);
// foreach ($limit as $value) {
//     echo $value . "<br/>";
// }

$ci = new CachingIterator($ai);
foreach ($ci as $value) {
    echo $value;
    if ($ci->hasNext()) {
        echo ', ';
    }
}
