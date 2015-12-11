<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>7_9challenge</title>
</head>
  <body>

<!--課題9:フォームからデータを挿入できる処理を構築してください。-->

『profiles』テーブルに挿入したいデータを入力して下さい<br>

<br>

<form action="./7_9challenge.php" method="POST">
profilesID:<br>
<input type="text" name="profilesID" size=5><br>
name:<br>
<input type="text" name="name"><br>
tel:<br>
<input type="text" name="tel"><br>
age:<br>
<input type="text" name="age" size=5><br>
birthday:<br>
<input type="text" name="birth"><br>
<br>
  <input type="submit" name="btnSubmit" value="DBへ!!">
</form>

  <?php

  //try-catchで接続エラーを取得＆表示
  try{
    $pdo_object=
    new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',
    'sakamoto',2591);
    $pdo_object->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }catch(PDOException $E){
    die('接続に失敗しました:'.$E->getMessage());
  }

  //値が入っているかを確認し変数に格納
  if(!empty($_POST['btnSubmit'])){
  if(!empty ($_POST['profilesID']) && !empty ($_POST['name']) && !empty ($_POST['tel'])
  && !empty ($_POST['age']) && !empty ($_POST['birth'])){
    $id = $_POST['profilesID'];
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $age = $_POST['age'];
    $birth = $_POST['birth'];

    //SQL文を格納した文字列を定義(今回はレコード挿入のSQL文)
    $sql = "insert into profiles(profilesID,name,tell,age,birthday)
    values(:profilesID,:name,:tel,:age,:birth)";

    //実行とその結果を受け取れる変数を用意
    $query = $pdo_object -> prepare($sql);

    //実数値はこのようにbindValueなどを用いて中身を入れ替える(安全のため)
    $query -> bindValue(':profilesID',$id);
    $query -> bindValue(':name',$name);
    $query -> bindValue(':tel',$tel);
    $query -> bindValue(':age',$age);
    $query -> bindValue(':birth',$birth);

    //SQLを実行(値が入っているか、変数に格納しvar_dumpで確認)
    try{
      $x= $query -> execute();
      var_dump($x);
    }catch(PDOException $E){
      echo $E->getMessage();
      var_dump($E);
      }
    }else{
      echo '全ての項目を記入してください。';
    }
  }
    //接続を切断
    $pdo_object = null;

  ?>
  </body>
</html>
