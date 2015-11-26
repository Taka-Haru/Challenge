<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>7_3challenge</title>
</head>
  <body>
<?php

/*
課題3:前回の課題1で作成したテーブルからSELECT*により全件取得し、
画面に取得した全情報を表示してください。
*/

//try-catchで接続エラーを取得＆表示
try{
  $pdo_object=
  new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',
  'sakamoto',2591);
}catch(PDOException $E){
  die('接続に失敗しました:'.$E->getMessage());
}

/*
SQL文を格納した文字列を定義(今回は全件表示のSQL文)
(*文字列定義の為、"で括る必要がある。)
*/
$sql = "select * from profiles";

/*
実行とその結果を受け取れる変数を用意
$SQLを実行＆結果を受け取る変数(ステートメントハンドラ) = $接続したオブジェクト -> prepare($SQL文);
*/
$query = $pdo_object -> prepare($sql);

//SQLを実行
 $query -> execute();

/*
データベースから取得した結果を使った処理をするには、fetchメソッドを使います。
fetchメソッドの引数にPDO::FETCH_OBJを渡すと、オブジェクトとしてデータを取得できます。
このオブジェクトは、フィールド名がプロパティになるので、
profilesIDプロパティの値からbirthdayプロパティの値をechoで表示する。
*/
while( $row = $query->fetch(PDO::FETCH_OBJ) ){      //データベースから取得したデータを１つ持ってくる
 echo $row->profilesID . ': ';                     // profilesIDフィールドの内容を表示
 echo $row->name.'<br>';
 echo 'TEL： '.$row->tell.'<br>';
 echo 'AGE： '.$row->age.'<br>';
 echo 'BIRTH： '.$row->birthday.'<br>';            // birthdayフィールドの内容を表示
 echo '<br>';
}

//接続を切断
$pdo_object = null;

?>

  </body>
</html>
