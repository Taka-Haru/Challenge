<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php

/*
４．2015年1月1日 0時0分0秒と2015年12月31日 23時59分59秒の差（総秒）
　　を表示してください。
*/

$past = mktime(0, 0, 0, 1, 1, 2015);
$future = mktime(23, 59, 59, 12, 31, 2016);

$diff = $future - $past;
echo $diff

?>
</body>

</html>
