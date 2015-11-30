<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>2_1challenge</title>
</head>
  <body>
    
  <!--
  １．switch文を利用して、以下の処理を実現してください。
      値が1なら「one」、値が2なら「two」、それ以外は「想定外」と表示する処理
      (フォームを使ってのswith文復習)
  -->

  <form action="./2_1challenge.php" method="POST">
  半角で「1」か「2」を入力して送信すると英語のスペルを教えます。
      <br><!--以下入力--><br>

    <input type="text" name="number" size=5>
    <input type="submit" name="btn" value="送信">
    <br><br>
  </form>

  <?php
    if(!empty($_POST['btn'])){
      $x = $_POST['number'];
      switch($x){
        case 1:
          echo '「1」の英語のスペルは"one"です。';
          break;
        case 2:
          echo '「2」の英語のスペルは"two"です。';
          break;
        case '':
          echo '何か入力して下さい。';
          break;
        default:
          echo '想定外。'.'<br>'.'変換できるのは半角入力された「1」か「2」のみです。'.'<br>';
      }
    }
?>
  </body>
</html>
