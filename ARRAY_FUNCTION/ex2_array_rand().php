<?php
$arr=array('c','c++','php','js');
$indexofarray=array_rand($arr,3);

foreach ($indexofarray as $key => $value)
{
    echo "</br>$key : <b>".$arr[$value] . "</b>";
}