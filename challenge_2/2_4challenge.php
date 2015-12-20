<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>2_4challenge</title>
</head>
  <body>

    <!--
    ４．for文を利用して、’A’を30個連結する処理を実現してください。
        (要復習。よく分かってない)
    -->

    文字「A」を入力し、課題の指示通り、<br>
    Aが30個連結した文字列を表示しなさい。
    <br><br>

    <form action="2_4challenge.php" method="POST">
    <input type="text" name="character" size=5>
    <input type="submit" name="btn" value="連結" style=width:60px>
    <br><br>

  <?php

  if(!empty($_POST['btn'])){
    if($_POST['character'] ==''){
      echo '何か入力して下さい。';
    }elseif($_POST['character'] ==='A'){
      $x = $_POST['character'];
      for($i=1; $i<30; $i++){
      $x = $x.'A';
      }
      echo $x;
    }else{
    echo 'Aを入力して下さい';
    }
  }
  ?>
  </body>
</html>
