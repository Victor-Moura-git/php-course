<?php
$names = array('John', 'Mary', 'James', 'Amy');

sort($names);
//or reverse order rsort($names);

echo "<ol>";

foreach ($names as $name) {
    echo "<li>" . $name . "</li>";
}

echo "</ol>";
