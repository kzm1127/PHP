<?php
require("funcs.php");
$count=0;
$sutudents=file_get_contents(JSON);
$sutudents=json_decode($sutudents,true);
shuffle($sutudents);

for ($i=0; $i < count($sutudents); $i++) {
  if($sutudents[$i]["front"]==true){
    $count++;
  }
}


if ($count<=6) {
  for ($i=0; $i < count($sutudents); $i++) {
    if($sutudents[$i]["front"]==true){
      $ran=rand(0,5);
      for (;;) {
        if ($sutudents[$ran]["front"]==true) {
          $ran=rand(0,5);
        }else {break;}
      }
      $tmp=$sutudents[$ran];
      $sutudents[$ran]=$sutudents[$i];
      $sutudents[$i]=$tmp;
    }
  }
}

$json=json_encode($sutudents);
file_put_contents(JSON,$json,LOCK_EX);


header('location: http://localhost:8000/index.php');

 ?>
