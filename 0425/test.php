<?php
$men = [
  ["koko",22,"Motin","img1.png"],
  ["doko",22,"Boat","img2.png"],
  ["dare",21,"KnightScoop","img3.png"],
  ["foo",22,"Youtube","img4.png"],
  ["baz",23,"WordPress","img5.png"]
];



for ($i=0; $i < count($men); $i++) {
  for ($j=0; $j < count($men[$i]); $j++) {
    echo $men[$i][$j]." ";
  }
  echo PHP_EOL;
}



//var_dump($men);
