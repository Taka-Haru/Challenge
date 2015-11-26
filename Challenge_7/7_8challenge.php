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
    名前を呼び出すヒントを下さい<br>
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

                                                                        //$textbox = $_POST['txtName']をif文の前で宣言するとエラー表示
                                                                        //空欄で押すと全件表示
//emptyの返り値がfalseになるよう。issetじゃtrueになる。

//値が入っているかを条件分岐で確認
if(isset($_POST['btnSubmit'])){       //もしボタンを押された時
  if(isset ($_POST['txtName'])){      //isset使って、「もし値が入っていれば」
    $textbox = $_POST['txtName'];     //変数に格納
      $sql = "select * from profiles where name like '%$textbox%'";
      $query = $pdo_object->prepare($sql);        //実行とその結果を受け取れる変数を用意
      $query -> execute();        //SQL実行


      while( $row = $query->fetch(PDO::FETCH_OBJ) ){      //データベースから取得したデータを１つ持ってくる
       echo $row->profilesID . ': ';                     // profilesIDフィールドの内容を表示
       echo $row->name.'<br>';
       echo 'TEL： '.$row->tell.'<br>';
       echo 'AGE： '.$row->age.'<br>';
       echo 'BIRTH： '.$row->birthday.'<br>';            // birthdayフィールドの内容を表示
       echo '<br>';
     }
  }else{
    echo "何も入力されてません";
  }
}
    //接続を切断
    $pdo_object = null;

  ?>

  </body>
</html>
