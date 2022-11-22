<?php
$arr=array("1","100");
$number= range("1", "100");
foreach ($arr as $key => $value)
{
    echo "</br>$key - $value";
    echo "<pre>";
    print_r($number);
}