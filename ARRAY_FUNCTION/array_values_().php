<?php
$arr=array(
    "a"=>"apple",
    "b"=>"banana",
    "c"=>"chiku"
);
$newarr=array_values($arr);

foreach ($newarr as $key => $value)
{
    echo "<br>$key : $value";


}