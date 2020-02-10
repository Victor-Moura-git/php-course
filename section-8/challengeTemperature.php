<?php

$decimals = $_POST['decimals'];
if (isset($_POST['submit']) && $decimals != null) {
    $temperature = $_POST['temperature'];
    $units = $_POST['units'];
    if ($units == 'Celsius') {
        $temperature = round($temperature, $decimals);
        echo "Your temperature in Celsius is " . $temperature;
    } else {
        $temperature = round($temperature, $decimals);
        echo "Your temperature in Fahrenheit is " . $temperature;
    }
} else {
    echo "Fill the form correctly.";
}
