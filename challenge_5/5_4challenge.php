<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>5_2challenge</title>
</head>
  <body>
<?php

/*４．３と同じ機能をセッションで作成してください。
(クッキーに現在時刻を記録し、次にアクセスした際に、
前回記録した日時を表示してください)
*/
//セッション開始
session_start();

//セッションからデータを取り出す
if(!isset($_SESSION['time'])){
  echo '初回なのでデータがありません。';
}else{
  $lastDate = $_SESSION['time'];
  echo '前回ログイン時刻は'.$lastDate.'です！';
};

//セッションに情報を入れる
$_SESSION['time']=date('H時i分s秒');


?>
</body>

</html>
