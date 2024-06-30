<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>登録画面</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header>
  <nav>
    <div class="nav_list">
    <a class="nav_click" href="select.php">登録データ一覧</a>
    </div>
  </nav>
</header>
<form method="POST" action="insert.php">
  <div class="touroku">
   <fieldset>
    <legend>登録</legend>
     <input type="text" name="title" size="40" placeholder="アイデアのタイトルを入力"/><br>
     <textArea name="naiyou" rows="10" cols="50" placeholder="アイデアの内容を入力"></textArea><br>
     <input class="click" type="submit" value="登録する">
    </fieldset>
  </div>
</form>
</body>
</html>
