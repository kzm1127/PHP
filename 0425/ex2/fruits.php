<?php
$fruits = $_POST["fruits"];
$type=$_POST["type"];

$color = "black";

if ($fruits === "apple" || $fruits === "cherry") {
  $color = "red";
}else if ($fruits==="banana") {
  $color="#FFFF00";
}
 ?>

 <!DOCTYPE html>
 <html>
   <head lang="ja">
     <meta charset="utf-8">
     <title>hoge</title>
   </head>
   <body>
     <div style="color:<?php echo $color; ?>">
       <?php echo $fruits . "/" .$type ?>
     </div>
   </body>
 </html>
