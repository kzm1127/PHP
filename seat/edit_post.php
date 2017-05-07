<?php
require("funcs.php");
$name=$_POST["name"];
$com=$_POST["com"];
$sid=$_POST["sid"];
if (!isset($_POST["front"])) {
  $front=false;
}else {$front=true;}
$count=0;

$student=[];
$student["id"]=$sid;
$student["name"]=$name;
$student["com"]=$com;
$student["front"]=$front;

$sutudents=file_get_contents(JSON);
$sutudents=json_decode($sutudents,true);

foreach ($sutudents as &$esutudent) {
  if($esutudent["id"]==$student["id"]){
    $esutudent["name"]=$student["name"];
    $esutudent["com"]=$student["com"];
    $esutudent["front"]=$student["front"];
    break;
  }
}

for ($i=0; $i < count($sutudents); $i++) {
  if ($sutudents[$i]["front"]==true) {
    $count++;
  }
}

if($count>6){
  header('location: fronterror.php');
  die("");
}


if ($count<=6) {
  $json=json_encode($sutudents);
  file_put_contents(JSON,$json,LOCK_EX);
  header('location: sutudentlist.php');
}


die("");
