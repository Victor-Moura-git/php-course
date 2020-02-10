<?php

$i = 1;
$digit = 0;
$sumEven = 0;
$sumOdd = 0;

$creditCard = $_POST['number'];
$lenght = strlen($creditCard);

//string into array
$creditCard = str_split($creditCard);

//4 last digits
$last4 = array_slice($creditCard, -4, 4);

//reverse array
$creditCard = array_reverse($creditCard);

/*
for ($i=1 ; $i<=$lenght ; $i++) {
    if ($i % 2 == 0) {
        $digit = $creditCard[$i-1] * 2;
        if ($digit > 9) {
            $digit = $digit - 9;
        }
        $sumEven += $digit;
    //echo "Even" . $sumEven . "<br>";
    } else {
        $sumOdd += $creditCard[$i-1];
        //echo "Odd" . $sumOdd . "<br>";
    }
}

echo "Your credit card number ending in ";
foreach ($last4 as $l4) {
    echo $l4;
};

$sumTotal = $sumOdd + $sumEven;
//echo $sumTotal;
if ($sumTotal % 10 == 0) {
    echo " is valid.";
} else {
    echo " is not valid.";
}
*/

foreach ($creditCard as $cc) {
    if ($i % 2 == 0) {
        $digit = $cc * 2;
        if ($digit > 9) {
            $digit = $digit - 9;
            //echo $sumEven;
        }
        $sumEven += $digit;
    } else {
        $sumOdd += $cc;
    }
    $i++;
}
$sumTotal = $sumEven + $sumOdd;
//echo $sumTotal;

echo "Your credit card number ending in ";
foreach ($last4 as $l4) {
    echo $l4;
};

$sumTotal = $sumOdd + $sumEven;
//echo $sumTotal;
if ($sumTotal % 10 == 0) {
    echo " is valid.";
} else {
    echo " is not valid.";
}
