<?php

//Converting csv files to array
$string = "John, Sarah, Ken, Ben, Amy";

$names = explode(", ", $string);
echo "<pre>";
print_r($names);

//Returning to csv file (only names)
$imploded = implode("|", $names);
echo $imploded;
