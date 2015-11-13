<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
      <title>PHP KADAI1</title>
</head>
  <body>
<?php
/*
課題3:引き数が3つの関数を定義する。1つ目は適当な数値を、2つ目はデフォルト値が5の数値を、
最後はデフォルト値がfalseの$typeを引き数として定義する。
1つ目の引き数に2つ目の引き数を掛ける計算をする関数を作成し、
$typeがfalseの時はその値を表示、trueのときはさらに累乗して表示する。
*/

   //function 関数名($引数1,$引数2,$引数3=デフォルト値)
      function show_data($num,$secondnum,$type = false){
      	if($type===false){
      		echo $num * $secondnum;
      }else{
          echo ($num*$secondnum)*($num*$secondnum);     //もっといいやり方あるはず
      }
      }
      show_data(2,5,true);

?>
</body>

</html>
