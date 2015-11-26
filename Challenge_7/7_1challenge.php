<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>7_1challenge</title>
</head>
  <body>
<?php

/*
課題1:Challenge_dbへの
エラーハンドリングを含んだ接続の確立を行ってください
*/

//try-catchで接続エラーを取得＆表示
try{
  $pdo_object=
  new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',
  'sakamoto',2591);
}catch(PDOException $E){
  die('接続に失敗しました:'.$E->getMessage());
}


//接続を切断
$pdo_object = null;
?>

</body>

</html>
