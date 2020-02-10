<?php

function calculate($number1, $number2){
  $add = $number1 + $number2;
  $subtract = $number1 - $number2;
  return array($add, $subtract);
}

$result = calculate(10, 3);

echo "<pre>";
print_r($result);


 ?>
