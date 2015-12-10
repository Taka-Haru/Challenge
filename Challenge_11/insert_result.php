<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>insert_result.php</title>
</head>
  <body>

<!--
プロフィール用のDBに値を挿入。この際、現在時(年日時分)を組み込み関数で取得し、追加。
「以上の内容で登録しました。」とinsert_confirmのようにフォームで入力された値を表示
接続に失敗したときの表示などもカバーすること

-->

<?php
  //セッション開始
session_start();

echo '◼︎名前：'.'<br>'.$_SESSION['name'];
echo '<br>';

echo '◼︎生年月日：'.'<br>'.$_SESSION['year'];
echo $_SESSION['month'];
echo $_SESSION['day'];
echo '<br>';

echo  '◼︎種別：'.'<br>'.$_SESSION['job'];
echo '<br>';

echo '◼︎電話番号：'.'<br>'.$_SESSION['tell'];
echo '<br>';

echo '◼︎自己紹介：'.'<br>'.$_SESSION['introduction'];
echo '<br>'.'<br>';

$access_time = date('H時i分s秒');
echo $access_time;


//try-catchで接続エラーを取得＆表示
try{
  $pdo_object=
  new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',
  'sakamoto',2591);
}catch(PDOException $E){
  die('接続に失敗しました:'.$E->getMessage());
}


/*
SQL文を格納した文字列を定義(＄変数=SQL文(:カラム名で仮の存在を書く))
下記の文を定義すれば、以降この宣言をしなくても大丈夫！
(今回はテーブルに新規データを入れるSQL文)
(*文字列定義の為、"で括る必要がある。)
*/
$sql = "INSERT INTO user_t(name,birthday,type,tell,comment,newDate)
values(:name,:birthday,:type,:tell,:comment,:newDate)";

/*
実行とその結果を受け取れる変数を用意
$SQLを実行＆結果を受け取る変数(ステートメントハンドラ) = $接続したオブジェクト -> prepare($SQL文);
*/
$query = $pdo_object -> prepare($sql);

//実数値はbindValueなどを用いて中身を入れ替える(安全の為)
$query -> bindValue(':name',$_SESSION['name']);
$query -> bindValue(':birthday',$_SESSION['year'].$_SESSION['tell'].$_SESSION['day']);
$query -> bindValue(':type',$_SESSION['job']);
$query -> bindValue(':tell',$_SESSION['tell']);
$query -> bindValue(':comment',$_SESSION['introduction']);
$query -> bindValue(':newDate',$access_time);

//SQLを実行
$query -> execute();


//接続を切断
$pdo_object = null;


?>

以上の内容で登録しました。<br>


</body>

</html>
