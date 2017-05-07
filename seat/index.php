<?php
//require("upload.php");
require("funcs.php");

  $sutudents=file_get_contents(JSON);
  $sutudents=json_decode($sutudents,true);
  //shuffle($sutudents);
  //var_dump($sutudents[0]);
  for ($i=0; $i < 29; $i++) {
    if(isset($sutudents[$i])!=true){
      $sutudents[$i]["id"]=$i;
      $sutudents[$i]["name"]="empty";
      $sutudents[$i]["com"]="empty";
      $sutudents[$i]["front"]=false;
    }
  }

$i=0;

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>席替え</title>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">



  </head>
  <body>
    <center><h1>座席表</h1></center>
    <hr>
  <br>
  <div class="container">
  <div class="row show-grid">
  <div class="col-md-4"></div>
  <div class="col-md-4"><div style="border: 1px solid #000; padding: 10px;"><center>プロジェクター</center></div></div>
  <div class="col-md-4"></div>
  </div>
  </div>
  <br>

  <div class="container">
  <div class="row">
  <div class="col-md-4"></div>
  <div class="col-md-4"></div>
  <div class="col-md-4"><div style="border: 1px solid #000; padding: 10px;"><center>murayama333</center></div></div>
  <div class="col-md-4"></div>
  </div>
  </div>

  <br><br><br><br><br>


  <div class="container">
  <div class="row">

<!-- 左座席 -->
  <div class="col-md-4">
      <div class="row">
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i]["name"]?></center><center><?=$sutudents[$i]["com"]?></center></div></div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+1]["name"]?></center><center><?=$sutudents[$i+1]["com"]?></center></div></div>
      </div><br>
      <div class="row">
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+6]["name"]?></center><center><?=$sutudents[$i+6]["com"]?></center></div></div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+7]["name"]?></center><center><?=$sutudents[$i+7]["com"]?></center></div></div>
      </div><br>
      <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+12]["name"]?></center><center><?=$sutudents[$i+12]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+13]["name"]?></center><center><?=$sutudents[$i+13]["com"]?></center></div> </div>
      </div><br>
      <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+18]["name"]?></center><center><?=$sutudents[$i+18]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+19]["name"]?></center><center><?=$sutudents[$i+19]["com"]?></center></div> </div>
      </div><br>
      <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+24]["name"]?></center><center><?=$sutudents[$i+24]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+25]["name"]?></center><center><?=$sutudents[$i+25]["com"]?></center></div> </div>
      </div>
  </div>

<!-- 中座席 -->
  <div class="col-md-4">
      <div class="row">
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+2]["name"]?></center><center><?=$sutudents[$i+2]["com"]?></center></div></div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+3]["name"]?></center><center><?=$sutudents[$i+3]["com"]?></center></div></div>
      </div><br>
      <div class="row">
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+8]["name"]?></center><center><?=$sutudents[$i+8]["com"]?></center></div></div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+9]["name"]?></center><center><?=$sutudents[$i+9]["com"]?></center></div></div>
      </div><br>
      <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+14]["name"]?></center><center><?=$sutudents[$i+14]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+15]["name"]?></center><center><?=$sutudents[$i+15]["com"]?></center></div> </div>
      </div><br>
      <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+20]["name"]?></center><center><?=$sutudents[$i+20]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+21]["name"]?></center><center><?=$sutudents[$i+21]["com"]?></center></div> </div>
      </div><br>
      <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+26]["name"]?></center><center><?=$sutudents[$i+26]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+27]["name"]?></center><center><?=$sutudents[$i+27]["com"]?></center></div> </div>
      </div>
  </div>

<!-- 右座席 -->
  <div class="col-md-4">
      <div class="row">
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+4]["name"]?></center><center><?=$sutudents[$i+4]["com"]?></center></div></div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+5]["name"]?></center><center><?=$sutudents[$i+5]["com"]?></center></div></div>
      </div><br>
      <div class="row">
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+10]["name"]?></center><center><?=$sutudents[$i+10]["com"]?></center></div></div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+11]["name"]?></center><center><?=$sutudents[$i+11]["com"]?></center></div></div>
      </div><br>
      <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+16]["name"]?></center><center><?=$sutudents[$i+16]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+17]["name"]?></center><center><?=$sutudents[$i+17]["com"]?></center></div> </div>
      </div><br>
      <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+22]["name"]?></center><center><?=$sutudents[$i+22]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+23]["name"]?></center><center><?=$sutudents[$i+23]["com"]?></center></div> </div>
      </div><br>
      <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[$i+28]["name"]?></center><center><?=$sutudents[$i+28]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center>sanotyan</center><center>クロノス</center></div> </div>
      </div>
  </div>
  </div>
  </div>
<hr>

<form action="shaffle.php" method="post">
   <h3>席替え</h3>
  <input type="submit" name="name" value="Shuffle">
</form>

  <h3><a href="sutudentlist.php">生徒一覧</a></h3>


  </body>
  </html>
