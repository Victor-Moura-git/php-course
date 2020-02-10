<?php

//Replacing the "bad words" with "calopsita
$text = $_POST['stringText'];
$badWords = array(marianinha, cacatua, aganorpa);
if (isset($_POST['submit'])) {
    foreach ($badWords as $badWord) {
        $text = str_replace($badWord, "calopsita", $text);
    }
    echo $text;
}
