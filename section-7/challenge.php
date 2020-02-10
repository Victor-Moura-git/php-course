<?php
$randomNumber = rand(1, 2);
if ($randomNumber == 1) {
    echo "Heads, I win!";
} elseif ($randomNumber == 2) {
    echo "Tails, you win!";
}
echo "<br>";

for ($i=1 ; $i<=100 ; $i++) {
    $randomNumber = rand(1, 2);
    if ($randomNumber == 1) {
        $heads++;
    } elseif ($randomNumber == 2) {
        $tails++;
    }
}
echo "There were" . " " . $heads . " " . "heads and" . " " . $tails . " " . "tails.";
