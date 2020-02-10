<?php
$string = "John|Sam|Billy";
echo $string . "<br>";
$newString = str_replace("|", " ", $string);
echo $newString;
