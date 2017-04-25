<?php
$num=rand(1,10);

if ($num%2===0) {
  include("even.php");
}else {
  include("odd.php");
}
