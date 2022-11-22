<?php
$arr=array(
    "smartwatch" => "watch",
    "android" => "mobile",
    "wireless" => "buds"
);
$uppercase=array_change_key_case($arr,CASE_UPPER);
echo "<pre>";
print_r($uppercase);