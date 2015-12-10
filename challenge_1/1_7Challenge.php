<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
    <title>1_7Challenge</title>

</head>
  <body>
  <!--
  ７．クエリストリングを利用して、以下の処理を実現してください。
      スーパーのレジでレシートを作る仕組みを作成します。
      クエリストリングで総額・個数・商品種別を受け取って処理します。
  -->

  Q7: スーパーのレジでレシートを作る仕組みを作成してください。<br>
  クエリストリングで総額・個数・商品種別を受け取って処理する方法です。<br>
  <br>※
  下記内容を追記してください<br>
  「商品種別(1〜3)、適当な総額、適当な商品個数」<br>


  <form action="http://localhost/develop/1_7challenge.php?kind=$x & amount=$y & piece=$z"method="GET">
    種別番号  　<input type="text" name="kind" size=5 onKeyup="this.value=this.value.replace(/[^0-9]+/,'')"><br>
    商品総額  　<input type="text" name="amount" size=10 onKeyup="this.value=this.value.replace(/[^0-9]+/,'')"> 円<br>
    商品個数  　<input type="text" name="piece" size=10 onKeyup="this.value=this.value.replace(/[^0-9]+/,'')"> 点
    <br><br>
    <input type="submit" name="btn" value="レジへ">
  </form>

  <?php
  if(!empty($_GET['btn'])){
    if(($_GET['kind']=='') ||($_GET['amount']=='') || ($_GET['piece']=='')){
      echo '全ての数値を入力して下さい。';
    }else{

    //商品種別の1〜3の場合をそれぞれ表示、1〜3を選択しない場合は処理飛ばす。
    $kind = $_GET['kind'];
    $x = $kind;
    if(($_GET['kind'])<=3){
      if ($kind == 1) {
       echo '商品種別番号１:'.'<br>';
       echo '「雑貨」'.'<br>';
      }elseif ($kind == 2) {
       echo '商品種別番号２:'.'<br>';
       echo '「生鮮食品」'.'<br>';
      }elseif ($kind == 3) {
       echo '商品種別番号３:'.'<br>';
       echo '「その他」'.'<br>';
      }
       echo '<br>';

      //総額と個数から１個当たりの値段を算出。総額と１個当たりの値段を表示。
      $amount = $_GET['amount'];    //総額
      $y = $amount;
      $piece = $_GET['piece'];      //個数
      $z = $piece;

      echo '総額は'.$amount.'円です。<br>';
      echo '今回、商品点数が'.$piece.'点なので、'.'<br>';
      echo '一個あたりの値段は'.$amount/$piece.'円です。<br>';
      echo '<br>';

      //3000円以上購入で4%、5000円以上購入で5%のポイント付加。購入額に応じたポイントの表示。
      if($amount<5000 && $amount>=3000){
       echo 'また今回は総額が3,000円以上なので、総額の0.4%のポイントが付きます'.'<br>';
       echo 'なので、'.$amount*0.04.'ポイント付きました。';

      }elseif($amount>=5000){
       echo 'また今回は総額が5,000円以上なので、総額の0.5%のポイントが付きます'.'<br>';
       echo 'なので、'.$amount*0.05.'円のポイントが付きます';
      }

  //商品種別(kind)が1〜3以外を選択した場合はここを表示
    }elseif(($_GET['kind'])>=4) {
     echo '商品種別番号'.$kind.'は存在しません。'.'<br>';
     echo '商品種別(Kind)は1〜3で選択して下さい'.'<br>';
    }
   }
  }
  ?>
</body>
</html>
