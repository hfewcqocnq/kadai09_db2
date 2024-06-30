<?php
function h($str){
    return htmlspecialchars($str, ENT_QUOTES);
}

function db_conn(){
    try {
        $db_name = "kadai09_db2";    //データベース名
        $db_id   = "root";      //アカウント名
        $db_pw   = "";          //パスワード
        $db_host = "localhost"; //DBホスト
        return new PDO('mysql:dbname='.$db_name.';charset=utf8;host='.$db_host, $db_id, $db_pw);
        // $pdoだと外部に戻せないため、returnに変更
        // 関数を読んだ場所(db_conn())にリターンするという意味になる
    } catch (PDOException $e) {
        exit('DB Connection Error:'.$e->getMessage());
    }
}

function sql_error($stmt){
    $error = $stmt->errorInfo();
    exit("SQLError:".$error[2]);
}

function redirect($file_name){
    header("Location: ".$file_name);
    exit();
}





