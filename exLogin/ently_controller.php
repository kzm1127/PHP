<?php

function entry($userid,$password){
  $c=",";
  $line=$userid.$c.$password;
  file_put_contents("user.csv",$line,FILE_APPEND);
}


$userid = $_POST["userid"];
$password = $_POST["password"];

if ($userid != "" && $password != "") {
  entry($userid,$password);
  session_start();
  $_SESSION["id"] = $userid;
  header("Location: menu.php");
}else {header("Location: entry.php");}
