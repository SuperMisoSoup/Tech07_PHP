<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>データ表示</title>
<link rel="stylesheet" href="css/test.css"/>
</head>
<body>
    <?php
    $file = fopen('data/data1.txt', 'r');// ファイルを開く

    // HTML のテーブル部分
    echo '<table><thead><tr><th>記載日</th><th>名前</th><th>mail</th><th>参加回数</th><th>評価</th></tr></thead><tbody>';

    // ファイル内容を1行ずつ読み込んで出力
    while ($str = fgets($file)) {
        $array = explode(",", $str); // 配列にする
        $day = $array[0];
        $name = $array[1];
        $mail = $array[2];
        $contact = $array[3];
        $evaluation = $array[4];

        // HTML のテーブルに一行追加
        echo '<tr><td>' . $day . '</td><td>' . $name . '</td><td>' . $mail . '</td><td>' . $contact . '</td><td>' . $evaluation . '</td></tr>';
    }
    echo '</tbody></table>';

    fclose($file); // ファイルを閉じる
    ?>

    <ul>
        <li><a href="index.php">index.php</a></li>
    </ul>
</body>
</html>