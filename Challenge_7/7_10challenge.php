<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>7_10challenge</title>
</head>
  <!--課題10:profileIDで指定したレコードを削除できるフォームを作成してください-->
  <body>
  『profiles』テーブルのレコードを削除します。<br>
  削除したい『profilesID』の番号を入力して下さい。<br><br>
  <form action="./7_10challenge.php" method="POST">
  profilesID：
  <input type="text" name="profilesID" size=5><br>
  <br>
  <input type="submit" name="btnSubmit" value="削除!!">
</body>
</html>

  <?php

  //try-catchで接続エラーを取得＆表示
  try{
    $pdo_object=
    new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',
    'sakamoto',2591);
  }catch(PDOException $E){
    die('接続に失敗しました:'.$E->getMessage());
  }

  if(isset ($_POST['profilesID'])){
    $id = $_POST['profilesID'];
  }else{
    $id = null;
  }

  //SQL文を格納した文字列を定義(今回は指定レコードを削除するSQL文)
  $sql = "delete from profiles where profilesID=$id";

  //実行とその結果を受け取れる変数を用意
  $query = $pdo_object -> prepare($sql);

  //SQLを実行
  $query -> execute();

  //接続を切断
  $pdo_object = null;
  ?>
