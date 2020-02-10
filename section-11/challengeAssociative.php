<?php
$cities = array("Italy"=>"Rome", "Luxembourg"=>"Luxembourg",
                "Belgium"=> "Brussels", "Denmark"=>"Copenhagen",
                "Finland"=>"Helsinki", "France" => "Paris",
                "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana",
                "Germany" => "Berlin", "Greece" => "Athens",
                "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam",
                "Portugal"=>"Lisbon", "Spain"=>"Madrid",
                "Sweden"=>"Stockholm", "United Kingdom"=>"London",
                "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius",
                "Czech Republic"=>"Prague", "Estonia"=>"Tallin",
                "Hungary"=>"Budapest", "Latvia"=>"Riga",
                "Malta"=>"Valetta", "Austria" => "Vienna",
                "Poland"=>"Warsaw");

/*
Tip: Use the asort() function to sort an associative array in ascending order, according to the value.

Tip: Use the krsort() function to sort an associative array in descending order, according to the key.
*/
asort($cities);

foreach ($cities as $country => $city) {
    echo "The capital city of $country is $city.";
    echo "<br>";
}
