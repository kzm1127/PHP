<?php

$names=["sushi","hukuro","syouken"];

try {
  $handle = fopen("score.csv" , "r");//soutai pass
  $fdate=file_get_contents("score.csv");//1line de dekiru
  $fdate1=file_get_contents("C:\Users\Owner\Desktop\hello.txt");
  $date1=file_get_contents("https://kronos-jp/");
  copy("score.csv","C:\Users\Owner\Desktop\score3.csv");
} catch (Exception $e) {
echo "Erorre", $e->getMessage(), "\n";
}



$line=fgets($handle);
echo $line;

while($line=fgets($handle)){
  echo $line;
}

fclose($handle);
echo "----------".PHP_EOL;
echo $fdate;
echo "----------".PHP_EOL;
echo $fdate1;
echo $date1;

for ($i=0; $i < count($names); $i++) {
  mkdir("C:\Users\Owner\Desktop\\".$names[$i]);
}
