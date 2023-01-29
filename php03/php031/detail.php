<?php

//1.外部ファイル読み込みしてDB接続(funcs.phpを呼び出して)
require_once('funcs.php');
$pdo = db_conn();

//2.対象のIDを取得
$id = $_GET['id'];

//3．データ取得SQLを作成（SELECT文）
$stmt = $pdo->prepare("SELECT * FROM gs_user_table WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ表示
if($status == false){
    sql_error($status);
}else{
    $result = $stmt->fetch();
    // var_dump($result);
}

?>

<!-- 以下はindex.phpのHTMLをまるっと持ってくる -->

<html>
<head>
	<meta charset="utf-8">
	<title>登録ページ</title>
	<link rel="stylesheet" href="CSS/index.css">
</head>

<header>
<h1>入力フォーム</h1>
</header>
<body>

<!-- Main[Start] -->
<form method="POSt" action="user_update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前：<input type="text" name="name" value="<?= $result['name'] ?>"></label><br>
     <label>ログインID:<input type="text" name="lid" value="<?= $result['lid'] ?>"></label><br>
     <label>ログインPW:<input type="text" name="lpw" value="<?= $result['lpw'] ?>"></label><br>
  
     <label>管理情報(0=管理者、1=スーパー管理者):<input type="text" name="question1" value="<?= $result['kanri_flg'] ?>"></label><br>
     <label>管理情報(0=退社、1=入社):<input type="text" name="question2" value="<?= $result['life_flg'] ?>"></label><br>
       
     <input type="hidden" name="id" value="<?= $result['id'] ?>">
     
     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


<ul>
	<li><a href="user_list_view.php">戻る</a></li>
</ul>

</body>
</html>