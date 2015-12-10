<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>insert_confirm</title>
</head>

  <body>
  <!--
    フォームで入力された文字や選択を表示し、「上記の内容で登録いたします。よろしいですか？」と表示。
    「はい」でinsert_resultに遷移「いいえ」でinsertに値を保持したまま
    (戻った時にフォーム入力済みになっている)遷移
    
    もし不足していた場合はどの項目のデータが不足しているのかを表示。
    insertに値を保持したまま遷移するリンクを表示
  -->

    <?php

      //セッション開始
      session_start();

      echo '名前：'.'<br>'.$name= $_POST['name'].' 様';    //変数$nameに格納しておく
      $_SESSION['name'] = $name;
      echo '<br>';
      echo '<br>';

      echo '生年月日：'.'<br>'.$birthYear=$_POST['year'].'年';      //変数$birthYearに格納しておく
      $_SESSION['year'] = $birthYear;
                  echo $birthMonth=$_POST['month'].'月';   //変数$birthMonthに格納しておく
      $_SESSION['month'] = $birthMonth;
                  echo $birthDay=$_POST['day'].'日';       //変数$birthDayに格納しておく
      $_SESSION['day'] = $birthDay;
      echo '<br>';
      echo '<br>';

      echo '種別：'.'<br>'.$job = $_POST['job'];         //変数$jobに格納しておく
      $_SESSION['job'] = $job;
      echo '<br>';
      echo '<br>';

      echo '電話番号：'.'<br>'.$tell= $_POST['tell'];    //変数$tellに格納しておく
      $_SESSION['tell'] = $tell;
      echo '<br>';
      echo '<br>';

      $introduction = $_POST['introduction'];     //変数$introductionに格納しておく
      $introduction = nl2br($introduction);       //改行表示できるように
      echo '趣味：'.'<br>'.$introduction;
      $_SESSION['introduction'] = $introduction;
    echo '<br>';;
    ?>

      <br>
      上記の内容で登録しますが本当に宜しいですか？
    <!--送信ボタン-->
    <form action="./insert_result.php" method="POST">
      <input type="submit" name="yes" value="はい"style="width:100px">
    </form>
    <form action="./insert.php" method="POST">
        <input type="submit" name="no" value="いいえ"style="width:100px">
    </form>

</body>

</html>
