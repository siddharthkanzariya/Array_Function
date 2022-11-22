<?php
$arr1=array('c','c++','c','php','js','php','js');
$arr2=array('1','2','3');

$newarr=array_merge($arr1,$arr2);
echo "<pre>";
print_r($newarr);