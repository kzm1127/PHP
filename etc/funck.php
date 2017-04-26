<?php
function kame($a,$b){
  echo "Iam a,".$a.PHP_EOL;
  echo "Iam b,".$b.PHP_EOL;
  $x=0;
  echo "Iam x,".$x.PHP_EOL;
  $x=$a+$b;
  echo "return x,".$x.PHP_EOL;
  return $x;
}

function kohei($c){
  echo $c.PHP_EOL;
}


$a=2;
echo "a is " .$a.PHP_EOL;
$b=3;
echo "b is " .$b.PHP_EOL;
$c=0;
echo "c is " .$c.PHP_EOL;
echo "kame() is call".PHP_EOL;
$c=kame($a,$b);
echo "c is " .$c.PHP_EOL;
echo "kohei() is call".PHP_EOL;
kohei($c);
