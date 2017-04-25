<?php

$size=$_GET["size"];

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>hoge</title>
</head>
<body>
  <?php if ($size==="l") {?>
    <h1>Large</h1>
    <?php }else if ($size==="m") {?>
      <h2>Medium</h2>
      <?php }else if ($size==="s") {?>
        <h3>Small</h3>
        <?php } ?>

      </body>
      </html>
