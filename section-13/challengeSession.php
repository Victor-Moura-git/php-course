<?php

session_start();

if(isset($_SESSION['hits'])){
  $_SESSION['hits']++;
  echo "You visited the page " . $_SESSION['hits'] . " times." ;
} else {
  $_SESSION['hits'] = 1;
  echo "This is the first time you visit the page.";
}
