<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>7_11challenge</title>
</head>
  <body>
    <!--課題11:profileIDで指定したレコードの、
    profileID以外の要素をすべて上書きできるフォームを作成してください-->

    選択した『profilesID』のデータを、入力された値に上書きします。<br>
    〜profilesIDを入力して下さい〜
    <br>
    <form action="./7_11challenge.php" method="POST">
    <input type="text" name="profilesID" size=5><br>
    <br>
    下記項目に、上書きしたい内容を入力してください。<br>
    name:<br>
    <input type="text" name="name"><br>
    tel:<br>
    <input type="text" name="tell"><br>
    age:<br>
    <input type="text" name="age" size=5><br>
    birthday:<br>
    <input type="text" name="birthday"><br>
    <br>
      <input type="submit" name="btn" value="DBへ!!">
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

    if(!empty($_POST['btn'])){
      if(!empty ($_POST['profilesID']) && !empty ($_POST['name']) && !empty ($_POST['tell'])
      && !empty ($_POST['age']) && !empty ($_POST['birthday'])){
        $id = $_POST['profilesID'];
        $name = $_POST['name'];
        $tell = $_POST['tell'];
        $age = $_POST['age'];
        $birth = $_POST['birthday'];

    //SQL文を格納した文字列を定義(今回は指定profilesIDの要素を上書きさせるSQL文)
    $sql = "UPDATE profiles set name=:name,tell=:tell,age=:age,birthday=:birth where profilesID=:id";

    //実行とその結果を受け取れる変数を用意
    $query = $pdo_object -> prepare($sql);

    //実数値はこのようにbindValueなどを用いて中身を入れ替える(安全のため)
    $query -> bindValue(':id',$id);
    $query -> bindValue(':name',$name);
    $query -> bindValue(':tell',$tell);
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
        echo '入力されていない箇所があります。';
      }

    //接続を切断
    $pdo_object = null;
  }
  ?>
  </body>
</html>
