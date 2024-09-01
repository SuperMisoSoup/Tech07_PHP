<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$contact = $_POST["contact"];
$hyouka = $_POST["hyouka"];

//作成日時,名前,メールアドレス の形式で文字列を作る
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$contact.",".$hyouka;
//File書き込み
$file = fopen("data/data1.txt","a");	// ファイル読み込み
fwrite($file, $str."\n");
fclose($file);
?>

<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
<link rel="stylesheet" href="css/test.css"/>
</head>
<body>

<h1>書き込みしました。</h1>
<h2>./data/data1.txt を確認しましょう！</h2>

<ul>
<li><a href="post.php">戻る</a></li>
<li><a href="read.php">データ表示</a></li>
</ul>
</body>
</html>