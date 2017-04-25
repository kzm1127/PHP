<?php
$men = ["koko","doko","dare","foo","baz"];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>hoge</title>
</head>
<body>
  <ul>
    <?php for ($i=0; $i < count($men); $i++) { ?>
      <li> <?php  echo $men[$i].PHP_EOL; ?> </li> 
      <?php } ?>

    </ul>
  </body>
  </html>
