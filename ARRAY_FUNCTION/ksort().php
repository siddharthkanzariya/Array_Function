<?php
//alphabet pramane gothavse(CHADTO KRAM)
$fruits=array(
    "Gavava" => "green",
    "DragonFruit" => "pink",
    "Mango" => "orange",
    "Banana" => "yellow",
    "Apple" => "red",
);
$ksort=ksort($fruits);
foreach ($fruits as $key => $value)
{
    echo "<br>$key : $value";
   
}
 echo "<pre>";
    print_r($fruits);
