<?php
for ($i=1 ; $i <= 100 ; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FIZZ BUZZ";
    } elseif ($i % 3 == 0) {
        echo "FIZZ";
    } elseif ($i % 5 == 0) {
        echo "BUZZ";
    } else {
        echo $i;
    }
    echo "<br>";
}
