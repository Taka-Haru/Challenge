<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php

/*課題1:自分のプロフィール(名前、生年月日、自己紹介)を3行に分けて表示するユーザー定義関数を作り
      、関数を2回呼び出して表示して下さい
*/

      function my_profile(){
          echo "TakaharuSakamoto<br>";
          echo "1988-11-24<br>";
          echo "前職：飲食業<br>";
      }
      my_profile();
      my_profile();
      echo '<br>';
?>
</body>

</html>
