<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>3_2challenge</title>
</head>
  好きな数字を入力すると、<br>
  入力された数値が、偶数か奇数かを判定します。
  <form action="http://localhost/develop/challenge3/3_2challenge.php" method="POST">
    <input type="text" name="num" size="7">
    <input type="submit" name="btn" value="奇数 or 偶数">
    <br><br>
  </form>

  <body>
    <?php

      function view_int($num){
        if($num % 2 == 0){
            echo "偶数です。";
        }else{
            echo "奇数です。";
          }
      }

      if(!empty($_POST['btn'])){
        if(($_POST['num'] =='')){
          echo '何か数値を入力して下さい。';
        }else{
        $x = $_POST['num'];
        view_int($x);
        }
      }

    ?>
  </body>

</html>
