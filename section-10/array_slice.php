<?php

//array_slice ( array $array , int $offset [, int $length = NULL [, bool $preserve_keys = false ]] ) : array
#Removing part of the array
$letters = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q"];

#Slice the array from the fifth element and ahead
$result = array_slice($letters, 5);

echo "<pre>";
print_r($result);

#Slice the array from the first element till the fifth element
$result = array_slice($letters, 0, 5);
print_r($result);

//Slice the five last elements of the array
$result = array_slice($letters, -5, 5);
print_r($result);
