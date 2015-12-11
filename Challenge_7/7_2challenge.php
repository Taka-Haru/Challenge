<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>7_2challenge</title>
</head>
    <!-- 課題2:前回の課題1で作成したテーブルに
    自由なメンバー情報を格納する処理を構築してください -->
  <body>
    <?php

    //try-catchで接続エラーを取得＆表示
    try{
      $pdo_object=
      new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',
      'sakamoto',2591);
    }catch(PDOException $E){
      die('接続に失敗しました:'.$E->getMessage());
    }

    //SQL文を格納した文字列を定義
    $sql = "INSERT INTO profiles(profilesID,name,tell,age,birthday)
    values(:profilesID,:name,:tell,:age,:birthday)";

    //実行とその結果を受け取れる変数を用意
    $query = $pdo_object -> prepare($sql);

    //実数値はbindValueなどを用いて中身を入れ替える(安全の為)
    $query -> bindValue(':profilesID',1);
    $query -> bindValue(':name','田中広');
    $query -> bindValue(':tell','0120-2110-2110');
    $query -> bindValue(':age',27);
    $query -> bindValue(':birthday','9838-8-10');

    //SQLを実行
    $query -> execute();

    //接続を切断
    $pdo_object = null;

    ?>
  </body>
</html>
