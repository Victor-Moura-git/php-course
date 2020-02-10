<?php

$cities = ["London", "Paris", "Amsterdam", "New York", "Berlin", "Brisbane"];

foreach ($cities as $city) {
    echo $city . "<br>";
}


$students = array("Sam"=>12, "Holly"=>13, "John"=>9);

//include key($student) and value($age) in an associative array
foreach ($students as $student=>$age) {
  echo $student . " is  " . $age .  " years old.";
  echo "<br>";
}
