<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
    <?php
    const LINE_BREAK = '<br>';

 //1.「Hello world.」を表示してください
      echo 'Hello world.<br/>';
      echo '<br>';

 //2.「groove」「-」「gear」の３つの文字列を連結して表示してください。
      echo 'groove'.'-'.'gear<br/>';
      echo '<br>';

 //３．自分の自己紹介を作成してみてください。
      echo 'My name is TakaharuSakamoto<br/>';
      echo 'I was born in Kakgawa,but I grew up in Saitama<br/>';
      echo 'My blood type is AB<br/>';
      echo '<br>';

 //4.5.定数と変数を宣言し、それぞれに数値を入れて四則演算を行ってください。
      $variable ='30';
      const INT ='10';

      echo LINE_BREAK.$variable += INT;
      echo LINE_BREAK.$variable -= INT;
      echo LINE_BREAK.$variable *= INT;
      echo LINE_BREAK.$variable /= INT;

      echo '<br>';

/*　6．変数を宣言し、その変数の中身によって以下の表示を行ってください。
　　　⇒値が 1 なら「１です！」
　　　⇒値が 2 なら「プログラミングキャンプ！」
　　　⇒値が ’a’ なら「文字です！」
　　　⇒それ以外なら「その他です！」*/

      $param = 'a';
      if($param == 1){
        echo '1ですecho <br>';
      }elseif($param == 2){
        echo 'プログラミングキャンプ<br>';
      }elseif($param == 'a'){
        echo '文字です<br>';
      }else{
        echo 'その他です<br>';
      }
      echo '<br>';

/* ７．クエリストリングを利用して、以下の処理を実現してください。
          スーパーのレジでレシートを作る仕組みを作成します。
          クエリストリングで総額・個数・商品種別を受け取って処理します。
          ①商品種別は、３つ。１：雑貨、２：生鮮食品、３：その他 まずは、この商品種別を表示してください。

        　②総額と個数から１個当たりの値段を算出してください。
          総額と１個当たりの値段を表示してください。

          ③3000円以上購入で4%、5000円以上購入で5%のポイントが付きます。
          購入額に応じたポイントの表示を行ってください。 */

      $goukei = $_GET['goukei'];        //総額
      $piece = $_GET['piece'];          //個数
      $class = $_GET['class'];          //商品種別

      if ($class == 1) {
         // 総額
         echo '１：雑貨<br>';

       } elseif ($class == 2) {
         // 個数
         echo '２：生鮮食品<br>';

       } elseif ($class == 3) {
         // その他
         echo '３：その他<br>';

       }  else {
         $classStr = 'classが'.$class.'の処理は存在しません。<br>';
       }
              echo '総額は'.$goukei.'円です。<br>';
       echo '一個あたりの値段は'.$goukei/$piece.'円です。<br>';


       if($goukei<5000 && $goukei>=3000){
         echo $goukei*0.04.'PointGet!!1';

      }elseif($goukei>=5000){
        echo $goukei*0.05.'PointGet!!!';
       }

      ?>
    </body>

</html>
