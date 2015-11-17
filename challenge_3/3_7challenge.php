<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php

/*
課題7:初期値3のグローバルな値を2倍していく処理の関数と、
      staticとしてその関数が何回実行されたのかを保持する変数を設ける。
      この関数を20回呼び出す
*/
$global_number=3;

    function check_number(){
      static $local_number=1;     //この関数内での処理をキープする。
      global $global_number;      //global宣言で$lobal_number現実世界から引張てくる
      $global_number = $global_number * 2;
      echo "$global_number ,";
      $local_number+=1;       //実行回数のカウント
    }

    for($i=0;$i<20;$i++){
    check_number() * $i;
  }

?>
</body>

</html>
