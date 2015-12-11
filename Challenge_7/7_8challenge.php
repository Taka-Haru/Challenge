<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>7_8challenge</title>
</head>
  <body>
    <!--
    課題8:検索用のフォームを用意し、
    名前の部分一致で検索＆表示する処理を構築してください。
    同じページにリダイレクトするPOST処理と、
    POSTに値が入っているかの条件分岐を活用すれば、
    一つの.phpで完了できますので、チャレンジしてみてください
  -->
    <form action="./7_8challenge.php" method="POST">
      プロフィールを呼び出すので名前のヒントを下さい！<br>
      <br>
      <input type="text" name="txtName">
      <input type="submit" name="btnSubmit" value="Go!!">
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

    //値が入っているかを確認し変数に格納
    if(!empty($_POST['btnSubmit'])){
      if(!empty ($_POST['txtName'])){
        $textbox = $_POST['txtName'];

    //SQL文を格納した文字列を定義(今回は部分一致検索のSQL文)
    $sql = "select * from profiles where name like '%$textbox%'";

    //実行とその結果を受け取れる変数を用意
    $query = $pdo_object->prepare($sql);

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
      }else{
      echo "なにかヒント下さい。";
      }
    }
    //接続を切断
    $pdo_object = null;

    ?>
  </body>
</html>
