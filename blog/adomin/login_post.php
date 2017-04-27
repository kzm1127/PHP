<?php
require('../common/functions.php');

$userid=$_POST["userid"];
$password=$_POST["password"];

if (is_null($userid) || $userid==='' || mb_strlen($userid, DEFAULT_ENCODE) > 20) {
  send_error_page();
}

if (is_null($password) || $password==='' || mb_strlen($password, DEFAULT_ENCODE) > 20) {
  send_error_page();
}

 $result=$userid;

 if ($result) {
   session_start();
   $_SESSION["id"]=$userid;
   redirect("admi/index.php");
 }else {
   send_error_page();
 }
