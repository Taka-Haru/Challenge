<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>7_2challenge</title>
</head>
  <body>
<?php

/*
課題2:前回の課題1で作成したテーブルに
自由なメンバー情報を格納する処理を構築してください
*/

//try-catchで接続エラーを取得＆表示
try{
  $pdo_object=
  new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',
  'sakamoto',2591);
}catch(PDOException $E){
  die('接続に失敗しました:'.$E->getMessage());
}


/*SQL文を格納した文字列を定義(＄変数=SQL文(:カラム名で仮の存在を書く))
下記の文を定義すれば、以降この宣言をしなくても大丈夫！
(今回はテーブルに新規データを入れるSQL文)
(*文字列定義の為、"で括る必要がある。)
*/
$sql = "INSERT INTO profiles(profilesID,name,tell,age,birthday)
values(:profilesID,:name,:tell,:age,:birthday)";

/*
実行とその結果を受け取れる変数を用意
$SQLを実行＆結果を受け取る変数(ステートメントハンドラ) = $接続したオブジェクト -> prepare($SQL文);
*/
$query = $pdo_object -> prepare($sql);

//実数値はbindValueなどを用いて中身を入れ替える(安全の為)
$query -> bindValue(':profilesID','8');
$query -> bindValue(':name','デーモン');
$query -> bindValue(':tell','0120-444-444');
$query -> bindValue(':age','100053');
$query -> bindValue(':birthday','9838-11-10');

//SQLを実行
$query -> execute();


//接続を切断
$pdo_object = null;

?>
</body>

</html>
