<html>
<head>
	<meta charset="utf-8">
	<title>アンケート入力ページ</title>
	<link rel="stylesheet" href="css/index.css">
</head>

<header>
<h1>アンケート入力フォーム</h1>
</header>
<body>

<form action="write.php" method="POST">

	お名前<br/> <input type="text" name="name"></br>
	連絡先<br/> <input type="text" name="mail"></br>
	<dt name>性別</dt>
	<dd>
	<select name="question1">
        <option>男</option>
        <option>女</option>
		<option>回答しない</option>
		</select>
	</dd>

	<dt>職場環境で最も改善すべき点は何ですか？</dt>
    <dd>
		<select name="question2">
        <option>勤務時間</option>
        <option>勤務内容</option>
        <option>業務プロセス</option>
        <option>人間関係</option>
        <option>人員配置</option>
        <option>その他</option>
		</select>
	</dd>

	改善策を教えてください。<br /> 
	<textarea cols="50" rows="5" name="question3"></textarea><br/></br>

	<input type="submit" value="送信">
	
</form>


<ul>
	<li><a href="index.php">戻る</a></li>
</ul>

</body>
</html>