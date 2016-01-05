<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>4_10challenge</title>
</head>
  <body>
    <!-- １０．紹介していないPHPの組み込み関数を利用して、処理を作成してください。

    　講義では紹介されていないPHPの組み込み関数はたくさん存在します。
    　PHPの公式サイトから関数を選び、実際にロジックを作成してみてください。

    　また、この処理を作成するに当たり、下記を必ず実装してください。

    　⑴処理の経過を書き込むログファイルを作成する。
    　⑵処理の開始、終了のタイミングで、ログファイルに開始・終了の書き込みを行う。
    　⑶書き込む内容は、「日時　状況（開始・終了）」の形式で書き込む。
    　⑷最後に、ログファイルを読み込み、その内容を表示してください。
      ⑸sleep(3)とかで3秒処理を止めて差を確認する(終了の前に入れる)-->
  <?php

  //開始
  $start = date('Y年m月d日 H時i分s秒');
  $fp = fopen('log.txt','w');
  fwrite($fp,"$start".'開始!!');
  fclose($fp);

  //関数の処理(改行ごとに<br>がされる関数「nl2br」)
  $nikki = '焼き芋が
  おいしい季節に
  なりましたね〜。';
  $results = nl2br($nikki);
  echo $results;
  echo '<br>';

  //３秒遅延させる(タムムラグ検証の為)
  sleep(3);

  // 終了
  $finish = date('Y年m月d日 H時i分s秒');
  $fp = fopen('log.txt', 'a');
  fwrite($fp, "$finish" . '止めっ！');
  fclose($fp);

  //読み込み
  $fp = fopen('log.txt', 'r');
  while ($log.txt == fgets($fp)) {
  	echo $log.txt.'<br>';
  }
  fclose($fp);

  ?>
</body>
</html>
