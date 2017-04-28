<?php
require('../common/functions.php');
session_start();
$userId=$_SESSION["userId"];

if (is_null($userId)) {
  send_error_page();
}
$id=$_GET['id'];
$articles=get_article($id);
$id--;

delete_article($id);
redirect('admin/index.php');
