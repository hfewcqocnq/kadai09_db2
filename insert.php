<?php
$title   = $_POST["title"];
$naiyou = $_POST["naiyou"];

include("funcs.php");
$pdo = db_conn(); 

$stmt = $pdo->prepare("INSERT INTO kadai09_db2_table(title,naiyou,indate)VALUES(:title,:naiyou,sysdate())");
$stmt->bindValue(':title',   $title,   PDO::PARAM_STR);
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);
$status = $stmt->execute(); 

if($status==false){
    sql_error($stmt);
}else{
    redirect("index.php");
}
?>
