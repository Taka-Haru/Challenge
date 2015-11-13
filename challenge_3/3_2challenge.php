<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php

/*課題2:引数として適当な数値を受け取り、その値が奇数か偶数か判別＆表示する処理を関数として制作し、
      実行する
*/

      function view_int($num){
        if($num % 2 == 0){
            echo "偶数です";
        }else{
            echo "奇数です";
          }
      }
      view_int(3);
      echo '<br>';

?>
</body>

</html>
