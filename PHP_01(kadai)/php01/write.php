<?php
// フォームから送られてきたデータを取得し変数に代入
$name = $_POST["name"];
$mail = $_POST["mail"];
$question1 = $_POST["question1"];
$question2 = $_POST["question2"];
$question3 = $_POST["question3"];


// ファイルを読み込む
$file = fopen('./data/data.xlsk','a');

// ファイルに書き込む
fwrite($file , $name."  ");
fwrite($file , $mail."  ");
fwrite($file , $question1."  ");
fwrite($file , $question2."  ");
fwrite($file , $question3."\n");

// ファイルを閉じる
fclose($file);
?>

<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>
<body>

<h1>フォームを提出しました。</h1>
<ul>
    <li><a href="read.php">集計結果を見る</a></li>
    <li><a href="index.php">戻る</a></li>

</ul>

</body>
</html>


