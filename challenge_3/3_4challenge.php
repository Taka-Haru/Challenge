<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php

/*課題4:課題1で定義した関数に追記する形として、戻り値　bool値 「true」
を返却するように修正し、関数を実行する際にtrueを受け取れたら
「この処理は正しく実行できました」、そうでないなら「正しく実行できませんでした」
と表示するような条件分岐を設ける
*/

     function my_profile(){
         echo "TakaharuSakamoto<br>";
         echo "1988-11-24<br>";
         echo "前職：飲食業<br>";

         $profile = true;
         return $profile;
       }

        $yobidashi = my_profile();

        if($yobidashi==true){
		        echo 'この処理は正しく実行できました';
          }else{
            echo '正しく実行できませんでした';
          echo '<br>';
          }
            

?>
</body>

</html>
