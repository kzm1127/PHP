<?php

$userid=$_POST["userid"];
$password=$_POST["password"];

function login($userid,$password){
  $lines= file("user.csv",FILE_IGNORE_NEW_LINES);
  foreach ($lines as $line) {
    $user = explode(",",$line);
    if ($userid===$user[0] && $password===$user[1]) {
      return true;
    }
  }
  return false;
}

if (login($userid,$password)) {
  session_start();
    $_SESSION["id"]=$userid;
  header("Location: menu.php");
}else {
    header("Location: login.php");
}
