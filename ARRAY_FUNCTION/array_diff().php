<?php
$arr1=array("a","b","c","d","e","f","g");
$arr2=array("a","b","c","d","e");

$diff=array_diff($arr1,$arr2);

echo "<pre>";
print_r($diff);