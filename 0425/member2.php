<?php
$men = [
  ["koko",22,"Motin","img1.png"],
  ["doko",22,"Boat","img2.png"],
  ["dare",21,"KnightScoop","img3.png"],
  ["foo",22,"Youtube","img4.png"],
  ["baz",23,"WordPress","img5.png"]
];
$img=NULL;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>hoge</title>
</head>
<body>
  <table>
    <tr>
      <th>NAME</th>
      <th>AGE</th>
      <th>FAV</th>
      <th>IMG</th>
    </tr>
    <?php for ($i=0; $i < count($men); $i++) { ?>
      <tr>
        <td><?php echo $men[$i][0]; ?></td>
        <td><?php echo $men[$i][1]; ?></td>
        <td><?php echo $men[$i][2]; ?></td>
        <td><img src="<?php$men[$i][3]?>" width="90" height="40" alt="hoge"></td>
        <?php } ?>
      </tr>


    </table>



  </body>
  </html>
