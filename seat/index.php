<?php

require("funcs.php");

$sutudents=file_get_contents(JSON);
$sutudents=json_decode($sutudents,true);

for ($i=0; $i < 29; $i++) {
  if(isset($sutudents[$i])!=true){
    $sutudents[$i]["id"]=$i;
    $sutudents[$i]["name"]="empty";
    $sutudents[$i]["com"]="empty";
    $sutudents[$i]["front"]=false;
  }
}

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
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[0]["name"]?></center><center><?=$sutudents[0]["com"]?></center></div></div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[1]["name"]?></center><center><?=$sutudents[1]["com"]?></center></div></div>
        </div><br>
        <div class="row">
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[6]["name"]?></center><center><?=$sutudents[6]["com"]?></center></div></div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[7]["name"]?></center><center><?=$sutudents[7]["com"]?></center></div></div>
        </div><br>
        <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[12]["name"]?></center><center><?=$sutudents[12]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[13]["name"]?></center><center><?=$sutudents[13]["com"]?></center></div> </div>
        </div><br>
        <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[18]["name"]?></center><center><?=$sutudents[18]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[19]["name"]?></center><center><?=$sutudents[19]["com"]?></center></div> </div>
        </div><br>
        <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[24]["name"]?></center><center><?=$sutudents[24]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[25]["name"]?></center><center><?=$sutudents[25]["com"]?></center></div> </div>
        </div>
      </div>

      <!-- 中座席 -->
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[2]["name"]?></center><center><?=$sutudents[2]["com"]?></center></div></div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[3]["name"]?></center><center><?=$sutudents[3]["com"]?></center></div></div>
        </div><br>
        <div class="row">
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[8]["name"]?></center><center><?=$sutudents[8]["com"]?></center></div></div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[9]["name"]?></center><center><?=$sutudents[9]["com"]?></center></div></div>
        </div><br>
        <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[14]["name"]?></center><center><?=$sutudents[14]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[15]["name"]?></center><center><?=$sutudents[15]["com"]?></center></div> </div>
        </div><br>
        <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[20]["name"]?></center><center><?=$sutudents[20]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[21]["name"]?></center><center><?=$sutudents[21]["com"]?></center></div> </div>
        </div><br>
        <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[26]["name"]?></center><center><?=$sutudents[26]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[27]["name"]?></center><center><?=$sutudents[27]["com"]?></center></div> </div>
        </div>
      </div>

      <!-- 右座席 -->
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[4]["name"]?></center><center><?=$sutudents[4]["com"]?></center></div></div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[5]["name"]?></center><center><?=$sutudents[5]["com"]?></center></div></div>
        </div><br>
        <div class="row">
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[10]["name"]?></center><center><?=$sutudents[10]["com"]?></center></div></div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[11]["name"]?></center><center><?=$sutudents[11]["com"]?></center></div></div>
        </div><br>
        <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[16]["name"]?></center><center><?=$sutudents[16]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[17]["name"]?></center><center><?=$sutudents[17]["com"]?></center></div> </div>
        </div><br>
        <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[22]["name"]?></center><center><?=$sutudents[22]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[23]["name"]?></center><center><?=$sutudents[23]["com"]?></center></div> </div>
        </div><br>
        <div class="row">
          <div class="col-md-6"> <div style="border: 1px solid #000; padding: 10px;"><center><?=$sutudents[28]["name"]?></center><center><?=$sutudents[28]["com"]?></center></div> </div>
          <div class="col-md-6"><div style="border: 1px solid #000; padding: 10px;"><center>sanotyan</center><center>クロノス</center></div> </div>
        </div>
      </div>
    </div>
  </div>
  <hr>

  <div class="container" style="margin-bottom: 50px">
    <div class="row text-center">
      <div class="col-md-12">
        <a href="shaffle.php" class="btn btn-info">シャッフル</a>
        <a href="sutudentlist.php" class="btn btn-info">生徒一覧管理</a>
      </div>
    </div>
  </div>

</body>
</html>
