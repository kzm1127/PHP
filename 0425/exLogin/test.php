<?php


  $lines= file("user.csv",FILE_IGNORE_NEW_LINES);
  foreach ($lines as $line) {
    $user = explode(",",$line);

  }
  var_dump($user);
