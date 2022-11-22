<?php
//je repeat thay e batave
$arr1=array(
    0=>"apple",
    1=>"banana",
    2=>"chiku"
);
$arr2=array(
    3=>"apple",
    4=>"gavava",
    5=>"chiku"
);

echo "<pre>";
print_r(array_intersect($arr1,$arr2));
