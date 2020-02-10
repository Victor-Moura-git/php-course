<?php

if(isset($_POST['submit'])){
  setcookie('name', $_POST['Name'], time()+3600);
  setcookie('age', $_POST['Age'], time()+3600);
  setcookie('color', $_POST['favoriteColor'], time()+3600);
}
