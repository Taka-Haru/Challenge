<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>7_9challenge</title>
</head>
  <body>

<!--課題9:フォームからデータを挿入できる処理を構築してください。-->

<form action="./7_9challenge.php" method="POST">
profilesID:<br>
<input type="text" name="profilesID" size=5><br>
name:<br>
<input type="text" name="name"><br>
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
  }catch(PDOException $E){
    die('接続に失敗しました:'.$E->getMessage());
  }

  if(isset ($_POST['profilesID'])){      //isset使って、「もし値が入っていれば」
    $id = $_POST['profilesID'];           //変数に格納する
  }else{
    $id = null;
  }
  if(isset ($_POST['name'])){      //isset使って、「もし値が入っていれば」
    $name = $_POST['name'];
  }else{
    $name = null;
  }
  if(isset ($_POST['tel'])){      //isset使って、「もし値が入っていれば」
    $tel = $_POST['tel'];
  }else{
    $tel = null;
  }
  if(isset ($_POST['age'])){      //isset使って、「もし値が入っていれば」
    $age = $_POST['age'];
  }else{
    $age = null;
  }
  if(isset ($_POST['birth'])){      //isset使って、「もし値が入っていれば」
    $birth = $_POST['birth'];
  }else{
    $birth = null;
  }

  $sql = "insert into profiles(profilesID,name,tel,age,birth)
  values(:profilesID,:name,:tel,:age,:birth)";

  $query = $pdo_object->prepare($sql);        //実行とその結果を受け取れる変数を用意

  $query -> bindValue(':profilesID',$id);
  $query -> bindValue(':name',$name);
  $query -> bindValue(':tel',$tel);
  $query -> bindValue(':age',$age);
  $query -> bindValue(':birth',$birth);

  $query -> execute();

  var_dump($_POST);

      //接続を切断
      $pdo_object = null;

    ?>

</body>

</html>
