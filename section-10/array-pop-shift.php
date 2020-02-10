<?php

$cities = ["London", "Paris", "Amsterdam", "New York"];

#Removing the last value of the array
$lastCity = array_pop($cities);

echo $lastCity;
echo "<br>";
print_r($cities);
echo "<br>";

#Removing the first value of the array
$firstCity = array_shift($cities);

echo $firstCity;
echo "<br>";
print_r($cities);
