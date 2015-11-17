<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php

/*
８．ファイルに自己紹介を書き出し、保存してください。
*/

  $filename = fopen('text2.txt','w');
  fwrite($filename, 'はじめましてこんにちわ');
  fclose($filename);

?>

</body>
</html>
