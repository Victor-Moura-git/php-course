<?php

$addtest = 0;
$i = 1;
//$k = 1;
$ISBN = $_POST['ISBN'];
$size = strlen($ISBN);
if (isset($_POST['submit']) && $size == 10) {
    //echo "<pre>";
    $numbers = str_split($ISBN);
    //print_r($numbers);

    foreach ($numbers as $numbersTest) {
        $numbersTest = $i * $numbersTest;
        $addTest += $numbersTest;
        $i++;
    }

    if ($addTest % 11 == 0) {
        echo "Your ISBN number $ISBN is a valid number!";
    } else {
        echo "Your ISBN number $ISBN is NOT a valid number!";
    }

    /* Outra maneira de fazer o mesmo exercício
    $size = strlen($ISBN);
    for($i=0 ; $i<$size-1 ; $i++){
      //echo $numbers[$i];
      $soma += $k * $numbers[$i];
      $k++;
    }
    echo $soma;
    */
} else {
    echo "Please enter a valid number";
}
