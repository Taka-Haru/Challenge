<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>2_10challenge</title>
</head>
クエリストリングを利用して、簡易素因数分解を表示します。<br>
入力した数値を1ケタの素数で可能な限り分解し、<br>
元の値と素因数分解の結果を表示します。<br>
なお、二桁以上の素数が含まれたら、その他表記します。<br><br>
  <body>
  <form action="http://localhost/develop/2_10challenge.php?num=<?php echo $_GET['num'];?>"; method="GET">
    <input type="text" name="num" size="15" onKeyup="this.value=this.value.replace(/[^0-9]+/,'')">
    <input type="submit" name="btn" value="素因数"><br><br>
  </form>

    <?php

    if(!empty($_GET['btn'])){
      if(($_GET['num'] =='')){
        echo '何か数値を入力して下さい。';
      }else{
      //分解数値を取得
      $num = $_GET['num'];
      //初期値を取っておく
      $shokichi = $num;

      //素数カウント用変数
      $counter = array(
                      2 => 0,
                      3 => 0,
                      5 => 0,
                      7 => 0,
                      );
      //マイナス値は除外
      if($num <= 0){
        echo 'マイナス値は処理できません';
        exit;
      }

      //２の可能性を確認
      if(($num % 2) == 0){          //もし２で割ってあまりが０の時
        //２で割れるので、処理
        while($num % 2 == 0){
        //割れるので、割ってカウント
        $num = $num / 2;
        $counter[2]++;
        }
      }
      //3の可能性を確認
      if(($num % 3) == 0){
        //3で割れるので、処理
        while(($num % 3) == 0){
        //割れるので、割ってカウント
        $num = $num / 3;
        $counter[3]++;
        }
      }

      //5の可能性を確認
      if(($num % 5) == 0){
        //5で割れるので、処理
        while(($num % 5) == 0){
        //割れるので、割ってカウント
        $num = $num / 5;
        $counter[5]++;
        }
      }

      //7の可能性を確認
      if(($num % 7) == 0){
        //7で割れるので、処理
        while(($num % 7) == 0){
        //割れるので、割ってカウント
        $num = $num / 7;
        $counter[7]++;
        }
      }
    ?>

    <?php
      echo '元の値：'.$shokichi.'<br>';
      foreach($counter as $key => $value){
        if ($value>0){
          echo '素因数：'.'「'.$key.'」'.' の'.$value.'乗<br>';
        }
      }
      if($num > 1){
        //１以上の場合、割り切れなかった
          echo 'その他：'.$num;
      }
    }
  }
  ?>

 </body>

</html>
