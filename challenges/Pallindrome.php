<?php
$token = 0;

if (isset($_POST['submit'])) {
    $pall = $_POST['pall'];
    $pall = str_replace(" ", "", $pall);
    $lenght = strlen($pall);
    $correctlenght = floor($lenght/2);
    $pall = str_split($pall);

    for ($i=0 ; $i<$correctlenght ; $i++) {
        if ($pall[$i] == $pall[$lenght-$i-1]) {
            $token++;
        }
    }
    if ($token == $correctlenght) {
        echo "Its a pallindrome!";
    } else {
        echo "Its not a pallindrome!";
    }
}
