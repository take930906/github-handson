<html>
<head>
	<meta charset="utf-8">
	<title>ブックマーク登録ページ</title>
	<link rel="stylesheet" href="CSS/index.css">
</head>

<header>
<h1>ブックマーク入力フォーム</h1>
</header>
<body>

<!-- Main[Start] -->
<form method="POSt" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>ブックマーク</legend>
     <label>本の名前：<input type="text" name="name"></label><br>
     <label>URL:<input type="text" name="url"></label><br>
     <label>備考：<textArea name="comment" rows="4" cols="40"></textArea></label><br>
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