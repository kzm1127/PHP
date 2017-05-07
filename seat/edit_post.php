<?php
require("funcs.php");
$name=$_POST["name"];
$com=$_POST["com"];
$sid=$_POST["sid"];
if (!isset($_POST["front"])) {
  $front=false;
}else {$front=true;}
$count=0;
// var_dump($name);
// var_dump($com);
// var_dump($sid);
// var_dump($front);

$student=[];
$student["id"]=$sid;
$student["name"]=$name;
$student["com"]=$com;
$student["front"]=$front;

//var_dump($student);
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

var_dump($count);

if($count>6){
  header('location: http://localhost:8000/fronterror.php');
  die("");
}


if ($count<=6) {
  $json=json_encode($sutudents);
  file_put_contents(JSON,$json,LOCK_EX);
  header('location: http://localhost:8000/sutudentlist.php');
}


die("");
