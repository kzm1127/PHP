<?php
require("funcs.php");
$name=$_POST["name"];
$com=$_POST["com"];
$newid=0;
$newstudent=[];
if (!isset($_POST["front"])) {
  $front=false;
}else {$front=true;}
$count=0;

if ($name=="") {
  header('location: http://localhost:8000/sutudentlist.php');
}

if ($com=="") {
  header('location: http://localhost:8000/sutudentlist.php');
}

$sutudents=file_get_contents(JSON);
$sutudents=json_decode($sutudents,true);



$count=count($sutudents);

if(29<=$count){
  header('location: http://localhost:8000/fronterror.php');
  die("");
}

$newid=count($sutudents)+1;

$newstudent["id"]=$newid;
$newstudent["name"]=$name;
$newstudent["com"]=$com;
$newstudent["front"]=$front;

array_push($sutudents,$newstudent);
$count=0;
for ($i=0; $i < count($sutudents); $i++) {
  if ($sutudents[$i]["front"]==true) {
    $count++;
  }
}
if($count>6){
  header('location: http://localhost:8000/fronterror.php');
  die("");
}

$json=json_encode($sutudents);
file_put_contents(JSON,$json,LOCK_EX);
header('location: http://localhost:8000/sutudentlist.php');
