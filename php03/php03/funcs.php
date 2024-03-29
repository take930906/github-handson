<?php
//共通に使う関数を記述

//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

// データベース接続関数
function db_conn(){
    try {
        $db_name = "bluedingo71_gs_kadai_db";    //データベース名
        $db_id   = "bluedingo71";      //アカウント名
        $db_pw   = "bluedingo71";      //パスワード：XAMPPはパスワードなしMAMPのパスワードはroot
        $db_host = "mysql57.bluedingo71.sakura.ne.jp"; //DBホスト
      $db_port = "3306"; //XAMPPの管理画面からport番号確認
      $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host.';port='.$db_port.'', $db_id, $db_pw);
      return $pdo;//ここを追加！！
    } catch (PDOException $e) {
        exit('DB Connection Error:' . $e->getMessage());
    }
}

//リダイレクト関数: redirect($file_name <- 引数という)
function redirect ($file_name){
    header('Location: '.$file_name);
}