<?php

$string = "London, Paris, Amsterdam, New York, Berlin, Brisbane";

$cities = explode(", ", $string);
//echo "<pre>";
//print_r ($cities);

sort($cities);

echo "<ol>";
  foreach ($cities as $city) {
      echo "<li>" . $city . "</li>";
  }
echo "</ol>";

array_push($cities, "Sydney", "Helsinki", "Beijing", "Dublin", "Rome");

sort($cities);

echo "<ol>";
  foreach ($cities as $city) {
      echo "<li>" . $city . "</li>";
  }
echo "</ol>";
