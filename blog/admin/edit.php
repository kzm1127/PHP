<?php
require('../common/functions.php');
session_start();
$userId=$_SESSION["userId"];
$id=$_GET['id'];
$txt=get_article($id)["body"];

if (is_null($userId)) {
  send_error_page();
}
$articles=get_articles();
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title><?= ADMIN_BLOG_TITLE ?></title>
   </head>
   <body>

     <h1><?= ADMIN_BLOG_TITLE ?></h1>
     <h5><?php echo $userId; ?></h5>
     <hr>
 <form action="edit_post.php" method="post">
  <label>TITLE</label><br>
  <input type="text" name="title" value="<?=get_article($id)["title"]?>"><br>
  <label>BODY</label><br>
  <textarea name="body" rows="10" cols="30"><?= $txt ?></textarea><br>
  <input type="hidden" name="txtid" value="<?=$id?>">
  <input type="submit" name="name" value="post">
 </form>
     <hr>
          <a href="/admin/index.php">BACK</a>

   </body>
 </html>
