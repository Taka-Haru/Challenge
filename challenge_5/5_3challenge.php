<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>5_3challenge</title>
</head>
    <!-- ３．クッキーに現在時刻を記録し、次にアクセスした際に、
    前回記録した日時を表示してください。 -->
  <body>
    <?php
      if(!isset($_COOKIE['LastLoginDate'] )) {
        echo '初回だから記録がありません';
      }else{
        $lastDate = $_COOKIE['LastLoginDate'];
        echo '前回ログイン時は、'.$lastDate.'です！';
      };

      //ログイン時刻を記録
      $access_time = date('H時i分s秒');
      setcookie('LastLoginDate',$access_time);
    ?>
  </body>

</html>
