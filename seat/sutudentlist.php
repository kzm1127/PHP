<?php
require("funcs.php");
$sutudents=file_get_contents(JSON);
$sutudents=json_decode($sutudents,true);
$j=1;
$frontcount=0;
foreach ($sutudents as &$sutudent) {
  $sutudent["id"]=$j;
  $j++;
}
ksort($sutudents);
$json=json_encode($sutudents);
file_put_contents(JSON,$json,LOCK_EX);

// $sortType = SORT_ASC;
// $tmpArray = array();
// foreach ( $sutudents as $key => $sutudent ) {
//     $tmpArray[$key] = $sutudent["com"];
// }
// array_multisort( $tmpArray, $sortType, $sutudents );
// unset( $tmpArray );

for ($i=0; $i < count($sutudents); $i++) {
  if ($sutudents[$i]["front"] == true) {
    $frontcount++;
  }
}




 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>生徒一覧</title>
   </head>
   <body>
     <h1>名簿</h1>
     ※生徒は29人迄登録できます。 <br>
     ※前席を希望出来る者は6人迄です。
     <hr>

     <table border="1">
     <tr>
       <th>氏名</th>
       <th>会社名</th>
       <th>前席希望</th>
       <th>EDIT</th>
       <th>DELETE</th>
     </tr>
     <?php foreach ($sutudents as $student) { ?>
       <tr>
         <td><?=$student["name"]?></td>
         <td><?=$student["com"]?></td>
         <?php if ($student["front"]==true){ ?>
           <td>〇</td>
         <?php }else { ?>
           <td>✖</td>
           <?php } ?>
         <td><a <a href="edit.php?id=<?= $student["id"]?>">EDIT</a></td>
         <td><a href="delete.php?id=<?= $student["id"] ?>">DELETE</a></td>
       </tr>
     <?php } ?>
   </table>

   <hr>
   <h2> 生徒数：<?= count($sutudents); ?> 人</h2>
   <h2> 前席希望者数：<?= $frontcount ?> 人</h2>
   <h2><a href="entry.php">生徒新規登録</a> </h2>
   <h3><a href="dl.php">名簿ファイルダウンロード(JSON)</a></h3>
   <h3><a href="http://localhost:8000/index.php">座席表に戻る</a></h3>

   </body>
 </html>
