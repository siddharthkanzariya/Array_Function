<?php
//UTARTO KRAM

$mobile=array(
    "apple" => "iphone14",
    "vivo" => "v20",
    "motorola" => "m12"
);
$krsort=krsort($mobile);
foreach ($mobile as $key => $value){
    echo "</br>$key = $value";
}