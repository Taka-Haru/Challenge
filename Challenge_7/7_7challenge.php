<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>7_7challenge</title>
</head>
    <!-- 課題7:profileID=1のnameを「松岡 修造」に、
    ageを48に、birthdayを1967-11-06に更新してください -->
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

    //SQL文を格納した文字列を定義(今回は指定レコード内容更新のSQL文)
    $sql = "update profiles set name='松岡 修造',age=48,birthday='1967-11-06' where profilesID=1";

    //実行とその結果を受け取れる変数を用意
    $query = $pdo_object -> prepare($sql);

    //SQLを実行
     $query -> execute();

    //接続を切断
    $pdo_object = null;
    ?>

  </body>
</html>
