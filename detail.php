<?php
$id = $_GET["id"];

include("funcs.php");
$pdo = db_conn();

$sql = "SELECT * FROM kadai09_db2_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id',$id,PDO::PARAM_INT);
$status = $stmt->execute();

$values = "";
if($status==false) {
  sql_error($stmt);
}

$v    =  $stmt->fetch();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新画面</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
<header>
  <nav>
    <div class="nav_list">
    <a class="nav_click" href="select.php">データ一覧</a>
    <a class="nav_click" href="index.php">データ登録</a>
    </div>
  </nav>
</header>
<form method="POST" action="update.php"> 
  <div class="kousin">
   <fieldset>
    <legend>登録データ更新</legend>
     <input type="text" name="title" size="40" value="<?=$v["title"]?>"><br>
     <textArea name="naiyou" rows="4" cols="40"><?=$v["naiyou"]?></textArea><br>
     <input type="hidden" name="id" value="<?=$v["id"]?>">
     <input class="click" type="submit" value="更新する">
    </fieldset>
  </div>
</form>
</body>
</html>

