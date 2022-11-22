<?php
//Press F5
$movie=array("Boss","RRR","Simba","Godfather");

$shuffle=shuffle($movie);
foreach ($movie as $key => $value)
{
    echo "<br> $value";
}