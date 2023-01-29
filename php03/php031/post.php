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
<form method="POSt" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ユーザー登録</legend>
     <label>名前：<input type="text" name="name"></label><br>
     <label>ログインID:<input type="text" name="lid"></label><br>
     <label>ログインPW:<input type="text" name="lpw"></label><br>
     <label>管理情報(0=管理者、1=スーパー管理者)：<input type="text" name="question1"></label><br>
     <label>管理情報(0=退社、1=入社)：<input type="text" name="question2"></label><br>
 

     <input type="submit" value="送信">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


<ul>
	<li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>