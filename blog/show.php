<?php
require('common/functions.php');
$id=$_GET['id'];


if (!preg_match('/^([0-9]{1,5})$/',$id)) {
  send_error_page();
}

$article=get_articles($id);

if (is_null($article)) {
  send_error_page();
}

//print_r(get_article($id)["body"]);

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?= BLOG_TITLE ?></title>
  </head>
  <body>
    <h1><?= BLOG_TITLE ?></h1>
    <hr>
    <h2><?= get_article($id)["title"] ?></h2>
    <h5>(<?= get_article($id)["date"] ?>) by <?= get_article($id)["author"] ?></h5>
    <div> <?= nl2br(get_article($id)["body"]) ?> &nl2br </div>
    <hr>
    <a href="index.php">BACK</a>
  </body>
</html>
