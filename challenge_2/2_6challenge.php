<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>2_6challenge</title>
</head>
  <body>
  フォームに入力した値を、「２」で割り続けて<br>
  「100」未満になった結果の数値を表示します。
  <br><br>

  <!--
  ６．while文を利用して、以下の処理を実現してください。
      1000を2で割り続け、100より小さくなったらループを抜ける処理
  -->

  <form action="./2_6challenge.php" method="POST">
    <input type="text" name="number" style="width:70px"
    onKeyup="this.value=this.value.replace(/[^0-9]+/,'')">    <!--半角数字以外認めない式-->
    <input type="submit" name="btn" value="割り算">
    <br><br>
  </form>

  <?php

    if(!empty($_POST['btn'])){
      $x = $_POST['number'];
      if($x == ''){
        echo '何か入力して下さい。';
      }elseif($x < 100){
        echo '100より大きい値を入力して下さい';
      }else{
        while($x > 99){
          $x/=2;
        }
      echo '割り続けた結果、'.'<br>';
      echo $x.'となりました。';
      }
    }

  ?>

  </body>
</html>
