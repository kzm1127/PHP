<?php
$num= [1,2,3,443,64,7,2];
echo "---------PHP_count()-----------".PHP_EOL;
echo count($num).PHP_EOL;

echo "---------PHP_array_slice()-----------".PHP_EOL;
$result = array_slice($num,3,count($num));
foreach ($result as $value) {
  echo $value.PHP_EOL;
}

echo "---------PHP_in_array(),array_search-----------".PHP_EOL;
$num= [1,2,3,443,64,7,2];
$tag=64;
$result = in_array($tag,$num);
var_dump($result);

$result = array_search($tag,$num);
var_dump($result);

echo "---------PHP_array_key_exists-----------".PHP_EOL;
$num2= ["1"=>1,
        "2"=>2,
        "3"=>3,
        "4"=>443,
        "5"=>64,
        "6"=>7,
        "7"=>2];

$tag="10";

$result = array_key_exists($tag,$num);
var_dump($result);
echo "---------PHP_sort()-----------".PHP_EOL;
$num= [1,2,3,443,64,7,2];

sort($num);
foreach ($num as $value) {
  echo $value.PHP_EOL;
}

echo "---------PHP_ksort()-----------".PHP_EOL;

$num2= ["3"=>1,
        "2"=>2,
        "10"=>3,
        "4"=>443,
        "5"=>64,
        "5"=>7,
        "0"=>2];

ksort($num2);
var_dump($num2);

echo "---------PHP_print_r()-----------".PHP_EOL;

$num2= ["3"=>1,
        "2"=>2,
        "10"=>3,
        "4"=>443,
        "5"=>64,
        "5"=>7,
        "0"=>2];
print_r($num2);

echo "---------PHP_Queue-----------".PHP_EOL;

$queue=[];

for ($i=0; $i < 5; $i++) {
  array_push($queue,$i);
}
print_r($queue);
for ($i=0; $i < 5; $i++) {
  echo "POP".":";
  print_r($queue);
  echo array_shift($queue).PHP_EOL;
}


echo "---------PHP_Stack-----------".PHP_EOL;

$stack=[];

for ($i=0; $i < 5; $i++) {
  array_push($stack,$i);
}
print_r($stack);
for ($i=0; $i < 5; $i++) {
  echo "POP".":";
  echo array_pop($stack).PHP_EOL;
  print_r($stack);
}

echo "---------PHP_EX1-----------".PHP_EOL;
$array=["one","two","three","four","five"];
$result = array_slice($array,2,2);
print_r($result);


echo "---------PHP_EX2-----------".PHP_EOL;
$array=["one","two","three","four","five"];
ksort($array);
print_r($array);

echo "---------PHP_EX3-----------".PHP_EOL;
$array=['three' => 3,'four' => 4, 'five' =>5];
arsort($array);
print_r($array);

echo "---------PHP_EX4-----------".PHP_EOL;
$array=["one","two","three","four","five"];
while(count($array) != 0){
  $e=array_shift($array);
  echo $e.PHP_EOL;
}

echo "---------PHP_EX5-----------".PHP_EOL;
$array=["one","two","three","four","five"];
while(count($array) != 0){
  $e=array_pop($array);
  echo $e.PHP_EOL;
}
