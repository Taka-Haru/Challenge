<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>4_8challenge</title>
</head>
  <body>
    <!-- ８．ファイルに自己紹介を書き出し、保存してください。 -->
  <?php

    $filename = fopen('text2.txt','w');
    fwrite($filename, 'はじめましてこんにちは。');
    fwrite($filename, 'わたしのなまえはジョンタイターです。');
    fclose($filename);

  ?>

  </body>
</html>
