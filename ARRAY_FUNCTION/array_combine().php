<?php
$arr1=array("iphone14","iphone13","iphone12");
$arr2=array("purple","black","white");
$newarr=array_combine($arr1, $arr2);
echo "<pre>";
print_r($newarr);