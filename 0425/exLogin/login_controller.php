<?php

$userid=$_POST["userid"];
$password=$_POST["password"];

if ($userid==="itc" && $password==="201508c" ||
$userid==="tanaka" && $password==="ito") {
  include("menu.php");
}else {
    include("login.php");
}
