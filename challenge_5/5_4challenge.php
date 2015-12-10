<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>5_2challenge</title>
</head>
    <!-- ４．３と同じ機能をセッションで作成してください。
    (クッキーに現在時刻を記録し、次にアクセスした際に、前回記録した日時を表示してください) -->
    <?php
      //セッション開始
      session_start();

      //セッションから時刻データを取り出す
      if(!isset($_SESSION['access_time'])){
        echo '初回なのでデータがありません。';
      }else{
        $lastDate = $_SESSION['access_time'];
        echo '前回ログイン時刻は'.$lastDate.'です！';
        echo '<br>';
      }

      //セッションから回数データを取り出す
      $count = 1;
      if(isset($_SESSION['access_count'])){
        $count = $_SESSION['access_count'];
        if($count == 1){
          echo '初回アクセスです';
          $count++;
        }else{
          echo $count.'回目のアクセスです。';
          $count++;
        }
      }

      //セッションに情報を入れる
      $_SESSION['access_time']=date('H時i分s秒');
      $_SESSION['access_count']=$count;
    ?>

  <body>

  </body>
</html>
