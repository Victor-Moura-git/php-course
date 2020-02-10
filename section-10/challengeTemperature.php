<?php
$temperatures = array(32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5,
                      30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3,
                      32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3,
                      25.2, 29.1, 28.6, 30.6);

$sum = array_sum($temperatures);
$count = count($temperatures);
$verage = $sum/$count;
$verage = round($verage, 1);
echo "The average daily temperature is $verage." . "<br>";

sort($temperatures);
$highestTemperature = array_slice($temperatures, -5, 5);
$lowestTemperature = array_slice($temperatures, 0, 5);
//foreach($highestTemperature){
  //echo
//}
echo "The 5 lowest temperatures are ";
foreach($lowestTemperature as $lT){
  echo $lT . "°C ";
}
echo "<br>";

echo "The 5 highest temperatures are ";
foreach($highestTemperature as $hT){
  echo $hT . "°C ";
}
