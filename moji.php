<?php

$str="East Tokyo United";

$result=substr($str,0,4);
echo $result.PHP_EOL;

$result=substr($str,5,5);
echo $result.PHP_EOL;
echo "---------PHP_substr()-----------".PHP_EOL;
$result=substr($str,11,6);
echo $result.PHP_EOL;
echo "---------PHP_strlen()-----------".PHP_EOL;
$str="East Tokyo United";
$result=strlen($str);
echo $result.PHP_EOL;
echo "---------PHP_explode()-----------".PHP_EOL;
$str="East Tokyo United";
$result=explode(" ",$str);
for ($i=0; $i < 3; $i++) {
  echo $result[$i].PHP_EOL;
}
echo "---------PHP_implode()-----------".PHP_EOL;
$str=["East" , "Tokyo" , "United"];
$result=implode(" ",$str);
echo $result.PHP_EOL;

echo "---------PHP_ex1-----------".PHP_EOL;
$str="IT CARET";
$str=strtolower($str);
echo $str.PHP_EOL;

echo "---------PHP_ex2-----------".PHP_EOL;
$str="IT CARET";
$result=substr($str,3,5);
echo $result.PHP_EOL;

echo "---------PHP_ex3-----------".PHP_EOL;
$handle = fopen("score.csv" , "r");
$date = [];
$line=NULL;
$sc=NULL;
while($line=fgets($handle)){
    array_push($date,$line);
}
fclose($handle);
for ($i=0; $i < count($date); $i++) {
    $sc=$date[$i];
    if(22==substr($sc,strpos($sc,",")+1,2)){
      echo $sc.PHP_EOL;
    }
}

echo "---------PHP_ex4-----------".PHP_EOL;

$handle = fopen("score.csv" , "r");
$date = [];
$line=NULL;
$sc=NULL;
while($line=fgets($handle)){
    array_push($date,$line);
}
fclose($handle);
for ($i=0; $i < count($date); $i++) {
    $sc=$date[$i];
    if("tanaka"==substr($sc,0,strpos($sc,","))){
      echo $sc.PHP_EOL;
    }
}

echo "---------PHP_ex5-----------".PHP_EOL;

$handle = fopen("score.csv" , "r");
$date = [];
$line=NULL;
$sc=NULL;
$total=0;
while($line=fgets($handle)){
    array_push($date,$line);
}
fclose($handle);
for ($i=0; $i < count($date); $i++) {
    $sc=$date[$i];
    $total+=substr($sc,strrpos($sc,",")+1,2);
}
echo $total;



//echo $sc.PHP_EOL;
//var_dump($date);


// foreach ($fdate as $value) {
//   $value
// }
