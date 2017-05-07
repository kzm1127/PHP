<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>編集</title>
  </head>
  <body>
    <h1>新規登録</h1>
    <hr>
    <form action="entry_post.php" method="post">
     <label>氏名</label><br>
     <input type="text" name="name" value=""><br>
     <label>会社名</label><br>
     <input type="text" name="com" value=""><br>
     <label>前席を希望する場合はチェック：</label>
     <input type="checkbox" name="front" value="1"><br>
     <input type="submit" name="sname" value="登録">
    </form>
  </body>
</html>
