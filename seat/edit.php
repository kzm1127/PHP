<?php
require("funcs.php");
$sutudents=file_get_contents(JSON);
$sutudents=json_decode($sutudents,true);
$id=$_GET['id'];
$sutudents;
foreach ($sutudents as $student) {
  if($student["id"]==$id){break;}
}

// var_dump($id);
// var_dump($student);
//
// die("");

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>編集</title>
  </head>
  <body>
    <h1>プロフィール編集</h1>
    <hr>
    <form action="edit_post.php" method="post">
     <label>氏名</label><br>
     <input type="text" name="name" value="<?=$student["name"]?>"><br>
     <label>会社名</label><br>
     <input type="text" name="com" value="<?=$student["com"]?>"><br>
     <label>前席を希望する場合はチェック：</label>
     <input type="checkbox" name="front" value="1"><br>
     <input type="hidden" name="sid" value="<?=$id?>">
     <input type="submit" name="sname" value="更新">
    </form>
  </body>
</html>
