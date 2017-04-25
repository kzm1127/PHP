<?php
session_start();
$count=0;
if (isset($_SESSION["cnt"])) {
  $count=$_SESSION["cnt"];
}
$count++;
$_SESSION["cnt"]=$count;
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>hoge</title>
   </head>
   <body>
     <h1><?= $count; ?></h1>
     <form action="">
       <input type="submit" value="count up">
     </form>

   </body>
 </html>
