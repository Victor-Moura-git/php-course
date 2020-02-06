<?php

$sentence = "The quick brown fox jumped over the lazy dog but the dog was not at all happy about it and started to bark at the fox.";

#grouping together in a diferent way
$sentence2 = "The quick brown fox ";
$sentence2 .= "jumped over the lazy dog ";
$sentence2 .= "but the dog was not at all happy";
$sentence2 .= "about it and started to bark at the fox.";

#both show the same result
echo $sentence;
echo "<br>";
echo $sentence2;
