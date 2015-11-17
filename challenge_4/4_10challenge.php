<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php

/*
１０．紹介していないPHPの組み込み関数を利用して、処理を作成してください。

　講義では紹介されていないPHPの組み込み関数はたくさん存在します。
　PHPの公式サイトから関数を選び、実際にロジックを作成してみてください。

　また、この処理を作成するに当たり、下記を必ず実装してください。

　①処理の経過を書き込むログファイルを作成する。
　②処理の開始、終了のタイミングで、ログファイルに開始・終了の書き込みを行う。
　③書き込む内容は、「日時　状況（開始・終了）」の形式で書き込む。
　④最後に、ログファイルを読み込み、その内容を表示してください。
*/

//brでの改行ではない
//タイムスタンプでとって時間で返す
//ログを出力する処理も関数表現できる
//sleep(3)とかで3秒処理を止めて差を確認する(終了の前に入れる)

//開始
$start = date('Y年m月d日 H時i分s秒');
$filename = fopen('log.txt','w');
fwrite($filename,"$start".'開始!!　　');
fclose($filename);

//関数の処理
$nikki = '焼き芋が
おいしい季節に
なりましたね〜。';
$results = nl2br($nikki);     //改行ごとに<br>がされる関数「nl2br」
echo $results;
echo '<br>';

//３秒遅延させる(タムムラグ検証の為)
sleep(3);

// 終了
$finish = date('Y年m月d日 H時i分s秒');
$filename = fopen('log.txt','a');
fwrite($filename, $finish.'止めっ!!');
fclose($filename);

//読み込み
$filename = fopen('log.txt', 'r');
$file_txt = fgets($filename);
fclose($filename);
echo $file_txt;

?>
</body>

</html>
