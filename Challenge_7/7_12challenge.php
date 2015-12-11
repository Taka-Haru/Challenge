<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>7_12challenge</title>
</head>
    <!-- 課題12:検索用のフォームを用意し、
    名前、年齢、誕生日を使った複合検索ができるようにしてください。 -->
  <body>
    <h3>複合検索</h3>
    <form action="./7_12challenge.php" method="POST">
    name:<br>
    <input type="text" name="name"><br>
    age:<br>
    <input type="text" name="age" size=5><br>
    birthday:<br>
    <input type="text" name="birthday"><br>
    <br>
      <input type="submit" name="btn" value="検索">
    </form>

    <?php

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
