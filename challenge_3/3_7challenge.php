<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>3_7challenge</title>
</head>
  <body>
    <!-- 課題7:初期値3のグローバルな値を2倍していく処理の関数と、
          staticとしてその関数が何回実行されたのかを保持する変数を設ける。
          この関数を20回呼び出す -->
    <?php

    $global_number=3;

      function check_number(){
        static $local_number=0;
        global $global_number;
        $global_number = $global_number * 2;
        $local_number+=1;       //実行回数のカウント
        echo $local_number.'回目：'.$global_number.'<br>';
      }

      for($i=0;$i<20;$i++){
        check_number() * $i;
      }

    ?>
  </body>

</html>
