<?php
require("funcs.php");
$id=$_GET['id'];


$sutudents=file_get_contents(JSON);
$sutudents=json_decode($sutudents,true);

unset($sutudents[$id-1]);
sort($sutudents);


$json=json_encode($sutudents);
file_put_contents(JSON,$json,LOCK_EX);
header('location: sutudentlist.php');
die("");
