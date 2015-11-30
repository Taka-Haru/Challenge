<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
    <title>1_6Challenge</title>

</head>
  <body>
  <!--
  6．変数を宣言し、その変数の中身によって以下の表示を行ってください。
    　　　⇒値が 1 なら「１です！」
    　　　⇒値が 2 なら「プログラミングキャンプ！」
    　　　⇒値が ’a’ なら「文字です！」
    　　　⇒それ以外なら「その他です！」
  -->

    <!--問題を定義-->
    箱の中身はなんでしょう？<br>
    中身に"プログラミングキャンプ"が入っていれば当たりです。<br><br>

    <!--フォーム作成-->
    <form action="./1_6challenge.php" method="POST">
      <select name="box" style ="width:180px" >
        <option value"">選択してください </option>
        <option value"">1の箱</option>
        <option value"">2の箱</option>
        <option value"">aの箱</option>
      </select><br>
      <input type="submit" name="btn" value="OPEN"
            style="position: relative; left: 140px;">
    </form>

    <?php
    //変数格納後、表示。

    if(!empty($_POST['btn'])){
      if(($_POST["box"])=='選択してください'){
        $unsei0 = '箱を選択をしてください。<br>これは「その他です!」です。';
        echo $unsei0;
      }elseif(($_POST["box"])=='1の箱'){
        $unsei1 = "残念ですがハズレです。<br>1の箱の中身は「1です!」です。";
        echo $unsei1;
      }elseif(($_POST["box"])=='2の箱'){
        $unsei2 ="おめでとうございます!<br>2の箱の中身が「プログラミングキャンプ」です。<br>
        ☆勉強頑張っていきましょう！☆";
        echo $unsei2;
      }elseif(($_POST["box"])=='aの箱'){
        $unsei3 = "残念ですがハズレです。<br>aの箱の中身は「文字です!」です。";
        echo $unsei3;
      }
    }
    ?>

  </body>
</html>
