<?php
//1.  DB接続します
require_once('funcs.php');
$pdo = db_conn();

//２．SQL文を用意(データ取得：SELECT)
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");

//3. 実行
$status = $stmt->execute();

//4．データ表示
$view="";
if($status==false) {
    //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  //FETCH_ASSOC=http://php.net/manual/ja/pdostatement.fetch.php
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){ 
    
    $view .= "<p>";

    $view .= '<a href="detail.php?id='.$result['id'].'">';
    $view .= $result['date'].' | '.$result['name'].' | '.$result['url'].' | '.$result['comment'];
    $view .= "</a>";
    
    $view .= "</a>";
    $view .= '<a href="bm_delete.php?id='.$result['id'].'">';
    $view .= '[削除]';
    $view .= "</a>";
    
    $view .= "</p>";  
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>登録したブックマークの表示</title>
<link rel="stylesheet" href="css/index.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
<h1>ブックマーク情報</h1>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?= $view ?></div>
</div>
<!-- Main[End] -->
<ul>
	<li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>
