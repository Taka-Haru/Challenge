<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>2_10challenge</title>
</head>
  <body>
    クエリストリングを利用して、簡易素因数分解を表示します。<br>
    クエリストリングから渡された数値を1ケタの素数で可能な限り分解し、<br>
    元の値と素因数分解の結果を表示します。<br>
    二桁以上の素数が含まれたら、その他表記。<br>
    ※クエリストリング・・・URLの.phpの後に「?num=適当な元の値」を付けて下さい。
      <br><br>

  <?php

      //分解数値を取得
      $num = $_GET['num'];
      //初期値を取っておく
      $shokichi = $num;

      //素数カウント用変数　(連想配列)
      $counter = array(
                      2 => 0,           //キーワード=>データ
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
        while($num % 2 == 0){     //記入値を２で割ったらあまり０になる場合は繰り返す
        //割れるので、割ってカウント
        $num = $num / 2;          //繰り返す処理
        $counter[2]++;            //繰り返す処理
      }                             //キーワード「２」に格納されているデータ「０」に
    }                               //++(インクリメント)処理していく

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

  <!DOCTYPE html>
  <html lang="ja">

  <head>
  <meta charset="UTF-8">
        <title>2_2challenge</title>
  </head>
    <body>

  <?php
    echo '元の値：'.$shokichi.'<br>';                   //foreach文で連想配列からキーと値を同時に取り出す
    foreach($counter as $key => $value){              //変数「$key」に連想配列のキーが格納される。　→　キーと関連づけられた値を$valueに格納する。
      if ($value>0){                                  //もし、インクリメントされた回数が0以上なら
        echo '素因数：'.'「'.$key.'」'.' の'.$value.'乗<br>';                //foreach文なので「2,3,5,7」ループ処理を実行してくれる
        }
      }            //foreach文はここで終了
    if($num > 1){
      //１以上の場合、割り切れなかった
      echo 'その他：'.$num;
  }
  ?>

 </body>

</html>
