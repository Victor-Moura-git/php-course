<?php
#return the time, in seconds, between January 1 1970 and the date
#(1st January 2021)
$date = strtotime('1st January 2021');
//echo $date;

#subtraction of $date and the time, in seconds, of today
$seconds = $date - time();
$minutes = $seconds / 60;
$hours = $minutes / 60;
$days = $hours / 24;

echo ceil($days);
