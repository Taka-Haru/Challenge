<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>search_result</title>
</head>
  <body>
<!--
検索結果がID昇順にテーブル型で表示される
検索結果として表示されるのは検索条件の項目と登録日のみ
名前がクリック可能になっており、クリックするとresult_detail.phpへ遷移する
検索で何も入力されていないときは全件表示
いずれかの条件が入力されていればよいということは、条件分岐を少し工夫する必要がある
とりま、全件表示
-->

〜検索結果〜


<?php

  //try-catchで接続エラーを取得＆表示
  try{
    $pdo_object=
    new PDO('mysql:host=localhost;dbname=Challenge_db;charset=utf8',
    'sakamoto',2591);
  }catch(PDOException $E){
    die('接続に失敗しました:'.$E->getMessage());
  }


  //値が入っているかを条件分岐で確認
  if(!empty($_GET['btnSubmit'])){       //もしボタンを押された時
    if(!empty ($_GET['name'])){      //もし名前に値が入っていれば
      $name = $_GET['name'];     //変数に格納

      //SQL文を格納した文字列を定義
      $sql = "select * from user_t where name like '%%'";

      //実行とその結果を受け取れる変数を用意
      $query = $pdo_object->prepare($sql);

      //SQL実行
      $query -> execute();

        while( $row = $query->fetch(PDO::FETCH_OBJ) ){      //データベースから取得したデータを１つ持ってくる
         echo $row->userID . ': ';                     // profilesIDフィールドの内容を表示
         echo 'NAME: '.$row->name.'<br>';
         echo 'TEL： '.$row->birthday.'<br>';
         echo 'TYPE： '.$row->type.'<br>';
         echo 'BIRTH： '.$row->tell.'<br>';            // birthdayフィールドの内容を表示
         echo 'COMMENT： '.$row->$comment.'<br>';
         echo 'DATA： '.$row->newData.'<br>';
         echo '<br>';
       }
    }else{
      echo '<br>';
      echo "一文字でもいいので、なにかヒント下さい。。";
      }
  }

  //接続を切断
  $pdo_object = null;

?>

</body>
</html>
