<?php
function gettweet(){
  $tweets=[];
  $lines=file("tweet.csv",FILE_IGNORE_NEW_LINES);
  foreach ($lines as $line) {
    $tweet=explode(",",$line);
    $tweets[]=$tweet;
  }

}
$session_start();
$userid=$_SESSION["id"];
$tweets=$_SEETION["tweet"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>hoge</title>
  </head>
  <body>
    <?php echo $id . " welocom"; ?>
    <hr>

  </body>
</html>
