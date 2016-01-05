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

      // if(!empty($_POST["name"])){
      //   $name = $_POST["name"];
      // }
      // if(!empty($_POST["age"])){
      //   $name = $_POST["age"];
      // }
      // if(!empty($_POST["birthday"])){
      //   $name = $_POST["birthday"];
      // }

      //入力値がない時の処理
      if(empty($_POST["name"])){
      	$name = null;
      }else{
      	$name = $_POST["name"];
      }

      if(empty($_POST["age"])){
      	$age = null;
      }else{
      	$age = $_POST["age"];
      }

      if(empty($_POST["birthday"])){
      	$birthday = null;
      }else{
      	$birthday = $_POST["birthday"];
      }

      //名前(部分一致)
      $sql_name = "select * from profiles where name like '%$name%'";
      $query_name = $pdo_object->prepare($sql_name);
      if(!empty($name)){
      $query_name -> execute();
      }

      foreach ($query_name->fetchAll(PDO::FETCH_ASSOC) as $key){
        foreach ($key as $value){
          //var_dump($value)
          echo $value.'<br>';
        }
      }

      //年齢
      $sql_age = "select * from profiles where age = $age";
      $query_age = $pdo_object->prepare($sql_age);
    	$query_age -> execute();

      foreach ($query_age->fetchAll(PDO::FETCH_ASSOC) as $key){
        foreach ($key as $value){
          echo $value.'<br>';
        }
      }

      //生年月日
      $sql_birthday = "select * from profiles where birthday=$birthday";
      $query_birthday = $pdo_object->prepare($sql_birthday);
    	$query_birthday -> execute();

      foreach ($query_birthday->fetchAll(PDO::FETCH_ASSOC) as $key){
        foreach ($key as $value){
          //var_dump($value);
          echo $value.'<br>';
        }
      }

      $pdo_object = null;

  ?>
