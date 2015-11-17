<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php

/*
９．ファイルから自己紹介を読み出し、表示してください。
*/

$filename = fopen('text2.txt','r');
$file_txt = fgets($filename);
fclose($filename);

echo $file_txt
?>
</body>

</html>
