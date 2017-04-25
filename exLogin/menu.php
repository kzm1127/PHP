<?php
session_start();
$id=$_SESSION["id"];

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>hoge</title>
  </head>
  <body>
    <!-- <?php print_r($id); ?> -->
    <?php echo $id . " welocom"; ?>
    <hr>
    <ul>
      <li>menu1</li>
      <li>menu2</li>
      <li>menu3</li>
    </ul>
  </body>
</html>
