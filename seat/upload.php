<?php
function upload(){
  $sutudents=file_get_contents("seat.json");
  $sutudents=json_decode($sutudents,true);

  for ($i=0; $i < 29; $i++) {
    if(isset($sutudents[$i])!=true){
      $sutudents[$i]["id"]=$i;
      $sutudents[$i]["name"]="empty";
      $sutudents[$i]["com"]="empty";
      $sutudents[$i]["front"]=false;
    }
  }
  return $sutudents;
}



 ?>
