<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>7_6challenge</title>
</head>
  <body>
    <!-- 課題6:課題2でINSERTしたレコードを指定して削除してください。
    SELECT*で結果を表示してください -->
    <?php

    //try-catchで接続エラーを取得＆表示
    try{
      $pdo_object=
      new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',
      'sakamoto',2591);
    }catch(PDOException $E){
      die('接続に失敗しました:'.$E->getMessage());
    }

    //SQL文を格納した文字列を定義(今回は指定レコード削除のSQL文)
    $sql = "delete from profiles where profilesID = 8";

    //実行とその結果を受け取れる変数を用意
    $query = $pdo_object -> prepare($sql);

    //SQLを実行
     $query -> execute();

     while($row = $query->fetch(PDO::FETCH_OBJ)){     //データベースから取得したデータを１つ持ってくる
      echo $row->profilesID . ': ';                      // profilesIDフィールドの内容を表示
      echo $row->name.'<br>';                            // nameフィールドの内容を表示
      echo 'TEL： '.$row->tell.'<br>';                   // tellフィールドの内容を表示
      echo 'AGE： '.$row->age.'<br>';                    // ageフィールドの内容を表示
      echo 'BIRTH： '.$row->birthday.'<br>';             // birthdayフィールドの内容を表示
      echo '<br>';
     }

    //接続を切断
    $pdo_object = null;

    ?>

  </body>
</html>
