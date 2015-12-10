<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>3_1challenge</title>
</head>
  ボタンを押してください
  <br><br>
  <form action="http://localhost/develop/challenge3/3_1challenge.php" method="POST">
    <input type="submit" name="btn" value="プロフィール">
  </form>

  <body>

    <?php
      function my_profile(){
          return array(
                1 => 'TakaharuSakamoto<br>',
                2 => '1988-11-24<br>',
                3 => '前職：飲食業<br>',
          );
      }

      if(!empty($_POST['btn'])){
        for($i=1;$i<=2;$i++){
          $profile = my_profile();
          foreach($profile as $value){
          echo $value;
          }
        }
      }
    ?>

  </body>

</html>
