<?php

$count=$_POST['count'];
if (isset($_POST['submit'])) {
    if ($count == 'yCount') {
        $stringCount = $_POST['stringCount'];
        $lenght = strlen($stringCount);
        echo "Your string is " . $lenght . " characters long.";
    } elseif ($count == 'nCount') {
        $stringCount = $_POST['stringCount'];
        //$stringCount = strlen($stringCount) - (str_word_count($stringCount) - 1);
        $stringCount = str_replace(" ", "", $stringCount);
        $lenght = strlen($stringCount);
        echo "Your string is " . $lenght . " characters long.";
    }
}
