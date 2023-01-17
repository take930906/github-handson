<html>
<head>
	<meta charset="utf-8">
	<title>アンケート結果</title>
	<link rel="stylesheet" href="css/index.css">
</head>

<header>
<h1>アンケート結果</h1>
</header>

<h3>
<?php

// ファイルを変数に格納
$filename = './data/data.xlsk';
// fopenでファイルを開く（'r'は読み込みモードで開く）
$fp = fopen($filename, 'r');

// whileで行末までループ処理
while (!feof($fp)) {
    // fgetsでファイルを読み込み、変数に格納
    $txt = fgets($fp);
    // ファイルを読み込んだ変数を出力
    echo $txt.'<br>';
  }

// fcloseでファイルを閉じる
fclose($fp);
?>
</h3>

<ul>
	<li><a href="index.php">戻る</a></li>
</ul>
</html>